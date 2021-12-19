<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\advert;
use App\Models\cities;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class General extends Controller
{
    public function myProfile(){
        $city = cities::all();
        $user = Auth::user();
        $store = Store::where('user_id',$user->id)->first();
        $advert = advert::where('user_id',$user->id)->where('status','1')->get();
        View::share('user',$user);
        View::share('cities',$city);
        View::share('store',$store);
        View::share('adverts',$advert);
        return view('account.profile');
    }
    public function accountupdate(Request $request){
        $data = User::find($request->id);
        $city = cities::find($request->city);
        $validated = $request->validate([
            'username' => 'required|min:3|max:255',
            'phone' => 'required|min:10|max:13|unique:users,mobile',
            'city' => 'required',
        ]);

        $data->name = $request->username;
        $data->mobile =$request->phone;
        $data->adress = $city->name;

        return redirect()->back()->with( $data->save() ? "success" : "error", true);

    }

    public function createStore(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'store_name' => 'required|unique:store,name|unique:store,user_id',
        ]);



        $data = Store::create([
            "user_id"=>$request->id,
            "name"=>$request->store_name,
        ]);
        $user->user_role = $request->role;
        $user->store_id = $data->id;

        $user->save();
        return redirect()->back()->with( $data->save() ? "success" : "error", true);
    }
    public function updateStore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'city' => 'required',
            'description' => 'required',
        ]);

        $user = Auth::user();
        $store = Store::where('user_id',$user->id)->first();


        if ($request->hasFile('banner')) {
            $request->validate([
                'banner' => 'image|mimes:jpg,jpeg,png|max:1024',
            ]);

            $imagebanner = $request->file('banner');
            $namebanner = Str::slug($request->name) .'-' .rand(1000,9999).'.' . $imagebanner->getClientOriginalExtension();
            $directory = 'media/store_banner/';
            if (file_exists($store->banner)) {
                unlink($store->banner);
            }

            $imagebanner->move($directory, $namebanner);
            $namebanner = $directory.$namebanner;
            $store->banner = $namebanner;

        }

        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'image|mimes:jpg,jpeg,png|max:1024',
            ]);

            $imagelogo = $request->file('logo');
            $namelogo = Str::slug($request->name) .'-' .rand(1000,9999).'.' . $imagelogo->getClientOriginalExtension();
            $directory = 'media/store_logo/';
            if (file_exists($store->logo)) {
                unlink($store->logo);
            }

            $imagelogo->move($directory, $namelogo);
            $namelogo = $directory.$namelogo;
            $store->logo = $namelogo;
        }

        $store->name =$request->name;
        $user->mobile = $request->phone;
        $store->website = $request->website;
        $user->adress = $request->city;
        $store->store_desc = $request->description;
        $user->save();

        return redirect()->back()->with( $store->save() ? "success" : "error", true);


    }
}
