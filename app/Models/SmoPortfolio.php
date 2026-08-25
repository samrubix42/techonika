<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmoPortfolio extends Model
{
    protected $fillable = [
        'title',
        'images',
        'description',
        'is_active',
    ];

    protected $casts = [
        'images' => 'array',
        'is_active' => 'boolean',
    ];
}
