<?php

namespace App\Http\Livewire;

use App\Models\Investment;
use App\Models\Loan;
use App\Models\User;
use Livewire\Component;

class ClientOperations extends Component
{
    public  $userId;
    public  $loans;
    public  $investments;

    public function mount(string $id)
    {
        $this->userId = $id;
        $this->loans = Loan::where('user_id', $this->userId)->get();
        $this->investments = Investment::where('user_id', $this->userId)->get();
    }

    public function render()
    {
        dd($this->investments);
        return view('livewire.client-operations');
    }
}
