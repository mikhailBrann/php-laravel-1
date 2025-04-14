<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [GroupController::class, 'index']);
Route::get('/groups/create', [GroupController::class, 'create']);
Route::post('/groups', [GroupController::class, 'add']);

Route::get('/groups/{group}', [StudentController::class, 'index']);
Route::get('/groups/{group}/students/create', [StudentController::class, 'create']);
Route::post('/groups/{group}/students', [StudentController::class, 'add']);
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'find']);