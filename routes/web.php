<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home.home');
});
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/productos/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/checkout/{id}', [ProductController::class, 'paymentPage'])->name('payment.page');
