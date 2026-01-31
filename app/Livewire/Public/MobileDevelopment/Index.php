<?php

namespace App\Livewire\Public\MobileDevelopment;

use App\Models\Testimonial;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.mobile-development.index', [
            'testimonials' => Testimonial::where('is_active', true)
                ->orderBy('sequence')
                ->get()
        ]);
    }
}
