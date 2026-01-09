<?php

namespace App\Livewire\Public\WebDevelopment;

use Livewire\Component;
use App\Models\Contact;

class Index extends Component
{
    public $top = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'service' => '',
        'message' => '',
    ];

    public $bottom = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'service' => '',
        'message' => '',
    ];

    public $successTop = false;
    public $successBottom = false;

    protected $messagesTop = [
        'top.phone.digits' => 'The phone number must be exactly 10 digits long.',
        'top.phone.numeric' => 'The phone number appears invalid — please correct it.',
        'top.name.required' => 'Please tell us your name so we know who to contact.',
        'top.phone.required' => 'Please provide a phone number so we can reach you.',
        'top.email.email' => 'The email address appears invalid — please correct it or leave it blank.',
    ];

    protected $messagesBottom = [
        'bottom.phone.digits' => 'The phone number must be exactly 10 digits long.',
        'bottom.phone.numeric' => 'The phone number appears invalid — please correct it.',
        'bottom.name.required' => 'Please tell us your name so we know who to contact.',
        'bottom.phone.required' => 'Please provide a phone number so we can reach you.',
        'bottom.email.email' => 'The email address appears invalid — please correct it or leave it blank.',
    ];

    public function mount()
    {
        // initialize arrays (ensures reset works predictably)
        $this->top = array_merge($this->top);
        $this->bottom = array_merge($this->bottom);
    }

    protected function rulesTop()
    {
        return [
            'top.name' => 'required|string|max:191',
            'top.email' => 'nullable|email|max:191',
            'top.phone' => 'required|numeric|digits:10',
            'top.service' => 'nullable|string|max:191',
            'top.message' => 'nullable|string',
        ];
    }

    protected function rulesBottom()
    {
        return [
            'bottom.name' => 'required|string|max:191',
            'bottom.email' => 'nullable|email|max:191',
            'bottom.phone' => 'required|numeric|digits:10',
            'bottom.service' => 'nullable|string|max:191',
            'bottom.message' => 'nullable|string',
        ];
    }

    public function submitTop()
    {
        $this->validate($this->rulesTop(), $this->messagesTop ?? []);

        Contact::create([
            'name' => $this->top['name'],
            'email' => $this->top['email'],
            'phone' => $this->top['phone'] ?? null,
            'subject' => $this->top['service'] ?? 'Web Development - Quote',
            'message' => $this->top['message'] ?? null,
        ]);

        $this->successTop = true;
        $this->top = [
            'name' => '', 'email' => '', 'phone' => '', 'service' => '', 'message' => '',
        ];
    }

    public function submitBottom()
    {
        $this->validate($this->rulesBottom(), $this->messagesBottom ?? []);

        Contact::create([
            'name' => $this->bottom['name'],
            'email' => $this->bottom['email'],
            'phone' => $this->bottom['phone'] ?? null,
            'subject' => $this->bottom['service'] ?? 'Web Development - Quote',
            'message' => $this->bottom['message'] ?? null,
        ]);

        $this->successBottom = true;
        $this->bottom = [
            'name' => '', 'email' => '', 'phone' => '', 'service' => '', 'message' => '',
        ];
    }

    public function render()
    {
        return view('livewire.public.web-development.index');
    }
}
