@extends('layouts.admin.master')
@section('title')
Quản Lý Giới Thiệu
@endsection()
@section('content')
<h1>Edit About Section</h1>
    <form action="{{ route('admin.about.update', $about) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $about->title }}" required>
        </div>
        <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" id="editor" class="form-control">{{old('content', $about->content)}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.news.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>