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

    public $image;

    public User $user;

    public function save()
    {
        $dataValid = $this->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);

        $dataValid['image'] = $this->image->store('todos', 'public');
        // dd($this->image);
        $this->user->image = $dataValid['image'];
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
