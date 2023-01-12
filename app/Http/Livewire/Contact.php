<?php

namespace App\Http\Livewire;

use App\Mail\ConfirmationMail;
use App\Mail\ContactMail;
use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $content;
    private $receiver = 'contact@btrading-company.com';

    public function send()
    {
        $this->validate([
            'name' => 'required | string',
            'email' => 'required | email',
            'phone' => 'required',
            'content' => 'required | string | max:1500'
        ]);

        $mailData = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'content' => $this->content,
        ];

        $contact = new ModelsContact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->content = $this->content;
        $contact->save();

        Mail::to($this->receiver)->send(new ContactMail($mailData));
        Mail::to($mailData['email'])->send(new ConfirmationMail($mailData));
        $this->name = "";
        $this->email = "";
        $this->content = "";
        $this->phone = "";
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
