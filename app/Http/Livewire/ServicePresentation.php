<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicePresentation extends Component
{
    public function render()
    {
        $allServices = Service::all();
        return view('livewire.service-presentation', [
            'services' => $allServices
        ]);
    }
}
