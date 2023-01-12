<?php

use App\Http\Controllers\AppTasksController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
    Route::get('/signup', [UserController::class, 'signup']);
    Route::post('/signup', [UserController::class, 'signupUser'])->name('signupUser');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tasks', [AppTasksController::class, 'index'])->name('tasks');
    Route::get('/tasks-create', [AppTasksController::class, 'create'])->name('tasks.create');
    Route::post('/tasks-store', [AppTasksController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/{task}', [AppTasksController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/edit/{task}', [AppTasksController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/edit/{task}', [AppTasksController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [AppTasksController::class, 'destroy'])->name('tasks.destroy');


    Route::get('tasks/reply/{task}', [TaskController::class, 'reply'])->name('tasks.reply');
    Route::post('tasks/reply/{task}', [TaskController::class, 'replyStore'])->name('tasks.reply.store');
    Route::get('task/reply-view', [TaskController::class, 'replyView'])->name('reply.view');


    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
