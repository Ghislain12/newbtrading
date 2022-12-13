<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use Livewire\Component;
use Livewire\WithPagination;

class Loans extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.loans', [
            'loans' => Loan::paginate(15)
        ]);
    }
}
