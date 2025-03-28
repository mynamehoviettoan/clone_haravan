@extends('layouts.admin.master')
@section('content')
@section('title')
Thêm Mới Liên Hệ
@endsection()
<h1>Add Contact</h1>
    <form action="{{ route('admin.contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection()