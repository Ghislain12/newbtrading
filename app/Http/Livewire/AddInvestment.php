<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use App\Models\Groups;
use Livewire\Component;
use App\Models\Investment;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddInvestment extends Component
{
    use WithFileUploads;

    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $refund_deadline;
    public $income;
    public $number;
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
            'groups' => Groups::all(),
        ]);
    }


    public function checkPeriod(int $refund_deadline, string $number): bool
    {

        if (
            ($number == 'year' && $refund_deadline <= 50) ||
            ($number == 'month' && $refund_deadline <= 600)
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
            'business_plan' => 'max:15360',
            'income_currency' => 'required | string',
            'amount_currency' => 'required | string',
        ]);
        if ($this->checkPeriod ($this->refund_deadline, $this->number) ) {
            if($this->business_plan != null){
            $investment = new Investment();
            $investment->user_id = Auth::user()->id;
            $investment->address = $this->address;
            $investment->objectif = $this->objectif;
            $investment->amount = $this->amount . ' ' . $this->amount_currency;
            $investment->group = $this->group;
            $investment->refund_deadline = $this->refund_deadline . ' ' . $this->number;
            $investment->income = $this->income . ' ' . $this->income_currency;
            $investment->business_plan = $this->business_plan->store('documents');
            $investment->save();
            session()->flash('success', 'Demande effectuée avec succès');
            return redirect()->route('users.profil');
            }
            $investment = new Investment();
            $investment->user_id = Auth::user()->id;
            $investment->address = $this->address;
            $investment->objectif = $this->objectif;
            $investment->amount = $this->amount . ' ' . $this->amount_currency;
            $investment->group = $this->group;
            $investment->refund_deadline = $this->refund_deadline .' ' . $this->number;
            $investment->income = $this->income . ' ' . $this->income_currency;
            $investment->save();
            session()->flash('success', 'Demande effectuée avec succès');
            return redirect()->route('users.profil');
        }
        session()->flash('error', 'Délai de remboursement invalide');
        return redirect()->route('users.profil');
    }
}
