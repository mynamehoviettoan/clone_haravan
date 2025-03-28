<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:published,draft',
        ]);
        //xử lý ảnh 
        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('news', 'public');
            // dd($request->file('image'));
            // $thumbnailData = json_encode(['image_path' => $imagePath]); // Lưu dưới dạng object

        } else {
            $imagePath = null;
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => json_encode($imagePath),
            'status' => $request->status,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|in:published,draft',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
            $news->image = $imagePath;
        }

        $news->update($request->except('image'));

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('news_images', $filename, 'public');

            $url = asset('storage/' . $path);
            return response()->json([
                'fileName' => $filename,
                'uploaded' => 1,
                'url' => $url
            ]);
        }
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete('public/' . $news->image);
        }

        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
