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
                    <h2 class="text-lg font-bold text-gray-700 mb-4 bg-[rgb(128,187,53)] rounded-2xl block p-2">Danh mục</h2>
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
                                @foreach($category as $categories)
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">{{$categories -> name}}</a></li>
                                @endforeach
                                <!-- <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Hoa quả</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Thịt</a></li>
                                <li><a class="block p-2 text-sm hover:bg-gray-200 rounded" href="#">Hải sản</a></li> -->
                            </ul>
                        </li>
                        <li><a href="/blogs/news" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Tin tức</a></li>
                        <li><a href="/pages/about-us" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Giới thiệu</a></li>
                        <li><a href="/pages/lien-he" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Liên hệ</a></li>
                    </ul>
                </div>

                <!-- Bộ lọc giá -->
                <div class="rounded-2xl border-2 mb-4">
                    <h2 class="text-xl font-semibold mb-2 bg-[rgb(128,187,53)] block p-2 rounded-2xl">Giá sản phẩm</h2>
                    <div class="flex items-center justify-between mb-2 text-gray-600">
                        <span id="start">0₫</span>
                        <span id="stop">10,000,000₫</span>
                    </div>
                    <input type="range" min="0" max="10000000" value="0" class="w-full cursor-pointer">
                    <button id="filter-value" class="bg-[rgb(128,187,53)] hover:bg-[rgba(128,187,53,0.8)] text-white font-bold py-2 px-4 rounded">Lọc giá</button>
                </div>

                <!-- Bộ lọc màu sắc -->
                <div class="rounded-2xl border-2 mb-4">
                    <h2 class="text-xl font-semibold mb-2 bg-[rgb(128,187,53)] block p-2 rounded-2xl">Màu sắc</h2>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="w-8 h-8 rounded-full bg-yellow-400 border hover:border-blue-500 cursor-pointer"></div>
                        <div class="w-8 h-8 rounded-full bg-red-500 border hover:border-blue-500 cursor-pointer"></div>
                        <div class="w-8 h-8 rounded-full bg-white border hover:border-blue-500 cursor-pointer"></div>
                        <div class="w-8 h-8 rounded-full bg-orange-500 border hover:border-blue-500 cursor-pointer"></div>
                    </div>
                </div>

                <!-- Bộ lọc loại sản phẩm -->
                <div class="rounded-2xl border-2 mb-4">
                    <h2 class="text-xl font-semibold mb-2 bg-[rgb(128,187,53)] block p-2 rounded-2xl">Loại</h2>
                    <input type="text" placeholder="Tìm loại sản phẩm..." class="w-full p-2 border rounded mb-2">
                    <ul class="space-y-2">
                        <li><label><input type="checkbox" class="mr-2"> Hoa quả tươi</label></li>
                        <li><label><input type="checkbox" class="mr-2"> Cà chua</label></li>
                        <li><label><input type="checkbox" class="mr-2"> Thực phẩm sạch</label></li>
                    </ul>
                </div>

                <!-- Bộ lọc thương hiệu -->
                <div class="rounded-2xl border-2">
                    <h2 class="text-xl font-semibold mb-2 bg-[rgb(128,187,53)] block p-2 rounded-2xl">Thương hiệu</h2>
                    <input type="text" placeholder="Tìm thương hiệu..." class="w-full p-2 border rounded mb-2">
                    <ul class="space-y-2">
                        <li><label><input type="checkbox" class="mr-2"> Canada</label></li>
                        <li><label><input type="checkbox" class="mr-2"> Khác</label></li>
                    </ul>
                </div>
                <!-- sản phẩm nổi bậc -->
                <div class="aside-item aside-mini-list-product mb-5 mt-5">
                    <div>
                        <div class="aside-title mb-4">
                            <h2 class="text-xl font-semibold bg-[rgb(128,187,53)] block p-2 rounded-2xl">
                                <a href="/collections/hot-products" class="text-xl font-semibold hover:text-blue-700">Sản phẩm nổi bật</a>
                            </h2>
                        </div>
                        <div class="aside-content related-product">
                            <div class="product-mini-lists grid gap-4">

                                <!-- Product 1 -->
                                <div class="product-mini-item flex items-center gap-4 p-2 border rounded-lg shadow hover:shadow-lg">
                                    <div class="w-20 h-20 overflow-hidden rounded-lg">
                                        <a href="/products/cherry-do-canada-loai-to-15">
                                            <img src="{{asset('assets/images/cachua.png')}}" alt="Chanh Dây đỏ Úc" class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-base font-semibold">
                                            <a href="/products/cherry-do-canada-loai-to-15" class="text-gray-800 hover:text-blue-500">Chanh Dây đỏ Úc</a>
                                        </h3>
                                        <div class="price-box text-red-500 font-bold">
                                            400,000₫ <span class="line-through text-gray-500 text-sm ml-2">460,000₫</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="product-mini-item flex items-center gap-4 p-2 border rounded-lg shadow hover:shadow-lg">
                                    <div class="w-20 h-20 overflow-hidden rounded-lg">
                                        <a href="/products/cherry-do-canada-loai-to-10">
                                            <img src="{{asset('assets/images/cachua.png')}}" alt="Dưa leo Đà Lạt" class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-base font-semibold">
                                            <a href="/products/cherry-do-canada-loai-to-10" class="text-gray-800 hover:text-blue-500">Dưa leo Đà Lạt</a>
                                        </h3>
                                        <div class="price-box text-red-500 font-bold">65,000₫</div>
                                    </div>
                                </div>

                                <!-- Product 3 -->
                                <div class="product-mini-item flex items-center gap-4 p-2 border rounded-lg shadow hover:shadow-lg">
                                    <div class="w-20 h-20 overflow-hidden rounded-lg">
                                        <a href="/products/dau-ha-lan">
                                            <img src="{{asset('assets/images/cachua.png')}}" alt="Hành tây" class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-base font-semibold">
                                            <a href="/products/dau-ha-lan" class="text-gray-800 hover:text-blue-500">Hành tây</a>
                                        </h3>
                                        <div class="price-box text-red-500 font-bold">50,000₫</div>
                                    </div>
                                </div>

                                <!-- Product 4 -->
                                <div class="product-mini-item flex items-center gap-4 p-2 border rounded-lg shadow hover:shadow-lg">
                                    <div class="w-20 h-20 overflow-hidden rounded-lg">
                                        <a href="/products/cherry-do-canada-loai-to-1">
                                            <img src="{{asset('assets/images/cachua.png')}}" alt="Hồng đỏ Mỹ" class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="text-base font-semibold">
                                            <a href="/products/cherry-do-canada-loai-to-1" class="text-gray-800 hover:text-blue-500">Hồng đỏ Mỹ</a>
                                        </h3>
                                        <div class="price-box text-red-500 font-bold">150,000₫</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <section class=" col-span-9 main_container collection col-lg-9 col-lg-push-3">
                <div class="category-products products">
                    <div class="w-full bg-white p-4 shadow-md rounded-md flex justify-between items-center">
                        <!-- Phần bên trái -->
                        <h2 class="text-3xl font-semi">Tất cả sản phẩm</h2>

                        <!-- Phần sắp xếp bên phải -->
                        <div id="sort-by" class="relative">
                            <label class="hidden sm:inline-block mr-2 text-gray-700 font-medium">Sắp xếp:</label>
                            <div class="relative group inline-block">
                                <button
                                    class="px-4 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none">
                                    Mặc định
                                </button>

                                <!-- Dropdown khi hover -->
                                <ul
                                    id="sort-options"
                                    class="hidden group-hover:block absolute right-0 mt-0 w-40 bg-white border border-gray-200 shadow-lg rounded-md z-10">
                                    <li><a href="javascript:;" onclick="sortby('default')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mặc định</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-asc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">A → Z</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-desc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Z → A</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-asc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Giá tăng dần</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-desc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Giá giảm dần</a></li>
                                    <li class="hidden"><a href="javascript:;" onclick="sortby('created-desc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hàng mới nhất</a></li>
                                    <li class="hidden"><a href="javascript:;" onclick="sortby('created-asc')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hàng cũ nhất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <section class="products-view [&>product-box]:p-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- Product Card -->
                        @foreach($products as $product)
                        <div class="product-box relative mt-8 border rounded-lg shadow hover:shadow-lg transition">
                            <!-- Hình ảnh sản phẩm -->
                            <div class="relative group">
                                <!-- Nhãn giảm giá -->
                                <div class="relative group">
                                    <!-- Kiểm tra nếu có giá gốc thì hiển thị giảm giá -->
                                    @if ($product->original_price && $product->original_price > $product->price)
                                    @php
                                    $discount = round((($product->original_price - $product->price) / $product->original_price) * 100);
                                    @endphp
                                    <span class="absolute mt-2 text-white text-sm px-3 py-1 bg-[rgb(254,151,5)]">
                                        -{{ $discount }}%
                                    </span>
                                    @endif

                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}" class="w-full h-60 object-cover rounded">
                                </div>

                                <!-- Nút giỏ hàng và xem nhanh -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <button class="btn-cart btn btn-primary mx-2 p-2 bg-orange-500 text-white rounded-full shadow-md hover:bg-orange-600" data-toggle="tooltip" title="Đặt hàng">
                                        <i class="fa fa-shopping-bag"></i>
                                    </button>
                                    <a href="javascript:void(0);" class="btn_view open-modal-btn quick-view mx-2 p-2 bg-gray-500 text-white rounded-full shadow-md hover:bg-gray-600"
                                        data-toggle="tooltip" title="Xem nhanh" data-product-id="{{ $product->id }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Tên sản phẩm -->
                            <p class="mt-4 text-gray-700 text-center"><a href="{{('/productsdetails')}}">{{ $product->name }}</a></p>

                            <!-- Giá sản phẩm -->
                            <p class="text-orange-500 font-bold text-lg text-center">
                                {{ number_format($product->price) }} <span class="text-gray-400 line-through text-sm">{{$product -> original_price}}</span>
                            </p>
                        </div>

                        <!-- MODAL CHO SẢN PHẨM -->
                        <div id="product-modal-{{ $product->id }}" class="hidden product-modal inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-3/4 md:w-2/3 lg:w-1/2 relative">
                                <!-- Close button -->
                                <button class="absolute top-2 right-2 text-xl font-bold text-gray-700 hover:text-red-500 close-modal-btn">&times;</button>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Left: Product Image & Thumbnails -->
                                    <div>
                                        <div class="mb-4">
                                            <img id="product-featured-image-quickview" class="w-full h-60 rounded" src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{$product->name}}">
                                        </div>
                                        <div class="flex gap-2 overflow-x-auto">
                                            @foreach(json_decode($product->album, true) as $image)
                                            <img class="w-20 h-20 cursor-pointer border-2 border-transparent hover:border-green-500 rounded"
                                                src="{{ asset('storage/' . $image) }}"
                                                alt="{{ $product->name }}">
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Right: Product Details -->
                                    <div>
                                        <h2 class="text-2xl font-bold mb-2">{{$product->name}}</h2>
                                        <div class="text-green-600 font-semibold text-xl">{{$product->price}}</div>
                                        @if ($product->original_price && $product->original_price > $product->price)
                                        @php
                                        $discount = round((($product->original_price - $product->price) / $product->original_price) * 100);
                                        @endphp
                                        <span class="text-red-500 bg-yellow-500">-{{ $discount }}%</span>
                                        <div class="text-gray-500 line-through">{{$product -> original_price}}</div>
                                        @endif
                                        <div class="mt-2 text-gray-600">Trạng thái: <span class="text-green-500"><i class="fa fa-check"></i> {{$product->status}}</span></div>
                                        <p class="mt-4 text-sm">{{$product->short_description}}</p>
                                        <p class="mt-2 text-gray-700"><strong>Hãng sản xuất:</strong> Canada</p>

                                        <!-- Quantity & Add to Cart -->
                                        <div class="mt-4 flex items-center gap-4">
                                            <label for="quantity-{{ $product->id }}" class="font-medium">Số lượng</label>
                                            <input type="number" id="quantity-{{ $product->id }}" name="quantity" value="1" class="w-16 text-center border border-gray-300 rounded">
                                        </div>
                                        <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                        <!-- product_2 -->

                        <!-- product_3 -->

                        <!-- product_4 -->


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
@push('script')

<script>
    function sortby(type) {
        const selected = document.querySelector(`a[onclick="sortby('${type}')"]`).textContent;
        document.querySelector("#sort-by button").textContent = selected;
        console.log("Đang sắp xếp theo:", type);
    };

    document.addEventListener("DOMContentLoaded", () => {
        const quickViewButtons = document.querySelectorAll(".quick-view");

        quickViewButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();

                // Lấy ID modal từ data attribute
                const productId = button.getAttribute("data-product-id");
                const modal = document.getElementById(`product-modal-${productId}`);

                if (modal) {
                    modal.classList.remove("hidden");
                    modal.classList.add("fixed");

                    // Đóng modal khi bấm nút "X"
                    const closeButton = modal.querySelector("button");
                    closeButton.addEventListener("click", () => {
                        modal.classList.add("hidden");
                    });

                    // Đóng modal khi click ra ngoài
                    modal.addEventListener("click", (e) => {
                        if (e.target === modal) {
                            modal.classList.add("hidden");
                        }
                    });
                }
            });
        });
    });
</script>
@endpush()