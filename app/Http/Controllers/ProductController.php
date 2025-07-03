<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function index()
    {
        $products = require base_path('config/productos.php');
        shuffle($products);
        return view('products/products', compact('products'));
    }

     public function show($id)
    {
        $products = require base_path('config/productos.php');

        $product = collect($products)->firstWhere('id', $id);

        if (!$product) {
            return view('errors.product-not-found');
        }

        return view('products/show', compact('product'));
    }

    public function paymentPage($id)
    {
        $products = require base_path('config/productos.php');
        $product = collect($products)->firstWhere('id', $id);

        if (!$product) {
            return view('errors.product-not-found');
        }

        return view('products/checkout', compact('product'));
    }
}
