<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use App\Models\Loan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyLoan extends Component
{
    public $deleteId = '';

    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $period;
    public $income;
    public $number;
    public $income_currency;
    public $amount_currency;

    public function loanList()
    {
        return Loan::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.my-loan', [
            'loans' => $this->loanList(),
            'groups' => Groups::all()
        ]);
    }

    public function editLoan(Loan $loan)
    {
        $amount_currency = explode(" ", $loan->income);
        $this->address = $loan->address;
        $this->objectif = $loan->objectif;
        $this->amount = explode(" ", $loan->amount)[0];
        $this->period = explode(" ", $loan->period)[1];
        $this->income = explode(" ", $loan->income)[0];
        $this->number = explode(" ", $loan->period)[0];
        $this->group = $loan->group;
        $this->income_currency = explode(" ", $loan->income)[1];
        $this->amount_currency = explode(" ", $loan->amount)[1];
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function removeClient()
    {
        if (Loan::find($this->deleteId)->status == true) {
            session()->flash('error', 'Demande en cours de traitement');
        }
        Loan::find($this->deleteId)->delete();
        session()->flash('success', 'Client supprimé avec succès');
    }
}
