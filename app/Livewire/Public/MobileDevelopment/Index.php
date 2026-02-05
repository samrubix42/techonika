<?php

namespace App\Livewire\Public\MobileDevelopment;

use App\Models\Testimonial;
use App\Livewire\Public\Contact\Contact;
use App\Models\Contact as ModelsContact;
use App\Mail\ContactMail;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{ public $name;
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
            'subject' => 'Mobile Development Enquiry - ' . $this->service,
            'message' => 'Interested in Mobile Development service: ' . $this->service,
        ]);

      

        $this->reset();
        $this->dispatch('turnstile-reset');

        session()->flash('success', 'We will contact you shortly!');
    }
    public function render()
    {
        return view('livewire.public.mobile-development.index', [
            'testimonials' => Testimonial::where('is_active', true)
                ->orderBy('sequence')
                ->get()
        ]);
    }
}
