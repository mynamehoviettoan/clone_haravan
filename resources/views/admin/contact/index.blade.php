@extends('layouts.admin.master')
@section('content')
@section('title')
Danh Mục Liên Hệ
@endsection()
<h1>Contact List</h1>
    <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">Add Contact</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <tr><th>ID</th><th>Address</th><th>Phone</th><th>Email</th><th>Actions</th></tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="{{ route('admin.contact.edit', $contact) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.contact.delete', $contact) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection()