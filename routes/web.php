<?php

use App\Http\Controllers\AppTasksController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;




Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->middleware('guest')->name('loginUser');
Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');
Route::post('/signup', [UserController::class, 'signupUser'])->middleware('guest')->name('signupUser');

Route::get('/app-tasks', [AppTasksController::class, 'index'])->middleware('auth')->name('index');

Route::get('tasks/{task}/reply', [TaskController::class, 'reply'])->name('tasks.reply');


Route::get('/logout', [UserController::class, 'logout']);
