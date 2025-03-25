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
<div class="container mx-auto px-12 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Form liên hệ -->
        <div>
            <h2 class="text-xl mb-4 text-gray-600">Gửi tin nhắn cho chúng tôi</h2>
            <form action="/contact" method="post" class="space-y-4 bg-white p-6 shadow-md rounded-lg">
                <input type="hidden" name="form_type" value="contact">
                <input type="hidden" name="utf8" value="✓">
                <p id="errorFills" class="text-red-500 text-sm"></p>

                <input type="text" name="contact[name]" placeholder="Họ tên*" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="email" name="contact[email]" placeholder="Email*" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <input type="tel" name="contact[phone]" placeholder="Điện thoại*" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                <textarea name="contact[body]" placeholder="Nhập nội dung*" rows="6" required
                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>

                <button type="submit" class="px-8 bg-[rgb(128,187,53)] text-white py-2 rounded-md hover:bg-[rgba(128,187,53,0.8)]">Gửi liên hệ</button>
            </form>
        </div>

        <!-- Thông tin liên hệ -->
        <div class="space-y-4">
            <div class="flex items-start space-x-4">
                <i class="fa fa-map-marker text-[rgb(128,187,53)] text-2xl"></i>
                <div>
                    <label class="font-bold">Địa chỉ liên hệ</label>
                    <p>268 Cầu Giấy, Quận Cầu Giấy, Hà Nội, Vietnam</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <i class="fa fa-phone text-[rgb(128,187,53)] text-2xl"></i>
                <div>
                    <label class="font-bold">Số điện thoại</label>
                    <a href="tel:0912117494" class="block text-blue-500 hover:underline">0912117494</a>
                    <p>Thứ 2 - Chủ nhật: 9:00 - 18:00</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <i class="fa fa-envelope text-[rgb(128,187,53)] text-2xl"></i>
                <div>
                    <label class="font-bold">Email</label>
                    <a href="mailto:dualeotheme@gmail.com" class="block text-blue-500 hover:underline">dualeotheme@gmail.com</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <!-- Phần hiển thị bản đồ và info-panel -->
    <div class="container mx-auto py-6">
        <h3 class="text-xl font-semibold mb-4">OpenStreetMap with Marker</h3>
        <div class="relative h-[500px] w-full">
            <!-- Bản đồ -->
            <!-- <div id="map" class="h-full w-full"></div> -->
            <div id="map" class="h-[500px] w-full rounded-lg shadow-md border border-gray-200"></div>
            <!-- Tooltip dính trên bản đồ -->
            <div id="zoom-info" class="absolute top-2 left-1/2 transform -translate-x-1/2 bg-black text-white p-2 rounded-md shadow-md text-sm z-10">
                🔍 Giữ <strong>Ctrl</strong> và lăn chuột để phóng to/thu nhỏ
            </div>

            <!-- Info Panel -->
            <div id="info-panel" class="absolute top-2 left-2 bg-white p-3 shadow-md border border-gray-300 text-sm z-[888]">
                Thông tin sẽ hiển thị ở đây.
            </div>

        </div>
    </div>
    @endsection
    @push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    @endpush()
    @push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        function initMap() {
            var map = L.map('map', {
                center: [16.064270, 108.188990],
                zoom: 15,
                zoomControl: false // Tắt nút zoom mặc định
            }).setView([16.064270, 108.188990], 15);
            // Thêm tooltip giữa màn hình
            let zoomInfo = document.getElementById('zoom-info');
            let timeout;

            // Hiện thông báo và tự ẩn sau 2s
            function showZoomInfo() {
                zoomInfo.classList.add('show');
                clearTimeout(timeout);

                timeout = setTimeout(() => {
                    zoomInfo.classList.remove('show');
                }, 10000);
            }

            // Khóa zoom mặc định của Leaflet
            map.scrollWheelZoom.disable();

            // Bắt buộc người dùng phải click vào bản đồ mới kích hoạt zoom
            map.on('click', () => {
                map.scrollWheelZoom.enable(); // Cho phép zoom khi click vào bản đồ
                showZoomInfo();
            });

            // Nếu người dùng click ra ngoài bản đồ, khóa lại zoom
            document.addEventListener('click', (e) => {
                if (!map.getContainer().contains(e.target)) {
                    map.scrollWheelZoom.disable();
                }
            });

            // Lắng nghe sự kiện Ctrl để hỗ trợ zoom nhanh hơn
            document.addEventListener('keydown', (e) => {
                if (e.key === "Control") map.scrollWheelZoom.enable();
            });
            document.addEventListener('keyup', (e) => {
                if (e.key === "Control") map.scrollWheelZoom.disable();
            });
            // Di chuyển nút zoom
            L.control.zoom({
                position: 'bottomright' // Đưa xuống góc phải dưới
            }).addTo(map);
            // Thêm layer bản đồ từ OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([16.064270, 108.188990]).addTo(map)
                .bindPopup('A pretty CSS popup.<br> Easily customizable.')
                .openPopup();

            // Thêm marker Hoàng Sa
            L.marker([16.5661, 112.2363])
                .addTo(map)
                .bindPopup("Quần đảo Hoàng Sa - Việt Nam");

            // Thêm marker Trường Sa
            L.marker([9.5381, 112.881239])
                .addTo(map)
                .bindPopup("Quần đảo Trường Sa - Việt Nam");
            // Hiển thị thông tin trong phần info-panel
            var infoPanel = document.getElementById('info-panel');
            infoPanel.innerHTML = `<div style="font-size: 14px;">
                    <strong>Top 10 Đà Nẵng</strong><br>
                    102 Lý Thái Tông, Thanh Khê Tây, Thanh Khê, Đà Nẵng 550000<br>
                    <strong>5.0</strong> ★★★★★ (11 bài viết)<br>
                    <a href="https://www.openstreetmap.org/?mlat=16.064270&mlon=108.188990" target="_blank">Xem bản đồ lớn hơn</a>
                </div>`;

            // Xử lý sự kiện nhấp chuột trên bản đồ
            map.on('click', function(e) {
                var latlng = e.latlng;
                var lat = latlng.lat;
                var lng = latlng.lng;

                // Gửi yêu cầu reverse geocoding đến Nominatim
                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1`)
                    .then(response => response.json())
                    .then(data => {
                        var address = data.display_name || "Không tìm thấy địa chỉ";
                        // Cập nhật nội dung của info-panel với địa chỉ nhận được
                        infoPanel.innerHTML = `<div style="font-size: 14px;">
                                <strong>Vị trí bạn đã chọn</strong><br>
                                ${address}<br>
                                <a href="https://www.openstreetmap.org/?mlat=${lat}&mlon=${lng}" target="_blank">Xem bản đồ lớn hơn</a>
                            </div>`;
                    })
                    .catch(error => {
                        console.error('Lỗi khi gọi API:', error);
                        infoPanel.innerHTML = `<div style="font-size: 14px;">
                                <strong>Vị trí bạn đã chọn</strong><br>
                                Không thể tìm thấy địa chỉ<br>
                                <a href="https://www.openstreetmap.org/?mlat=${lat}&mlon=${lng}" target="_blank">Xem bản đồ lớn hơn</a>
                            </div>`;
                    });
            });
        }

        // Khởi tạo bản đồ khi tài liệu đã sẵn sàng
        $(document).ready(function() {
            initMap();
        });
    </script>
    @endpush()