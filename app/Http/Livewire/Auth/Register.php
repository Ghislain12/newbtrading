<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Status;
use Livewire\Component;
use Rinvex\Country\CountryLoader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $firstname = '';

    /** @var string */
    public $civility = '';

    /** @var string */
    public $country = '';

    /** @var string */
    public $phone = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public $countryList;

    public function getClientId(): string
    {
        $client_status = Status::where('label', 'client')->first();
        $status_id = (string) $client_status->id ?? null;
        return $status_id;
    }

    public function register()
    {
        $this->validate([
            'name' => ['required', 'string'],
            'firstname' => ['required', 'string'],
            'civility' => ['required'],
            'phone' => ['required'],
            'country' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);
        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'firstname' => $this->firstname,
            'civility' => $this->civility,
            'phone' => $this->phone,
            'country' => $this->country,
            'status_id' => $this->getClientId(),
            'password' => Hash::make($this->password),
        ]);
        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function mount(): void
    {
        $this->countryList = CountryLoader::countries();
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
