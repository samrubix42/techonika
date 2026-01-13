<?php

namespace App\Livewire\Public\WebDevelopment;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;

class Index extends Component
{
    // Top Form
    public $topName = '';
    public $topEmail = '';
    public $topPhone = '';
    public $topService = '';
    public $topMessage = '';
    public $turnstileTokenTop;
    public $successTop = false;

    // Bottom Form
    public $bottomName = '';
    public $bottomEmail = '';
    public $bottomPhone = '';
    public $bottomService = '';
    public $bottomMessage = '';
    public $turnstileTokenBottom;
    public $successBottom = false;

    protected $messagesTop = [
        'topPhone.digits' => 'The phone number must be exactly 10 digits long.',
        'topPhone.numeric' => 'The phone number appears invalid — please correct it.',
        'topName.required' => 'Please tell us your name so we know who to contact.',
        'topPhone.required' => 'Please provide a phone number so we can reach you.',
        'topEmail.email' => 'The email address appears invalid — please correct it or leave it blank.',
        'turnstileTokenTop.required' => 'Please verify you are human.',
    ];

    protected $messagesBottom = [
        'bottomPhone.digits' => 'The phone number must be exactly 10 digits long.',
        'bottomPhone.numeric' => 'The phone number appears invalid — please correct it.',
        'bottomName.required' => 'Please tell us your name so we know who to contact.',
        'bottomPhone.required' => 'Please provide a phone number so we can reach you.',
        'bottomEmail.email' => 'The email address appears invalid — please correct it or leave it blank.',
        'turnstileTokenBottom.required' => 'Please verify you are human.',
    ];

    public function mount()
    {
        // No initialization needed for simple properties
    }

    #[On('turnstile-top-solved')]
public function setTopToken($token)
{
    $this->turnstileTokenTop = $token;
}

#[On('turnstile-bottom-solved')]
public function setBottomToken($token)
{
    $this->turnstileTokenBottom = $token;
}

    protected function rulesTop()
    {
        return [
            'topName' => 'required|string|max:191',
            'topEmail' => 'nullable|email|max:191',
            'topPhone' => 'required|numeric|digits:10',
            'topService' => 'nullable|string|max:191',
            'topMessage' => 'nullable|string',
            'turnstileTokenTop' => 'required',
        ];
    }

    protected function rulesBottom()
    {
        return [
            'bottomName' => 'required|string|max:191',
            'bottomEmail' => 'nullable|email|max:191',
            'bottomPhone' => 'required|numeric|digits:10',
            'bottomService' => 'nullable|string|max:191',
            'bottomMessage' => 'nullable|string',
            'turnstileTokenBottom' => 'required',
        ];
    }

    public function submitTop()
    {
        $this->validate($this->rulesTop(), $this->messagesTop ?? []);

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true,
            'timeout' => 10
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstileTokenTop,
                'remoteip' => request()->ip()
            ]
        );

        if (!$response->json('success')) {
            $this->addError('turnstileTokenTop', 'Captcha verification failed.');
            return;
        }

        Contact::create([
            'name' => $this->topName,
            'email' => $this->topEmail,
            'phone' => $this->topPhone ?? null,
            'subject' => $this->topService ?? 'Web Development - Quote',
            'message' => $this->topMessage ?? null,
        ]);

        $this->successTop = true;
        $this->reset(['topName', 'topEmail', 'topPhone', 'topService', 'topMessage', 'turnstileTokenTop']);
        $this->dispatch('turnstile-reset-top');
    }

    public function submitBottom()
    {
        $this->validate($this->rulesBottom(), $this->messagesBottom ?? []);

        $response = Http::withOptions([
            'verify'  => app()->environment('local') ? false : true,
            'timeout' => 10
        ])->asForm()->post(
            'https://challenges.cloudflare.com/turnstile/v0/siteverify',
            [
                'secret'   => config('services.turnstile.secret_key'),
                'response' => $this->turnstileTokenBottom,
                'remoteip' => request()->ip()
            ]
        );

        if (!$response->json('success')) {
            $this->addError('turnstileTokenBottom', 'Captcha verification failed.');
            return;
        }

        Contact::create([
            'name' => $this->bottomName,
            'email' => $this->bottomEmail,
            'phone' => $this->bottomPhone ?? null,
            'subject' => $this->bottomService ?? 'Web Development - Quote',
            'message' => $this->bottomMessage ?? null,
        ]);

        $this->successBottom = true;
        $this->reset(['bottomName', 'bottomEmail', 'bottomPhone', 'bottomService', 'bottomMessage', 'turnstileTokenBottom']);
        $this->dispatch('turnstile-reset-bottom');
    }

    public function render()
    {
        return view('livewire.public.web-development.index');
    }
}
