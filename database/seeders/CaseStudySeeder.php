<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Database\Seeders\Support\CaseStudyDemoImages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CaseStudySeeder extends Seeder
{
    /**
     * Seed sample case studies (two per category).
     */
    public function run(): void
    {
        // Make sure the categories exist first
        $this->call(CaseStudyCategorySeeder::class);

        $categories = CaseStudyCategory::pluck('id', 'slug');

        $caseStudies = [
            [
                'category'   => 'web-development',
                'image'      => 'ecommerce',
                'project'    => 'E-Commerce Platform for a Fashion Retailer',
                'client'     => 'a mid-sized fashion retailer',
                'challenge'  => 'The client\'s old store was slow, hard to update and lost shoppers on mobile. Checkout took six steps and page loads often went past five seconds.',
                'solution'   => [
                    'Rebuilt the store on Laravel with a custom, mobile-first frontend',
                    'Cut checkout down to a single page with saved addresses and UPI/card payments',
                    'Added image optimisation, caching and a CDN to speed up product pages',
                    'Built an admin panel for products, stock, orders and discount codes',
                ],
                'results'    => [
                    'Page load time down from 5.2s to 1.4s',
                    '38% increase in mobile conversions',
                    '27% fewer abandoned carts within three months',
                ],
                'tech'       => 'Laravel, Livewire, Tailwind CSS, MySQL, Redis',
            ],
            [
                'category'   => 'web-development',
                'image'      => 'booking',
                'project'    => 'Clinic Booking & Patient Management Portal',
                'client'     => 'a multi-location healthcare clinic',
                'challenge'  => 'Appointments were booked by phone and tracked in spreadsheets, causing double bookings, missed reminders and long waits at reception.',
                'solution'   => [
                    'Built an online booking portal with real-time doctor availability',
                    'Added automatic SMS and email reminders before each appointment',
                    'Created a staff dashboard for schedules, patient records and billing',
                    'Set up role-based access for doctors, receptionists and admins',
                ],
                'results'    => [
                    '65% of appointments now booked online',
                    'No-shows reduced by 42% thanks to reminders',
                    'Front-desk call volume cut by more than half',
                ],
                'tech'       => 'Laravel, Livewire, Alpine.js, MySQL',
            ],
            [
                'category'   => 'digital-marketing',
                'image'      => 'leads',
                'project'    => 'Lead Generation Campaign for a Real Estate Developer',
                'client'     => 'a residential real estate developer',
                'challenge'  => 'The client was spending heavily on ads but getting low-quality leads, with a cost per lead that made the campaigns unprofitable.',
                'solution'   => [
                    'Rebuilt Google and Meta ad campaigns around tightly targeted audiences',
                    'Designed dedicated landing pages for each project with clear CTAs',
                    'Set up conversion tracking and a CRM integration to score leads',
                    'Ran weekly A/B tests on creatives, copy and forms',
                ],
                'results'    => [
                    'Cost per lead reduced by 54%',
                    '3.1x more qualified site-visit bookings',
                    'Return on ad spend improved from 1.8x to 4.6x',
                ],
                'tech'       => 'Google Ads, Meta Ads, Google Analytics 4, Landing Pages, CRM',
            ],
            [
                'category'   => 'digital-marketing',
                'image'      => 'social',
                'project'    => 'Social Media Growth for a Restaurant Chain',
                'client'     => 'a regional restaurant chain',
                'challenge'  => 'The brand had inconsistent social posting, low engagement and almost no online orders coming from social channels.',
                'solution'   => [
                    'Created a monthly content calendar with reels, offers and behind-the-scenes posts',
                    'Partnered with local food creators for launches and new menu items',
                    'Ran location-targeted ads for each outlet',
                    'Linked social profiles directly to online ordering',
                ],
                'results'    => [
                    'Instagram followers grew from 4K to 31K in eight months',
                    'Average engagement rate up from 0.9% to 5.7%',
                    '22% of online orders now come from social channels',
                ],
                'tech'       => 'Instagram, Facebook, Meta Ads, Content Strategy, Influencer Marketing',
            ],
            [
                'category'   => 'seo',
                'image'      => 'seo',
                'project'    => 'Organic Growth for a B2B Manufacturing Company',
                'client'     => 'an industrial equipment manufacturer',
                'challenge'  => 'The website ranked for almost nothing beyond the brand name, and nearly all enquiries came from paid listings and referrals.',
                'solution'   => [
                    'Ran a full technical SEO audit and fixed crawl, speed and indexing issues',
                    'Researched buyer keywords and built product and industry landing pages',
                    'Published in-depth guides answering common buyer questions',
                    'Earned links from industry directories and trade publications',
                ],
                'results'    => [
                    'Organic traffic up 312% in 10 months',
                    '48 keywords ranking on page one of Google',
                    'Organic enquiries grew from 5 to over 60 per month',
                ],
                'tech'       => 'Technical SEO, Keyword Research, Content Marketing, Link Building',
            ],
            [
                'category'   => 'seo',
                'image'      => 'local',
                'project'    => 'Local SEO for a Home Services Business',
                'client'     => 'a home cleaning and repair service',
                'challenge'  => 'The business was invisible in local "near me" searches and Google Maps results, losing jobs to competitors with stronger listings.',
                'solution'   => [
                    'Optimised and verified the Google Business Profile for every service area',
                    'Built location pages for each city and neighbourhood served',
                    'Cleaned up and standardised business listings across directories',
                    'Set up a simple system to collect customer reviews after each job',
                ],
                'results'    => [
                    'Ranked in the Google Maps top 3 for 20+ local searches',
                    'Calls from Google Business Profile up 180%',
                    'Average rating improved to 4.8 stars from 200+ new reviews',
                ],
                'tech'       => 'Local SEO, Google Business Profile, Citations, Review Management',
            ],
        ];

        foreach ($caseStudies as $item) {
            $slug = Str::slug($item['project']);

            // Demo featured image (SVG mockup) saved to the public disk
            $imagePath = "case-studies/demo/{$slug}.svg";
            Storage::disk('public')->put($imagePath, CaseStudyDemoImages::make($item['image'], 'case-study/' . $slug));

            // updateOrCreate keeps the seeder safe to run more than once
            CaseStudy::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id'      => $categories[$item['category']] ?? null,
                    'project_name'     => $item['project'],
                    'featured_image'   => $imagePath,
                    'content'          => $this->buildContent($item),
                    'meta_title'       => $item['project'] . ' | Case Study | Technonika',
                    'meta_description' => "See how Technonika helped {$item['client']}. Key result: {$item['results'][0]}.",
                    'is_active'        => true,
                ]
            );
        }
    }

    private function buildContent(array $item): string
    {
        $list = fn (array $points) => '<ul>' . implode('', array_map(fn ($p) => '<li>' . e($p) . '</li>', $points)) . '</ul>';

        return '<h2>Overview</h2>'
            . '<p>We worked with ' . e($item['client']) . ' to deliver <strong>' . e($item['project']) . '</strong>.</p>'
            . '<h2>The Challenge</h2>'
            . '<p>' . e($item['challenge']) . '</p>'
            . '<h2>Our Solution</h2>'
            . $list($item['solution'])
            . '<h2>Results</h2>'
            . $list($item['results'])
            . '<h3>Tools &amp; Technologies</h3>'
            . '<p>' . e($item['tech']) . '</p>';
    }
}
