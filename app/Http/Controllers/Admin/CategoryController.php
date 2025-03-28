<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        // Tạo slug từ name
        $slug = Str::slug($request->name, '-');

        // Kiểm tra slug có bị trùng không
        $count = Category::where('code', 'LIKE', "$slug%")->count();

        // Nếu trùng, thêm số đếm vào slug
        $finalSlug = $count ? "$slug-" . ($count + 1) : $slug;

        // Tạo danh mục mới
        Category::create([
            'name' => $request->name,
            'code' => $finalSlug,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully.');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|max:255']);
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
