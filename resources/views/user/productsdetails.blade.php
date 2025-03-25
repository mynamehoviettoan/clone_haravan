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
            <section class=" col-span-9 main_container collection col-lg-9 col-lg-push-3">
                <div class="details-product grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                    <!-- Image Section -->
                    <div class="large-image flex justify-center items-center">
                        <a href="https://product.hstatic.net/1000324420/product/v4_388b25fd338c48b2b7545f0f30b678d8.jpg">
                            <img class="w-80 h-80 object-cover" src="https://product.hstatic.net/1000324420/product/v4_388b25fd338c48b2b7545f0f30b678d8.jpg" alt="Cà chua Đà Lạt">
                        </a>
                    </div>

                    <!-- Details Section -->
                    <div class="details-pro space-y-4">
                        <h1 class="text-2xl font-bold">Cà chua Đà Lạt</h1>
                        <div class="status text-gray-700">Trạng thái: <span class="text-green-500 font-semibold">Còn hàng</span></div>
                        <div class="price-box">
                            <span class="text-red-500 text-lg font-bold">120,000₫</span>
                            <span class="line-through text-gray-500 ml-2">130,000₫</span>
                            <span class="text-green-600 font-medium ml-2">(-8%)</span>
                        </div>
                        <div class="product-summary text-gray-700">
                            Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học...
                        </div>

                        <!-- Product Options -->
                        <form id="add-to-cart-form" class="space-y-4">
                            <div class="flex flex-col gap-2">
                                <label for="color" class="font-medium">Màu sắc</label>
                                <select id="color" class="border p-2 rounded">
                                    <option value="Đỏ">Đỏ</option>
                                    <option value="Xanh">Xanh</option>
                                </select>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="size" class="font-medium">Kích thước</label>
                                <select id="size" class="border p-2 rounded">
                                    <option value="Lớn">Lớn</option>
                                    <option value="Nhỏ">Nhỏ</option>
                                    <option value="Vừa">Vừa</option>
                                </select>
                            </div>

                            <!-- Add to Cart Button -->
                            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <div class="w-full mt-4 mb-2">
                    <!-- Nav tabs -->
                    <div class="product-tab">
                        <ul class="flex border-b border-gray-300">
                            <li class="tab-link current px-4 py-2 cursor-pointer text-lg font-semibold text-gray-700 border-b-2 border-blue-500" data-tab="tab-1">
                                <h3><span>Mô tả</span></h3>
                            </li>
                            <li class="tab-link px-4 py-2 cursor-pointer text-lg font-semibold text-gray-500 hover:text-gray-700" data-tab="tab-2">
                                <h3><span>Thông tin</span></h3>
                            </li>
                        </ul>

                        <div class="tab-1 tab-content current p-4 bg-gray-100">
                            <div class="rte text-gray-700">
                                <p>Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.<br><br>
                                    Bên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường glucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.<br><br>
                                    Vì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.
                                    <img src="//bizweb.dktcdn.net/100/188/306/products/78719788b5e0246dc7ac9e1ab719e7.jpg?v=1489254693707" alt="fruit" class="mt-4 w-full max-w-md mx-auto">
                                </p>
                            </div>
                        </div>

                        <div class="tab-2 tab-content hidden p-4 bg-gray-100">
                            <p class="text-gray-700">Các nội dung Hướng dẫn mua hàng viết ở đây</p>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto p-4">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-blue-600 hover:text-blue-800">
      <a href="/demo">Sản phẩm liên quan</a>
    </h2>
    <p class="text-gray-600">Có phải bạn đang tìm những sản phẩm dưới đây</p>
  </div>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
    <!-- Product Card 1 -->
    <div class="border rounded-lg shadow hover:shadow-lg p-4">
      <a href="/products/cherry-do-canada-loai-to-11">
        <img class="w-full h-48 object-cover rounded" src="//product.hstatic.net/1000324420/product/upload_c1e2437891c54a79a0f263e59fd7e1e3_medium.jpg" alt="Cà chua Đà Lạt">
      </a>
      <h3 class="mt-2 font-semibold text-lg">
        <a href="/products/cherry-do-canada-loai-to-11">Cà chua Đà Lạt</a>
      </h3>
      <div class="text-red-500 font-bold">30,000₫</div>
      <div class="text-gray-400 line-through">45,000₫</div>
    </div>

    <!-- Product Card 2 -->
    <div class="border rounded-lg shadow hover:shadow-lg p-4">
      <a href="/products/cherry-do-canada-loai-to-15">
        <img class="w-full h-48 object-cover rounded" src="//product.hstatic.net/1000324420/product/upload_963fbe98fc324f47b37e38a3481c22e1_medium.jpg" alt="Chanh Dây đỏ Úc">
      </a>
      <h3 class="mt-2 font-semibold text-lg">
        <a href="/products/cherry-do-canada-loai-to-15">Chanh Dây đỏ Úc</a>
      </h3>
      <div class="text-red-500 font-bold">400,000₫</div>
      <div class="text-gray-400 line-through">460,000₫</div>
    </div>

    <!-- Product Card 3 -->
    <div class="border rounded-lg shadow hover:shadow-lg p-4">
      <a href="/products/cherry-do-canada-loai-to-13">
        <img class="w-full h-48 object-cover rounded" src="//product.hstatic.net/1000324420/product/upload_823c2135b7aa4bcfade2588fab27c77e_medium.jpg" alt="Dâu tây loại 1">
      </a>
      <h3 class="mt-2 font-semibold text-lg">
        <a href="/products/cherry-do-canada-loai-to-13">Dâu tây loại 1</a>
      </h3>
      <div class="text-red-500 font-bold">250,000₫</div>
      <div class="text-gray-400 line-through">320,000₫</div>
    </div>

    <!-- Product Card 4 -->
    <div class="border rounded-lg shadow hover:shadow-lg p-4">
      <a href="/products/cherry-do-canada-loai-to-10">
        <img class="w-full h-48 object-cover rounded" src="//product.hstatic.net/1000324420/product/upload_247e10d109a54ac9ad10d23d0736d0b4_medium.jpg" alt="Dưa leo Đà Lạt">
      </a>
      <h3 class="mt-2 font-semibold text-lg">
        <a href="/products/cherry-do-canada-loai-to-10">Dưa leo Đà Lạt</a>
      </h3>
      <div class="text-red-500 font-bold">65,000₫</div>
    </div>
  </div>
</div>


            </section>
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

        </div>
    </div>
</div>
@endsection()