@extends('layouts.admin.master')
@section('title')
Danh Mục Sản phẩm
@endsection()
@section('content')
<h2>Danh sách sản phẩm</h2>
<a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-4">Thêm sản phẩm</a>

<table class="table bg-white">
    <thead>
        <tr>
            <th class="">ID</th>
            <th class="">Mã SP</th>
            <th class="">Tên</th>
            <th class="">Danh mục</th>
            <th class="">Trạng thái</th>
            <th>Giá Gốc</th>
            <th>Giá Bán</th>
            <th class="">Giảm Giá</th>
            <th class="">Mô tả ngắn</th>
            <th class="">Ảnh</th>
            <th class="">Albun Ảnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="">
            <td class="">{{ $product->id }}</td>
            <td class="">{{ $product->code }}</td>
            <td class="">{{ $product->name }}</td>
            <td class="">{{ $product->category->name ?? 'Không có danh mục' }}</td>
            <td class="">{{ $product->status }}</td>
            <td>
                @if($product->original_price && $product->original_price > $product->price)
                <s>{{ number_format($product->original_price, 0, ',', '.') }}đ</s>
                @else
                
                @endif
            </td>

            <td>Giá bán: {{ number_format($product->price, 0, ',', '.') }}đ</td>
            <td>
                @if($product->original_price && $product->original_price > $product->price)
                {{ round((($product->original_price - $product->price) / $product->original_price) * 100) }}%
                @else
                
                @endif
            </td>
            <td class="">{{ Str::limit($product->short_description, 50) }}</td>
            <td class="">
                @if($product->thumbnail)
                <img src="{{ asset('storage/' . $product->thumbnail) }}" width="50">
                @endif
            </td>
            <td>
                <!-- Ảnh đại diện, khi click sẽ mở modal -->
                @if($product->thumbnail)
                <img src="{{ asset('storage/' . $product->thumbnail) }}" width="50" onclick="openModal('{{ $product->id }}')" style="cursor: pointer;">
                @endif
            </td>

            <!-- Modal -->
            <div class="modal fade" id="albumModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Album ảnh</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            @if($product->album)
                            @foreach(json_decode($product->album, true) as $image)
                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid m-2" width="150">
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@push('script')
<script>
    function openModal(productId) {
        var modalId = "#albumModal" + productId;
        var modal = new bootstrap.Modal(document.querySelector(modalId));
        modal.show();
    }
</script>
@endpush()