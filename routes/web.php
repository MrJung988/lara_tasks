<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');
