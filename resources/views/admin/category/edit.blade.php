@extends('layouts.admin.master')
@section('title')
Chỉnh Sửa Danh Mục
@endsection()
@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            <label>Code</label>
            <input type="text" name="code" class="form-control" value="{{ $category->code }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection