<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('mail',[FrontController::class,'mailSend'])->name('mailSend');
Route::post('apointus',[FrontController::class,'ApointUs'])->name('apointus');
Route::post('carrer',[FrontController::class,'carrer'])->name('carrer');
Route::get('fire-safty',function(){
    return view('front.fire');
})->name('fire');

Route::get('engineering',function(){
    return view('front.engineering');
})->name('engineering');

Route::get('marine-safty',function(){
    return view('front.marine-cargo');
})->name('marine');

Route::get('motor-safty',function(){
    return view('front.motor');
})->name('motor');

Route::get('chrop-safty',function(){
    return view('front.chrop');
})->name('chrop');

Route::get('miscellaneous-safty',function(){
    return view('front.miscellaneous');
})->name('miscellaneous');

Route::get('catastrophic-safty',function(){
    return view('front.catastrophic');
})->name('catastrophic');

Route::get('clear-cache',function(){
Artisan::call('config:cache');
return "Done";
});
Route::post('contact',[FrontController::class,'ContactMail'])->name('contact');