<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\BlogCategory;
use Livewire\Attributes\Layout;

class CategoryList extends Component
{
    use WithPagination;

    #[Layout('components.layouts.admin')]

    public $name, $slug, $description, $is_active = true;
    public $categoryId;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:blog_categories,slug',
        'description' => 'nullable|string',
        'is_active' => 'boolean',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showCreateModal()
    {
        $this->resetForm();
        $this->modalFormVisible = true;
    }

    public function showEditModal($id)
    {
        $this->resetForm();
        $this->categoryId = $id;
        $category = BlogCategory::findOrFail($id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
        $this->is_active = $category->is_active;
        $this->modalFormVisible = true;
    }

    public function showDeleteModal($id)
    {
        $this->categoryId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function save()
    {
        $this->validate();

        BlogCategory::updateOrCreate(
            ['id' => $this->categoryId],
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'is_active' => $this->is_active,
            ]
        );

        $this->modalFormVisible = false;
        session()->flash('success', $this->categoryId ? 'Category updated successfully!' : 'Category created successfully!');
        $this->resetForm();
    }

    public function delete()
    {
        BlogCategory::destroy($this->categoryId);
        $this->modalConfirmDeleteVisible = false;
        session()->flash('success', 'Category deleted successfully!');
    }

    private function resetForm()
    {
        $this->reset(['name', 'slug', 'description', 'is_active', 'categoryId']);
        $this->resetValidation();
    }

    public function render()
    {
        $categories = BlogCategory::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.admin.blog.category-list', [
            'categories' => $categories
        ]);
    }
}
