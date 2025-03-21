<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',function() {
    return view('home.home');
});
Route::get('/home',function() {
    return view('home.home');
});
route::get('/products',function(){
    return view('layout.products');
});
Route::get('/app', function () {
    return view('layout.app');
});
Route::get('/about',function(){
    return view('layout.about');
});
Route::get('/contact',function(){
    return view('layout.contact');
});

Route::get('/test',[HomeController::class,'index']);