<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class DetailService extends Component
{
    public string $serviceId;
    public $service;

    public function mount(string $id)
    {
        $this->serviceId = $id;
        $this->service = Service::where('id', $this->serviceId)->first();
    }
    public function render()
    {
        return view('livewire.detail-service', [
            'service' => $this->service
        ]);
    }
}
