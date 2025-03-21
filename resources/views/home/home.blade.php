@extends('layout.app')
@section('content')
<section class="container mx-auto px-12 py-10">
    <div class="grid grid-cols-12 gap-4">
        <!-- Sidebar danh mục -->
        <aside class="col-span-3 bg-white shadow-lg rounded-lg p-4">
            <!-- <div class="text-center md:text-left">
                    
                </div> -->
            <div class="mt-3">
                <ul class="grid grid-cols-1 gap-2 transition-all duration-300" id="category-list">
                    <li class="text-xl font-bold text-gray-800">Danh mục</li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Rau tươi sạch</a></li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Thịt tươi sạch</a></li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Hải sản tươi sống</a></li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Hải sản nhập khẩu</a></li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Trái cây miền Nam</a></li>
                    <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Hoa quả sạch</a></li>

                    <!-- Các item ẩn -->
                    <div id="hidden-items" class="grid grid-cols-1 gap-2 hidden">
                        <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Hàng nhập khẩu</a></li>
                        <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Rau quả Đà Lạt</a></li>
                        <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Sản phẩm nổi bật</a></li>
                        <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Sản phẩm khuyến mãi</a></li>
                        <li class="nav-item py-2"><i class="fa fa-arrow-circle-right text-green-500"></i> <a class="nav-link text-gray-700 hover:text-green-600 transition" href="#">Tất cả sản phẩm</a></li>
                    </div>
                    <!-- Nút Xem thêm -->
                    <li id="xem-them" class="hover:underline cursor-pointer py-2">
                        <i class="fa fa-arrow-circle-right"></i>
                        <span> Xem thêm</span>
                    </li>

                    <!-- Nút Thu gọn -->
                    <li id="thu-gon" class="hover:underline cursor-pointer hidden py-2">
                        <i class="fa fa-arrow-circle-right"></i>
                        <span> Thu gọn</span>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Slider banner -->
        <div class="col-span-9 bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img
                            src="//theme.hstatic.net/1000324420/1000664192/14/slider_1.jpg?v=52"
                            class="w-full object-cover transition-transform duration-300 ease-in-out"
                            alt="Banner 1" />
                    </div>
                    <div class="swiper-slide">
                        <img
                            src="//theme.hstatic.net/1000324420/1000664192/14/slider_2.jpg?v=52"
                            class="w-full object-cover transition-transform duration-300 ease-in-out"
                            alt="Banner 2" />
                    </div>
                </div>

                <!-- Nút chuyển slide -->
                <div class="swiper-button-next !text-black !font-bold"></div>
                <div class="swiper-button-prev !text-black !font-bold"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section id="awe-section-2" class="py-10 px-12">
    <div class="container mx-auto">
        <h2 class="sr-only">Banner</h2>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <a href="#" class="block">
                        <img
                            src="https://theme.hstatic.net/1000324420/1000664192/14/banner1.jpg?v=52"
                            alt="Banner 1"
                            class="w-full h-auto rounded-lg shadow-md transition-transform duration-300" />
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <a href="#" class="block">
                        <img
                            src="https://theme.hstatic.net/1000324420/1000664192/14/banner2.jpg?v=52"
                            alt="Banner 2"
                            class="w-full h-auto rounded-lg shadow-mdz transition-transform duration-300" />
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <a href="#" class="block">
                        <img
                            src="https://theme.hstatic.net/1000324420/1000664192/14/banner3.jpg?v=52"
                            alt="Banner 3"
                            class="w-full h-auto rounded-lg shadow-mdz transition-transform duration-300" />
                    </a>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <div class="swiper-button-next !text-black !font-bold"></div>
            <div class="swiper-button-prev !text-black !font-bold"></div>

            <!-- Dấu chấm chỉ trang -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="p-6 px-12">
    <div class="flex items-center gap-4 justify-between">
        <button class="bg-green-500 text-black font-bold py-2 px-4 rounded-full">
            TRÁI CÂY MỖI NGÀY
        </button>
        <div class="flex space-x-6 text-gray-600 text-lg">
            <a href="#" class="text-green-500 font-bold border-b-2 border-green-500 pb-1">Rau tươi sạch</a>
            <a href="#" class="hover:text-green-500">Thịt tươi sạch</a>
            <a href="#" class="hover:text-green-500">Hải sản tươi sống</a>
            <a href="#" class="hover:text-green-500">Hải sản nhập khẩu</a>
            <a href="#" class="hover:text-green-500">Trái cây miền nam</a>
        </div>
    </div>

    <!-- Danh sách sản phẩm -->
    <div class="mt-6 grid grid-cols-4 gap-6">

        <!-- Sản phẩm 1 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <!-- Nhãn giảm giá -->
                <span class="absolute mt-2 text-white text-sm px-3 py-1 bg-[rgb(254,151,5)]">-13%</span>
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="#" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view open-modal-btn quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>
        <!-- detail product_1 -->
        <div class="hidden product-modal inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-3/4 md:w-2/3 lg:w-1/2 relative">
                <!-- Close button -->
                <button class="absolute top-2 right-2 text-xl font-bold text-gray-700 hover:text-red-500">&times;</button>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Left: Product Image & Thumbnails -->
                    <div>
                        <div class="mb-4">
                            <img id="product-featured-image-quickview" class="w-full h-auto rounded" src="https://product.hstatic.net/1000324420/product/upload_963fbe98fc324f47b37e38a3481c22e1.jpg" alt="quickview">
                        </div>
                        <div class="flex gap-2 overflow-x-auto">
                            <img class="w-20 h-20 cursor-pointer border-2 border-transparent hover:border-green-500 rounded" src="//product.hstatic.net/1000324420/product/upload_963fbe98fc324f47b37e38a3481c22e1_compact.jpg" alt="thumb">
                            <img class="w-20 h-20 cursor-pointer border-2 border-transparent hover:border-green-500 rounded" src="//product.hstatic.net/1000324420/product/upload_b191e9fa359e4fd49b24e591545e7a79_compact.jpg" alt="thumb">
                            <img class="w-20 h-20 cursor-pointer border-2 border-transparent hover:border-green-500 rounded" src="//product.hstatic.net/1000324420/product/upload_4bdb98100d0342bf9f5314f89e71d937_compact.jpg" alt="thumb">
                        </div>
                    </div>

                    <!-- Right: Product Details -->
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Chanh Dây đỏ Úc</h2>
                        <div class="text-green-600 font-semibold text-xl">400,000₫</div>
                        <div class="text-gray-500 line-through">460,000₫ <span class="text-red-500">(-14%)</span></div>
                        <div class="mt-2 text-gray-600">Trạng thái: <span class="text-green-500"><i class="fa fa-check"></i> Còn hàng</span></div>
                        <p class="mt-4 text-sm">Giá trị dinh dưỡng: Nho tươi cung cấp vitamin A, C, calcium và sắt giúp duy trì sức khỏe, tốt cho tim mạch.</p>
                        <p class="mt-2 text-gray-700"><strong>Hãng sản xuất:</strong> Canada</p>

                        <!-- Quantity & Add to Cart -->
                        <div class="mt-4 flex items-center gap-4">
                            <label for="quantity" class="font-medium">Số lượng</label>
                            <input type="number" id="quantity" name="quantity" value="1" class="w-16 text-center border border-gray-300 rounded">
                        </div>
                        <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sản phẩm 2 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

        <!-- Sản phẩm 3 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

        <!-- Sản phẩm 4 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

    </div>
