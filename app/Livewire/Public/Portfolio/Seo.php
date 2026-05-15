<?php

namespace App\Livewire\Public\Portfolio;

use App\Models\SeoPorfolio;
use Livewire\Component;

class Seo extends Component
{
    public function render()
    {
        return view('livewire.public.portfolio.seo', [
            'items' => SeoPorfolio::query()
                ->latest()
                ->get(),
        ]);
    }
}
