<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use App\Models\Groups;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddInvestment extends Component
{

    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $refund_deadline;
    public $income;
    public $business_plan;
    public $income_currency;
    public $amount_currency;

    
    // public function mount()
    // {
    //     $this->groups = Groups::all();
    // }

    public function render()
    {
        return view('livewire.add-investment', [
            'groups' =>Groups::all(),
        ]);
    }


    public function checkPeriod(string $period, string $number): bool
    {
        if (
            ($period == 'year' && $number <= 50) ||
            ($period == 'month' && $number <= 600)
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function addInvestment()
    {
        $this->validate([
            'address' => 'required | string',
            'objectif' => 'required | string',
            'amount' => 'required | integer',
            'group' => 'required | string',
            'refund_deadline' => 'required | string',
            'income' => 'required | string',
            'business_plan' => 'required | image',
            'income_currency' => 'required | string',
            'amount_currency' => 'required | string',
        ]);

        if ($this->checkPeriod($this->period, $this->number)) {
            $investment = new Loan();
            $investment->user_id = Auth::user()->id;
            $investment->address = $this->address;
            $investment->objectif = $this->objectif;
            $investment->amount = $this->amount . ' ' . $this->amount_currency;
            $investment->group = $this->group;
            $investment->refund_deadline = $this->refund_deadline;
            $investment->income = $this->income . ' ' . $this->income_currency;
            $investment->business_plan = $this->business_plan;
            $investment->save();
            dd('ok');
            return session()->flash('success', 'Investment save successfully');
        }
        return session()->flash('error', 'Délai de remboursement invalide');
    }
}
