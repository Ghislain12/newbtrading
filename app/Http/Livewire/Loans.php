<?php

namespace App\Http\Livewire;

use App\Models\Loan;
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
            'loans' => Loan::orderBy('created_at', 'DESC')->paginate(15)
        ]);
    }

    public function editId(Loan $loan): void
    {
        $this->loan = $loan;
        $this->performAction();
    }

    public function deleteId(Loan $loan)
    {
    }

    public function performAction(): void
    {
        if (isValidatedLoan($this->loan)) {
            session()->flash('error', 'Demande déjà validée');
        }
        $this->loan->statut = true;
        $this->loan->save();
    }
}
