<?php

namespace App\Livewire\Public\Blog;

use Livewire\Component;
use App\Models\Post;

class BlogView extends Component
{
    public $slug;
    public $post;

    public function mount()
    {
        $this->slug = request('slug');
        if ($this->slug) {
            $this->post = Post::where('slug', $this->slug)->where('status', true)->firstOrFail();
        }
    }

    public function render()
    {
        return view('livewire.public.blog.blog-view', ['post' => $this->post]);
    }
}
