<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Loans extends Component
{
    use WithPagination;

    public $loan;

    public function render(): View
    {
        return view('livewire.loans', [
            'loans' => Loan::paginate(15)
        ]);
    }

    public function editId(Loan $loan): void
    {
        $this->loan = $loan;
        $this->performAction();
    }

    public function performAction(): void
    {
        if (isValidatedLoan($this->loan)) {
            session()->flash('error', 'Demande déjà validée');
            // return back();
        }
        $this->loan->statut = true;
        $this->loan->save();
    }
}
