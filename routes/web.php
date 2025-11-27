<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'welcome']);

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home/{id}', [UserController::class, 'index'])->name('home');
Route::get('/home', [UserController::class, 'filter']);

// ?name=Kyla&age=4
// /home?name=Kyla&age=4


// Route::get('/dashboard', function(){
//     return"<h1> This is a dashboard! </h1>";
// })->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/static', function () {
//     return view('static');
// })->name('static');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/static', [UserController::class, 'static']);

// Route::get('/student/{id}', function($id){
//     return"<a href='".route('studentEdit', $id)."'>Edit</a>";
// });

// Route::get('/student/{id}/{name}', function($id, $name){
//     return"<h2>".$id.$name."</h2>";
// });

// Route::get('/student/{name}', function($name){
//     return"<h2>".$name."</h2>";
// });

// Route::get('/student/edit/{id}', function($id){
//     return "<h2> EDIT STUDENT: ".$id."</h2>";
// })->name('studentEdit');


Route::group(['prefix' => 'student'], function () {

    Route::get('/edit/{id}', [UserController::class, 'editId']);
    Route::get('/{id}/{name}', [UserController::class, 'idName']);
    Route::get('/{id}', [UserController::class, 'id'])->where('id', '[0-9]+');
    Route::get('/{name}', [UserController::class, 'name'])->where('name', '[A-Za-z]+');

    //Route::get('/edit/{id}', function ($id) {
    //return view('students.edit',compact('id', 'name'));   //mabilisan and matrack
    //return view('students.edit',['studentId'=>'1234']); //for hardcoded
    //return view('students.edit', ['studentId' => $id]);
    //})->name('studentEdit');

    // Route::get('/{id}/{name}', function ($id, $name) {
    //     return view('students.idname', ['studentId' => $id, 'studentName' => $name]);
    // });

    //Route::get('/{id}', function ($id) {
    //return view('students.id', ['studentId' => $id]);
    //})->where('id', '[0-9]+'); // added constraint to accept only numbers

    //Route::get('/{name}', function ($name) {
    //return view('students.name', ['studentName' => $name]);
    //})->where('name', '[A-Za-z]+'); // added constaint to accept only letters 

    // Route::get('/edit/{id}', function($id){
    //     return "<h2> EDIT STUDENT: ".$id."</h2>";
    // })->name('studentEdit');

});

// Route::fallback(function(){
//     return "Route Not Exist";
// });

Route::fallback([UserController::class, 'fallbackRoute']);

// Route::fallback(function () {
//     return redirect()->route('dashboard');
// });
