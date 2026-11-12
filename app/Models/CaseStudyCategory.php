<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudyCategory extends Model
{
    protected $fillable = ['title', 'slug', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function caseStudies()
    {
        return $this->hasMany(CaseStudy::class, 'category_id');
    }
}
