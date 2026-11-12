<?php

namespace App\Livewire\Public\CaseStudy;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CaseStudies extends Component
{
    use WithPagination;

    #[Url(as: 'category', except: '')]
    public $category = '';

    public $perPage = 9;

    public function setCategory($slug = '')
    {
        $this->category = $slug;
        $this->resetPage();
    }

    public function render()
    {
        $categories = CaseStudyCategory::where('is_active', true)
            ->withCount(['caseStudies' => fn ($q) => $q->where('is_active', true)])
            ->orderBy('title')
            ->get()
            ->filter(fn ($cat) => $cat->case_studies_count > 0)
            ->values();

        $caseStudies = CaseStudy::with('category')
            ->where('is_active', true)
            ->when($this->category, function ($q) {
                $q->whereHas('category', fn ($c) => $c->where('slug', $this->category)->where('is_active', true));
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.public.case-study.case-studies', [
            'caseStudies' => $caseStudies,
            'categories'  => $categories,
            'totalCount'  => CaseStudy::where('is_active', true)->count(),
        ]);
    }
}
