<?php

namespace App\Livewire\Admin\Portfolio;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Storage;

#[Layout('components.layouts.admin')]
class PortfolioList extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $showDeleteModal = false;

    public $editId;
    public $deleteId;

    public $title;
    public $category_id;
    public $description;
    public $project_url;
    public $tags;
    public $sequence;
    public $image;
    public $existingImage;

    public function render()
    {
        return view('livewire.admin.portfolio.portfolio-list', [
            'portfolios' => Portfolio::orderBy('sequence')->get(),
            'categories' => PortfolioCategory::all(),
        ]);
    }

#[On('updateOrder')]
public function updateOrder($ids)
{
    foreach ($ids as $index => $id) {
        \App\Models\Portfolio::where('id', $id)
            ->update(['sequence' => $index + 1]);
    }

    $this->dispatch('toast', type: 'success', message: 'Portfolio order updated successfully');
}

    public function openModal()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function edit($id)
    {
        $p = Portfolio::findOrFail($id);

        $this->editId = $id;
        $this->title = $p->title;
        $this->category_id = $p->category_id;
        $this->description = $p->description;
        $this->project_url = $p->project_url;
        $this->sequence = $p->sequence;
        $this->tags = is_array($p->tags) ? implode(', ', $p->tags) : '';
        $this->existingImage = $p->image;

        $this->showModal = true;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:portfolio_categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'project_url' => $this->project_url,
            'sequence' => $this->sequence ?? Portfolio::max('sequence') + 1,
            'tags' => array_map('trim', explode(',', $this->tags)),
        ];

        // Handle image upload
        if ($this->image) {
            // Delete old image if exists
            if ($this->editId && $this->existingImage) {
                Storage::disk('public')->delete($this->existingImage);
            }

            $data['image'] = $this->image->store('portfolios', 'public');
        } elseif ($this->editId) {
            // Keep existing image if editing and no new image
            $data['image'] = $this->existingImage;
        }

        Portfolio::updateOrCreate(
            ['id' => $this->editId],
            $data
        );

        $this->dispatch('toast', type: 'success', message: $this->editId ? 'Portfolio updated successfully' : 'Portfolio created successfully');
        $this->closeModal();
        $this->resetForm();
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $portfolio = Portfolio::findOrFail($this->deleteId);
        
        // Delete image file if exists
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }
        
        $portfolio->delete();
        
            $this->dispatch('toast', type: 'success', message:  'Portfolio deleted successfully');
        $this->showDeleteModal = false;
    }

    private function resetForm()
    {
        $this->reset([
            'editId',
            'title',
            'category_id',
            'description',
            'project_url',
            'tags',
            'sequence',
            'image',
            'existingImage',
        ]);
        $this->resetValidation();
    }
}
