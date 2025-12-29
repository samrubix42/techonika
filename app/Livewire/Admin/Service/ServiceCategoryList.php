<?php

namespace App\Livewire\Admin\Service;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class ServiceCategoryList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    #[Layout('components.layouts.admin')]

    public $search = '';
    public $perPage = 10;

    public $modalOpen = false;
    public $confirmDelete = false;

    public $categoryId;
    public $deleteId;

    public $name = '';
    public $slug = '';
    public $status = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:service_categories,slug',
        'status' => 'boolean',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    /* ================= MODALS ================= */

    public function openModal()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

    public function showDeleteModal($id)
    {
        $this->deleteId = $id;
        $this->confirmDelete = true;
    }

    public function closeDeleteModal()
    {
        $this->confirmDelete = false;
        $this->deleteId = null;
    }
    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    /* ================= CRUD ================= */

    public function save()
    {
        $rules = $this->rules;

        if ($this->categoryId) {
            $rules['slug'] = 'required|string|max:255|unique:service_categories,slug,' . $this->categoryId;
        }

        $this->validate($rules);

        ServiceCategory::updateOrCreate(
            ['id' => $this->categoryId],
            [
                'name' => $this->name,
                'slug' => Str::slug($this->slug),
                'status' => $this->status,
            ]
        );

        $this->closeModal();
        $this->resetForm();
    }

    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);

        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->status = $category->status;

        $this->modalOpen = true;
    }

    public function deleteConfirmed()
    {
        ServiceCategory::findOrFail($this->deleteId)->delete();

        $this->closeDeleteModal();
    }

    public function toggleStatus($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->update(['status' => !$category->status]);
    }

    private function resetForm()
    {
        $this->reset(['categoryId', 'name', 'slug', 'status']);
        $this->status = true;
    }

    public function render()
    {
        $categories = ServiceCategory::where('name', 'like', "%{$this->search}%")
            ->orWhere('slug', 'like', "%{$this->search}%")
            ->orderBy('id', 'desc')
            ->paginate($this->perPage);

        return view('livewire.admin.service.service-category-list', [
            'categories' => $categories
        ]);
    }
}
