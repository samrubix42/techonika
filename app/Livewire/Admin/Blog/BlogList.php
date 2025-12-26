<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Attributes\Layout;
use Livewire\Component;

class BlogList extends Component
{
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.blog.blog-list');
    }
}
