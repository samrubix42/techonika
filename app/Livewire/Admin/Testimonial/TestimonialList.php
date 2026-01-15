<?php

namespace App\Livewire\Admin\Testimonial;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

class TestimonialList extends Component
{
    public bool $showModal = false;
    public bool $showDeleteModal = false;
    public ?int $editId = null;
    public ?int $deleteId = null;
    public string $search = '';

    public string $name = '';
    public string $company = '';
    public string $message = '';
    public bool $verified = true;
    public bool $is_active = true;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'verified' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function openModal($id = null)
    {
        $this->resetValidation();
        $this->reset(['name', 'company', 'message', 'verified', 'editId']);
        $this->is_active = true;

        if ($id) {
            $t = Testimonial::findOrFail($id);
            $this->editId = $id;
            $this->name = $t->data['name'] ?? '';
            $this->company = $t->data['company'] ?? '';
            $this->message = $t->data['message'] ?? '';
            $this->verified = $t->data['verified'] ?? true;
            $this->is_active = $t->is_active;
        }

        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $payload = [
            'data' => [
                'name' => $this->name,
                'company' => $this->company,
                'message' => $this->message,
                'verified' => $this->verified,
            ],
            'is_active' => $this->is_active,
        ];

        if ($this->editId) {
            Testimonial::where('id', $this->editId)->update($payload);
            $this->dispatch('toast', type: 'success', message: 'Testimonial updated successfully');
        } else {
            $payload['sequence'] = Testimonial::max('sequence') + 1;
            Testimonial::create($payload);
            $this->dispatch('toast', type: 'success', message: 'Testimonial created successfully');
        }

        $this->showModal = false;
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        if ($this->deleteId) {
            Testimonial::findOrFail($this->deleteId)->delete();
            $this->dispatch('toast', type: 'success', message: 'Testimonial deleted successfully');
            $this->showDeleteModal = false;
            $this->deleteId = null;
        }
    }

    public function toggleActive($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update(['is_active' => !$testimonial->is_active]);
        $this->dispatch('toast', type: 'success', message: 'Status updated successfully');
    }

    #[On('updateOrder')]
    public function updateOrder(array $order)
    {
        if (!is_array($order)) {
            return;
        }
        foreach ($order as $index => $id) {
            Testimonial::where('id', $id)->update([
                'sequence' => $index + 1
            ]);
        }
        $this->dispatch('toast', type: 'success', message: 'Testimonial order updated successfully');
    }
    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = Testimonial::query();

        if ($this->search) {
            $query->where('data->name', 'like', '%' . $this->search . '%')
                  ->orWhere('data->company', 'like', '%' . $this->search . '%')
                  ->orWhere('data->message', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.testimonial.testimonial-list', [
            'items' => $query->orderBy('sequence')->get()
        ]);
    }
}
