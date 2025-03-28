@extends('layouts.admin.master')
@section('title')
Thêm Mới Tin Tức
@endsection()
@section('content')
<h1>Create News</h1>
<form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" class="form-control">

    <label for="content">Nội dung:</label>
    <textarea name="content" id="editor" class="form-control"></textarea>

    <label>Image:</label>
    <input type="file" name="thumbnail" class="form-control">

    <label>Status:</label>
    <select name="status" class="form-control">
        <option value="published">Published</option>
        <option value="draft">Draft</option>
    </select>

    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>
@endsection()
@push('script')
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.news.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endpush()