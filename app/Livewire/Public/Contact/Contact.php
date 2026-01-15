<?php

namespace App\Livewire\Public\Contact;

use Livewire\Component;
use App\Models\Contact as ContactModel;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';
    public $turnstilecontactToken;

    protected $rules = [
        'name'    => 'required|string|min:2',
        'email'   => 'nullable|email',
        'phone'   => 'required|string|min:7',
        'subject' => 'nullable|string|max:150',
        'message' => 'required|string|min:5',
    ];

    public function submit()
    {
        $validated = $this->validate();

        if (!$this->turnstilecontactToken) {
            $this->addError('turnstilecontactToken', 'Please verify that you are human.');
            return;
        }

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true,
            'timeout' => 10,
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstilecontactToken,
                'remoteip' => request()->ip(),
            ]
        );

        if (!($response->json('success'))) {
            $this->addError('turnstilecontactToken', 'Captcha verification failed.');
            return;
        }

        $contact = ContactModel::create($validated);

        try {
            Mail::to('techonika.com@gmail.com')->cc('info@techonika.com')->send(new ContactMail($contact));
        } catch (\Exception $e) {
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'phone', 'subject', 'message', 'turnstilecontactToken']);

        session()->flash('success', 'Thank you — your message has been sent.');
    }
  
    #[On('gettoken')]
    public function setToken(...$params)
    {
        \Log::info('setToken called with params: ' . json_encode($params));

        // Handle different parameter formats
        if (count($params) === 1 && is_array($params[0])) {
            $data = $params[0];
            $this->turnstilecontactToken = $data['token'] ?? $data;
        } else {
            $this->turnstilecontactToken = $params[0] ?? null;
        }

        \Log::info('Token set to: ' . $this->turnstilecontactToken);
    }

    public function render()
    {
        return view('livewire.public.contact.contact');
    }
}
