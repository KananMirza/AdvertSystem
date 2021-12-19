<?php

namespace App\Http\Controllers\FAQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class General extends Controller
{
    //
    public function rulesIndex(){
        return view('FAQ.rules');
    }
}
