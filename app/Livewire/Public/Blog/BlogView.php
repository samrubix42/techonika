<?php

namespace App\Livewire\Public\Blog;

use Livewire\Component;
use App\Models\Post;
use App\Models\BlogCategory;

class BlogView extends Component
{
    public $slug;
    public $post;
    public $search = '';

    public function mount()
    {
        $this->slug = request('slug');
        if ($this->slug) {
            $this->post = Post::where('slug', $this->slug)->where('status', true)->firstOrFail();
        }
    }

    public function render()
    {
        // Get categories with post counts
        $categories = BlogCategory::where('is_active', true)
            ->withCount(['posts' => function($query) {
                $query->where('status', true);
            }])
            ->orderBy('name')
            ->get();

        // Get recent posts
        $recentPosts = Post::where('status', true)
            ->where('id', '!=', $this->post?->id ?? 0)
            ->latest('created_at')
            ->take(5)
            ->get();

        // Get all tags from active posts
        $allTags = Post::where('status', true)
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatMap(function ($tags) {
                return is_string($tags) ? explode(',', $tags) : [];
            })
            ->map(fn($tag) => trim($tag))
            ->filter()
            ->unique()
            ->values();

        return view('livewire.public.blog.blog-view', [
            'post' => $this->post,
            'categories' => $categories,
            'recentPosts' => $recentPosts,
            'tags' => $allTags
        ]);
    }
}
