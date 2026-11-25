<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

/**
 * One-shot seeder for the live server:
 *   1. removes the old demo case studies (and their demo images)
 *   2. removes the old "Digital Marketing" category (only if nothing uses it)
 *   3. seeds the SEO / SMO / Web Development categories
 *   4. seeds the real client case studies
 *
 * Safe to run more than once. Case studies added through the admin panel are not touched.
 *
 *   php artisan db:seed --class=CaseStudyServerSeeder --force
 */
class CaseStudyServerSeeder extends Seeder
{
    private const DEMO_SLUGS = [
        'e-commerce-platform-for-a-fashion-retailer',
        'clinic-booking-patient-management-portal',
        'lead-generation-campaign-for-a-real-estate-developer',
        'social-media-growth-for-a-restaurant-chain',
        'organic-growth-for-a-b2b-manufacturing-company',
        'local-seo-for-a-home-services-business',
    ];

    public function run(): void
    {
        // 1. Demo case studies + demo images
        $deleted = CaseStudy::whereIn('slug', self::DEMO_SLUGS)->delete();
        Storage::disk('public')->deleteDirectory('case-studies/demo');
        $this->command?->info("Removed {$deleted} demo case studies.");

        // 2. Old category — only when no case study still points to it
        $old = CaseStudyCategory::where('slug', 'digital-marketing')->withCount('caseStudies')->first();
        if ($old && $old->case_studies_count === 0) {
            $old->delete();
            $this->command?->info('Removed "Digital Marketing" category.');
        } elseif ($old) {
            $this->command?->warn("Kept \"Digital Marketing\" category: {$old->case_studies_count} case studies still use it.");
        }

        // 3 + 4. Categories and client case studies
        $this->call(ClientCaseStudySeeder::class); // calls CaseStudyCategorySeeder itself
    }
}
