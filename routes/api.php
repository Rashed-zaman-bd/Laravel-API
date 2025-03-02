<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;





Route::post('/post', [PostController::class, 'PostCreate'])->name('PostCreate');
Route::get('/list', [PostController::class, 'PostList'])->name('PostList');
Route::get('/list-by-id', [PostController::class, 'PostByID'])->name('PostByID');



Route::post('/user-registration', [UserController::class, 'UserRegistration'])->name('UserRegistration');
Route::get('/user-by-id', [UserController::class, 'UserByID'])->name('UserByID');


Route::post('/task', [TaskController::class, 'TaskCreate'])->name('TaskCreate');
Route::get('/task-list', [TaskController::class, 'TaskList'])->name('TaskList');
Route::post('/task-update', [TaskController::class, 'TaskUpdate'])->name('TaskUpdate');



