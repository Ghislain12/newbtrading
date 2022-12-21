<?php


namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $path = Storage::putFile('images', $this->photo);
        $this->user->image = $path;
        $this->user->save();
        dd('succes');
        session()->flash('success', 'Avatar modifié avec succès');
        return redirect()->route('users.pr                                                                                                                                                              ofil');
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
