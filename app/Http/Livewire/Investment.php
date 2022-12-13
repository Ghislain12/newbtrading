<?php

namespace App\Http\Livewire;

use App\Models\Investment as ModelsInvestment;
use Livewire\Component;
use Livewire\WithPagination;

class Investment extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.investment', [
            'investments' => ModelsInvestment::OrderBy('created_at')->paginate(15)
        ]);
    }
}