</section>

<section class="bg-white p-6 px-12">
    <div class="flex items-center gap-4 justify-between">
        <button class="bg-green-500 text-black font-bold py-2 px-4 rounded-full">
            TRÁI CÂY MỖI NGÀY
        </button>
        <div class="flex space-x-6 text-gray-600 text-lg">
            <a href="#" class="text-green-500 font-bold border-b-2 border-green-500 pb-1">Rau tươi sạch</a>
            <a href="#" class="hover:text-green-500">Thịt tươi sạch</a>
            <a href="#" class="hover:text-green-500">Hải sản tươi sống</a>
            <a href="#" class="hover:text-green-500">Hải sản nhập khẩu</a>
            <a href="#" class="hover:text-green-500">Trái cây miền nam</a>
        </div>
    </div>

    <!-- Danh sách sản phẩm -->
    <div class="mt-6 grid grid-cols-4 gap-6">

        <!-- Sản phẩm 1 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <!-- Nhãn giảm giá -->
                <span class="absolute mt-2 text-white text-sm px-3 py-1 bg-[rgb(254,151,5)]">-13%</span>
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>
        <!-- Sản phẩm 2 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

        <!-- Sản phẩm 3 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

        <!-- Sản phẩm 4 -->
        <div class="product-box relative py-8 mt-8 border rounded-lg shadow hover:shadow-lg transition">
            <!-- Hình ảnh sản phẩm -->
            <div class="relative group">
                <img src="{{asset('assets/images/cachua.png')}}" alt="Ca Chua" class="w-full h-40 object-cover rounded">

                <!-- Nút giỏ hàng và xem nhanh -->
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                        <i class="fa fa-shopping-bag"></i>
                    </button>
                    <a href="/products/chanh-day-do-uc" data-toggle="tooltip" title="Xem nhanh"
                        class="btn_view quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>

            <!-- Tên sản phẩm -->
            <p class="mt-4 text-gray-700 text-center">Chanh Dây đỏ Úc</p>

            <!-- Giá sản phẩm -->
            <p class="text-orange-500 font-bold text-lg text-center">
                400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
            </p>

        </div>

    </div>
