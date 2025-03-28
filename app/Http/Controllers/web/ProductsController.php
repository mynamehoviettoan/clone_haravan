<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function products(){
        $category = Category::all();
        $products = Product::all();
        return view('user.products', compact('products','category'));
    }
}
