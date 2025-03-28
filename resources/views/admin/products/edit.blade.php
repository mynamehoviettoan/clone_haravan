@extends('layouts.admin.master')
@section('title')
Chỉnh Sửa Sản phẩm
@endsection()
@section('content')
<h2>Chỉnh sửa sản phẩm</h2>
<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <label>Mã sản phẩm:</label>
    <input type="text" name="code" class="form-control" value="{{ $product->code }}" required>

    <label>Tên sản phẩm:</label>
    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>

    <label>Danh mục:</label>
    <select name="category_id" class="form-control">
        <option value="">-- Chọn danh mục --</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
        @endforeach
    </select>

    <label>Trạng thái:</label>
    <select name="status" class="form-control">
        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Kích hoạt</option>
        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Ngừng bán</option>
    </select>

    <label for="original_price">Giá gốc:</label>
    <input type="number" name="original_price" id="original_price" class="form-control"
        value="{{ old('original_price', $product->original_price ?? '') }}">
        
    <label>Giá:</label>
    <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>

    <label>Mô tả ngắn:</label>
    <textarea name="short_description" class="form-control">{{ $product->short_description }}</textarea>

    <label>Mô tả đầy đủ:</label>
    <!-- <textarea name="full_description" class="form-control">{{ $product->full_description }}</textarea> -->
    <textarea name="content" id="editor" class="form-control">{{old('content', $product->full_description)}}</textarea>

    <label>Thông số kỹ thuật:</label>
    <textarea name="specifications" class="form-control">{{ $product->specifications }}</textarea>

    <label>Ảnh đại diện:</label>
    @if($product->thumbnail)
    <img src="{{ asset('storage/' . $product->thumbnail) }}" width="100"><br>
    @endif
    <input type="file" name="thumbnail" class="form-control">

    <label>Album ảnh:</label>
    @if($product->album)
    @foreach(json_decode($product->album, true) as $image)
    <img src="{{ asset('storage/' . $image) }}" width="50">
    @endforeach
    @endif
    <input type="file" name="album[]" class="form-control" multiple>

    <button type="submit" class="btn btn-success mt-3">Cập nhật</button>
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