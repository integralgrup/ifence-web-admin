<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UsingAreas;

class UsingAreasGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'using_areas_gallery';

    protected $fillable = [
        'using_areas_id',
        'image_id',
        'lang',
        'image',
        'alt',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A gallery item belongs to a using area
     */
    public function usingArea()
    {
        return $this->belongsTo(UsingAreas::class, 'using_areas_id', 'using_areas_id');
    }
}
