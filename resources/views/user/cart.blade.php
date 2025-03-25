@extends('layouts.user.app')
@section('content')
<section class="py-4 px-12">
        <div class="container mx-auto px-4">
            <nav>
                <ol class="flex items-center space-x-2 text-sm text-gray-600">
                    <li>
                        <a href="/" class="hover:text-blue-500 transition duration-200 font-medium">
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <span class="text-gray-400"> <i class="fa fa-angle-right"></i> </span>
                    </li>
                    <li class="font-semibold text-gray-800">Giỏ hàng của bạn</li>
                </ol>
            </nav>
        </div>
    </section>
<div class="container mx-auto px-12 py-10">
    <p>không có sản phẩm nào,quay lại cửa hàng để tiếp tục mua sắm</p>
</div>
@endsection()