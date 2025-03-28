<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\web\AboutController as WebAboutController;
use App\Http\Controllers\web\CategoryController as WebCategoryController;
use App\Http\Controllers\web\ContactController as WebContactController;
use App\Http\Controllers\web\HomeController as WebHomeController;
use App\Http\Controllers\web\NewsController as WebNewsController;
use App\Http\Controllers\web\ProductsController as WebProductsController;


// Route::prefix('admin')->group(base_path('routes/admin.php'));
// Route::prefix('user')->group(base_path('routes/user.php'));


// Route::get('/',function() {
//     return view('index');
// });
// Route::get('/index',function() {
//     return view('index');
// });
// route::get('/products',function(){
//     return view('user.products');
// });
// Route::get('/app', function () {
//     return view('layouts.user.app');
// });
// Route::get('/about',function(){
//     return view('user.about');
// });
// Route::get('/contact',function(){
//     return view('user.contact');
// });
// Route::get('/news',function(){
//     return view('user.news');
// });
// Route::get('/newsdetails',function(){
//     return view('user.newsDetails');
// });
// Route::get('/cart',function(){
//     return view('user.cart');
// });
// Route::get('/productsdetails',function(){
//     return view('user.productsdetails');
// });
// Route::get('/test',[HomeController::class,'index']);

//admin
Route::prefix('admin')->group(function(){
    Route::prefix('home')->group(function(){
        Route::get('',[HomeController::class,'index'])->name('admin.index');
    });
    Route::prefix('category')->group(function(){
        Route::get('',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('create',[CategoryController::class,'create'])->name('admin.category.create');
        Route::post('store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::delete('delete/{id}',[CategoryController::class,'destroy'])->name('admin.category.delete');
    });
    Route::prefix('products')->group(function(){
        Route::get('',[ProductsController::class,'index'])->name('admin.products.index');
        Route::get('create',[ProductsController::class,'create'])->name('admin.products.create');
        Route::post('store',[ProductsController::class,'store'])->name('admin.products.store');
        Route::get('edit/{id}',[ProductsController::class,'edit'])->name('admin.products.edit');
        Route::put('update/{product}',[ProductsController::class,'update'])->name('admin.products.update');
        Route::delete('delete/{id}',[ProductsController::class,'destroy'])->name('admin.products.delete');
    });
    Route::prefix('news')->group(function(){
        Route::get('',[NewsController::class,'index'])->name('admin.news.index');
        Route::get('create',[NewsController::class,'create'])->name('admin.news.create');
        Route::post('store',[NewsController::class,'store'])->name('admin.news.store');
        Route::get('edit/{news}',[NewsController::class,'edit'])->name('admin.news.edit');
        Route::put('update/{news}',[NewsController::class,'update'])->name('admin.news.update');
        Route::post('/news/upload', [NewsController::class, 'upload'])->name('admin.news.upload');
        Route::delete('delete/{news}',[NewsController::class,'destroy'])->name('admin.news.delete');
    });
    Route::prefix('about')->group(function(){
        Route::get('',[AboutController::class,'index'])->name('admin.about.index');
        Route::get('create',[AboutController::class,'create'])->name('admin.about.create');
        Route::post('store',[AboutController::class,'store'])->name('admin.about.store');
        Route::get('edit/{about}',[AboutController::class,'edit'])->name('admin.about.edit');
        Route::put('update/{about}',[AboutController::class,'update'])->name('admin.about.update');
        Route::delete('delete/{about}',[AboutController::class,'destroy'])->name('admin.about.delete');
    });
    Route::prefix('contact')->group(function(){
        Route::get('',[ContactController::class,'index'])->name('admin.contact.index');
        Route::get('create',[ContactController::class,'create'])->name('admin.contact.create');
        Route::post('store',[ContactController::class,'store'])->name('admin.contact.store');
        Route::get('edit/{contact}',[ContactController::class,'edit'])->name('admin.contact.edit');
        Route::put('update/{contact}',[ContactController::class,'update'])->name('admin.contact.update');
        Route::delete('delete/{contact}',[ContactController::class,'destroy'])->name('admin.contact.delete');
    });
    Route::prefix('user')->group(function(){
        Route::get('',[UserController::class,'index'])->name('admin.user.index');
        Route::get('create',[UserController::class,'create'])->name('admin.user.create');
        Route::post('store',[UserController::class,'store'])->name('admin.user.store');
        Route::get('edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::put('update/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::get('delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
    });
});

//web
Route::get('/',[WebHomeController::class,'index'])->name('web.index');
Route::get('category',[WebCategoryController::class,'category'])->name('web.category');
Route::get('products',[WebProductsController::class,'products'])->name('web.products');
Route::get('news',[WebNewsController::class,'news'])->name('web.news');
Route::get('about',[WebAboutController::class,'about'])->name('web.about');
Route::get('contact',[WebContactController::class,'contact'])->name('web.contact');

