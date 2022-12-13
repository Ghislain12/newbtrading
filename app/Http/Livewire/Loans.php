<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Loan;
use Livewire\Component;

class Loans extends Component
{
    use WithPagination;

    private $loans;

    public function mount()
    {
        $this->loans = Loan::all();
    }

    // public function getLoans(): object
    // {
    //     return Loan::orderBy('created_at', 'desc')->paginate(15);
    // }
    public function render()
    {
        // dd($this->loans);
        return view('livewire.loans', [
            'loans' => $this->loans,
        ]);
    }
}
