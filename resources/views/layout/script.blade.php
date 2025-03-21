<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    <!-- swiper -->
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


// menu-scroll on page

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
</script>


















<!-- about -->
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
    <!-- about -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>