</section>

<section class="px-12" id="awe-section-5">
    <div class="section_banner py-8">
        <div class="container mx-auto">
            <h2 class="hidden">Banner</h2>
            <div class="banner-image-col-tab">
                <div class="row flex justify-center items-center gap-4">
                    <div class="item mb-4">
                        <a href="#" class="block">
                            <img class="w-full h-auto object-cover rounded-lg shadow-md"
                                src="//theme.hstatic.net/1000324420/1000664192/14/banner_coltab2_1.png?v=52"
                                alt="Banner Image"
                                loading="lazy" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="px-12" id="awe-section-7">
    <div class="section_banner py-8">
        <div class="container mx-auto">
            <h2 class="hidden">Banner</h2>
            <div class="banner-image-col-tab">
                <div class="row grid grid-cols-1 md:grid-cols-2 gap-4 justify-center items-center">
                    <!-- Banner 1 -->
                    <div class="item mb-4">
                        <a href="#" class="block">
                            <img class="w-full h-auto object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300"
                                src="//theme.hstatic.net/1000324420/1000664192/14/banner_coltab3_1.png?v=52"
                                alt="Banner 1"
                                loading="lazy" />
                        </a>
                    </div>

                    <!-- Banner 2 -->
                    <div class="item px-4 mb-4">
                        <a href="#" class="block">
                            <img class="w-full h-auto object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300"
                                src="//theme.hstatic.net/1000324420/1000664192/14/banner_coltab3_2.png?v=52"
                                alt="Banner 2"
                                loading="lazy" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="awe-section-8 py-10 px-12">
    <div class="container mx-auto">
        <!-- Tiêu đề -->
        <div class="section-title text-center mb-6">
            <h2 class="text-xl font-lg text-white flex items-center justify-center">
                <div class="h-[2px] w-[44%] bg-[rgb(254,151,5)]"></div>
                <a href="/blogs/news" class="hover:text-blue-500 transition-colors px-4 bg-[rgb(128,187,53)] p-1 rounded-2xl">Tin cập nhật</a>
                <div class="h-[2px] w-[44%] bg-[rgb(254,151,5)]"></div>
            </h2>
            <p class="text-gray-600">Tin tức vệ sinh an toàn thực phẩm cập nhật mới nhất<br> mỗi ngày cho bạn</p>
        </div>

        <!-- Swiper slider -->
        <div class="swiper mySwiperBlog">
            <div class="swiper-wrapper">
                <!-- Bài viết 1 -->
                <div class="swiper-slide">
                    <article class="blog-item text-center bg-white rounded-lg shadow-md overflow-hidden">
                        <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau">
                            <img src="//file.hstatic.net/1000324420/article/blog-img-2_large.jpg"
                                alt="Tự chế món thạch sữa chua thanh long lung linh sắc màu"
                                class="w-full h-52 object-cover">
                        </a>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">
                                <a href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau"
                                    class="text-gray-800 hover:text-blue-500 transition-colors">
                                    Tự chế món thạch sữa chua thanh long lung linh sắc màu
                                </a>
                            </h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ...
                            </p>
                            <a class="btn inline-block mt-3 text-blue-600 font-medium hover:text-blue-700"
                                href="/blogs/news/tu-che-mon-thach-sua-chua-thanh-long-lung-linh-sac-mau">
                                Chi tiết →
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Bài viết 2 -->
                <div class="swiper-slide">
                    <article class="blog-item text-center bg-white rounded-lg shadow-md overflow-hidden">
                        <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian">
                            <img src="//file.hstatic.net/1000324420/article/blog-img-5_large.jpg"
                                alt="Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản"
                                class="w-full h-52 object-cover">
                        </a>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">
                                <a href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian"
                                    class="text-gray-800 hover:text-blue-500 transition-colors">
                                    Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản
                                </a>
                            </h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình...
                            </p>
                            <a class="btn inline-block mt-3 text-blue-600 font-medium hover:text-blue-700"
                                href="/blogs/news/ky-thuat-trong-rau-sach-trong-chau-xop-tai-nha-don-gian">
                                Chi tiết →
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Bài viết 3 -->
                <div class="swiper-slide">
                    <article class="blog-item text-center bg-white rounded-lg shadow-md overflow-hidden">
                        <a href="/blogs/news/vi-sao-hoa-qua-viet-that-the-truoc-con-loc-hang-nhap-ngoai">
                            <img src="//file.hstatic.net/1000324420/article/blog-img-3_large.jpg"
                                alt="Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?"
                                class="w-full h-52 object-cover">
                        </a>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">
                                <a href="/blogs/news/vi-sao-hoa-qua-viet-that-the-truoc-con-loc-hang-nhap-ngoai"
                                    class="text-gray-800 hover:text-blue-500 transition-colors">
                                    Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?
                                </a>
                            </h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                Rau củ quả Việt Nam đang dần khẳng định tên tuổi của mình trên thị trường quốc tế...
                            </p>
                            <a class="btn inline-block mt-3 text-blue-600 font-medium hover:text-blue-700"
                                href="/blogs/news/vi-sao-hoa-qua-viet-that-the-truoc-con-loc-hang-nhap-ngoai">
                                Chi tiết →
                            </a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Nút điều hướng -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="awe-section-9 px-12" id="awe-section-9">
    <div class="section section_testimonial py-10">
        <div class="container mx-auto">
            <div class="section-title text-center mb-6">
                <h2 class="text-xl font-lg text-white flex items-center justify-center mb-2">
                    <div class="h-[2px] w-[44%] bg-[rgb(254,151,5)]"></div>
                    <a href="#" class="px-4 bg-[rgb(128,187,53)] p-1 rounded-2xl">Phản hồi của khách</a>
                    <div class="h-[2px] w-[44%] bg-[rgb(254,151,5)]"></div>
                </h2>
                <p class="text-gray-600">Phản hồi của những khách hàng đã và đang sử dụng sản phẩm trong suốt những năm qua</p>
            </div>
            <div class="section-content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center p-4 bg-white shadow-lg rounded-lg">
                            <div class="image-avatar mb-4">
                                <img src="//theme.hstatic.net/1000324420/1000664192/14/testimonial_1.jpg?v=52" alt="Người mẫu - Ngọc Trinh" class="mx-auto rounded-full w-24 h-24 object-cover">
                            </div>
                            <h4 class="text-xl font-semibold">Người mẫu - Ngọc Trinh</h4>
                            <p class="text-gray-500 mt-2">Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọng niềm tin</p>
                        </div>
                        <div class="swiper-slide text-center p-4 bg-white shadow-lg rounded-lg">
                            <div class="image-avatar mb-4">
                                <img src="//theme.hstatic.net/1000324420/1000664192/14/testimonial_2.jpg?v=52" alt="Diễn viên - Phương Trinh" class="mx-auto rounded-full w-24 h-24 object-cover">
                            </div>
                            <h4 class="text-xl font-semibold">Diễn viên - Phương Trinh</h4>
                            <p class="text-gray-500 mt-2">Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọng niềm tin</p>
                        </div>
                        <div class="swiper-slide text-center p-4 bg-white shadow-lg rounded-lg">
                            <div class="image-avatar mb-4">
                                <img src="//theme.hstatic.net/1000324420/1000664192/14/testimonial_3.jpg?v=52" alt="Ca sĩ - Hoàng Yến" class="mx-auto rounded-full w-24 h-24 object-cover">
                            </div>
                            <h4 class="text-xl font-semibold">Ca sĩ - Hoàng Yến</h4>
                            <p class="text-gray-500 mt-2">Là một người khá kỹ tính, tôi luôn luôn lựa chọn những thực phẩm sạch nhất. Và đây là nơi tôi đặt trọng niềm tin</p>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination mt-4"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()
