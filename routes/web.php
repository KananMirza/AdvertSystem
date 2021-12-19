<?php

use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\AuthController\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\General;
use App\Http\Controllers\Contact\General as Contact;
use App\Http\Controllers\About\General as About;
use App\Http\Controllers\FAQ\General as Rules;
use App\Http\Controllers\Profile\General as Profile;
use App\Http\Controllers\Store\General as Store;
use App\Http\Controllers\Advert\General as Advert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('isLogout')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/signup', [RegisterController::class, 'signup'])->name('signup');
    Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');
});
Route::middleware('isLogin')->group(function () {
    Route::get('/logout', [LoginController::class, "logout"])->name('logout');

    //profile
    Route::get('/account', [Profile::class, "myProfile"])->name('myProfile');
    Route::post('/account/update', [Profile::class, 'accountupdate'])->name('accountupdate');
    Route::post('/account/create/store', [Profile::class, 'createStore'])->name('createStore');
    Route::post('/account/update/store', [Profile::class, 'updateStore'])->name('updateStore');

    //advert
    Route::get('/advert/create', [Advert::class, "createAdvert"])->name('createAdvert');
    Route::post('/advert/create/', [Advert::class, "createAdvertDB"])->name('createAdvertDB');
    Route::post('/advert/create/get/category', [Advert::class, "searchCategory"]);
    Route::post('/advert/create/get/category/third', [Advert::class, "searchThirdCategory"]);


});
    //index
    Route::get('/', [General::class, "index"])->name('index');

    //contact
    Route::get('/contact', [Contact::class, "contactIndex"])->name('contactIndex');
    Route::post('/contact/message', [Contact::class, "contactIndexMessage"])->name('contactIndexMessage');

    //about
    Route::get('/about', [About::class, "aboutIndex"])->name('aboutIndex');

    //FAQ
    Route::get('/faq', [Rules::class, "rulesIndex"])->name('rulesIndex');

    //store
    Route::get('/all/store', [Store::class, "allstoreIndex"])->name('allstoreIndex');
    Route::get('/all/store/{id}', [Store::class, "storeIndex"])->name('storeIndex');

    //advert
    Route::get('/elan/{id}', [Advert::class, "advertIndex"])->name('advertIndex');



