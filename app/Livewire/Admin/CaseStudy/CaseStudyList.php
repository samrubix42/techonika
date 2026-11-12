<?php

namespace App\Livewire\Admin\CaseStudy;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.admin')]
class CaseStudyList extends Component
{
    use WithPagination;

    public $search = '';
    public $categoryFilter = '';
    public $perPage = 10;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'categoryFilter' => ['except' => ''],
    ];

    // Delete confirmation state
    public $confirmingDelete = false;
    public $deleteId = null;
    public $deleteTitle = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategoryFilter()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function toggleActive($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        $caseStudy->update(['is_active' => ! $caseStudy->is_active]);
        $this->dispatch('toast', type: 'success', message: 'Status updated.');
    }

    public function showDelete($id)
    {
        $caseStudy = CaseStudy::find($id);
        $this->deleteId = $id;
        $this->deleteTitle = $caseStudy?->project_name ?? '';
        $this->confirmingDelete = true;
    }

    public function cancelDelete()
    {
        $this->confirmingDelete = false;
        $this->deleteId = null;
        $this->deleteTitle = '';
    }

    public function deleteConfirmed()
    {
        if ($this->deleteId) {
            $caseStudy = CaseStudy::findOrFail($this->deleteId);

            if ($caseStudy->featured_image) {
                Storage::disk('public')->delete($caseStudy->featured_image);
            }

            $caseStudy->delete();
            $this->dispatch('toast', type: 'success', message: 'Case study deleted successfully.');
        }

        $this->cancelDelete();
        $this->resetPage();
    }

    public function render()
    {
        $caseStudies = CaseStudy::with('category')
            ->when($this->search, function ($query) {
                $s = "%{$this->search}%";
                $query->where(function ($q) use ($s) {
                    $q->where('project_name', 'like', $s)
                        ->orWhere('slug', 'like', $s);
                });
            })
            ->when($this->categoryFilter, fn ($q) => $q->where('category_id', $this->categoryFilter))
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.case-study.case-study-list', [
            'caseStudies' => $caseStudies,
            'categories'  => CaseStudyCategory::orderBy('title')->get(),
        ]);
    }
}
