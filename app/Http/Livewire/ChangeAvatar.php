<?php


namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ChangeAvatar extends Component
{
    use WithFileUploads;

    public $photo;

    public User $user;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        $this->user->image = $this->photo->store('/', 'images');
        $this->user->save();
        session()->flash('success', 'Avatar modifié avec succès');
        return redirect()->route('users.profil');
    }

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.change-avatar');
    }
}
