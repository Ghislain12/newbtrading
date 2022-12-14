<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyLoan extends Component
{
    public $deleteId = '';

    public function loanList()
    {
        return Loan::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.my-loan', [
            'loans' => $this->loanList()
        ]);
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

