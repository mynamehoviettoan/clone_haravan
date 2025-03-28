<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        About::create($request->all());
        return redirect()->route('admin.about.index')->with('success', 'About section created successfully.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        $about->update($request->all());
        return redirect()->route('admin.about.index')->with('success', 'About section updated successfully.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About section deleted successfully.');
    }
}
