<?php

namespace App\Livewire\Admin\Contact;

use App\Models\PackageEnquiry;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class PackageEnquires extends Component
{
    use WithPagination;

    public $search = '';
    public $filterStatus = 'all';
    public $selectedEnquiry = null;
    public $showModal = false;
    public $deleteConfirmId = null;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterStatus()
    {
        $this->resetPage();
    }

    public function viewEnquiry($id)
    {
        $this->selectedEnquiry = PackageEnquiry::findOrFail($id);

        if (!$this->selectedEnquiry->is_read) {
            $this->selectedEnquiry->update(['is_read' => true]);
        }

        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedEnquiry = null;
    }

    public function toggleRead($id)
    {
        $enquiry = PackageEnquiry::findOrFail($id);
        $enquiry->update(['is_read' => !$enquiry->is_read]);

        // Refresh selected enquiry if modal is open
        if ($this->showModal && $this->selectedEnquiry && $this->selectedEnquiry->id == $id) {
            $this->selectedEnquiry = $enquiry->fresh();
            $this->closeModal();
        }

        session()->flash('success', 'Status updated successfully!');
    }

    public function confirmDelete($id)
    {
        $this->deleteConfirmId = $id;
    }

    public function cancelDelete()
    {
        $this->deleteConfirmId = null;
    }

    public function deleteEnquiry()
    {
        if ($this->deleteConfirmId) {
            PackageEnquiry::findOrFail($this->deleteConfirmId)->delete();
            
            // Close view modal if the deleted enquiry was being viewed
            if ($this->showModal && $this->selectedEnquiry && $this->selectedEnquiry->id == $this->deleteConfirmId) {
                $this->closeModal();
            }
            
            $this->deleteConfirmId = null;

            session()->flash('success', 'Enquiry deleted successfully!');
        }
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $query = PackageEnquiry::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%")
                  ->orWhere('phone', 'like', "%{$this->search}%")
                  ->orWhere('package', 'like', "%{$this->search}%");
            });
        }

        if ($this->filterStatus === 'read') {
            $query->where('is_read', true);
        } elseif ($this->filterStatus === 'unread') {
            $query->where('is_read', false);
        }

        return view('livewire.admin.contact.package-enquires', [
            'enquiries'   => $query->latest()->paginate(10),
            'unreadCount' => PackageEnquiry::where('is_read', false)->count(),
        ]);
    }
}
