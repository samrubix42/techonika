<?php

namespace App\Livewire\Public\Contact;

use Livewire\Component;
use App\Models\Contact as ContactModel;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'subject' => 'nullable|string|max:150',
        'message' => 'required|string|min:5',
    ];

    public function submit()
    {
        $validated = $this->validate();

        // Store message in database
        ContactModel::create($validated);

        // TODO: dispatch mail or integrate with a ticket system.

        session()->flash('success', 'Thank you — your message has been sent.');

        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.public.contact.contact');
    }
}
