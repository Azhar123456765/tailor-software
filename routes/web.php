<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\userAuth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('add-customer');
// });
Route::get('login', function () {
    return view('login');
});
Route::post('login', [CustomerController::class, 'login'])->name('login.check');
Route::get('/', function () {
    return redirect()->route('customer.create');
});


Route::middleware(userAuth::class)->group(function () {

    Route::get('customerData/{id}', [CustomerController::class, 'getData'])->name('customer.data');
    Route::get('customer/print', [CustomerController::class, 'print'])->name('customer.print');
    Route::resource('customer', CustomerController::class);

    Route::get('order/create/{id?}', [OrderController::class, 'create'])->name('order.create');
    // Route::get('order/{id}/delete', [OrderController::class, 'delete'])->name('order.delete');
    Route::get('order/email', [OrderController::class, 'email'])->name('order.email');
    Route::get('order/print', [OrderController::class, 'print'])->name('order.print');
    Route::get('order/print/label', [OrderController::class, 'printLabel']);
    Route::post('/order/print/get-img', [OrderController::class, 'printImg']);
    Route::resource('order', controller: OrderController::class)->except('create');

    Route::get('invoice/email', [InvoiceController::class, 'email'])->name('invoice.email');
    Route::get('invoice/print', [InvoiceController::class, 'print'])->name('invoice.print');
    Route::resource('invoice', controller: InvoiceController::class);


    Route::get('logout', [CustomerController::class, 'logout'])->name('logout');
});