@extends('layouts.admin.master')
@section('title')
Quản Lý Giới Thiệu
@endsection()
@section('content')
<h1>About Us</h1>
    <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add About Info</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <tr><th>ID</th><th>Title</th><th>Actions</th></tr>
        @foreach ($about as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    <a href="{{ route('admin.about.edit', $item) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.about.delete', $item) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection