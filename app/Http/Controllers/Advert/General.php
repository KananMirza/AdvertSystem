<?php

namespace App\Http\Controllers\Advert;

use App\Http\Controllers\Controller;
use App\Models\advert as Advert;
use App\Models\Categories;
use App\Models\cities;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\User;


class General extends Controller
{
    //
    public function createAdvert(){
        $user = Auth::user();
        $store = Store::where('user_id',$user->id)->first();
        View::share('store',$store);

       $category = Categories::where('main_category',null)->where('alt_category',null)->get();
       $city = cities::all();
       View::share('user',$user);
       View::share('categories',$category);
       View::share('cities',$city);
        return view('advert.advert');
    }

    public function searchCategory(Request $request){
        $category = Categories::where('main_category',$request->id)->where('alt_category',null)->get();

        return $category;
    }
    public function searchThirdCategory(Request $request){
        $category = Categories::where('alt_category',$request->id)->where('main_category',!null)->get();

        return $category;
    }
    public function createAdvertDB(Request $request){
        $user = Auth::user();
        $count = count($request->category);
        $request->validate([
            'type'=>'required',
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'user_id'=>'required',
            'user_name'=>'required',
            'images'=>'required',
            'images.*'=>'image|mimes:jpg,png,jpeg|max:1024',
            'category*'=>'required',

        ]);


        $advert = Advert::create([
            'user_id' => $user->id,
            'name' => $request->user_name,
            'phone' => $request->phone,
            'adress' => $request->city,
            'email' => $request->email,
            'title' => $request->title,
            'advert_desc' => $request->description,
            'price' => $request->price,
            'advert_type' => $request->type,
            'category' => $request->category[$count-1],
        ]);

        if($advert){
            $advert_id = $advert->id;
            $path = public_path() . '/advert/' . $advert_id;
            File::makeDirectory($path, true, true);
            if($request->hasFile('images')){
                foreach ($request->file('images') as $image){
                    $name = Str::slug($request->user_name) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
                    $image->move(public_path('advert/' . $advert_id), $name);
                    $data[] = $name;
                }
            }
            $a = Advert::where('id', $advert_id)->update([
                'img' => json_encode($data),
            ]);
        }



        return redirect()->back()->with($a ? "success" : "error",true);

    }
    public function advertIndex($id){
    $advert = Advert::where('id',$id)->first();
    View::share('advert',$advert);
    $city = cities::where('id',$advert->adress)->first();
    $user = User::where('id',$advert->user_id)->first();
    View::share('user',$user);

    View::share('city',$city);

        return view('advert.advertview');
    }

}
