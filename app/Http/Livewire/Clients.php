<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Status;
use Livewire\Component;
use Livewire\WithPagination;


class Clients extends Component
{
    use WithPagination;

    public $deleteId = '';

    public function getClientId(): string
    {
        $client_status = Status::where('label', 'client')->first();
        return $status_id = (string) $client_status->id ?? null;
    }

    public function clientList(): object
    {
        return $clients = User::where('status_id', $this->getClientId() ?? null)->paginate(15);
    }

    public function render()
    {
        if (isOjectNull($this->clientList())) {
            return view('livewire.clients', [
                'clients' => $this->clientList()
            ]);
        }
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function removeClient()
    {
        User::find($this->deleteId)->delete();
    }
}
