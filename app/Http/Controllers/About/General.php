<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class General extends Controller
{
    //
    public function aboutIndex(){
        return view('about.about');
    }
}
