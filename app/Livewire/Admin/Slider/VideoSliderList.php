<?php

namespace App\Livewire\Admin\Slider;

use App\Models\VideoSlider;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class VideoSliderList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public string $search = '';
    public int $perPage = 10;

    public bool $showModal = false;
    public bool $showDeleteModal = false;

    public ?int $editId = null;
    public ?int $deleteId = null;

    public string $title = '';
    public string $video_url = '';
    public string $type = 'youtube';

    protected function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'video_url' => 'required|string|max:2048',
            'type' => 'required|string|in:youtube,instagram,vimeo,custom',
        ];
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function openModal(?int $id = null): void
    {
        $this->resetValidation();
        $this->reset(['editId', 'title', 'video_url']);
        $this->type = 'youtube';

        if ($id) {
            $slider = VideoSlider::findOrFail($id);
            $this->editId = $slider->id;
            $this->title = $slider->title;
            $this->video_url = $slider->video_url;
            $this->type = $slider->type ?: 'youtube';
        }

        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
    }

    public function save(): void
    {
        $validated = $this->validate();

        if ($this->editId) {
            VideoSlider::whereKey($this->editId)->update($validated);
            $this->dispatch('toast', type: 'success', message: 'Video slider updated successfully');
        } else {
            VideoSlider::create($validated);
            $this->dispatch('toast', type: 'success', message: 'Video slider created successfully');
        }

        $this->showModal = false;
        $this->reset(['editId', 'title', 'video_url']);
        $this->type = 'youtube';
    }

    public function confirmDelete(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    public function delete(): void
    {
        if (!$this->deleteId) {
            return;
        }

        VideoSlider::whereKey($this->deleteId)->delete();
        $this->dispatch('toast', type: 'success', message: 'Video slider deleted successfully');

        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = VideoSlider::query()->latest();

        if ($this->search !== '') {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('video_url', 'like', '%' . $this->search . '%')
                    ->orWhere('type', 'like', '%' . $this->search . '%');
            });
        }

        return view('livewire.admin.slider.video-slider-list', [
            'items' => $query->paginate($this->perPage),
        ]);
    }
}
