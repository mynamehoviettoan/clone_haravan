<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // $categories = Category::with('products')->get(); // Lấy danh mục kèm sản phẩm
        // $visibleCategories = $categories->take(4);
        // $hiddenCategories = $categories->skip(5);
        // $products = Product::all();
        return view('index');
    }
}
