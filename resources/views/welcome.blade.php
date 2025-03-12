<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haravan Demo</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <!-- Header -->
    <header class="mx-auto md:block sticky top-0 z-50">
        <!-- topbar -->
        <div class="mx-auto px-4 md:block bg-[rgb(128,187,53)] py-2">
            <div class="max-w-screen-xl">
                <div class="flex justify-between items-center">
                    <!-- Cột trái: Hotline & Địa chỉ -->
                    <div class="flex space-x-6 text-white text-sm">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-mobile-alt text-lg"></i>
                            <span>Hotline: <a href="tel:0912117494" class="text-blue-600 font-semibold">0912117494</a></span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-lg"></i>
                            <span><b>Địa chỉ</b>: 268 Cầu Giấy, Hà Nội</span>
                        </div>
                    </div>
    
                    <!-- Cột phải: Đăng nhập, Đăng ký & Tìm kiếm -->
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="#" class="text-white hover:text-blue-600"><i class="fas fa-user"></i> Đăng nhập</a>
                        <span>hoặc</span>
                        <a href="#" class="text-white hover:text-blue-600">Đăng ký</a>
    
                        <!-- Nút tìm kiếm -->
                        <div class="relative hidden">
                            <button id="search-toggle" class="text-gray-700 hover:text-blue-600">
                                <i class="fas fa-search"></i>
                            </button>
                            <div id="search-box" class="hidden absolute right-0 top-8 bg-white p-3 shadow-lg border rounded-lg">
                                <form action="/search" method="get" class="flex items-center space-x-2">
                                    <input type="search" name="q" placeholder="Tìm sản phẩm..." class="border px-3 py-1 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                    <input type="hidden" name="type" value="product">
                                    <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-md">Tìm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
        <div class="mx-auto px-4 text-black">
            <div class="header-content flex justify-between items-center py-4">
                <div class="w-1/4 flex justify-start">
                    <div class="logo">
                        <a href="/" class="block">
                            <img src="//theme.hstatic.net/1000324420/1000664192/14/logo.png?v=52" alt="logo DualeoX" class="h-12">
                        </a>
                    </div>
                </div>
                <div class="w-1/2 hidden md:flex justify-around">
                    <div class="flex items-center space-x-2">
                        <a href="#">
                            <img src="//theme.hstatic.net/1000324420/1000664192/14/policy1.png?v=52" alt="Miễn phí vận chuyển" class="h-10">
                        </a>
                        <div class="text-left">
                            <a href="#" class="font-bold">Miễn phí vận chuyển</a>
                            <p>Bán kính 100 km</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="#">
                            <img src="//theme.hstatic.net/1000324420/1000664192/14/policy2.png?v=52" alt="Hỗ trợ 24/7" class="h-10">
                        </a>
                        <div class="text-left">
                            <a href="#" class="font-bold">Hỗ trợ 24/7</a>
                            <p>Hotline: <a href="tel:19001009" class="text-blue-500">19001009</a></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="#">
                            <img src="//theme.hstatic.net/1000324420/1000664192/14/policy3.png?v=52" alt="Giờ làm việc" class="h-10">
                        </a>
                        <div class="text-left">
                            <a href="#" class="font-bold">Giờ làm việc</a>
                            <p>T2 - T7 Giờ hành chính</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/4 hidden md:flex justify-end">
                    <div class="relative">
                        <a href="/cart" class="flex items-center space-x-2">
                            <i class="fa fa-shopping-bag text-2xl"></i>
                            <span class="hidden md:inline">Giỏ hàng (<span class="cartCount2">0</span>)</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-bar md:hidden flex justify-between items-center py-2">
                <img src="//theme.hstatic.net/1000324420/1000664192/14/menu-bar.png?v=52" alt="menu bar" class="h-6">
                <div class="icon relative" onclick="window.location.href='/cart'">
                    <i class="fa fa-shopping-bag text-xl"></i>
                    <span class="cartCount bg-red-500 text-white text-xs rounded-full px-2 absolute top-0 right-0">0</span>
                </div>
            </div>
        </div>
        <!-- nav -->
        <nav class="mx-auto px-4 bg-[rgba(128,187,53,0.9)] shadow-md ">
            <div class=" container mx-auto flex justify-between items-center relative">
                <ul class="flex space-x-6 p-4 w-full">
                    <!-- Trang chủ -->
                    <li class="group">
                        <a href="/" class="nav-link flex items-center">Trang chủ <i class="fa fa-angle-right ml-2"></i></a>
                        <ul class="mt-4 absolute bg-red-500 absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-md w-48">
                            <li><a href="https://dualeo-x.myharavan.com/?themeid=-1" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 1</a></li>
                            <li><a href="https://dualeo-x.myharavan.com/?themeid=1000418561" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 2</a></li>
                            <li><a href="https://dualeo-x.myharavan.com/?themeid=1000418576" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 3</a></li>
                        </ul>
                    </li>
            
                    <!-- Sản phẩm (Mega Menu) -->
                    <li class="group z-10">
                        <a href="/collections/all" class="nav-link flex items-center">Sản phẩm <i class="fa fa-angle-right ml-2"></i></a>
                        <div class="h-[50vh] mt-4 absolute left-0 hidden group-hover:flex bg-white shadow-lg w-full p-4 rounded-md">
                            <div class="grid grid-cols-4 gap-6 w-full">
                                <!-- Rau củ -->
                                <div>
                                    <h2 class="font-bold text-lg">Rau củ</h2>
                                    <ul class="mt-2 space-y-1">
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Rau củ sạch</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Rau củ Đà Lạt</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Rau củ nhập khẩu</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Rau củ theo mùa</a></li>
                                    </ul>
                                </div>
            
                                <!-- Hoa quả -->
                                <div>
                                    <h2 class="font-bold text-lg">Hoa quả</h2>
                                    <ul class="mt-2 space-y-1">
                                        <li><a href="/" class="block hover:text-blue-500">Hoa quả Úc</a></li>
                                        <li><a href="/" class="block hover:text-blue-500">Hoa quả Miền Nam</a></li>
                                        <li><a href="/" class="block hover:text-blue-500">Hoa quả theo mùa</a></li>
                                        <li><a href="/" class="block hover:text-blue-500">Hoa quả nhập khẩu</a></li>
                                    </ul>
                                </div>
            
                                <!-- Thịt -->
                                <div>
                                    <h2 class="font-bold text-lg">Thịt</h2>
                                    <ul class="mt-2 space-y-1">
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Thịt bò mỹ</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Thịt đà điểu</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Thịt heo sạch</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Thịt các loại</a></li>
                                    </ul>
                                </div>
            
                                <!-- Hải sản -->
                                <div>
                                    <h2 class="font-bold text-lg">Hải sản</h2>
                                    <ul class="mt-2 space-y-1">
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Tôm hùm Alaska</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Tôm hùm Canada</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Kingcrab</a></li>
                                        <li><a href="/collections/all" class="block hover:text-blue-500">Hải sản trong nước</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
            
                    <!-- Các mục khác -->
                    <li><a href="/blogs/news" class="nav-link hover:text-blue-500">Tin tức</a></li>
                    <li><a href="/pages/about-us" class="nav-link hover:text-blue-500">Giới thiệu</a></li>
                    <li><a href="/pages/lien-he" class="nav-link hover:text-blue-500">Liên hệ</a></li>
                    <li><a href="/pages/preview" class="nav-link hover:text-blue-500">Demo Tùy chọn</a></li>
                </ul>
                <div class="flex">
                    <input type="text" name="" id="" class="border p-2">
                    <input type="submit" name="send" id="" class="border p-2">
                </div>
                
            </div>
        </nav>
        
             
    </header>
    <section class="container mx-auto px-4 py-10">
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
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="//theme.hstatic.net/1000324420/1000664192/14/slider_1.jpg?v=52" class="w-full"></div>
                        <div class="swiper-slide"><img src="//theme.hstatic.net/1000324420/1000664192/14/slider_2.jpg?v=52" class="w-full"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="awe-section-2" class="py-10">
        <div class="container mx-auto px-4">
            <h2 class="sr-only">Banner</h2>
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <a href="#" class="block">
                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner1.jpg?v=52" 
                                 alt="Banner 1" class="w-full rounded-lg shadow-md">
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <a href="#" class="block">
                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner2.jpg?v=52" 
                                 alt="Banner 2" class="w-full rounded-lg shadow-md">
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <a href="#" class="block">
                            <img src="https://theme.hstatic.net/1000324420/1000664192/14/banner3.jpg?v=52" 
                                 alt="Banner 3" class="w-full rounded-lg shadow-md">
                        </a>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <section class="bg-gray-100 p-6">
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
            <div class="bg-white p-4 rounded-lg shadow-lg relative">
                <!-- Background màu cam + Padding lớn hơn để dễ nhìn -->
                <span class="absolute top-[20opx] left-0 text-black text-sm px-3 py-2 bg-customOrange">-13%</span>
                
                <img src="images/chanhday.webp" alt="Chanh dây" class="w-full h-40 object-cover rounded">
                
                <p class="mt-4 text-gray-700">Chanh Dây đỏ Úc</p>
                
                <p class="text-orange-500 font-bold text-lg">
                    400,000đ <span class="text-gray-400 line-through text-sm">460,000đ</span>
                </p>
            </div>
            
    
            <!-- Sản phẩm 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="images/dualeo.webp" alt="Dưa leo" class="w-full h-40 object-cover rounded">
                <p class="mt-4 text-gray-700">Dưa leo Đà Lạt</p>
                <p class="text-orange-500 font-bold text-lg">65,000đ</p>
            </div>
    
            <!-- Sản phẩm 3 -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="images/cuhanh.webp" alt="Hành tây" class="w-full h-40 object-cover rounded">
                <p class="mt-4 text-gray-700">Hành tây</p>
                <p class="text-orange-500 font-bold text-lg">50,000đ</p>
            </div>
    
            <!-- Sản phẩm 4 -->
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="images/traihong.webp" alt="Hồng đỏ" class="w-full h-40 object-cover rounded">
                <p class="mt-4 text-gray-700">Hồng đỏ Mỹ</p>
                <p class="text-orange-500 font-bold text-lg">150,000đ</p>
            </div>
    
        </div>
    </section>
    



    <!-- Footer -->
    <footer class="bg-customOrange text-black py-10">
        <div class="grid container mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
            <!-- Cột 1: Liên hệ -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Liên hệ</h3>
              <p class="mb-3">Chúng tôi chuyên cung cấp các sản phẩm thực phẩm sạch an toàn cho sức khỏe con người.</p>
              <ul class="space-y-2">
                <li class="flex items-start"><i class="fa fa-map-marker mr-2"></i> 268 Cầu Giấy, Quận Cầu Giấy, Hà Nội, Vietnam</li>
                <li class="flex items-start"><i class="fa fa-phone mr-2"></i> <a href="tel:0912117494">0912117494</a></li>
                <li class="flex items-start"><i class="fa fa-envelope mr-2"></i> <a href="mailto:dualeotheme@gmail.com">dualeotheme@gmail.com</a></li>
              </ul>
            </div>
      
            <!-- Cột 2: Danh mục -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Danh mục</h3>
              <ul class="space-y-2">
                <li><a href="/" class="hover:text-yellow-400">Trang chủ</a></li>
                <li><a href="/collections/all" class="hover:text-yellow-400">Sản phẩm</a></li>
                <li><a href="/blogs/news" class="hover:text-yellow-400">Tin tức</a></li>
                <li><a href="/pages/about-us" class="hover:text-yellow-400">Giới thiệu</a></li>
                <li><a href="/pages/lien-he" class="hover:text-yellow-400">Liên hệ</a></li>
              </ul>
            </div>
      
            <!-- Cột 3: Hỗ trợ khách hàng -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Hỗ trợ khách hàng</h3>
              <ul class="space-y-2">
                <li><a href="/" class="hover:text-yellow-400">Trang chủ</a></li>
                <li><a href="/collections/all" class="hover:text-yellow-400">Sản phẩm</a></li>
                <li><a href="/blogs/news" class="hover:text-yellow-400">Tin tức</a></li>
                <li><a href="/pages/about-us" class="hover:text-yellow-400">Giới thiệu</a></li>
                <li><a href="/pages/lien-he" class="hover:text-yellow-400">Liên hệ</a></li>
              </ul>
            </div>
      
            <!-- Cột 4: Kết nối -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Kết nối với chúng tôi</h3>
              <div class="flex space-x-4">
                <a href="#" class="text-2xl hover:text-blue-400"><i class="fa fa-facebook"></i></a>
                <a href="#" class="text-2xl hover:text-blue-500"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-2xl hover:text-pink-400"><i class="fa fa-instagram"></i></a>
                <a href="#" class="text-2xl hover:text-red-500"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
      
          </div>
      
          <!-- Copyright -->
          <div class="mt-10 border-t border-gray-700 pt-4 text-center text-sm">
            <span>© Bản quyền thuộc về <b>Dualeo</b> | <a href="https://www.haravan.com/" target="_blank" class="hover:text-yellow-400">Powered by Haravan</a></span>
          </div>
        </div>
      </footer>
      
    

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next1",
            prevEl: ".swiper-button-prev1",
        },
        pagination: {
            el: ".swiper-pagination1",
            clickable: true,
        },
        breakpoints: {
            1024: { slidesPerView: 3 },
            768: { slidesPerView: 2 },
            640: { slidesPerView: 1 },
        }
    });

    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next2",
            prevEl: ".swiper-button-prev2",
        },
    });
</script>
<script>
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
</script>

</html>
