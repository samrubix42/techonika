<?php

namespace App\Livewire\Public\Portfolio;

use App\Models\SmoPortfolio;
use Livewire\Component;

class Smo extends Component
{
    public function render()
    {
        return view('livewire.public.portfolio.smo', [
            'items' => SmoPortfolio::where('is_active', true)
                ->latest()
                ->get(),
        ]);
    }
}
