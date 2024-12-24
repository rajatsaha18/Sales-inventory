<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    Route::get('/customer', [CustomerController::class,'index'])->name('customer.add');
    Route::post('/customer-store', [CustomerController::class,'store'])->name('customer.store');
});
