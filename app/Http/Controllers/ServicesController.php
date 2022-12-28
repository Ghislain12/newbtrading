<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function save(Request $request)
    {
        $validate = $request->validate([
            'label' => 'required | string',
            'description' => 'required | string',
            'advantages' => 'required | string',
            'terms' => 'required | string'
        ]);
        // dd($request->image);
        // $file = $request->file('image');
        // $filename = time() . $file->getClientOriginalName();
        // $file->move(public_path('image'), $filename);
        if ($request->image != null) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('image'), $filename);

            $service = new Service();
            $service->label = ucfirst($request->label);
            $service->description = $request->description;
            $service->advantages = $request->advantages;
            $service->terms = $request->terms;
            $service->image = $filename;
            $service->save();
            return redirect()->route('users.dashboard');
        } else {
            $service = new Service();
            $service->label = ucfirst($request->label);
            $service->description = $request->description;
            $service->advantages = $request->advantages;
            $service->terms = $request->terms;
            $service->save();
            return redirect()->route('users.dashboard');
        }
    }
}
