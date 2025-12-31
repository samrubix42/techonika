<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\Post;
use Illuminate\Support\Str;

class UpdateBlog extends Component
{
    use WithFileUploads;

    #[Layout('components.layouts.admin')]
    public $postId;
    public $blog_category_id;
    public $title;
    public $slug;
    public $featured_image;
    public $intro;
    public $at_a_glance;
    public $content;
    public $tags;
    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $status = false;

    protected function rules()
    {
        return [
            'blog_category_id' => 'required|exists:blog_categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|unique:posts,slug,' . ($this->postId ?? 'NULL'),
            'featured_image' => 'nullable|image|max:2048',
            'intro' => 'nullable|string',
            'at_a_glance' => 'nullable|string',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'status' => 'boolean',
        ];
    }

    public function mount($post = null)
    {
        if ($post) {
            $this->postId = $post;
            $p = Post::findOrFail($post);
            $this->blog_category_id = $p->blog_category_id;
            $this->title = $p->title;
            $this->slug = $p->slug;
            $this->at_a_glance = $p->at_a_glance;
            $this->intro = $p->intro;
            $this->content = $p->content;
            $this->tags = $p->tags;
            $this->meta_title = $p->meta_title;
            $this->meta_description = $p->meta_description;
            $this->meta_keywords = $p->meta_keywords;
            $this->status = (bool) $p->status;
        }
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function save()
    {
        $this->validate();

        $post = Post::findOrFail($this->postId);

        if ($this->featured_image) {
            $path = $this->featured_image->store('blogs', 'public');
            $post->featured_image = $path;
        }

        $post->blog_category_id = $this->blog_category_id;
        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->intro = $this->intro;
        $post->at_a_glance = $this->at_a_glance;
        $post->content = $this->content;
        $post->tags = $this->tags;
        $post->meta_title = $this->meta_title;
        $post->meta_description = $this->meta_description;
        $post->meta_keywords = $this->meta_keywords;
        $post->status = $this->status;
        $post->save();

        session()->flash('success', 'Blog updated successfully.');
        return redirect()->route('admin.blog-list');
    }
    public function render()
    {
        return view('livewire.admin.blog.update-blog');
    }
}
