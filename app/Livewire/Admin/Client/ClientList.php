<?php

namespace App\Livewire\Admin\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Storage;

class ClientList extends Component
{
    use WithFileUploads;

    public bool $showModal = false;
    public bool $showDeleteModal = false;
    public ?int $editId = null;
    public ?int $deleteId = null;
    public string $search = '';

    public $client_img;
    public ?string $existingImage = null;
    public bool $is_active = true;

    protected function rules()
    {
        return [
            'client_img' => $this->editId ? 'nullable|image|max:2048' : 'required|image|max:2048',
            'is_active' => 'boolean',
        ];
    }

    public function openModal($id = null)
    {
        $this->resetValidation();
        $this->reset(['client_img', 'existingImage', 'editId']);
        $this->is_active = true;

        if ($id) {
            $client = Client::findOrFail($id);
            $this->editId = $id;
            $this->existingImage = $client->client_img;
            $this->is_active = $client->is_active;
        }

        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $data = [
            'is_active' => $this->is_active,
        ];

        if ($this->client_img) {
            // Delete old image if exists
            if ($this->editId && $this->existingImage) {
                Storage::disk('public')->delete($this->existingImage);
            }
            $data['client_img'] = $this->client_img->store('clients', 'public');
        }

        if ($this->editId) {
            Client::where('id', $this->editId)->update($data);
            $this->dispatch('toast', type: 'success', message: 'Client updated successfully');
        } else {
            $data['sequence'] = Client::max('sequence') + 1;
            Client::create($data);
            $this->dispatch('toast', type: 'success', message: 'Client created successfully');
        }

        $this->showModal = false;
        $this->reset(['client_img', 'existingImage', 'editId']);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        if ($this->deleteId) {
            $client = Client::findOrFail($this->deleteId);
            if ($client->client_img) {
                Storage::disk('public')->delete($client->client_img);
            }
            $client->delete();
            $this->dispatch('toast', type: 'success', message: 'Client deleted successfully');
            $this->showDeleteModal = false;
            $this->deleteId = null;
        }
    }

    public function toggleActive($id)
    {
        $client = Client::findOrFail($id);
        $client->update(['is_active' => !$client->is_active]);
        $this->dispatch('toast', type: 'success', message: 'Status updated successfully');
    }

    #[On('updateOrder')]
    public function updateOrder(array $order)
    {
        foreach ($order as $index => $id) {
            Client::where('id', $id)->update([
                'sequence' => $index + 1
            ]);
        }
        $this->dispatch('toast', type: 'success', message: 'Order updated successfully');
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = Client::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.client.client-list', [
            'items' => $query->orderBy('sequence')->get()
        ]);
    }
}
