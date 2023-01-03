<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $services;

    public Service $deletedId;

    public function mount()
    {
        $this->services = Service::all();
    }

    public function deleteId(Service $service)
    {
        $this->deletedId = $service;
    }

    public function performAction()
    {
        $this->deletedId->delete();
        session()->flash('success', 'Service supprimé avec succès');
    }
    public function render()
    {
        return view('livewire.services');
    }
}