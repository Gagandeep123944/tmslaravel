<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tms;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function(){
    return view('register');
})->name('register');

Route::post('/signup',[tms::class, 'signup'])->name('signup');