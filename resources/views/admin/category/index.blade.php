@extends('layouts.admin.master')
@section('title')
Danh Mục Sản Phẩm
@endsection()
@section('content')
<div class="container">
    <h1>Category List</h1>
    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Category</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <tr><th>ID</th><th>Name</th><th>Code</th><th>Actions</th></tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->code }}</td>
                <td>
                    <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection()