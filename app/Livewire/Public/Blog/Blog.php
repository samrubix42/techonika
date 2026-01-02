<?php

namespace App\Livewire\Public\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Blog extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 9;

 

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::where('status', true)->orderBy('created_at', 'desc');

        if ($this->search) {
            $s = "%{$this->search}%";
            $query->where(function ($q) use ($s) {
                $q->where('title', 'like', $s)
                  ->orWhere('content', 'like', $s)
                  ->orWhere('slug', 'like', $s);
            });
        }

        $posts = $query->paginate($this->perPage);

        return view('livewire.public.blog.blog', compact('posts'));
    }
}
