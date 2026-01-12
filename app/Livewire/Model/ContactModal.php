<?php

namespace App\Livewire\Model;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;

class ContactModal extends Component
{
    public $subject;
    public $name;
    public $email;
    public $phone;
    public $message;
    public $turnstileToken;

    protected $rules = [
        'subject' => 'nullable|min:3',
        'name'    => 'required|min:3',
        'email'   => 'nullable|email',
        'phone'   => 'required|min:10',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        $response = Http::withOptions([
            'verify'  => false,
            'timeout' => 10,
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstileToken,
                'remoteip' => request()->ip(),
            ]
        );

        if (!($response->json()['success'] ?? false)) {
            $this->addError('turnstileToken', 'Captcha verification failed.');
            return;
        }

        // 👉 Save / Mail logic (optional)
        // Contact::create([...]);

        $this->reset();
        session()->flash('success', 'Message sent successfully!');
        $this->dispatch('contact-submitted');
    }


    public function render()
    {
        return view('livewire.model.contact-modal');
    }
}
