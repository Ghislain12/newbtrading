<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;

class SenddocumentController extends Controller
{
    // public function index(){
    //     $users = User::all();
    //     $customers = [];
    //     foreach ( $users as $user)
    //     {
    //         $status = $user->status_id;
    //         $customer = Status::where('id', $status)->get();
    //         if($customer[0]['label'] == 'client')
    //         {
    //             array_push($customers, $user);
    //         }
    //     }
    //     return view('documents.senddocumentform', ['customers' => $customers]);
    // }

    public function senddocument(Request $request){
        dd('n c');
        $validatedData = $request->validate([
            'user_id' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,pdf,png|max:2048',
 
        ]);
        $name = time().'_'.$request->image->getClientOriginalName();
        $path = $request->file('image');
        $path->move(public_path('documents'), $name);
        $document = new Senddocument();
        $document->name = $name;
        $document->user_id = $request->user_id;
        $document->image = $path;
        $document->description = $request->description;
        $document->save();

        $user = User::where('id', $request->user_id)->first();

        // dd($user->email);
        $data = [
                    'email' => $user->email,
                    'message' => $request->message,
                    'name' => $user->name,
                ];
        // SendDodumentJobMail::dispatch($data);
                
        Mail::to($user->email)->send(new MyDemoMail($data));


        return back()->with('success', 'Document sent successfully');
    }
}
