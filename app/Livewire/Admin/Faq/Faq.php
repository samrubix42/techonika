<?php

namespace App\Livewire\Admin\Faq;

use App\Models\Faq as FaqModel;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Faq extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 10;

    public $faqId;
    public $question;
    public $answer;
    public $status = true;

    public $modalOpen = false;
    public $confirmDelete = false;
    public $deleteId;

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $faqs = FaqModel::where('question', 'like', '%'.$this->search.'%')
            ->orWhere('answer', 'like', '%'.$this->search.'%')
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.admin.faq.faq', compact('faqs'));
    }

    /* ---------------- MODAL ---------------- */

    public function openModal()
    {
        $this->resetForm();
        $this->modalOpen = true;
    }

    public function closeModal()
    {
        $this->modalOpen = false;
    }

    /* ---------------- CRUD ---------------- */

    public function save()
    {
        $this->validate([
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        FaqModel::updateOrCreate(
            ['id' => $this->faqId],
            [
                'question' => $this->question,
                'answer'   => $this->answer,
                'status'   => $this->status,
            ]
        );

        session()->flash('success', 'FAQ saved successfully.');

        $this->closeModal();
        $this->resetForm();
    }

    public function edit($id)
    {
        $faq = FaqModel::findOrFail($id);

        $this->faqId   = $faq->id;
        $this->question = $faq->question;
        $this->answer   = $faq->answer;
        $this->status   = $faq->status;

        $this->modalOpen = true;
    }

    /* ---------------- STATUS ---------------- */

    public function toggleStatus($id)
    {
        $faq = FaqModel::findOrFail($id);
        $faq->update(['status' => !$faq->status]);
    }

    /* ---------------- DELETE ---------------- */

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->confirmDelete = true;
    }

    public function deleteConfirmed()
    {
        FaqModel::findOrFail($this->deleteId)->delete();

        session()->flash('success', 'FAQ deleted successfully.');

        $this->confirmDelete = false;
    }

    public function closeDeleteModal()
    {
        $this->confirmDelete = false;
        $this->deleteId = null;
    }

    /* ---------------- HELPERS ---------------- */

    private function resetForm()
    {
        $this->reset(['faqId','question','answer','status']);
        $this->status = true;
    }
}
