<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function contactIndex(){
        $data = Settings::find(1);
        View::share('data',$data);
        return view('contact.contact');
    }
    public function contactIndexMessage(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = Messages::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message,
        ]);
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
}
