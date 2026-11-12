<?php

namespace App\Livewire\Admin\CaseStudy;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class UpdateCaseStudy extends Component
{
    use WithFileUploads;

    public $caseStudyId;
    public $category_id;
    public $project_name;
    public $slug;
    public $featured_image;
    public $existingImage;
    public $content;
    public $meta_title;
    public $meta_description;
    public $is_active = true;

    protected function rules()
    {
        return [
            'category_id'      => 'required|exists:case_study_categories,id',
            'project_name'     => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:case_studies,slug,' . $this->caseStudyId,
            'featured_image'   => 'nullable|image|max:2048',
            'content'          => 'required|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_active'        => 'boolean',
        ];
    }

    public function mount($caseStudy)
    {
        $cs = CaseStudy::findOrFail($caseStudy);

        $this->caseStudyId      = $cs->id;
        $this->category_id      = $cs->category_id;
        $this->project_name     = $cs->project_name;
        $this->slug             = $cs->slug;
        $this->existingImage    = $cs->featured_image;
        $this->content          = $cs->content;
        $this->meta_title       = $cs->meta_title;
        $this->meta_description = $cs->meta_description;
        $this->is_active        = (bool) $cs->is_active;
    }

    public function save()
    {
        $this->slug = Str::slug($this->slug);
        $this->validate();

        $cs = CaseStudy::findOrFail($this->caseStudyId);

        if ($this->featured_image) {
            if ($cs->featured_image) {
                Storage::disk('public')->delete($cs->featured_image);
            }
            $cs->featured_image = $this->featured_image->store('case-studies', 'public');
        }

        $cs->category_id      = $this->category_id;
        $cs->project_name     = $this->project_name;
        $cs->slug             = $this->slug;
        $cs->content          = $this->content;
        $cs->meta_title       = $this->meta_title;
        $cs->meta_description = $this->meta_description;
        $cs->is_active        = $this->is_active;
        $cs->save();

        session()->flash('success', 'Case study updated successfully.');

        return redirect()->route('admin.case-study.list');
    }

    public function render()
    {
        return view('livewire.admin.case-study.case-study-form', [
            // include the current category even if it has since been deactivated
            'categories' => CaseStudyCategory::where('is_active', true)
                ->orWhere('id', $this->category_id)
                ->orderBy('title')
                ->get(),
            'isEdit'     => true,
        ]);
    }
}
