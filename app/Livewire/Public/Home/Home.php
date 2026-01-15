<?php

namespace App\Livewire\Public\Home;

use Livewire\Component;
use App\Models\Testimonial;

class Home extends Component
{
    public function render()
    {
        return view('livewire.public.home.home', [
            'testimonials' => Testimonial::where('is_active', true)
                ->orderBy('sequence')
                ->get()
        ]);
    }
}
