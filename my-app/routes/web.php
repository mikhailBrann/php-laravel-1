<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [GroupController::class, 'index']);
