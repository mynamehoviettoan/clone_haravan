@extends('layouts.user.app')
@section('content')
<div class="container">
    <h1>Category List</h1>
    <table class="table">
        <tr><th>ID</th><th>Name</th></tr>
        @foreach ($category as $categories)
            <tr>
                <td>{{ $categories->id }}</td>
                <td>{{ $categories->name }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection