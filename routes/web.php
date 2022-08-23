<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';

Route::prefix('/dashboard')->middleware(['auth','isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('add-student', 'StudentController@create');
});



