@extends('layouts.admin.master')
@section('title')
Danh Mục Tin Tức
@endsection()
@section('content')
<h1>News List</h1>
<a href="{{ route('admin.news.create') }}" class="btn btn-primary">Create News</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    @foreach($news as $item)
    <tr>
        <td>{{ $item->title }}</td>
        <td>{{ $item->status }}</td>
        <td>
            @if($item->thumbnail)
            <img src="{{ asset('storage/' . json_decode($item->thumbnail))}}" width="50">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.news.delete', $item->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection()