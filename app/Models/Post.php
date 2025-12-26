<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'blog_category_id',
        'user_id',
        'title',
        'slug',
        'featured_image',
        'intro',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'published_at'
    ];

     public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
