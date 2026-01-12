<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioCategory;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'SEO',
                'slug' => 'seo',
                'description' => 'Search Engine Optimization services',
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Custom web development using Laravel, Next.js and more',
            ],
            [
                'name' => 'Graphic Designing',
                'slug' => 'graphic-designing',
                'description' => 'Branding, UI/UX and marketing creatives',
            ],
        ];

        foreach ($categories as $cat) {
            PortfolioCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
