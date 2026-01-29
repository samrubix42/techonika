<?php

namespace App\Livewire\Public\DigitalMarkting;

use App\Livewire\Public\Contact\Contact;
use App\Models\Contact as ModelsContact;
use App\Mail\ContactMail;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public $name;
    public $email;
    public $phone;
    public $service;
    public $turnstileToken;

    protected $rules = [
        'name'    => 'required|min:3',
        'email'   => 'nullable|email',
        'phone'   => 'required|min:10',
        'service' => 'required',
        'turnstileToken' => 'required'
    ];

    protected $messages = [
        'turnstileToken.required' => 'Please verify you are human.'
    ];

    public function submit()
    {
        $validated = $this->validate();

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true,
            'timeout' => 10
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstileToken,
                'remoteip' => request()->ip()
            ]
        );

        if (!$response->json('success')) {
            $this->addError('turnstileToken', 'Captcha verification failed.');
            return;
        }

        $contact = ModelsContact::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'subject' => 'Digital Marketing Enquiry - ' . $this->service,
            'message' => 'Interested in Digital Marketing service: ' . $this->service,
        ]);

        // Send email notification
        try {
            Mail::to('techonika.com@gmail.com')->cc('info@techonika.com')->send(new ContactMail($contact));
        } catch (\Exception $e) {
            \Log::error('Failed to send digital marketing email: ' . $e->getMessage());
        }

        $this->reset();
        $this->dispatch('turnstile-reset');

        session()->flash('success', 'We will contact you shortly!');
    }

    public function render()
    {
        return view('livewire.public.digital-markting.index');
    }
}
