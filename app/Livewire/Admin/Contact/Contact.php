<?php

namespace App\Livewire\Admin\Contact;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\Contact as ContactModel;

class Contact extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public string $search = '';
    public int $perPage = 10;

    // Modal states
    public bool $showViewModal = false;
    public bool $showDeleteModal = false;

    // Data holders
    public ?ContactModel $selectedContact = null;
    public ?int $deleteId = null;

    protected $queryString = ['search', 'perPage', 'page'];

    /* ==========================
        SEARCH / PAGINATION
    ========================== */
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    /* ==========================
        VIEW MODAL
    ========================== */
    public function openView(int $id): void
    {
        $this->selectedContact = ContactModel::findOrFail($id);
        $this->showViewModal = true;

        // auto mark as read
        if (! $this->selectedContact->read) {
            $this->selectedContact->update(['read' => true]);
        }
    }

    public function closeView(): void
    {
        $this->reset('showViewModal', 'selectedContact');
    }

    /* ==========================
        DELETE MODAL
    ========================== */
    public function openDelete(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDelete(): void
    {
        $this->reset('showDeleteModal', 'deleteId');
    }

    public function delete(): void
    {
        ContactModel::where('id', $this->deleteId)->delete();
        $this->closeDelete();
        $this->resetPage();
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $contacts = ContactModel::query()
            ->when($this->search, fn ($q) =>
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%")
                  ->orWhere('subject', 'like', "%{$this->search}%")
            )
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.contact.contact', compact('contacts'));
    }
}
