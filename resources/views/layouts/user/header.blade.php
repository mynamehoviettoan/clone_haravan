       @push('styles')
       <style>
           /* scroll menu navbar */
           .hidden-topbar {
               transform: translateY(-100%);
               transition: transform 0.3s ease-in-out;
           }

           .nav-fixed {
               position: fixed;
               top: 0;
               left: 0;
               right: 0;
               z-index: 999;
               box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
               transition: top 0.3s ease-in-out;
           }
       </style>
       @endpush()
       <div class="py-5 bg-gray-800"></div>
       <!-- Header -->
       <header class="w-full mx-auto md:block top-0 z-100">
           <!-- topbar -->
           <div id="topbar" class="topbar bg-[rgb(128,187,53)] py-2 px-12 md:block transition-transform duration-300">
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
           <div id="header-container" class="flex flex-col justify-center container bg-white h-48 text-black px-12 transition-transform duration-300">
               <div class="header-content flex justify-between items-center py-4">
                   <div class="w-1/4 flex justify-start">
                       <div class="logo">
                           <a href="/" class="block">
                               <img src="//theme.hstatic.net/1000324420/1000664192/14/logo.png?v=52" alt="logo DualeoX" class="h-14">
                           </a>
                       </div>
                   </div>
                   <div class="w-1/2 hidden md:flex justify-around">
                       <div class="flex items-center space-x-2">
                           <a href="#">
                               <img src="//theme.hstatic.net/1000324420/1000664192/14/policy1.png?v=52" alt="Miễn phí vận chuyển" class="h-8">
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
                       <div class="relative bg-[rgb(254,151,5)] py-2 px-4 rounded-full">
                           <a href="/cart" class="flex items-center space-x-2">
                               <i class="fa fa-shopping-bag text-2xl"></i>
                               <span class="hidden md:inline">Giỏ hàng (<span class="cartCount2">0</span>)</span>
                           </a>
                       </div>
                   </div>
               </div>
               <!-- menu-sm -->
               <div class="menu-bar md:hidden flex justify-between items-center py-2">
                   <img src="//theme.hstatic.net/1000324420/1000664192/14/menu-bar.png?v=52" alt="menu bar" class="h-6">
                   <div class="icon relative" onclick="window.location.href='/cart'">
                       <i class="fa fa-shopping-bag text-xl"></i>
                       <span class="cartCount bg-red-500 text-white text-xs rounded-full px-2 absolute top-0 right-0">0</span>
                   </div>
               </div>
           </div>
           <!-- nav -->
           <nav id="navbar" class="mx-auto px-12 bg-[rgb(128,187,53)] shadow-md z-100">
               <div class=" container mx-auto flex justify-between items-center relative h-12">
                   <ul class="flex h-full justify-between items-center [&>li]:px-4 text-lg">
                       <!-- Trang chủ -->
                       <li class="group relative hover:bg-[rgb(254,151,5)] text-white h-full items-center justify-center">
                           <a href="{{route('web.index')}}" class="nav-link flex items-center w-full h-full">Trang chủ <i class="fa fa-angle-right ml-2"></i></a>
                           <!-- pseudo -->
                           <!-- <div class="absolute p-1 left-0 w-full bg-transparent"></div> -->
                           <ul class="mt-0 text-black absolute left-0 hidden group-hover:block bg-white shadow-lg w-48">
                               <li><a href="https://dualeo-x.myharavan.com/?themeid=-1" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 1</a></li>
                               <li><a href="https://dualeo-x.myharavan.com/?themeid=1000418561" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 2</a></li>
                               <li><a href="https://dualeo-x.myharavan.com/?themeid=1000418576" class="block px-4 py-2 hover:bg-gray-100">Trang chủ kiểu 3</a></li>
                           </ul>
                       </li>

                       <!-- Sản phẩm (Mega Menu) -->
                       <li class="group z-10 h-full items-center justify-center hover:bg-[rgb(254,151,5)]">
                           <!-- <div class="top-full left-0 w-full bg-black"></div> -->
                           <a href="{{route('web.products')}}" class="nav-link flex items-center h-full w-full text-white">Sản phẩm <i class="fa fa-angle-right ml-2"></i></a>
                           <!-- pseudo -->
                           <!-- <div class="absolute p-1 w-20 bg-green-500"></div> -->
                           <div class="h-[50vh] mt-0 absolute left-0 hidden group-hover:flex bg-white shadow-lg w-full p-4 rounded-md">
                               <div class="grid grid-cols-4 gap-6 w-full">
                                   <!-- Rau củ -->
                                   <div>
                                       <h2 class="font-bold text-lg">Rau củ</h2>
                                       <ul class="mt-4 space-y-6">
                                           <li><a href="{{('/products')}}" class="block hover:text-blue-500">Rau củ sạch</a></li>
                                           <li><a href="{{('/products')}}" class="block hover:text-blue-500">Rau củ Đà Lạt</a></li>
                                           <li><a href="{{('/products')}}" class="block hover:text-blue-500">Rau củ nhập khẩu</a></li>
                                           <li><a href="{{('/products')}}" class="block hover:text-blue-500">Rau củ theo mùa</a></li>
                                       </ul>
                                   </div>

                                   <!-- Hoa quả -->
                                   <div>
                                       <h2 class="font-bold text-lg">Hoa quả</h2>
                                       <ul class="mt-4 space-y-6">
                                           <li><a href="{{('/home')}}" class="block hover:text-blue-500">Hoa quả Úc</a></li>
                                           <li><a href="{{('/home')}}" class="block hover:text-blue-500">Hoa quả Miền Nam</a></li>
                                           <li><a href="{{('/home')}}" class="block hover:text-blue-500">Hoa quả theo mùa</a></li>
                                           <li><a href="{{('/home')}}" class="block hover:text-blue-500">Hoa quả nhập khẩu</a></li>
                                       </ul>
                                   </div>

                                   <!-- Thịt -->
                                   <div>
                                       <h2 class="font-bold text-lg">Thịt</h2>
                                       <ul class="mt-4 space-y-6">
                                           <li><a href="/collections/all" class="block hover:text-blue-500">Thịt bò mỹ</a></li>
                                           <li><a href="/collections/all" class="block hover:text-blue-500">Thịt đà điểu</a></li>
                                           <li><a href="/collections/all" class="block hover:text-blue-500">Thịt heo sạch</a></li>
                                           <li><a href="/collections/all" class="block hover:text-blue-500">Thịt các loại</a></li>
                                       </ul>
                                   </div>

                                   <!-- Hải sản -->
                                   <div>
                                       <h2 class="font-bold text-lg">Hải sản</h2>
                                       <ul class="mt-4 space-y-6">
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
                       <li class="hover:bg-[rgb(254,151,5)] h-full items-center flex"><a href="{{route('web.news')}}" class="nav-link text-white">Tin tức</a></li>
                       <li class="hover:bg-[rgb(254,151,5)] h-full items-center flex"><a href="{{route('web.about')}}" class="nav-link text-white">Giới thiệu</a></li>
                       <li class="hover:bg-[rgb(254,151,5)] h-full items-center flex"><a href="{{route('web.contact')}}" class="nav-link text-white">Liên hệ</a></li>
                   </ul>
                   <div class="header_search search_form relative">
                       <form class="flex items-center bg-white rounded-xl py-1" action="/search" method="get" role="search">
                           <input
                               type="search" name="q" value="" placeholder="Tìm sản phẩm"
                               class="focus:outline-none rounded-xl px-4 w-full"
                               autocomplete="off"
                               id="search_input" />
                           <input type="hidden" name="type" value="product" />
                           <button type="submit" class="text-black px-4">
                               <i class="fa fa-search"></i>
                           </button>
                       </form>

                       <div id="search_suggestion" class="hidden absolute bg-white border border-gray-300 rounded-md shadow-lg w-full z-10">
                           <div id="search_top" class="p-2">
                               <div id="product_results">Không có kết quả</div>
                           </div>
                           <div id="search_bottom" class="p-2 border-t border-gray-200 text-center">
                               <a class="show_more text-blue-500 hover:underline" href="#">Hiển thị tất cả kết quả cho "<span></span>"</a>
                           </div>
                       </div>
                   </div>
               </div>
           </nav>
       </header>
       @push('script')
       <!-- menu-scroll on page -->
       <script>
           const topbar = document.getElementById("topbar");
           const headerContainer = document.getElementById("header-container");
           const navbar = document.getElementById("navbar");
           let lastScrollY = window.scrollY;

           window.addEventListener("scroll", () => {
               const currentScrollY = window.scrollY;

               if (currentScrollY > lastScrollY) {
                   // Cuộn xuống -> Ẩn topbar và header container, navbar cố định
                   topbar.classList.add("hidden-topbar");
                   headerContainer.classList.add("hidden-topbar");
                   navbar.classList.add("nav-fixed");
               } else {
                   // Cuộn lên -> Giữ navbar cố định, hiện lại topbar và header container
                   topbar.classList.remove("hidden-topbar");
                   headerContainer.classList.remove("hidden-topbar");
                   navbar.classList.add("nav-fixed");
               }

               // Nếu quay về top (scrollY = 0) -> Trả navbar về vị trí cũ
               if (currentScrollY === 0) {
                   navbar.classList.remove("nav-fixed");
               }

               lastScrollY = currentScrollY;
           });

           //search-suggestion
           const searchInput = document.getElementById("search_input");
           const searchSuggestion = document.getElementById("search_suggestion");
           const showMoreText = document.querySelector(".show_more span");

           // Xử lý hiển thị gợi ý
           searchInput.addEventListener("input", (e) => {
               const query = e.target.value.trim();
               if (query.length > 0) {
                   searchSuggestion.classList.remove("hidden");
                   showMoreText.textContent = query;
                   // Giả lập kết quả (sau này thay bằng API)
                   document.getElementById("product_results").innerHTML = `<p class="py-1">Kết quả cho: <strong>${query}</strong></p>`;
               } else {
                   searchSuggestion.classList.add("hidden");
               }
           });

           // Ẩn khi click ra ngoài
           document.addEventListener("click", (e) => {
               if (!e.target.closest(".header_search")) {
                   searchSuggestion.classList.add("hidden");
               }
           });
       </script>
       @endpush()