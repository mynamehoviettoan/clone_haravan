<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'nullable|exists:categories,id',
            'code' => 'required|unique:products,code',
            'name' => 'required|max:255',
            'status' => 'required|in:active,inactive',
            'original_price' => 'nullable|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'specifications' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'album' => 'nullable|array',
            'album.*' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        // Xử lý ảnh thumbnail
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('products', 'public');
        } else {
            $thumbnailPath = null;
        }
        // Xử lý album ảnh
        $albumPaths = [];
        if ($request->hasFile('album')) {
            foreach ($request->file('album') as $image) {
                $albumPaths[] = $image->store('products', 'public');
            }
        }
        Product::create([
            'category_id' => $request->category_id,
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
            'original_price' => $request->original_price,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'full_description' => $request->full_description,
            'specifications' => $request->specifications,
            'thumbnail' => $thumbnailPath,
            'album' => json_encode($albumPaths),
        ]);
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'nullable|exists:categories,id',
            'code' => 'nullable|unique:products,code,' . $product->id,
            'name' => 'required|max:255',
            'status' => 'required|in:active,inactive',
            'original_price' => 'nullable|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'specifications' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'album' => 'nullable|array',
            'album.*' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('products', 'public');
            $product->thumbnail = $thumbnailPath;
        }

        if ($request->hasFile('album')) {
            $albumPaths = [];
            foreach ($request->file('album') as $image) {
                $albumPaths[] = $image->store('products', 'public');
            }
            $product->album = json_encode($albumPaths);
        }

        $product->update($request->except(['thumbnail', 'album']));
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
