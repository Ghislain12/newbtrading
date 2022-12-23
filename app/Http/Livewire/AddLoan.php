<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use App\Mail\LoanMail;
use App\Models\Groups;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddLoan extends Component
{

    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $period;
    public $income;
    public $number;
    public $income_currency;
    public $amount_currency;

    public function addLoan()
    {
        $this->validate([
            'address' => 'required | string',
            'objectif' => 'required | string',
            'amount' => 'required | integer',
            'group' => 'required | string',
            'period' => 'required | string',
            'income' => 'required | string',
            'number' => 'required | integer',
            'income_currency' => 'required | string',
            'amount_currency' => 'required | string',
        ]);

        if (checkPeriod($this->period, $this->number)) {
            $loan = new Loan();
            $loan->user_id = Auth::user()->id;
            $loan->address = $this->address;
            $loan->objectif = $this->objectif;
            $loan->amount = $this->amount . ' ' . $this->amount_currency;
            $loan->group = $this->group;
            $loan->period = $this->number . ' ' . $this->period;
            $loan->income = $this->income . ' ' . $this->income_currency;
            $loan->save();
            $mailData = ['name' => Auth::user()->name, 'firstname' => Auth::user()->firstname, 'civility' => Auth::user()->civility];
            Mail::to(Auth::user()->email)->send(new LoanMail($this->$mailData));
            session()->flash('success', 'Demande effectuée avec succès');
            return redirect()->route('users.profil');
        }
        session()->flash('error', 'Délai de remboursement invalide');
        return redirect()->route('users.profil');
    }

    public function render()
    {
        return view('livewire.add-loan', [
            'groups' => Groups::all()
        ]);
    }
}
