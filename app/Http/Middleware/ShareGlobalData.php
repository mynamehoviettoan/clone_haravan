<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Category;
use \App\Models\Product;
use Illuminate\Support\Facades\View;

class ShareGlobalData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $categories = Category::with(['products' => function ($query) {
            $query->take(10); // Giới hạn số sản phẩm khi lấy từ database
        }])->get();

        $visibleCategories = $categories->take(4);
        $hiddenCategories = $categories->skip(5);
        $products = Product::take(5)->get();

        // Share dữ liệu với tất cả views
        View::share([
            'products' => $products,
            'visibleCategories' => $visibleCategories,
            'hiddenCategories' => $hiddenCategories,
        ]);
    
            return $next($request);
        }
}
