<?php

namespace App\Http\Livewire;

use App\Models\Groups;
use Illuminate\Support\Facades\Response;

use Livewire\Component;
use App\Models\Investment;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class MyInvestments extends Component
{
    use WithFileUploads;
    use WithPagination;

    public Investment $investment;
    public $deleteId = '';
    public $user_id = 'rtyuii';
    public $currentId = '';
    public $userId = 'uyyilk';
    public $investmentToUpdate;
    public $address;
    public $objectif;
    public $amount;
    public $group;
    public $refund_deadline;
    public $income;
    public $number;
    public $business_plan;
    public $income_currency;
    public $amount_currency;

    public function investmentList()
    {
        return Investment::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.my-investments', [
            'investments' => $this->investmentList(),
            'groups' => Groups::all(),
            'userId' => $this->userId
        ]);
    }

    public function checkPeriod(string $refund_deadline, string $number): bool
    {
        if (($number == 'year' && intval($refund_deadline) <= 50) || ($number == 'month' && $refund_deadline <= 600)) {
            return true;
        } else {
            return false;
        }
    }

    public function editInvestment(Investment $investment)
    {

        $this->investmentToUpdate = $investment;
        $this->address = $investment->address;
        $this->objectif = $investment->objectif;
        $this->amount = explode(" ", $investment->amount)[0];
        $this->refund_deadline = explode(" ", $investment->refund_deadline)[0];
        $this->income = explode(" ", $investment->income)[0];
        $this->number = explode(" ", $investment->refund_deadline)[1];
        $this->group = $investment->group;
        $this->income_currency = explode(" ", $investment->income)[1];
        $this->amount_currency = explode(" ", $investment->amount)[1];
    }

    public function update()
    {
        if ($this->checkPeriod($this->refund_deadline, $this->number)) {
            if ($this->business_plan != null) {
                $investment = $this->investmentToUpdate;
                $investment->address = $this->address;
                $investment->objectif = $this->objectif;
                $investment->amount = $this->amount . ' ' . $this->amount_currency;
                $investment->group = $this->group;
                $investment->refund_deadline = $this->refund_deadline . ' ' . $this->number;
                $investment->income = $this->income . ' ' . $this->income_currency;
                $investment->business_plan = $this->business_plan->store('/', 'documents');
                $investment->save();
                session()->flash('success', 'Demande modifiée avec succès');
                return redirect()->route('users.profil');
            } else {
                $investment = $this->investmentToUpdate;
                $investment->address = $this->address;
                $investment->objectif = $this->objectif;
                $investment->amount = $this->amount . ' ' . $this->amount_currency;
                $investment->group = $this->group;
                $investment->refund_deadline = $this->refund_deadline . ' ' . $this->number;
                $investment->income = $this->income . ' ' . $this->income_currency;
                $investment->save();
                session()->flash('success', 'Demande modifiée avec succès');
                return redirect()->route('users.profil');
            }
        }
        session()->flash('error', 'Délai de remboursement invalide');
        return redirect()->route('users.profil');
    }

    function isValidatedInvestment(Investment $investment): bool
    {
        return ($investment->statut == true) ? true : false;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }


    public function performAction()
    {
        if ($this->isValidatedInvestment(Investment::find($this->deleteId))) {
            session()->flash('error', 'Demande en cours de traitement');
        } else {
            Investment::find($this->deleteId)->delete();
            session()->flash('success', 'Demande supprimée avec succès');
        }
    }


    public function currentId($id)
    {
        $this->currentId = $id;
    }

    public function download($currentId)
    {
        $doc = investment::find($currentId);

        $path = public_path('documents/'. $doc->business_plan);

        return Response::download($path);
    }

    public function setUserId(string $id)
    {
        $investment = Investment::where('id', $id)->first();
        $this->userId = $investment->user_id;
        ;
    }

    
}
