<?php

namespace App\Livewire\Public\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.public.client.clients', [
            'clients' => Client::where('is_active', true)
                ->orderBy('sequence')
                ->paginate(15)
        ]);
    }
}
