<?php

namespace App\Livewire\Public\Contact;

use Livewire\Component;
use App\Models\Contact as ContactModel;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
        $validated = $this->validate();

        if (!$this->turnstileToken) {
            $this->addError('turnstileToken', 'Please verify that you are human.');
            return;
        }

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true, 
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

        $contact = ContactModel::create($validated);

        // Send email notification
        try {
            Mail::to('techonika.com@gmail.com')->send(new ContactMail($contact));
        } catch (\Exception $e) {
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'subject', 'message', 'turnstileToken']);

        session()->flash('success', 'Thank you — your message has been sent.');
    }

    public function render()
    {
        return view('livewire.public.contact.contact');
    }
}
