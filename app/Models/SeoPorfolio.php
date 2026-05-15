<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPorfolio extends Model
{
    protected $table = 'seo_porfolios';

    protected $fillable = [
        'logo',
        'title',
        'seo_results',
        'result_images',
    ];

    protected $casts = [
        'seo_results' => 'array',
        'result_images' => 'array',
    ];
}
