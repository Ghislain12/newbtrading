<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use Livewire\Component;

use App\Models\Investment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class MyInvestments extends Component
{
    use WithPagination;

    public Investment $investment;

    public function investmentList()
    {
        return Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.my-investments', [
            'investments' => $this->investmentList(),
            'groups' => Groups::all()
        ]);
    }

    public function deleteId(Investment $investment)
    {
        $this->investment = $investment;
    }

    public function performAction()
    {
        $this->investment->delete();
    }
}
