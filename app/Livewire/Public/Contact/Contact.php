<?php

namespace App\Livewire\Public\Contact;

use Livewire\Component;
use App\Models\Contact as ContactModel;
use Illuminate\Support\Facades\Http;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $turnstileToken;

    protected $rules = [
        'name'    => 'required|string|min:2',
        'email'   => 'required|email',
        'subject' => 'nullable|string|max:150',
        'message' => 'required|string|min:5',
    ];

    public function submit()
    {
        // 1️⃣ Validate form
        $validated = $this->validate();

        // 2️⃣ Validate Turnstile token exists
        if (!$this->turnstileToken) {
            $this->addError('turnstileToken', 'Please verify that you are human.');
            return;
        }

        // 3️⃣ Verify Turnstile with Cloudflare
        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true, // 👈 localhost fix
            'timeout' => 10,
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstileToken,
                'remoteip'=> request()->ip(),
            ]
        );

        if (!($response->json('success'))) {
            $this->addError('turnstileToken', 'Captcha verification failed.');
            return;
        }

        // 4️⃣ Store message in database
        ContactModel::create($validated);

        // 5️⃣ Reset form + captcha
        $this->reset(['name', 'email', 'subject', 'message', 'turnstileToken']);

        session()->flash('success', 'Thank you — your message has been sent.');
    }

    public function render()
    {
        return view('livewire.public.contact.contact');
    }
}
