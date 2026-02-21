<?php

namespace App\Livewire\Public\Portfolio;

use App\Models\Portfolio as PortfolioModel;
use Livewire\Component;
use Livewire\WithPagination;

class Portfolio extends Component
{
    use WithPagination;

    public function render()
    {
        $portfolios = PortfolioModel::where('is_active', true)
            ->orderBy('sequence')
            ->paginate(1);

        return view('livewire.public.portfolio.portfolio', [
            'portfolios' => $portfolios,
        ]);
    }
}
