<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    //

    public function allstoreIndex(){
      $store = Store::all();
        View::share('allstore',$store);
        return view('store.allstore');
    }

    public function storeIndex($id){
        $store = Store::where('id',$id)->first();

        $user = User::where('id',$store->user_id)->first();
        View::share('user',$user);
        View::share('store',$store);
        return view('store.store');
    }
}
