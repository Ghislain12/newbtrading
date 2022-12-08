<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Status;
use Livewire\Component;

class Dashboard extends Component
{
    
    public function render()
    {
        return view('livewire.dashboard')->extends('layouts.app');
    }
}
