<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Investment;
use App\Mail\InvestmentMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddInvestment extends Controller
{
    public function getinvestmentform()
    {
        $group = Groups::all();
        return view('livewire.add-investment', ['groups' => $group]);
    }

    public function save(Request $request)
    {
        dd($request);
        $request->validate([
            'address' => 'required | string',
            'objectif' => 'required | string',
            'amount' => 'required | integer',
            'group' => 'required | string',
            'refund_deadline' => 'required | string',
            'income' => 'required | string',
            'business_plan' => 'max:15360',
            'income_currency' => 'required | string',
            'amount_currency' => 'required | string',
        ]);

        if (checkPeriod($request->refund_deadline, $request->number) ) {
            if(!blank($request->business_plan)){
                $file = $request->file('business_plan');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('documents'), $filename);
                $investment = new Investment();
                $investment->user_id = Auth::user()->id;
                $investment->address = $request->address;
                $investment->objectif = $request->objectif;
                $investment->amount = $request->amount . ' ' . $request->amount_currency;
                $investment->group = $request->group;
                $investment->refund_deadline = $request->refund_deadline . ' ' . $request->number;
                $investment->income = $request->income . ' ' . $request->income_currency;
                $investment->business_plan = $filename;
                $investment->save();
                $mailData = ['name' => Auth::user()->name, 'firstname' => Auth::user()->firstname, 'civility' => Auth::user()->civility, 'file'=> $request->business_plan];
                // InvestmentMailJob::dispatch($mailData);
                Mail::to(Auth::user()->email)->send(new InvestmentMail($mailData));
                session()->flash('success', 'Demande effectuée avec succès');
                return redirect()->route('users.profil');
            }
                $investment = new Investment();
                $investment->user_id = Auth::user()->id;
                $investment->address = $request->address;
                $investment->objectif = $request->objectif;
                $investment->amount = $request->amount . ' ' . $request->amount_currency;
                $investment->group = $request->group;
                $investment->refund_deadline = $request->refund_deadline . ' ' . $request->number;
                $investment->income = $request->income . ' ' . $request->income_currency;
                $investment->business_plan = $filename;
                $investment->save();
                $mailData = ['name' => Auth::user()->name, 'firstname' => Auth::user()->firstname, 'civility' => Auth::user()->civility, 'file'=> $request->business_plan];
                // InvestmentMailJob::dispatch($mailData);
                Mail::to(Auth::user()->email)->send(new InvestmentMail($mailData));
                session()->flash('success', 'Demande effectuée avec succès');
                return redirect()->route('users.profil');
        }
        session()->flash('error', 'Délai de remboursement invalide');
        return redirect()->route('users.profil');
    }
}
