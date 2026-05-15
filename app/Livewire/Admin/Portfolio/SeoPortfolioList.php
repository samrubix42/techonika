<?php

namespace App\Livewire\Admin\Portfolio;

use App\Models\SeoPorfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.admin')]
class SeoPortfolioList extends Component
{
    use WithFileUploads;

    public bool $showModal = false;
    public bool $showDeleteModal = false;

    public ?int $editId = null;
    public ?int $deleteId = null;

    public string $search = '';
    public ?string $title = null;
    public $logo = null;
    public ?string $existingLogo = null;
    public bool $removeExistingLogo = false;
    public array $seoResults = [];
    public array $resultImages = [];
    public array $existingResultImages = [];
    public array $removedExistingResultImages = [];

    public function mount(): void
    {
        $this->resetForm();
    }

    protected function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'seoResults' => 'required|array|min:1',
            'seoResults.*.keyword' => 'required|string|max:255',
            'seoResults.*.initial_rank' => 'nullable|string|max:100',
            'seoResults.*.current_rank' => 'nullable|string|max:100',
            'resultImages' => 'nullable|array',
            'resultImages.*' => 'image|max:4096',
        ];
    }

    public function openModal(?int $id = null): void
    {
        $this->resetForm();

        if ($id) {
            $portfolio = SeoPorfolio::findOrFail($id);

            $this->editId = $portfolio->id;
            $this->title = $portfolio->title;
            $this->existingLogo = $portfolio->logo;
            $this->existingResultImages = $portfolio->result_images ?? [];
            $this->seoResults = collect($portfolio->seo_results ?? [])
                ->map(fn ($item) => [
                    'keyword' => $item['keyword'] ?? '',
                    'initial_rank' => $item['initial_rank'] ?? '',
                    'current_rank' => $item['current_rank'] ?? '',
                ])
                ->values()
                ->all();
        }

        if (empty($this->seoResults)) {
            $this->seoResults = [$this->blankSeoResult()];
        }

        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function addSeoResult(): void
    {
        $this->seoResults[] = $this->blankSeoResult();
    }

    public function removeSeoResult(int $index): void
    {
        if (count($this->seoResults) === 1) {
            $this->seoResults = [$this->blankSeoResult()];
            return;
        }

        unset($this->seoResults[$index]);
        $this->seoResults = array_values($this->seoResults);
    }

    public function removeExistingResultImage(int $index): void
    {
        if (! isset($this->existingResultImages[$index])) {
            return;
        }

        $this->removedExistingResultImages[] = $this->existingResultImages[$index];
        unset($this->existingResultImages[$index]);
        $this->existingResultImages = array_values($this->existingResultImages);
    }

    public function removeNewResultImage(int $index): void
    {
        if (! isset($this->resultImages[$index])) {
            return;
        }

        unset($this->resultImages[$index]);
        $this->resultImages = array_values($this->resultImages);
    }

    public function removeLogo(): void
    {
        if ($this->logo) {
            $this->logo = null;
            return;
        }

        if ($this->existingLogo) {
            $this->removeExistingLogo = true;
            $this->existingLogo = null;
        }
    }

    public function save(): void
    {
        $validated = $this->validate();

        $data = [
            'title' => $validated['title'],
            'seo_results' => collect($validated['seoResults'])
                ->map(fn ($item) => [
                    'keyword' => trim($item['keyword']),
                    'initial_rank' => trim((string) ($item['initial_rank'] ?? '')),
                    'current_rank' => trim((string) ($item['current_rank'] ?? '')),
                ])
                ->values()
                ->all(),
            'result_images' => $this->existingResultImages,
        ];

        if ($this->logo) {
            if ($this->editId && $this->existingLogo) {
                Storage::disk('public')->delete($this->existingLogo);
            }

            $data['logo'] = $this->logo->store('seo-portfolios/logos', 'public');
        } elseif ($this->removeExistingLogo) {
            $data['logo'] = null;
        } elseif ($this->editId) {
            $data['logo'] = $this->existingLogo;
        }

        if (! empty($this->resultImages)) {
            foreach ($this->resultImages as $image) {
                $data['result_images'][] = $image->store('seo-portfolios/results', 'public');
            }
        }

        foreach ($this->removedExistingResultImages as $image) {
            Storage::disk('public')->delete($image);
        }

        if ($this->removeExistingLogo && $this->editId) {
            $portfolio = SeoPorfolio::find($this->editId);
            if ($portfolio?->logo) {
                Storage::disk('public')->delete($portfolio->logo);
            }
        }

        SeoPorfolio::updateOrCreate(
            ['id' => $this->editId],
            $data
        );

        $this->dispatch(
            'toast',
            type: 'success',
            message: $this->editId ? 'SEO portfolio updated successfully' : 'SEO portfolio created successfully'
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
        $portfolio = SeoPorfolio::findOrFail($this->deleteId);

        if ($portfolio->logo) {
            Storage::disk('public')->delete($portfolio->logo);
        }

        foreach ($portfolio->result_images ?? [] as $image) {
            Storage::disk('public')->delete($image);
        }

        $portfolio->delete();

        $this->showDeleteModal = false;
        $this->deleteId = null;

        $this->dispatch('toast', type: 'success', message: 'SEO portfolio deleted successfully');
    }

    public function render()
    {
        $query = SeoPorfolio::query();

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.portfolio.seo-portfolio-list', [
            'items' => $query->latest()->get(),
        ]);
    }

    private function resetForm(): void
    {
        $this->resetValidation();
        $this->editId = null;
        $this->deleteId = null;
        $this->title = null;
        $this->logo = null;
        $this->existingLogo = null;
        $this->removeExistingLogo = false;
        $this->resultImages = [];
        $this->existingResultImages = [];
        $this->removedExistingResultImages = [];
        $this->seoResults = [$this->blankSeoResult()];
    }

    private function blankSeoResult(): array
    {
        return [
            'keyword' => '',
            'initial_rank' => '',
            'current_rank' => '',
        ];
    }
}
