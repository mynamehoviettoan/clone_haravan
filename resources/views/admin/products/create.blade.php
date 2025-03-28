@extends('layouts.admin.master')
@section('title')
Thêm Mới Sản phẩm
@endsection()
@section('content')
<h2>Thêm sản phẩm</h2>
<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Mã sản phẩm:</label>
    <input type="text" name="code" class="form-control" required>

    <label>Tên sản phẩm:</label>
    <input type="text" name="name" class="form-control" required>

    <label>Danh mục:</label>
    <select name="category_id" class="form-control">
        <option value="">-- Chọn danh mục --</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label>Trạng thái:</label>
    <select name="status" class="form-control">
        <option value="active">Đăng bán</option>
        <option value="inactive">Ngừng bán</option>
    </select>
    <label for="original_price">Giá gốc:</label>
    <input type="number" name="original_price" id="original_price" class="form-control"
        value="{{ old('original_price', $product->original_price ?? '') }}">
    <label>Giá:</label>
    <input type="number" name="price" class="form-control" required>

    <label>Mô tả ngắn:</label>
    <textarea name="short_description" class="form-control"></textarea>

    <label>Mô tả đầy đủ:</label>
    <textarea name="content" id="editor" class="form-control"></textarea>

    <label>Thông số kỹ thuật:</label>
    <textarea name="specifications" class="form-control"></textarea>

    <label>Ảnh đại diện:</label>
    <input type="file" name="thumbnail" class="form-control">

    <label>Album ảnh:</label>
    <input type="file" name="album[]" class="form-control" multiple>

    <button type="submit" class="btn btn-success mt-3">Lưu</button>
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