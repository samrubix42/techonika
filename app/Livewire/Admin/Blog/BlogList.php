<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class BlogList extends Component
{
    use WithPagination;

    #[Layout('components.layouts.admin')]
    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::with(['category', 'author'])->orderBy('created_at', 'desc');

        if ($this->search) {
            $s = "%{$this->search}%";
            $query->where(function ($q) use ($s) {
                $q->where('title', 'like', $s)
                  ->orWhere('slug', 'like', $s)
                  ->orWhere('content', 'like', $s);
            });
        }

        $posts = $query->paginate($this->perPage);

        return view('livewire.admin.blog.blog-list', compact('posts'));
    }

    public function edit($id)
    {
        return redirect()->route('admin.update-blog', ['post' => $id]);
    }
}
