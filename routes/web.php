<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});
Route::get('/products/products', function () {
    return view('products.products');
});
