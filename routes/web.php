<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


require __DIR__ . '/auth.php';

Route::prefix('/dashboard')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'DashboardController@index');
});
Route::prefix('/student')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('add-student', 'StudentController@create');
    Route::post('add-student', 'StudentController@store');
    Route::get('edit-student-details/{student_id}', 'StudentController@edit');
    Route::put('update-student-details/{student_id}', 'StudentController@update');
    Route::get('delete-student/{student_id}', 'StudentController@destroy');

    Route::get('view-students', 'StudentController@view');
    Route::get('academic-years', 'StudentController@create');
});
Route::prefix('/academic')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('academic-years', 'AcademicController@index');
    Route::post('academic-years', 'AcademicController@store');
    Route::get('academic-years/{academic_id}', 'AcademicController@destroy');

    Route::get('classes', 'CohortController@index');
    Route::post('classes', 'CohortController@store');
    Route::get('classes/{cohort_id}', 'CohortController@destroy');

    Route::get('sessions', 'SessionController@index');
    Route::post('sessions', 'SessionController@store');
    Route::get('sessions/{session_id}', 'SessionController@destroy');
});
Route::prefix('/inventory')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {

    Route::get('stock-category', 'StockCategoryController@index');
    Route::post('stock-category', 'StockCategoryController@store');
    Route::get('stock-category/{stock_id}', 'StockCategoryController@destroy');

    Route::get('units', 'UnitController@index');
    Route::post('units', 'UnitController@store');
    Route::get('units/{unit_id}', 'UnitController@destroy');

    Route::get('categories', 'StockCategoryController@index');
    Route::post('categories', 'StockCategoryController@store');
    Route::get('categories/{category_id}', 'StockCategoryController@destroy');

    Route::get('/supplier/all', 'SupplierController@SupplierAll');
    Route::get('/supplier/add', 'SupplierController@SupplierAdd');
    Route::post('/supplier/store', 'SupplierController@SupplierStore');
    Route::get('/supplier/edit/{id}', 'SupplierController@SupplierEdit');
    Route::post('/supplier/update', 'SupplierController@SupplierUpdate');
    Route::get('/supplier/delete/{id}', 'SupplierController@SupplierDelete');

    Route::get('/stock/all', 'StockController@All');
    Route::get('/stock/add', 'StockController@Add');
    Route::post('/stock/store', 'StockController@Store');
    Route::get('/stock/edit/{id}', 'StockController@Edit');
    Route::post('/stock/update', 'StockController@Update');
    Route::get('/stock/delete/{id}', 'StockController@Delete');


    // Route::get('/supplier/all', 'SupplierController@index');
    // Route::get('/supplier/add-supplier', 'SupplierController@create');

});
