<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;



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
    return view('index.home');
});

Route::get('home',[indexController::class,'home'])->name('home');
Route::get('aboutUs',[indexController::class,'aboutUs'])->name('aboutUs');
Route::get('contactUs',[indexController::class,'contactUs'])->name('contactUs');
