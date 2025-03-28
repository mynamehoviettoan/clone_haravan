<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function category(){
        
        $category = Category::all();
        return view('user.category', compact('category'));
    }
}
