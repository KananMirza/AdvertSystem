<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\advert;
use App\Models\Categories;
use App\Models\cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class General extends Controller
{

    public function index(){
        $advertT = advert::where('advert_type','1')->where('status','1')->inRandomOrder()->limit(8)->get();
        $advert = advert::orderBy('id', 'DESC')->where('status','1')->limit(8)->get();
        $advertP = advert::where('advert_type','2')->where('status','1')->get();
        $category = Categories::where('main_category',null)->where('alt_category',null)->get();
        $city = cities::all();
        View::share('categories',$category);
        View::share('cities',$city);
        View::share('advertT',$advertT);
        View::share('adverts',$advert);
        View::share('advertP',$advertP);
        return view('index');
    }

}
