@extends('layouts.admin.master')
@section('title')
Quản Lý Tin Tức
@endsection()
@section('content')
<h3 class="title-page">Tin Tức</h3>
<form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" id="editor" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Lưu bài viết</button>
        </form>
@endsection()