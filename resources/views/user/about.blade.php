@extends('layouts.user.app')
@section('content')
<section class="py-4 bg-gray-100">
    <div class="container mx-auto px-12">
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
                <li class="font-semibold text-gray-800">Liên hệ</li>
            </ol>
        </nav>
    </div>
</section>
<div class="w-full px-12">
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-800 hover:text-blue-500">
            <a href="#">Giới thiệu</a>
        </h1>
    </div>
    <div class="content-page text-gray-700 leading-relaxed">
        <p class="mb-4">
            Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.
        </p>
        <p class="font-semibold mb-2">Một vài gợi ý cho nội dung trang Giới thiệu:</p>
        <ul class="list-disc pl-5 space-y-2">
            <li><span>Bạn là ai</span></li>
            <li><span>Giá trị kinh doanh của bạn là gì</span></li>
            <li><span>Địa chỉ cửa hàng</span></li>
            <li><span>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</span></li>
            <li><span>Bạn kinh doanh ngành hàng online được bao lâu</span></li>
            <li><span>Đội ngũ của bạn gồm những ai</span></li>
            <li><span>Thông tin liên hệ</span></li>
            <li><span>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</span></li>
        </ul>
        <p class="mt-4">
            Bạn có thể chỉnh sửa hoặc xoá bài viết này tại
            <a href="https://dualeo-x.myharavan.com/admin/page#/detail/1000646950" class="text-blue-500 font-semibold hover:underline">đây</a>
            hoặc thêm những bài viết mới trong phần quản lý
            <a href="https://dualeo-x.myharavan.com/admin/page#/new" class="text-blue-500 font-semibold hover:underline">Trang nội dung</a>.
        </p>
    </div>
</div>
@endsection()