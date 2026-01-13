<?php

namespace App\Livewire\Model;

use Livewire\Component;
use App\Models\PackageEnquiry;
use App\Mail\PackageEnquirySubmitted;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;

class PackageModal extends Component
{
    public $name;
    public $email;
    public $phone;
    public $package;
    public $message;

    public $turnstileToken = null;
    public $submitted = false;

    /* ---------------- RULES ---------------- */

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'package' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'turnstileToken' => 'required', 
        ];
    }

    protected $messages = [
        'turnstileToken.required' => 'Please verify you are human.',
    ];


    #[On('setPackage')]
    public function setPackage($package)
    {
        $this->package = $package;
        $this->submitted = false;
    }



    /* ---------------- SUBMIT ---------------- */

    public function submit()
    {
        $this->validate();

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true, 
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

        $enquiry = PackageEnquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'package' => $this->package,
            'message' => $this->message,
        ]);

        // Send email notification
        try {
            Mail::to('techonika.com@gmail.com')->send(new PackageEnquirySubmitted($enquiry));
        } catch (\Exception $e) {
            \Log::error('Failed to send package enquiry email: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'phone', 'message', 'turnstileToken']);
        $this->submitted = true;

        // ✅ Reset captcha widget
        $this->dispatch('reset-turnstile');
    }

    public function close()
    {
        $this->reset();
        $this->submitted = false;

        $this->dispatch('close-package-modal');
        $this->dispatch('reset-turnstile');
    }

    public function render()
    {
        return view('livewire.model.package-modal');
    }
}
