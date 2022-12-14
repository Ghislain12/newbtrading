<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddLoan extends Component
{
    public $groups;

    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $period;
    public $income;
    public $number;
    public $income_currency;
    public $amount_currency;

    public function mount()
    {
        $this->groups = Groups::all();
    }

    public function checkPeriod(string $period, string $number): bool
    {
        if (($period == 'year' && $number <= 20) || ($period == 'month' && $number <= 240)) {
            return true;
        } else {
            return false;
        }
    }

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

        if ($this->checkPeriod($this->period, $this->number)) {
            $loan = new Loan();
            $loan->user_id = Auth::user()->id;
            $loan->address = $this->address;
            $loan->amount = $this->amount . ' ' . $this->amount_currency;
            $loan->group = $this->group;
            $loan->period = $this->period;
            $loan->income = $this->income . ' ' . $this->income_currency;
            $loan->save();
            dd('succes');
        }
        return session()->flash('error', 'Délai de remboursement invalide');
    }

    public function render()
    {
        return view('livewire.add-loan', [
            'groups' => $this->groups
        ]);
    }
}
