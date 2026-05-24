<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index']);

//TodoController
use App\Http\Controllers\TodoController;
Route::resource('todos', TodoController::class);
