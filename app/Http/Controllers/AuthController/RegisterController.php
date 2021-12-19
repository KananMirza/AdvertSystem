<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function signup(Request $request){
        $request->validate([
            'username'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ]);

        $data = User::create([
            "name"=>$request->username,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
}
