<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tms;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function(){
    return view('register');
})->name('login');

Route::post('/signup',[tms::class, 'signup'])->name('signup');
Route::post('/loginform',[tms::class, 'login'])->name('loginform');
Route::post('/logout',[tms::class, 'logout'])->name('logout');
Route::get('/uploadProduct',[tms::class, 'uploadProduct'])->name('uploadProduct')->middleware('auth');

Route::post('/PrdocutUpData',[tms::class, 'uploadProductToDb'])->name('PrdocutUpData')->middleware('auth');

Route::get('/dashboard', [tms::class, 'dashboard'])->name('dashboard')->middleware('auth'); 