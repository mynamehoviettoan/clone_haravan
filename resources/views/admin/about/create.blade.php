@extends('layouts.admin.master')
@section('title')
Quản Lý Giới Thiệu
@endsection()
@section('content')
<h1>Add About Section</h1>
    <form action="{{ route('admin.about.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" id="editor" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
@push('script')
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.news.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endpush()