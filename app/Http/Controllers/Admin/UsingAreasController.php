<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsingAreas;
use App\Models\Product;
use App\Models\UsingAreasGallery;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use Illuminate\Support\Facades\DB; // For database operations

class UsingAreasController extends Controller
{
    protected $languages;
    protected $products;

    public function __construct()
    {
        $this->languages = Language::all();
        $this->products = Product::where('lang', 'en')->get();
        view()->share('languages', $this->languages);
        view()->share('products', $this->products);
    }
    // Display a list of using areas
    public function index()
    {
        $usingAreas = UsingAreas::where('lang', app()->getLocale())->get();
        return view('admin.using_areas.index', compact('usingAreas'));
    }

    // Show form to create a new using area
    public function create()
    {

        return view('admin.using_areas.create');
    }

    // Store new using area in database
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->has('using_areas_id')) {
                $using_areas_id = $request->using_areas_id; // Use the provided using_areas_id
            }else{
                $using_areas_id = UsingAreas::max('using_areas_id') + 1; // Increment the maximum using_areas_id by 1
                if (!$using_areas_id) {
                    $using_areas_id = 1; // If no using areas exist, start with 1
                }
            }
        try {
            
            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'lang_'.$language->lang_code => 'required|string|max:10',
                        'title_1_'.$language->lang_code => 'required|string|max:100',
                        'title_2_'.$language->lang_code => 'nullable|string|max:100',
                        'short_description_'.$language->lang_code => 'nullable|string|max:500',
                        'description_'.$language->lang_code => 'required|string',
                        'seo_url_'.$language->lang_code => 'required|string|max:255',
                        'image_'.$language->lang_code => 'nullable|image',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'used_products_'.$language->lang_code => 'nullable|array',
                        'seo_title_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_description_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_keywords_'.$language->lang_code => 'nullable|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->using_area_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                $used_products = $request->input('used_products_'.$language->lang_code) ?? $request->input('used_products_en') ?? [];

                $data = [
                    'lang' => $language->lang_code,
                    'title_1' => $request->input('title_1_'.$language->lang_code) ?? $request->input('title_1_en'),
                    'title_2' => $request->input('title_2_'.$language->lang_code) ?? $request->input('title_2_en'),
                    'short_description' => $request->input('short_description_'.$language->lang_code) ?? $request->input('short_description_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'seo_url' => $request->input('seo_url_'.$language->lang_code) ?? $request->input('seo_url_en'),
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'used_products' => implode(',', $used_products),
                    'seo_title' => $request->input('seo_title_'.$language->lang_code) ?? $request->input('seo_title_en'),
                    'seo_description' => $request->input('seo_description_'.$language->lang_code) ?? $request->input('seo_description_en'),
                    'seo_keywords' => $request->input('seo_keywords_'.$language->lang_code) ?? $request->input('seo_keywords_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? $request->input('sort_en') ?? 0,
                ];

                UsingAreas::updateOrCreate(
                    ['using_areas_id' => $using_areas_id, 'lang' => $language->lang_code],
                    $data
                );

                
            }

            return redirect()->route('admin.using_areas.index')->with('success', 'Kullanım alanı başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.using_areas.index')->with('error', 'Kullanım alanı kaydedilirken bir hata oluştu!');
        }
    }

    // Show form to edit project
    public function edit($id)
    {
        $languages = Language::all();
        $using_areas = UsingAreas::where('using_areas_id', $id)->get();

        return view('admin.using_areas.edit', compact('using_areas', 'languages'));
    }

   

    // Delete sector
    public function destroy($using_areas_id)
    {
        $sector = UsingAreas::where('using_areas_id', $using_areas_id)->get();
        // Also delete related gallery items if needed
        foreach ($sector as $item) {
            $item->gallery()->delete();
        }
        $sector->each->delete();
        return redirect()->route('admin.using_areas.index')->with('success', 'Kullanım alanı başarıyla silindi!');
    }


    // Project Gallery methods will go here
    public function galleryIndex($id)
    {
        $using_areas = UsingAreas::where('using_areas_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = UsingAreasGallery::where('using_areas_id', $id)->where('lang', app()->getLocale())->get();
        return view('admin.using_areas.gallery.index', compact('using_areas', 'gallery'));
    }

    public function galleryCreate($id)
    {
        $using_areas = UsingAreas::findOrFail($id);
        return view('admin.using_areas.gallery.create', compact('using_areas', 'id'));
    }

    public function galleryStore(Request $request, $id)
    {
        try {

            $using_areas = UsingAreas::where('using_areas_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('using_areas_gallery')->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific project
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this project, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->using_area_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'using_areas_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                UsingAreasGallery::updateOrCreate(
                    ['using_areas_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.using_areas.gallery.index', $id)->with('success', 'Kullanım alanı görseli başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.using_areas.gallery.index', $id)->with('error', 'Kullanım alanı görseli eklenirken bir hata oluştu.');
        }
    }

    public function galleryEdit($id, $galleryId)
    {
        $using_areas = UsingAreas::where('using_areas_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = UsingAreasGallery::where('using_areas_id', $id)->where('image_id', $galleryId)->get();
        return view('admin.using_areas.gallery.edit', compact('using_areas', 'gallery'));
    }

    

    public function galleryDestroy($id, $galleryId)
    {
        try {
            $gallery = UsingAreasGallery::findOrFail($galleryId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $gallery->image);
            $gallery->delete();
            return redirect()->route('admin.using_areas.gallery.index', $id)->with('success', 'Kullanım alanı görseli başarıyla silindi!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.using_areas.gallery.index', $id)->with('error', 'Kullanım alanı görseli silinirken bir hata oluştu.');
        }
    }

}
