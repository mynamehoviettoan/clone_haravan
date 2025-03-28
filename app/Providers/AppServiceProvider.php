<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use \App\Models\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.header', function ($view) {
            $categories = Category::with('products')->get();
            $visibleCategories = $categories->take(4);
            $hiddenCategories = $categories->skip(5);
            $products = Product::all();

            $view->with([
                'products' => $products,
                'visibleCategories' => $visibleCategories,
                'hiddenCategories' => $hiddenCategories,
            ]);
        });
    }
}
