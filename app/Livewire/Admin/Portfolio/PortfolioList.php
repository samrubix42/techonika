<?php

namespace App\Livewire\Admin\Portfolio;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioList extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $perPage = 10;

    public $showModal = false;
    public $showDeleteModal = false;

    public $editId = null;
    public $deleteId = null;

    public $title;
    public $category_id;
    public $description;
    public $image;
    public $tags;
    public $imageFile;

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = Portfolio::query();

        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('description', 'like', "%{$this->search}%");
        }

        return view('livewire.admin.portfolio.portfolio-list', [
            'portfolios' => $query->latest()->paginate($this->perPage),
            'categories' => PortfolioCategory::all(),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function openModal()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->resetForm();
        $this->showModal = false;
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $this->editId = $id;
        $this->title = $portfolio->title;
        $this->category_id = $portfolio->category_id;
        $this->description = $portfolio->description;
        $this->image = $portfolio->image;
        $this->tags = is_array($portfolio->tags)
            ? implode(', ', $portfolio->tags)
            : $portfolio->tags;

        $this->showModal = true;
    }

    public function save()
    {
        $data = [
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'tags' => array_map('trim', explode(',', $this->tags)),
        ];

        if ($this->imageFile) {
            $data['image'] = $this->imageFile->store('portfolio', 'public');
        } else {
            $data['image'] = $this->image;
        }

        Portfolio::updateOrCreate(
            ['id' => $this->editId],
            $data
        );

        $this->closeModal();
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        Portfolio::findOrFail($this->deleteId)->delete();
        $this->showDeleteModal = false;
    }

    private function resetForm()
    {
        $this->reset([
            'editId',
            'title',
            'category_id',
            'description',
            'image',
            'tags',
            'imageFile',
        ]);
    }
}
