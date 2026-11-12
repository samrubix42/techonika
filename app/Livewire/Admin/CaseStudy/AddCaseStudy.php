<?php

namespace App\Livewire\Admin\CaseStudy;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class AddCaseStudy extends Component
{
    use WithFileUploads;

    public $category_id;
    public $project_name;
    public $slug;
    public $featured_image;
    public $content;
    public $meta_title;
    public $meta_description;
    public $is_active = true;

    protected function rules()
    {
        return [
            'category_id'      => 'required|exists:case_study_categories,id',
            'project_name'     => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:case_studies,slug',
            'featured_image'   => 'nullable|image|max:2048',
            'content'          => 'required|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_active'        => 'boolean',
        ];
    }

    public function updatedProjectName()
    {
        $this->slug = Str::slug($this->project_name);
    }

    public function save()
    {
        $this->slug = Str::slug($this->slug);
        $this->validate();

        CaseStudy::create([
            'category_id'      => $this->category_id,
            'project_name'     => $this->project_name,
            'slug'             => $this->slug,
            'featured_image'   => $this->featured_image ? $this->featured_image->store('case-studies', 'public') : null,
            'content'          => $this->content,
            'meta_title'       => $this->meta_title,
            'meta_description' => $this->meta_description,
            'is_active'        => $this->is_active,
        ]);

        session()->flash('success', 'Case study created successfully.');

        return redirect()->route('admin.case-study.list');
    }

    public function render()
    {
        return view('livewire.admin.case-study.case-study-form', [
            'categories' => CaseStudyCategory::where('is_active', true)->orderBy('title')->get(),
            'isEdit'     => false,
            'existingImage' => null,
        ]);
    }
}
