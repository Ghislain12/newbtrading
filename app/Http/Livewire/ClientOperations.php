<?php

namespace App\Http\Livewire;

use App\Models\Loan;
use App\Models\User;
use Livewire\Component;
use App\Models\Investment;

class ClientOperations extends Component
{
    public $userId;
    public $user;
    public $loans;
    public $investments;

    public function mount(string $id)
    {
        $this->userId = $id;
        $this->user = User::where('id', $this->userId)->first();
        $this->loans = Loan::where('user_id', $this->userId)->get();
        $this->investments = Investment::where('user_id', $this->userId)->get();
    }

    public function render()
    {
        return view(
            'livewire.clientOperations',
            [
                'user' => $this->user,
                'investments' => $this->investments,
                'loans' => $this->loans,
                'userId' => $this->userId,
            ]
        );
    }
}
