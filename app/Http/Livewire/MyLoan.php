<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use App\Models\Loan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyLoan extends Component
{
    public $deleteId = '';
    public $loanToUpdate;
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

    public function checkPeriod(string $period, string $number): bool
    {
        if (($period == 'year' && $number <= 20) || ($period == 'month' && $number <= 240)) {
            return true;
        } else {
            return false;
        }
    }

    public function editLoan(Loan $loan)
    {

        $this->loanToUpdate = $loan;
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

    public function update()
    {
        if (checkPeriod($this->period, $this->number)) {
            $loan = $this->loanToUpdate;
            $loan->address = $this->address;
            $loan->objectif = $this->objectif;
            $loan->amount = $this->amount . ' ' . $this->amount_currency;
            $loan->group = $this->group;
            $loan->period = $this->number . ' ' . $this->period;
            $loan->income = $this->income . ' ' . $this->income_currency;
            $loan->save();
            session()->flash('success', 'Demande modifiée avec succès');
            return redirect()->route('users.profil');
        }
        session()->flash('error', 'Délai de remboursement invalide');
        return redirect()->route('users.profil');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function performAction()
    {

        if (isValidatedLoan(Loan::find($this->deleteId))) {
            session()->flash('error', 'Demande en cours de traitement');
        } else {
            Loan::find($this->deleteId)->delete();
            session()->flash('success', 'Client supprimé avec succès');
        }
    }
}
