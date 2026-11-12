<?php

namespace App\Livewire\Public\CaseStudy;

use App\Models\CaseStudy;
use Livewire\Component;

class CaseStudyView extends Component
{
    public CaseStudy $caseStudy;

    public function mount($slug)
    {
        $this->caseStudy = CaseStudy::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
    }

    public function render()
    {
        $related = CaseStudy::with('category')
            ->where('is_active', true)
            ->where('id', '!=', $this->caseStudy->id)
            ->when($this->caseStudy->category_id, fn ($q) => $q->orderByRaw('category_id = ? desc', [$this->caseStudy->category_id]))
            ->latest()
            ->take(3)
            ->get();

        return view('livewire.public.case-study.case-study-view', [
            'caseStudy' => $this->caseStudy,
            'related'   => $related,
        ]);
    }
}
