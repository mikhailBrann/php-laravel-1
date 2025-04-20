<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/is_auth', [App\Http\Controllers\HomeController::class, 'isAuth'])
    ->name('isAuth')
    ->middleware('check-auth');