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
                <div class="container mx-auto p-4">
                    <div class="article-details">
                        <h1 class="text-3xl font-bold mb-2">
                            <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau" class="text-blue-600 hover:underline">
                                Tự chế món thạch sữa chua thanh long lung linh sắc màu
                            </a>
                        </h1>
                        <div class="text-gray-500 mb-4">08/10/2018</div>
                        <div class="article-image mb-4">
                            <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau">
                                <img class="w-full h-auto rounded-lg shadow-lg" src="http://file.hstatic.net/1000324420/article/blog-img-2.jpg" alt="Tự chế món thạch sữa chua thanh long lung linh sắc màu">
                            </a>
                        </div>

                        <div class="article-content text-gray-700 leading-relaxed">
                            <p>Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ...</p>
                            <p><strong>Nguyên liệu:</strong></p>
                            <ul class="list-disc list-inside">
                                <li>Thanh long đỏ: ½ quả</li>
                                <li>Đường: 30g</li>
                                <li>Sữa chua có đường: 260g</li>
                                <li>Lá gelatin: 4 lá</li>
                                <li>1 bát nước đá lạnh</li>
                                <li>200ml nước</li>
                                <li>Cốc hoặc ly</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <div class="tags space-x-2">
                            <span class="text-gray-500">Tags:</span>
                            <a href="/blogs/all/tagged/dualeo" class="text-blue-600 hover:underline">dualeo</a>,
                            <a href="/blogs/all/tagged/qua" class="text-blue-600 hover:underline">quả</a>,
                            <a href="/blogs/all/tagged/rau-cu" class="text-blue-600 hover:underline">rau củ</a>,
                            <a href="/blogs/all/tagged/thuc-pham" class="text-blue-600 hover:underline">thực phẩm</a>
                        </div>

                        <div class="social-media flex space-x-2">
                            <label class="text-gray-500">Chia sẻ:</label>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fa fa-facebook-official"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-semibold mb-4">3 bình luận</h5>
                        <div class="space-y-4">
                            <div class="flex space-x-4 items-start">
                                <img src="https://www.gravatar.com/avatar/6d22c958806868a7205879d2dd1c8d91?s=110&amp;d=identicon" alt="binh-luan" class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="font-bold">Hoàng Thị Tuy</p>
                                    <span class="text-gray-500 text-sm">29/10/2019</span>
                                    <p class="mt-1">Bài viết cảm động.</p>
                                </div>
                            </div>
                            <div class="flex space-x-4 items-start">
                                <img src="https://www.gravatar.com/avatar/6167e0bd8d14db2861a6bba3e2bfef9d?s=110&amp;d=identicon" alt="binh-luan" class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="font-bold">Minh</p>
                                    <span class="text-gray-500 text-sm">29/10/2019</span>
                                    <p class="mt-1">Rất tuyệt vời!</p>
                                </div>
                            </div>
                            <div class="flex space-x-4 items-start">
                                <img src="https://www.gravatar.com/avatar/8c1a93ecb4f72042fde07d8b739d6db2?s=110&amp;d=identicon" alt="binh-luan" class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="font-bold">tester</p>
                                    <span class="text-gray-500 text-sm">08/10/2018</span>
                                    <p class="mt-1">test</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection()