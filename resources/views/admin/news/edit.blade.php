@extends('layouts.admin.master')
@section('title')
Chỉnh Sửa Tin Tức
@endsection()
@section('content')
<h1>Edit News</h1>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ $news->title }}" class="form-control">

        <label for="content">Nội dung:</label>
    <textarea name="content" id="editor" class="form-control">{{ old('content', $news->content) }}</textarea>

        <label>Image:</label>
        <input type="file" name="image" class="form-control">
        @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" width="100">
        @endif

        <label>Status:</label>
        <select name="status" class="form-control">
            <option value="published" {{ $news->status == 'published' ? 'selected' : '' }}>Published</option>
            <option value="draft" {{ $news->status == 'draft' ? 'selected' : '' }}>Draft</option>
        </select>

        <button type="submit" class="btn btn-success mt-3">Update</button>
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