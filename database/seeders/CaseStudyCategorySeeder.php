<?php

namespace Database\Seeders;

use App\Models\CaseStudyCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CaseStudyCategorySeeder extends Seeder
{
    /**
     * Seed the case study categories.
     */
    public function run(): void
    {
        $categories = [
            'Web Development',
            'Digital Marketing',
            'SEO',
        ];

        foreach ($categories as $title) {
            // updateOrCreate keeps the seeder safe to run more than once
            CaseStudyCategory::updateOrCreate(
                ['slug' => Str::slug($title)],
                ['title' => $title, 'is_active' => true]
            );
        }
    }
}
