<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UsingAreasGallery;

class UsingAreas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'using_areas';

    protected $fillable = [
        'lang',
        'using_areas_id',
        'title_1',
        'short_description',
        'title_2',
        'description',
        'seo_url',
        'image',
        'alt',
        'used_products',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A project has many gallery items
     */
    public function gallery()
    {
        return $this->hasMany(UsingAreasGallery::class, 'using_areas_id', 'using_areas_id')->where('lang', app()->getLocale())->orderBy('sort');
    }


}