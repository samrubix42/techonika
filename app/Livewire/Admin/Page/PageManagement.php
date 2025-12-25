<?php

namespace App\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class PageManagement extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 10;

    public $pageId;
    public $name, $slug, $meta_title, $meta_description, $meta_keywords;

    public $modalOpen = false;

    // Delete modal
    public $confirmDelete = false;
    public $deleteId = null;

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $pages = Page::where(function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('slug', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.page.page-management', compact('pages'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    /* ---------------- CREATE / EDIT ---------------- */

    public function openModal()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:pages,slug,' . $this->pageId,
        ]);

        Page::updateOrCreate(
            ['id' => $this->pageId],
            [
                'name' => $this->name,
                'slug' => $this->slug,
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'meta_keywords' => $this->meta_keywords,
            ]
        );

        session()->flash('success', 'Page saved successfully.');

        $this->closeModal();
        $this->resetForm();
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);

        $this->pageId = $page->id;
        $this->name = $page->name;
        $this->slug = $page->slug;
        $this->meta_title = $page->meta_title;
        $this->meta_description = $page->meta_description;
        $this->meta_keywords = $page->meta_keywords;

        $this->modalOpen = true;
    }

    /* ---------------- DELETE ---------------- */

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->confirmDelete = true;
    }

    public function deleteConfirmed()
    {
        Page::findOrFail($this->deleteId)->delete();

        session()->flash('success', 'Page deleted successfully.');

        $this->confirmDelete = false;
        $this->deleteId = null;
    }

    public function closeDeleteModal()
    {
        $this->confirmDelete = false;
        $this->deleteId = null;
    }

    private function resetForm()
    {
        $this->reset([
            'pageId',
            'name',
            'slug',
            'meta_title',
            'meta_description',
            'meta_keywords'
        ]);
    }
}
