<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return"<h1> Kyla Marie A. Agapito </h1>";
})->name('home');

// Route::get('/dashboard', function(){
//     return"<h1> This is a dashboard! </h1>";
// })->name('dashboard');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

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


Route::group(['prefix' => 'student'], function(){

    Route::get('/{id}', function($id){
        return"<a href='".route('studentEdit', $id)."'>Edit</a>";
    });

    Route::get('/edit/{id}', function($id){
        //return view('students.edit',compact('id'));   //mabilisan and matrack
        //return view('students.edit',['studentId'=>'1234']); //for hardcoded
        return view('students.edit',['studentId'=>$id]);
    })->name('studentEdit');

    Route::get('/{id}/{name}', function($id, $name){
        return"<h2>".$id.$name."</h2>";
    });

    Route::get('/{name}', function($name){
        return"<h2>".$name."</h2>";
    });

    // Route::get('/edit/{id}', function($id){
    //     return "<h2> EDIT STUDENT: ".$id."</h2>";
    // })->name('studentEdit');


});

// Route::fallback(function(){
//     return "Route Not Exist";
// });

Route::fallback(function(){
    return redirect()->route('dashboard');      //if u want an unknown route to redirect to home
});



