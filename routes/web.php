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
Route::post('/login',[tms::class, 'login'])->name('login');
Route::post('/logout',[tms::class, 'logout'])->name('logout');
Route::get('/uploadProduct',[tms::class, 'uploadProduct'])->name('uploadProduct');

Route::post('/PrdocutUpData',[tms::class, 'uploadProductToDb'])->name('PrdocutUpData');

Route::get('/dashboard', [tms::class, 'dashboard'])->name('dashboard');