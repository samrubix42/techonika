<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class AddBlog extends Component
{
    use WithFileUploads;

    #[Layout('components.layouts.admin')]
    public $blog_category_id;
    public $title;
    public $slug;
    public $featured_image;
    public $intro;
    public $content;

    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $status = false;

    protected $rules = [
        'blog_category_id' => 'required|exists:blog_categories,id',
        'title'            => 'required|string|max:255',
        'slug'             => 'required|unique:posts,slug',
        'featured_image'   => 'nullable|image|max:2048',
        'intro'            => 'nullable|string',
        'content'          => 'required|string',
        'status'           => 'boolean',
    ];

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->featured_image) {
            $imagePath = $this->featured_image->store('blogs', 'public');
        }
        

        Post::create([
            'blog_category_id' => $this->blog_category_id,
            'user_id'          => 1,
            'title'            => $this->title,
            'slug'             => $this->slug,
            'featured_image'   => $imagePath,
            'intro'            => $this->intro,
            'content'          => $this->content,
            'meta_title'       => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keywords'    => $this->meta_keywords,
            'status'           => $this->status,
        ]);

        session()->flash('success', 'Blog post created successfully.');

        $this->reset();
        // notify frontend to reset TinyMCE editor (textarea is inside wire:ignore)
        $this->dispatch('tinyMceReset');
    }

    public function render()
    {
        return view('livewire.admin.blog.add-blog', [
            'categories' => BlogCategory::where('is_active', true)->get(),
        ]);
    }
}
