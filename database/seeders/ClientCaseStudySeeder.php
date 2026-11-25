<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Real client case studies (SEO + SMO) backed by Search Console / Meta Business Suite screenshots.
 *
 * Source screenshots live in public/images/case-study/... and are copied to the public disk
 * (storage/app/public/case-studies/clients) because the views render featured images via asset('storage/...').
 */
class ClientCaseStudySeeder extends Seeder
{
    private const SOURCE_DIR = 'images/case-study';
    private const TARGET_DIR = 'case-studies/clients';

    public function run(): void
    {
        $this->call(CaseStudyCategorySeeder::class);

        $categories = CaseStudyCategory::pluck('id', 'slug');

        foreach ($this->caseStudies() as $item) {
            $slug = $item['slug'];

            $featured = $this->copyImage($item['image'], $slug);

            $extraImages = [];
            foreach ($item['extra_images'] ?? [] as $i => $extra) {
                $path = $this->copyImage($extra['file'], $slug . '-' . ($i + 2));
                if ($path) {
                    $extraImages[] = ['src' => '/storage/' . $path, 'alt' => $extra['alt']];
                }
            }

            CaseStudy::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id'      => $categories[$item['category']] ?? null,
                    'project_name'     => $item['project'],
                    'featured_image'   => $featured,
                    'content'          => $this->buildContent($item, $extraImages),
                    'meta_title'       => $item['meta_title'],
                    'meta_description' => $item['meta_description'],
                    'is_active'        => true,
                ]
            );
        }
    }

    /**
     * Copy a screenshot from public/images/case-study into the public disk. Returns the disk path or null.
     */
    private function copyImage(string $relative, string $name): ?string
    {
        $source = public_path(self::SOURCE_DIR . '/' . $relative);

        if (! is_file($source)) {
            $this->command?->warn("Case study image not found: {$source}");
            return null;
        }

        $target = self::TARGET_DIR . '/' . $name . '.' . strtolower(pathinfo($source, PATHINFO_EXTENSION));
        Storage::disk('public')->put($target, file_get_contents($source));

        return $target;
    }

    private function buildContent(array $item, array $extraImages): string
    {
        $e = fn ($v) => e($v);
        $list = fn (array $points) => '<ul>' . implode('', array_map(fn ($p) => '<li>' . $p . '</li>', $points)) . '</ul>';

        $html = '<h2>Project Overview</h2>'
            . '<table><tbody>'
            . collect($item['overview'])->map(fn ($v, $k) => '<tr><th>' . $e($k) . '</th><td>' . $e($v) . '</td></tr>')->implode('')
            . '</tbody></table>'
            . '<h2>The Challenge</h2>'
            . '<p>' . $e($item['challenge']) . '</p>'
            . '<h2>' . $e($item['approach_title']) . '</h2>'
            . '<p>' . $e($item['approach']) . '</p>'
            . '<h2>Key Highlights</h2>'
            . $list($item['highlights'])
            . '<h2>' . $e($item['results_title']) . '</h2>';

        foreach ($item['results'] as $heading => $points) {
            if (! is_int($heading)) {
                $html .= '<h3>' . $e($heading) . '</h3>';
            }
            $html .= $list(array_map($e, (array) $points));
        }

        foreach ($extraImages as $img) {
            $html .= '<img src="' . $e($img['src']) . '" alt="' . $e($img['alt']) . '" loading="lazy">';
        }

        if (! empty($item['keywords'])) {
            $html .= '<h2>Tracked Keyword Rankings</h2>'
                . '<table><thead><tr><th>Keyword</th><th>Google Rank</th></tr></thead><tbody>'
                . collect($item['keywords'])->sortBy(fn ($rank) => $rank)
                    ->map(fn ($rank, $kw) => '<tr><td>' . $e($kw) . '</td><td>#' . $rank . '</td></tr>')->implode('')
                . '</tbody></table>';
        }

        return $html;
    }

    private function caseStudies(): array
    {
        return [
            // ============================== SEO ==============================
            [
                'category'         => 'seo',
                'slug'             => 'lets-ayurveda-multilingual-ayurvedic-seo-growth',
                'image'            => "SEO/Let's Ayurveda Search Console.png",
                'project'          => "Let's Ayurveda — Organic Search & Multilingual Ayurvedic Content Growth",
                'meta_title'       => "Let's Ayurveda — Multilingual Ayurvedic SEO Growth",
                'meta_description' => 'Built Hindi, English, and Hinglish wellness content clusters to drive 22.6K organic clicks and 1.97M impressions over 16 months, with top queries reaching #1.',
                'overview'         => [
                    'Client'   => "Let's Ayurveda",
                    'Service'  => 'SEO',
                    'Industry' => 'Ayurveda & Holistic Wellness',
                    'Timeline' => '16-Month Search Console Window',
                ],
                'challenge'        => 'Ayurvedic and wellness queries span both Hindi and English search intent, with high competition around traditional texts, daily routines, and home remedies. The website needed stronger search visibility across informational queries while maintaining clarity and topical relevance.',
                'approach_title'   => 'Our SEO Approach',
                'approach'         => 'We built topic clusters around classical Ayurvedic principles, daily habits, and natural remedies in Hindi, English, and Hinglish. Content was structured to match user search intent directly, supported by semantic entity optimization and consistent on-page improvements across high-potential wellness articles.',
                'highlights'       => [
                    'Targeted high-intent Hindi, English, and Hinglish wellness queries across classical texts, yoga, diet, and natural care.',
                    'Achieved <strong>#1 rankings</strong> for core queries including "चरक संहिता के अनुसार भोजन के नियम", "side effects of ghee on lips", and "lips par ghee lagane ke nuksan".',
                    'Secured Top 3 positions for "अलसी के तेल की मालिश के फायदे" (Rank #2) and "सात्विक भोजन के 10 फायदे" (Rank #2), with <strong>all 10 tracked sample keywords ranking within the Top 10</strong> (average rank 3.7 across those tracked keywords).',
                ],
                'results_title'    => 'Results (16-Month Google Search Console Data)',
                'results'          => [[
                    '22.6K Total Clicks',
                    '1.97M Total Impressions',
                    '1.1% Average CTR',
                    '10.9 Average Position',
                ]],
                'keywords'         => [
                    'चरक संहिता के अनुसार भोजन के नियम' => 1,
                    'side effects of ghee on lips'      => 1,
                    'lips par ghee lagane ke nuksan'     => 1,
                    'अलसी के तेल की मालिश के फायदे'      => 2,
                    'सात्विक भोजन के 10 फायदे'           => 2,
                    'त्राटक के नुकसान'                    => 4,
                    'सात्विक भोजन लिस्ट इन हिंदी'          => 4,
                    'surya namaskar steps name in hindi' => 4,
                    'स्वस्थ रहने के 25 नियम'              => 9,
                    'ध्यान करते समय शरीर क्यों हिलता है'     => 9,
                ],
            ],
            [
                'category'         => 'seo',
                'slug'             => 'tobac-go-ecommerce-local-noida-seo-rankings',
                'image'            => 'SEO/Tobac-Go Search Console.png',
                'project'          => 'Tobac-Go — E-Commerce & Local + National Search Ranking Gains',
                'meta_title'       => 'Tobac-Go — E-Commerce & Local Noida SEO Rankings',
                'meta_description' => 'Optimized commercial hookah and local Noida search terms to achieve 2.62K clicks and 87.5K impressions in 3 months, with #1 and Top 3 keyword wins.',
                'overview'         => [
                    'Client'   => 'Tobac-Go',
                    'Service'  => 'SEO',
                    'Industry' => 'Hookah & Lifestyle E-Commerce',
                    'Timeline' => '3-Month Search Console Window',
                ],
                'challenge'        => 'Competing in the hookah and lifestyle space requires ranking for both broad commercial terms (like "buy hookah online" and "hookah india") and specific product or local search terms (such as Foggit variants and Noida searches) where buyer intent is high.',
                'approach_title'   => 'Our SEO Approach',
                'approach'         => 'We aligned category, product, and location-focused search terms with dedicated landing pages and on-page SEO optimization. By pairing broad category keywords with specific product-line and local Noida queries, we captured high-intent searchers across multiple stages of discovery.',
                'highlights'       => [
                    'Ranked <strong>#1</strong> for "foggit xxx" and <strong>#2</strong> for "foggit alexander hookah" and "foggit alexander".',
                    'Secured Top 3 positions for commercial and local queries including "best hookah shop in Noida" (Rank #3), "foggit baseball" (Rank #3), and "foggit dark knight" (Rank #3).',
                    'Placed <strong>all 24 tracked sample keywords inside the Top 10</strong> (average rank 5.58 across those tracked keywords), covering commercial terms like "premium hookah india" (Rank #4) and "buy hookah online" (Rank #6).',
                ],
                'results_title'    => 'Results (3-Month Google Search Console Data)',
                'results'          => [[
                    '2.62K Total Clicks',
                    '87.5K Total Impressions',
                    '3% Average CTR',
                    '9.4 Average Position',
                ]],
                'keywords'         => [
                    'foggit xxx'                 => 1,
                    'foggit alexander hookah'    => 2,
                    'foggit alexander'           => 2,
                    'foggit baseball'            => 3,
                    'best hookah shop in Noida'  => 3,
                    'foggit dark knight'         => 3,
                    'premium hookah india'       => 4,
                    'foggit baseball hookah'     => 4,
                    'vg foggit hookah'           => 4,
                    'dejavuu hookah'             => 5,
                    'vg france hookah'           => 5,
                    'buy hookah online'          => 6,
                    'hookah website india'       => 6,
                    'thugs hookah'               => 6,
                    'France foggit'              => 6,
                    'foggit hookah'              => 6,
                    'foggit sultan hookah'       => 7,
                    'hookah in india'            => 8,
                    'shisha india'               => 8,
                    'hookah shop'                => 8,
                    'buy hookah online in india' => 9,
                    'hookah india'               => 9,
                    'hookah order online'        => 9,
                    'hookah online shop'         => 10,
                ],
            ],

            // ============================== SMO ==============================
            [
                'category'         => 'smo',
                'slug'             => 'lets-ayurveda-organic-wellness-reach-meta',
                'image'            => "Social Media Management/Let's Ayurveda Facebook.png",
                'extra_images'     => [
                    ['file' => "Social Media Management/Let's Ayurveda Instagram.png", 'alt' => "Let's Ayurveda Instagram insights — 13.7M organic views"],
                ],
                'project'          => "Let's Ayurveda — Multi-Platform Organic Wellness Reach (41.5M+ Views)",
                'meta_title'       => "Let's Ayurveda — 41.5M+ Organic Views Across Meta",
                'meta_description' => 'Scaled educational Ayurvedic reels and wellness posts to 27.8M Facebook views and 13.7M Instagram views organically with 331.4K total interactions.',
                'overview'         => [
                    'Client'    => "Let's Ayurveda",
                    'Service'   => 'Social Media (SMO)',
                    'Platforms' => 'Facebook & Instagram',
                    'Timeline'  => '1 Mar 2025 – 31 Mar 2026',
                ],
                'challenge'        => 'Health and Ayurveda content on social media often struggles to stand out without relying on heavy paid ad budgets. The goal was to build consistent, high-retention organic reach across both Facebook and Instagram.',
                'approach_title'   => 'Our Social Media Approach',
                'approach'         => 'We created educational wellness reels, seasonal health tips, and relatable Ayurvedic lifestyle content designed for quick retention and shares. Every view across both platforms was driven 100% organically (0 views from ads).',
                'highlights'       => [
                    'Generated <strong>41.52M combined organic views</strong> across Facebook and Instagram.',
                    'Maintained high audience engagement with <strong>331.4K combined content interactions</strong> across both channels.',
                    'Built strong video retention on Facebook, recording 7.3M 3-second views (+45.9%) and 1,484 days 10 hours of total watch time (+63.2%).',
                ],
                'results_title'    => 'Results (Meta Business Suite Insights)',
                'results'          => [
                    'Facebook'  => [
                        '27.8M Organic Views (27,782,487)',
                        '7.3M 3-Second Views',
                        '106.1K Interactions (+68.3%)',
                    ],
                    'Instagram' => [
                        '13.7M Organic Views (13,732,873)',
                        '15.5M Reach (+178.3%)',
                        '225.3K Interactions',
                    ],
                ],
            ],
            [
                'category'         => 'smo',
                'slug'             => 'medident-clinic-ghaziabad-organic-reach-growth',
                'image'            => 'Social Media Management/Medident Clinic Ghaziabad.png',
                'project'          => 'Medident Multiclinic (Ghaziabad) — Local Healthcare Awareness & Organic Engagement',
                'meta_title'       => 'Medident Clinic — 361.5% Organic Reach Growth',
                'meta_description' => 'Drove 11.5K organic Facebook views (+361.5%) and reached 3,540 local viewers (+479.4%) in 3 months through patient-focused dental care content.',
                'overview'         => [
                    'Client'   => 'Medident Multiclinic, Ghaziabad',
                    'Service'  => 'Social Media (SMO)',
                    'Platform' => 'Facebook',
                    'Timeline' => '1 Jan 2026 – 1 Apr 2026',
                ],
                'challenge'        => 'Local dental and multispecialty clinics need consistent community visibility and patient trust to stay top-of-mind in their neighborhood without depending solely on paid promotions.',
                'approach_title'   => 'Our Social Media Approach',
                'approach'         => 'We developed informative dental care posts, patient-focused awareness videos, and approachable clinic updates tailored to local families in Ghaziabad, focusing purely on organic discovery and community engagement.',
                'highlights'       => [
                    'Scaled organic Facebook visibility by <strong>361.5%</strong> within a 3-month window.',
                    'Expanded unique audience reach to <strong>3,540 viewers (+479.4%)</strong> with zero ad spend.',
                    'Boosted audience engagement by <strong>226.6%</strong>, turning passive viewers into active page interactions.',
                ],
                'results_title'    => 'Results (Meta Business Suite Insights)',
                'results'          => [[
                    '11.5K Organic Views (11,482, up 361.5%)',
                    '3,540 Unique Viewers (up 479.4%)',
                    '712 Content Interactions (up 226.6%)',
                    '2K 3-Second Video Views',
                ]],
            ],
            [
                'category'         => 'smo',
                'slug'             => 'tobac-go-organic-instagram-brand-growth',
                'image'            => 'Social Media Management/Tobac-Go.png',
                'project'          => 'Tobac-Go — Brand Storytelling & Organic Instagram Growth',
                'meta_title'       => 'Tobac-Go — 100% Organic Instagram Brand Growth',
                'meta_description' => 'Navigated social ad restrictions with visual product storytelling to generate 47.6K organic Instagram views, 5.7K reach, and 1.6K interactions.',
                'overview'         => [
                    'Client'   => 'Tobac-Go',
                    'Service'  => 'Social Media (SMO)',
                    'Platform' => 'Instagram',
                    'Timeline' => '1 Jul 2025 – 31 Mar 2026',
                ],
                'challenge'        => 'Lifestyle and hookah brands face strict advertising restrictions on social platforms, making organic content strategy and visual storytelling essential for brand awareness and product discovery.',
                'approach_title'   => 'Our Social Media Approach',
                'approach'         => 'We built a cohesive visual grid and product-focused content series highlighting signature designs, premium collections, and lifestyle aesthetics — driving 100% organic growth without paid ads.',
                'highlights'       => [
                    'Built organic momentum from the ground up, achieving <strong>100% growth</strong> across views, reach, and interactions.',
                    'Showcased flagship product collections (Elegant Design, Premium Pots, Huge Collection) through high-contrast product visuals.',
                    'Converted reach into steady audience engagement with <strong>1.6K content interactions</strong>.',
                ],
                'results_title'    => 'Results (Meta Business Suite Insights)',
                'results'          => [[
                    '47.6K Organic Views (47,564, up 100%)',
                    '5.7K Accounts Reached (up 100%)',
                    '1.6K Content Interactions (up 100%)',
                ]],
            ],
        ];
    }
}
