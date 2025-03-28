@extends('layouts.admin.master')
@section('title')
Thêm Mới Danh Mục
@endsection()
@section('content')
<div class="container">
    <h1>Add Category</h1>
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
            <!-- <label>Code</label>
            <input type="text" name="code" class="form-control" required> -->
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection()