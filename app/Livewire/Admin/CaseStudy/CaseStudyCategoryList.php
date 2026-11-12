<?php

namespace App\Livewire\Admin\CaseStudy;

use App\Models\CaseStudyCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class CaseStudyCategoryList extends Component
{
    use WithPagination;

    public $title, $slug, $is_active = true;
    public $categoryId;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'title'     => 'required|string|max:255',
            'slug'      => 'required|string|max:255|unique:case_study_categories,slug,' . ($this->categoryId ?? 'NULL'),
            'is_active' => 'boolean',
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedTitle()
    {
        // Auto-generate slug only while creating
        if (! $this->categoryId) {
            $this->slug = Str::slug($this->title);
        }
    }

    public function showCreateModal()
    {
        $this->resetForm();
        $this->modalFormVisible = true;
    }

    public function showEditModal($id)
    {
        $this->resetForm();
        $category = CaseStudyCategory::findOrFail($id);
        $this->categoryId = $category->id;
        $this->title = $category->title;
        $this->slug = $category->slug;
        $this->is_active = (bool) $category->is_active;
        $this->modalFormVisible = true;
    }

    public function showDeleteModal($id)
    {
        $this->categoryId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function closeModal()
    {
        $this->modalFormVisible = false;
        $this->modalConfirmDeleteVisible = false;
        $this->resetForm();
    }

    public function save()
    {
        $this->slug = Str::slug($this->slug);
        $this->validate();

        $isUpdate = (bool) $this->categoryId;

        CaseStudyCategory::updateOrCreate(
            ['id' => $this->categoryId],
            [
                'title'     => $this->title,
                'slug'      => $this->slug,
                'is_active' => $this->is_active,
            ]
        );

        $this->modalFormVisible = false;
        $this->dispatch('toast', type: 'success', message: $isUpdate ? 'Category updated successfully!' : 'Category created successfully!');
        $this->resetForm();
    }

    public function delete()
    {
        if ($this->categoryId) {
            CaseStudyCategory::destroy($this->categoryId);
            $this->dispatch('toast', type: 'success', message: 'Category deleted successfully!');
        }

        $this->modalConfirmDeleteVisible = false;
        $this->resetForm();
        $this->resetPage();
    }

    private function resetForm()
    {
        $this->reset(['title', 'slug', 'is_active', 'categoryId']);
        $this->resetValidation();
    }

    public function render()
    {
        $categories = CaseStudyCategory::withCount('caseStudies')
            ->when($this->search, fn ($q) => $q->where('title', 'like', '%' . $this->search . '%'))
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.admin.case-study.case-study-category-list', [
            'categories' => $categories,
        ]);
    }
}
