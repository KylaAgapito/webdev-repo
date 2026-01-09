<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'welcome']);
Route::get('/home/{id}', [UserController::class, 'index'])->name('home');
Route::get('/home', [UserController::class, 'filter']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/static', [UserController::class, 'static']);
Route::get('/student', [UserController::class, 'student']);
Route::get('/temp', [UserController::class, 'temp']);
Route::get('/user', [UserController::class, 'getUser']);


Route::group(['prefix' => 'student'], function () {

    Route::get('/edit/{id}', [UserController::class, 'editId']);
    Route::get('/{id}/{name}', [UserController::class, 'idName']);
    Route::get('/{id}', [UserController::class, 'id'])->where('id', '[0-9]+');
    Route::get('/{name}', [UserController::class, 'name'])->where('name', '[A-Za-z]+');
    Route::post('/studentAdd', [UserController::class, 'addStudent'])->name('student.add');
    //NOTE: post routes cant be accessed directly
});


Route::fallback([UserController::class, 'fallbackRoute']);
