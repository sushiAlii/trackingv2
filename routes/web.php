<?php

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



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::view(uri:'/home', view:'home');
//Route::view(uri:'/documents', view:'document');
//Route::view(uri:'/documents/tracking', view:'tracking');
//Route::view(uri:'/documents/details', view:'document_details');

Route::get('{any}', function(){
    return view('home');
})->where('any', '.*');