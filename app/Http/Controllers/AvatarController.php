<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    public function save(Request $request)
    {
        $user = Auth::user();
        $file = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $file->move(public_path('image'), $filename);
        $user->image = $filename;
        $user->save();
        return redirect()->route('users.profil');
        // dd($filename);
        // $filename = $file->store('images');

        // $image = new Image();
        // $image->filename = $filename;
        // $image->save();
    }
}
