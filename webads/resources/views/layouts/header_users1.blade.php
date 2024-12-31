<!-- KHỐI HEADER SAU KHI ĐĂNG NHẬP THÀNH CÔNG TÀI KHOẢN USER -->
<header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
        <div class="container-fluid ms-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logo_Mazda.png') }}" alt="Mazda Logo" height="50" style="float: left;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- CÁC KHỐI CHÍNH HEADER -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown" style="position: relative;">
                        <a class="nav-link fs-5" href="/category" id="danhSachDongXe" role="button" aria-expanded="false" style="cursor: pointer;">
                            Dòng xe
                        </a>

                        <!-- Dropdown Content -->
                        <ul class="dropdown-menu" aria-labelledby="danhSachDongXe"
                            style="width: 900px; position: absolute; display: none; opacity: 0; left: 0; top: 100%; transition: opacity 0.5s ease; padding: 20px; background-color: #f8f9fa; border-radius: 8px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);">
                            <!-- Category -->
                            <div style="padding: 10px;">
                                <h5 style="color: #333; font-weight: bold;">Các dòng xe</h5>
                                <hr>
                                <li style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 10px;">
                                    @foreach ($categories as $dongXe)
                                    <div style="flex: 1; text-align: center; max-width: 200px;">
                                        <a href="{{ url('dong-xe/' . $dongXe->id) }}" style="text-decoration: none; color: #333;">
                                            <img src="{{ asset('images/categories/'.$dongXe->img) }}" alt="{{ $dongXe->name }}" width="120"
                                                style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">{{ $dongXe->name }}</p>
                                        </a>
                                    </div>
                                    @endforeach
                                </li>
                            </div>

                        </ul>


                        <!-- JavaScript cho nút Dòng xe -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const danhSachDongXe = document.getElementById('danhSachDongXe');
                                const dropdownMenu = document.querySelector('.dropdown-menu');

                                // Kiểm tra nếu các phần tử tồn tại trước khi gán sự kiện
                                if (danhSachDongXe && dropdownMenu) {
                                    danhSachDongXe.addEventListener('mouseenter', function() {
                                        setTimeout(() => {
                                            dropdownMenu.style.display = 'block';
                                            setTimeout(() => {
                                                dropdownMenu.style.opacity = '1';
                                            }, 0);
                                        }, 300);
                                    });

                                    document.querySelector('.nav-item.dropdown').addEventListener('mouseleave', function() {
                                        dropdownMenu.style.opacity = '0';
                                        setTimeout(() => {
                                            dropdownMenu.style.display = 'none';
                                        }, 300);
                                    });
                                } else {
                                    console.error('Không tìm thấy #danhSachDongXe hoặc .dropdown-menu');
                                }
                            });
                        </script>
                    </li>

                    <!-- Nút tin tức -->
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/news') }}">Tin tức</a></li>


                    <!-- CẤU HÌNH NÚT GIỚI THIỆU -->
                    <li class="nav-item" id="dropdown-container"><a class="nav-link fs-5" href="#" id="intro-button">Giới thiệu</a>
                        <!-- Menu thả xuống -->
                        <div id="dropdown-content" style="
                            display: none; 
                            position: absolute; 
                            top: 80%; 
                            left: 50%; 
                            transform: translateX(-50%); 
                            background-color: #f4f4f4; /* Màu nền sáng và trang nhã */
                            padding: 20px; /* Giảm bớt padding để tạo không gian hợp lý */
                            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); 
                            z-index: 10; 
                            min-width: 650px; /* Tăng chiều rộng của menu để có không gian cho các mục */
                            border-radius: 12px; /* Viền bo tròn mượt mà */
                            display: flex; 
                            gap: 40px; /* Giữ khoảng cách giữa các phần */
                            font-family: 'Roboto', sans-serif; /* Font sans-serif hiện đại và dễ đọc */
                            font-size: 16px; 
                            transition: all 0.3s ease;">
                            <!-- Phần bên trái -->
                            <div style="width: 300px;">
                                <h3 style="font-family: 'Merriweather', serif; font-weight: 700; font-size: 24px; color: #333; margin-bottom: 20px;">
                                    THƯƠNG HIỆU MAZDA
                                </h3>
                                <a href="{{ url('introduce/design') }}" style="color: #555; padding: 12px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease, background-color 0.3s ease;">
                                    THIẾT KẾ
                                </a>
                                <a href="{{ url('introduce/creative') }}" style="color: #555; padding: 12px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease, background-color 0.3s ease;">
                                    SÁNG TẠO
                                </a>
                                <a href="{{ url('introduce/iActivsense') }}" style="color: #555; padding: 12px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease, background-color 0.3s ease;">
                                    TÍNH NĂNG AN TOÀN
                                </a>
                            </div>

                            <!-- Đường kẻ dọc -->
                            <div style="border-left: 1px solid #ddd; height: auto; margin: 0 40px;"></div>

                            <!-- Phần bên phải -->
                            <div style="width: 350px;">
                                <h3 style="font-family: 'Merriweather', serif; font-weight: 700; font-size: 24px; color: #333; margin-bottom: 20px;">
                                    MAZDA VIỆT NAM
                                </h3>
                                <p style="margin: 0; font-size: 15px; line-height: 1.8; color: #555;">
                                    Năm 2011, Thaco hợp tác với tập đoàn Mazda Nhật Bản xây dựng nhà máy sản xuất và lắp ráp xe Mazda tại khu Kinh tế mở Chu Lai, Quảng Nam với công suất 10.000 xe/năm.
                                </p>
                                <a href="https://thacochulai.vn/nha-may-thaco-mazda" style="color: #007bff; text-decoration: none; font-size: 16px; display: inline-block; margin-top: 15px; font-weight: 600;">
                                    VỀ MAZDA VIỆT NAM
                                </a>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const button = document.getElementById('intro-button'); // Nút Giới thiệu
                                const dropdownContent = document.getElementById('dropdown-content'); // Menu thả xuống

                                // Đảm bảo menu mặc định ẩn
                                dropdownContent.style.display = 'none';

                                // Hiển thị menu khi hover vào nút
                                button.addEventListener('mouseenter', () => {
                                    dropdownContent.style.display = 'flex';
                                });

                                // Ẩn menu khi rời khỏi nút
                                button.addEventListener('mouseleave', () => {
                                    setTimeout(() => {
                                        if (!dropdownContent.matches(':hover')) {
                                            dropdownContent.style.display = 'none';
                                        }
                                    }, 100);
                                });

                                // Đảm bảo menu không ẩn khi hover vào chính menu
                                dropdownContent.addEventListener('mouseenter', () => {
                                    dropdownContent.style.display = 'flex';
                                });

                                // Ẩn menu khi rời khỏi menu
                                dropdownContent.addEventListener('mouseleave', () => {
                                    dropdownContent.style.display = 'none';
                                });
                            });
                        </script>
                    </li>

                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/testDrive') }}">Lái thử</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/contactUs') }}">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="/installment">Dự toán trả góp</a></li>
                </ul>

                <!-- User Greeting and Logout Button -->
                <div class="d-flex ms-3 align-items-center">

                    <!-- Display the logged-in user's name -->
                    <span class="navbar-text text-white me-3">
                        Xin chào, {{ Auth::user()->name }}!
                    </span>

                    <!-- Logout button -->
                    <a href="{{route('user.logout')}}">Đăng xuất</a>

                </div>

                <!-- Language Selector -->
                <div class="dropdown ms-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn Ngôn Ngữ
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="img/flag-vietnam.png" alt="Vietnamese Flag" width="20"> Tiếng Việt
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="img/flag-UK.png" alt="UK Flag" width="20"> English
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Đường dẫn tới Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
</header>