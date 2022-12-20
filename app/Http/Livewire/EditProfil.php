<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Rinvex\Country\CountryLoader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfil extends Component
{
    public string $name, $firstname, $phone, $country, $image, $email;

    public string $password = '', $newpassword = '', $confirmnewpassword = '';

    public $countryList;

    public User $user;

    public function mount()
    {
        $this->countryList = CountryLoader::countries();
        $this->name = Auth::user()->name;
        $this->firstname = Auth::user()->firstname;
        $this->civility = Auth::user()->civility;
        $this->phone = Auth::user()->phone;
        $this->country = Auth::user()->country;
        $this->image = Auth::user()->image ?? '';
        $this->email = Auth::user()->email;
        $this->user = Auth::user();
    }

    public function edit()
    {
        $this->validate([
            'name' => 'string | required',
            'firstname' => 'string | required',
            'email' => 'string | required',
            'phone' => 'string | required',
            'country' => 'string | required'
        ]);

        $this->user->name = $this->name;
        $this->user->firstname = $this->firstname;
        $this->user->email = $this->email;
        $this->user->phone = $this->phone;
        $this->user->country = $this->country;
        $this->user->save();
        session()->flash('success', 'Profil modifié avec succès');
        return redirect()->route('users.profil');
    }

    public function changePassword()
    {
        $this->validate([
            'password' => 'string | required',
            'newpassword' => 'string | required | same:confirmnewpassword',
        ]);
        if (Hash::check(($this->password), Auth::user()->password)) {
            $this->user->password = Hash::make($this->newpassword);
            $this->user->save();
            session()->flash('success', 'Mot de passe modifié avec succès');
            return redirect()->route('users.profil');
        } else {
            session()->flash('success', 'Veuillez entrer le mot de passe actuel');
            return redirect()->route('users.profil');
        }
    }

    public function render()
    {
        return view('livewire.edit-profil');
    }
}