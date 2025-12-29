<?php

namespace App\Livewire\Public\Blog;

use Livewire\Component;
use App\Models\Post;

class BlogView extends Component
{
    
    public function render()
    {
        return view('livewire.public.blog.blog-view');
    }
}
