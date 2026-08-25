<?php

namespace App\Livewire\Admin\Portfolio;

use App\Models\SmoPortfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class SmoPortfolioList extends Component
{
    use WithFileUploads;

    public bool $showModal = false;
    public bool $showDeleteModal = false;

    public ?int $editId = null;
    public ?int $deleteId = null;

    public string $search = '';
    public string $title = '';
    public string $description = '';
    public bool $is_active = true;

    public array $newImages = [];
    public array $existingImages = [];
    public array $removedExistingImages = [];

    public function openModal(?int $id = null): void
    {
        $this->resetForm();

        if ($id) {
            $portfolio = SmoPortfolio::findOrFail($id);

            $this->editId = $portfolio->id;
            $this->title = $portfolio->title ?? '';
            $this->description = $portfolio->description ?? '';
            $this->is_active = (bool) $portfolio->is_active;
            $this->existingImages = $portfolio->images ?? [];
        }

        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function removeExistingImage(int $index): void
    {
        if (!isset($this->existingImages[$index])) {
            return;
        }

        $this->removedExistingImages[] = $this->existingImages[$index];
        unset($this->existingImages[$index]);
        $this->existingImages = array_values($this->existingImages);
    }

    public function removeNewImage(int $index): void
    {
        if (!isset($this->newImages[$index])) {
            return;
        }

        unset($this->newImages[$index]);
        $this->newImages = array_values($this->newImages);
    }

    public function save(): void
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'newImages' => 'nullable|array',
            'newImages.*' => 'image|max:4096',
        ]);

        $finalImages = $this->existingImages;

        // Store new images
        if (!empty($this->newImages)) {
            foreach ($this->newImages as $img) {
                $finalImages[] = $img->store('smo-portfolios', 'public');
            }
        }

        // Delete removed existing images
        foreach ($this->removedExistingImages as $imgPath) {
            Storage::disk('public')->delete($imgPath);
        }

        SmoPortfolio::updateOrCreate(
            ['id' => $this->editId],
            [
                'title' => $validated['title'],
                'description' => $validated['description'] ?? '',
                'images' => $finalImages,
                'is_active' => $this->is_active,
            ]
        );

        $this->dispatch(
            'toast',
            type: 'success',
            message: $this->editId ? 'SMO Portfolio updated successfully' : 'SMO Portfolio created successfully'
        );

        $this->closeModal();
    }

    public function confirmDelete(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete(): void
    {
        $portfolio = SmoPortfolio::findOrFail($this->deleteId);

        foreach ($portfolio->images ?? [] as $imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        $portfolio->delete();

        $this->showDeleteModal = false;
        $this->deleteId = null;

        $this->dispatch('toast', type: 'success', message: 'SMO Portfolio deleted successfully');
    }

    public function toggleActive(int $id): void
    {
        $portfolio = SmoPortfolio::findOrFail($id);
        $portfolio->update(['is_active' => !$portfolio->is_active]);

        $this->dispatch('toast', type: 'success', message: 'SMO Portfolio status updated successfully');
    }

    public function render()
    {
        $query = SmoPortfolio::query();

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.portfolio.smo-portfolio-list', [
            'items' => $query->latest()->get(),
        ]);
    }

    private function resetForm(): void
    {
        $this->resetValidation();
        $this->editId = null;
        $this->deleteId = null;
        $this->title = '';
        $this->description = '';
        $this->is_active = true;
        $this->newImages = [];
        $this->existingImages = [];
        $this->removedExistingImages = [];
    }
}
