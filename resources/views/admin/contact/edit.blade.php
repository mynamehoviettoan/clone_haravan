@extends('layouts.admin.master')
@section('content')
@section('title')
Chỉnh Sửa Liên Hệ
@endsection()
<h1>Edit Contact</h1>
    <form action="{{ route('admin.contact.update', $contact) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ $contact->address }}" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection()