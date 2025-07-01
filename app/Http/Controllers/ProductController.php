<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function index()
    {
        $products = require base_path('config/productos.php');
        return view('products/products', compact('products'));
    }
}
