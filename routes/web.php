<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


require __DIR__ . '/auth.php';

Route::prefix('/dashboard')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'DashboardController@index');
});

Route::prefix('/profile')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('view', 'ProfileController@ProfileView');
    Route::get('edit', 'ProfileController@ProfileEdit');
    Route::post('store', 'ProfileController@ProfileStore');

    Route::get('password', 'ProfileController@PasswordView');
    Route::post('password/update', 'ProfileController@PasswordUpdate');
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


    Route::get('fee/category/view', 'FeeCategoryController@ViewFeeCat');
    Route::get('fee/category/add', 'FeeCategoryController@FeeCatAdd');
    Route::post('fee/category/store', 'FeeCategoryController@FeeCatStore');
    Route::get('fee/category/edit/{id}', 'FeeCategoryController@FeeCatEdit');
    Route::post('fee/category/update/{id}', 'FeeCategoryController@FeeCategoryUpdate');
    Route::get('fee/category/delete/{id}', 'FeeCategoryController@FeeCategoryDelete');

    Route::get('fee/amount/view', 'FeeAmountController@ViewFeeAmount');
    Route::get('fee/amount/add', 'FeeAmountController@AddFeeAmount');
    Route::post('fee/amount/store', 'FeeAmountController@StoreFeeAmount');
    Route::get('fee/amount/edit/{fee_category_id}', 'FeeAmountController@EditFeeAmount');
    Route::post('fee/amount/update/{fee_category_id}', 'FeeAmountController@UpdateFeeAmount');
    Route::get('fee/amount/details/{fee_category_id}', 'FeeAmountController@DetailsFeeAmount');

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
    Route::get('/purchase/all', 'PurchaseController@PurchaseAll');
    Route::get('/purchase/add', 'PurchaseController@PurchaseAdd');
    Route::post('/purchase/store', 'PurchaseController@PurchaseStore');
    Route::get('/purchase/delete/{id}', 'PurchaseController@PurchaseDelete');
    Route::get('/purchase/pending', 'PurchaseController@PurchasePending');
    Route::get('/purchase/approve/{id}', 'PurchaseController@PurchaseApprove');

    Route::get('/daily/purchase/report', 'PurchaseController@DailyPurchaseReport');
    Route::get('/daily/purchase/pdf', 'PurchaseController@DailyPurchasePdf');


    Route::get('/invoice/all', 'InvoiceController@InvoiceAll');
    Route::get('/invoice/add', 'InvoiceController@invoiceAdd');
    Route::post('/invoice/store', 'InvoiceController@InvoiceStore');
    Route::get('/invoice/pending', 'InvoiceController@PendingList');
    Route::get('/invoice/delete/{id}', 'InvoiceController@InvoiceDelete');
    Route::get('/invoice/approve/{id}', 'InvoiceController@InvoiceApprove');
    Route::post('/approval/store/{id}', 'InvoiceController@ApprovalStore');
    Route::get('/print/invoice/list', 'InvoiceController@PrintInvoiceList');
    Route::get('/print/invoice/{id}', 'InvoiceController@PrintInvoice');
    Route::get('/daily/invoice/report', 'InvoiceController@DailyInvoiceReport');
    Route::get('/daily/invoice/pdf', 'InvoiceController@DailyInvoicePdf');
});

Route::controller(Admin\DefaultController::class)->group(function () {
    Route::get('/get-category', 'GetCategory');
    Route::get('/get-product', 'GetProduct');
    Route::get('/check-product', 'GetStock');
});

Route::prefix('/accounts')->middleware(['auth', 'isAdmin'])->namespace('App\Http\Controllers\Admin')->group(function () {

    Route::get('student/fee/view', 'StudentFeeController@StudentFeeView');
    Route::get('student/fee/add', 'StudentFeeController@StudentFeeAdd');
    Route::get('student/fee/getstudent', 'StudentFeeController@StudentFeeGetStudent');
    Route::post('student/fee/store', 'StudentFeeController@StudentFeeStore');

    Route::get('account/salary/view', 'AccountSalaryController@AccountSalaryView');
    Route::get('account/salary/add', 'AccountSalaryController@AccountSalaryAdd');
    Route::get('account/salary/getemployee', 'AccountSalaryController@AccountSalaryGetEmployee');
    Route::post('account/salary/store', 'AccountSalaryController@AccountSalaryStore');

    Route::get('other/cost/view', 'OtherCostController@OtherCostView');
    Route::get('other/cost/add', 'OtherCostController@OtherCostAdd');
    Route::post('other/cost/store', 'OtherCostController@OtherCostStore');
    Route::get('other/cost/edit/{id}', 'OtherCostController@OtherCostEdit');
    Route::post('other/cost/update/{id}', 'OtherCostController@OtherCostUpdate');
});
