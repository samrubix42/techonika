<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure some categories exist
        $web = BlogCategory::firstOrCreate([
            'name' => 'Web Development',
        ], [
            'slug' => Str::slug('Web Development'),
            'is_active' => true,
        ]);

        $mobile = BlogCategory::firstOrCreate([
            'name' => 'Mobile Apps',
        ], [
            'slug' => Str::slug('Mobile Apps'),
            'is_active' => true,
        ]);

        $cloud = BlogCategory::firstOrCreate([
            'name' => 'Cloud & DevOps',
        ], [
            'slug' => Str::slug('Cloud & DevOps'),
            'is_active' => true,
        ]);

        $userId = 1; // there's a test user seeded in DatabaseSeeder

        // Sample posts
        Post::create([
            'blog_category_id' => $web->id,
            'user_id' => $userId,
            'title' => 'Getting Started with Laravel 10',
            'slug' => Str::slug('Getting Started with Laravel 10'),
            'featured_image' => null,
            'intro' => 'A quickstart guide to building apps with Laravel 10.',
            'at_a_glance' => 'Routing, Controllers, Eloquent, Blade',
            'content' => '<p>This guide walks through the essentials of Laravel 10...</p>',
            'tags' => 'laravel,php,backend',
            'meta_title' => 'Laravel 10 Quickstart',
            'meta_description' => 'Learn Laravel 10 fundamentals and build your first app.',
            'meta_keywords' => 'laravel,php,framework',
            'status' => true,
        ]);

        Post::create([
            'blog_category_id' => $mobile->id,
            'user_id' => $userId,
            'title' => 'Building Cross-Platform Apps with Flutter',
            'slug' => Str::slug('Building Cross-Platform Apps with Flutter'),
            'featured_image' => null,
            'intro' => 'Why Flutter is a strong choice for mobile development.',
            'at_a_glance' => 'Fast UI, Single codebase, Good performance',
            'content' => '<p>Flutter allows developers to build beautiful apps...</p>',
            'tags' => 'flutter,dart,mobile',
            'meta_title' => 'Flutter Cross-Platform Apps',
            'meta_description' => 'Explore building mobile apps using Flutter.',
            'meta_keywords' => 'flutter,dart,mobile',
            'status' => true,
        ]);

        Post::create([
            'blog_category_id' => $cloud->id,
            'user_id' => $userId,
            'title' => 'Introduction to CI/CD with GitHub Actions',
            'slug' => Str::slug('Introduction to CI/CD with GitHub Actions'),
            'featured_image' => null,
            'intro' => 'Automate tests and deployments using GitHub Actions.',
            'at_a_glance' => 'Workflows, Runners, Secrets, Deployment',
            'content' => '<p>Continuous Integration and Delivery streamline releases...</p>',
            'tags' => 'ci,cicd,github-actions,devops',
            'meta_title' => 'CI/CD with GitHub Actions',
            'meta_description' => 'Set up CI/CD pipelines with GitHub Actions.',
            'meta_keywords' => 'ci,cicd,github-actions',
            'status' => true,
        ]);
    }
}
