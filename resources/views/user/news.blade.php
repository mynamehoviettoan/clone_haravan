@extends('layouts.user.app')
@section('content')
<div class="w-full mx-auto md:block top-0 mx-auto px-12">
    <section class="py-4 bg-gray-100">
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
                    <li class="font-semibold text-gray-800">Tất cả sản phẩm</li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-12 gap-4">

            <aside class="col-span-3">
                <!-- Danh mục -->
                <div class="p-0 rounded-2xl border-2 mb-4">
                    <h2 class="text-lg font-bold text-gray-700 mb-4 bg-[rgb(128,187,53)] rounded-2xl block p-2">Danh mục tin tức</h2>
                    <ul class="space-y-2">
                        <li class="group">
                            <a href="/" class="block p-2 text-gray-700 hover:bg-gray-200 rounded flex justify-between items-center">
                                Trang chủ <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="hidden group-hover:block ml-4 mt-1 space-y-1">
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Trang chủ kiểu 1</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Trang chủ kiểu 2</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Trang chủ kiểu 3</a></li>
                            </ul>
                        </li>
                        <li class="group">
                            <a href="/collections/all" class="block p-2 text-gray-700 hover:bg-gray-200 rounded flex justify-between items-center">
                                Sản phẩm <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="hidden group-hover:block ml-4 mt-1 space-y-1">
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Rau củ</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Hoa quả</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Thịt</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Hải sản</a></li>
                            </ul>
                        </li>
                        <li><a href="/blogs/news" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Tin tức</a></li>
                        <li><a href="/pages/about-us" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Giới thiệu</a></li>
                        <li><a href="/pages/lien-he" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- sản phẩm nổi bậc -->
                <div class="aside-item aside-mini-list-product mb-5 mt-5">
                    <div class="blog-aside aside-item aside-tags">
                        <div>
                            <div class="aside-title mb-3">
                                <h2 class="text-2xl font-bold mb-2 border-b-2 border-gray-300 pb-1"><span>Tags</span></h2>
                            </div>
                            <div class="aside-content list-tags bg-gray-100 p-4 rounded-lg shadow">
                                <p class="text-gray-600 italic">Hiện chưa có tag nào, vui lòng thêm tag cho sản phẩm và thiết lập trong <span class="font-semibold">Thiết lập giao diện → Trang tin tức</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tin nổi bậc -->
                <div class="p-4 bg-white shadow-lg rounded-lg">
                    <div class="mb-4 border-b pb-2">
                        <h2 class="text-xl font-semibold text-gray-800">
                            <a href="/blogs/news" class="hover:text-blue-500 transition duration-300">Tin nổi bật</a>
                        </h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau">
                                <img src="//file.hstatic.net/1000324420/article/blog-img-2_small.jpg" class="w-24 h-24 object-cover rounded-md shadow-sm hover:scale-105 transition-transform duration-300" alt="Tự chế món thạch sữa chua thanh long lung linh sắc màu">
                            </a>
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 hover:text-blue-500">
                                    <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau">Tự chế món thạch sữa chua thanh long lung linh sắc màu</a>
                                </h3>
                                <div class="text-sm text-gray-500">08/10/2018</div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian">
                                <img src="//file.hstatic.net/1000324420/article/blog-img-5_small.jpg" class="w-24 h-24 object-cover rounded-md shadow-sm hover:scale-105 transition-transform duration-300" alt="Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản">
                            </a>
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 hover:text-blue-500">
                                    <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</a>
                                </h3>
                                <div class="text-sm text-gray-500">08/10/2018</div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <a href="/blogs/news/vi-sao-hoa-qua-viet-that-the-truoc-con-loc-hang-nhap-ngoai">
                                <img src="//file.hstatic.net/1000324420/article/blog-img-3_small.jpg" class="w-24 h-24 object-cover rounded-md shadow-sm hover:scale-105 transition-transform duration-300" alt="Vì sao hoa quả Việt thất thế trước 'cơn lốc' hàng nhập ngoại">
                            </a>
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 hover:text-blue-500">
                                    <a href="/blogs/news/vi-sao-hoa-qua-viet-that-the-truoc-con-loc-hang-nhap-ngoai">Vì sao hoa quả Việt thất thế trước 'cơn lốc' hàng nhập ngoại?</a>
                                </h3>
                                <div class="text-sm text-gray-500">08/10/2018</div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <a href="/blogs/news/nhung-loai-trai-cay-nhat-dat-nhu-vang-rong-do-bo-ve-viet-nam">
                                <img src="//file.hstatic.net/1000324420/article/blog-img-7_small.jpg" class="w-24 h-24 object-cover rounded-md shadow-sm hover:scale-105 transition-transform duration-300" alt="Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam">
                            </a>
                            <div>
                                <h3 class="text-lg font-medium text-gray-700 hover:text-blue-500">
                                    <a href="/blogs/news/nhung-loai-trai-cay-nhat-dat-nhu-vang-rong-do-bo-ve-viet-nam">Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam</a>
                                </h3>
                                <div class="text-sm text-gray-500">08/10/2018</div>
                            </div>
                        </div>
                    </div>
                </div>

            </aside>
            <!-- tin tức -->
            <section class=" col-span-9 main_container collection col-lg-9 col-lg-push-3">
                <div class="category-products products">

                    <section class="products-view [&>product-box]:p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <section class="right-content col-span-9">
                            <div class="box-heading relative mb-4">
                                <h1 class="title-head page_title text-2xl font-bold">Tin tức</h1><span class="text-gray-500"> ( Có tất cả 8 bài viết ) </span>
                            </div>

                            <section class="list-blogs blog-main">
                                <div class="grid grid-cols-1 gap-4">
                                    <article class="blog-item flex border p-4 rounded-lg shadow-md">
                                        <div class="w-1/3">
                                            <a href="{{('/newsdetails')}}">
                                                <img class="w-full h-auto rounded-lg" src="//file.hstatic.net/1000324420/article/blog-img-2_large.jpg" alt="Tự chế món thạch sữa chua thanh long lung linh sắc màu">
                                            </a>
                                        </div>
                                        <div class="w-2/3 pl-4">
                                            <h3 class="blog-item-name text-lg font-semibold">
                                                <a href="{{('/newsdetails')}}" class="text-blue-500 hover:underline">Tự chế món thạch sữa chua thanh long lung linh sắc màu</a>
                                            </h3>
                                            <div class="post-time text-gray-400 text-sm">08/10/2018</div>
                                            <p class="blog-item-summary text-gray-700 mt-2">Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên...</p>
                                        </div>
                                    </article>

                                    <article class="blog-item flex border p-4 rounded-lg shadow-md">
                                        <div class="w-1/3">
                                            <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian">
                                                <img class="w-full h-auto rounded-lg" src="//file.hstatic.net/1000324420/article/blog-img-5_large.jpg" alt="Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản">
                                            </a>
                                        </div>
                                        <div class="w-2/3 pl-4">
                                            <h3 class="blog-item-name text-lg font-semibold">
                                                <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian" class="text-blue-500 hover:underline">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</a>
                                            </h3>
                                            <div class="post-time text-gray-400 text-sm">08/10/2018</div>
                                            <p class="blog-item-summary text-gray-700 mt-2">Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi. Nhưng người trồng cũng...</p>
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </section>


                        <!-- More products can follow this structure -->

                    </section>
                </div>
        </div>


        <!-- Pagination -->
        <div class="text-center mt-4">
            <nav>
                <ul class="pagination flex justify-center gap-2">
                    <li class="page-item disabled"><a class="page-link p-2 border rounded text-gray-400"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active page-item"><a class="page-link p-2 border rounded bg-blue-500 text-white">1</a></li>
                    <li class="page-item"><a class="page-link p-2 border rounded" onclick="doSearch(2)">2</a></li>
                    <li class="page-item"><a class="page-link p-2 border rounded text-blue-500" onclick="doSearch(2)"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection()