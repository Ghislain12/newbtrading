<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $isAdmin = false;

    public function mount()
    {
        if (Auth::user()) {
            $this->isAdmin = User::isAdmin(Auth::id());
        }
    }

    public function render()
    {
        // dd($this->isAdmin);
        return view('livewire.navbar');
    }
}
