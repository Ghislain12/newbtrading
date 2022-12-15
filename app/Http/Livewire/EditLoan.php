<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;

class EditLoan extends Component
{
    public Loan $loan;

    public function render()
    {
        return view('livewire.edit-loan');
    }
}
