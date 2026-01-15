<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'image',
        'tags',
        'sequence',
        'project_url',
    ];

    protected $casts = [
        'tags' => 'json',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
