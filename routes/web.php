<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('laundries', LaundryController::class);
