<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use App\Models\Investment;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfil extends Component
{
    public $loans;

    public $investments;

    public $savings;

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
        $this->loans = Loan::where('id', Auth::user()->id)->get();
        $this->investments = Investment::where('id', Auth::user()->id)->get();
        $this->groups = Groups::all();
        // $this->savings = Saving::where('id', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.user-profil', [
            'loans' => $this->loans,
            'investments' => $this->investments,
            'groups' => $this->groups,
        ]);
    }
}