@push('script')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- swiper -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const swiper1 = new Swiper(".mySwiper1", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 1,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            effect: "slide",
            speed: 800,
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        const swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 20,
            slidesPerView: 1,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".mySwiper2 .swiper-button-next",
                prevEl: ".mySwiper2 .swiper-button-prev",
            },
            pagination: {
                el: ".mySwiper2 .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // Màn hình nhỏ dưới 640px: 1 ảnh
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // Màn hình vừa từ 640px đến 1023px: 2 ảnh
                641: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                // Màn hình lớn từ 1024px trở lên: 3 ảnh
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
            speed: 800,
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        new Swiper(".mySwiperBlog", {
            loop: true,
            spaceBetween: 20,
            slidesPerView: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
            },
            speed: 800,
        });
    });

    const swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        },
    });
    // danh mục -xem thêm

    document.addEventListener("DOMContentLoaded", function() {
        const hiddenItems = document.getElementById("hidden-items");
        const xemThem = document.getElementById("xem-them");
        const thuGon = document.getElementById("thu-gon");

        xemThem.addEventListener("click", function() {
            hiddenItems.classList.remove("hidden");
            xemThem.classList.add("hidden");
            thuGon.classList.remove("hidden");
        });

        thuGon.addEventListener("click", function() {
            hiddenItems.classList.add("hidden");
            xemThem.classList.remove("hidden");
            thuGon.classList.add("hidden");
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.querySelector(".product-modal");
        const quickViewButtons = document.querySelectorAll(".quick-view");
        const closeButton = document.querySelector(".product-modal button");

        // Mở modal khi nhấp vào nút "Xem nhanh"
        quickViewButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                modal.classList.remove("hidden");
                modal.classList.add("fixed");
            });
        });

        // Đóng modal khi bấm nút "X"
        closeButton.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        // Đóng modal khi click ra ngoài phần modal
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });
</script>
@endpush()