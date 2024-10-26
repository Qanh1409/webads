<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazda Thaco</title>
    <link rel="icon" href="img\logo_Mazda.png" type="icon">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Khối header -->
    <div>
        <header class="bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
                <div class="container-fluid ms-3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- logo Mazda -->
                        <img src="{{ asset('img\logo_Mazda.png') }}" alt="Mazda Logo" height="40px" style="float: left">
                    </a>
                    <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">

                            <!-- cấu hình nút Dòng xe -->
                            <div>
                                <!-- Button "Dòng xe" -->
                                <li class="nav-item dropdown" style="position: relative;">
                                    <a class="nav-link fs-5" href="users/category" id="danhSachDongXe" role="button" aria-expanded="false"
                                        style="cursor: pointer;">
                                        Dòng xe
                                    </a>

                                    <!-- Dropdown Content 3 hàng -->
                                    <ul class="dropdown-menu" aria-labelledby="danhSachDongXe"
                                        style="width: 870px; position: absolute; display: none; opacity: 0; left: 0; top: 10%; transition: opacity 0.5s ease; padding: 80px;">

                                        <!-- Hàng 1 -->
                                        <div>
                                            <h3>Hatchback</h3>
                                            <hr>
                                            <li style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-M2sport" style="text-decoration: none;">
                                                        <img src="img\M2 SPORT\M2Sport-Avatar.jpg" alt="M2 Sport" width="150">
                                                        <p>M2 Sport</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-M3sport" style="text-decoration: none;">
                                                        <img src="img\M3 SPORT\M3Sport-Avatar.jpg" alt="M3 Sport" width="180">
                                                        <p>M3 Sport</p>
                                                    </a>
                                                </div>
                                            </li>
                                        </div>
                                        <!-- Hàng 2 -->
                                        <div>
                                            <h3>Sedan</h3>
                                            <hr>
                                            <li style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-M2sedan" style="text-decoration: none;">
                                                        <img src="img\MAZDA 2 SEDAN\M2-Sedan-Avatar.jpg" alt="M2 Sedan" width="150">
                                                        <p>M2 Sedan</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-M3sedan" style="text-decoration: none;">
                                                        <img src="img\MAZDA 3 SEDAN\Mazda-3-Sedan-3.jpg" alt="M3 Sedan" width="150">
                                                        <p>M3 Sedan</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-m6" style="text-decoration: none;">
                                                        <img src="img\MAZDA 6\Mazda6-avatar.png" alt="Mazda6" width="220">
                                                        <p>Mazda 6</p>
                                                    </a>
                                                </div>
                                            </li>
                                        </div>
                                        <!-- Hàng 3 -->
                                        <div>
                                            <h3>Sport Utility Vehicle (SUV)</h3>
                                            <hr>
                                            <li style="display: flex; justify-content: space-between;">
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-CX3" style="text-decoration: none;">
                                                        <img src="img\CX3\CX3-Avatar.jpg" alt="CX-3" width="150">
                                                        <p>CX-3</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-CX30" style="text-decoration: none;">
                                                        <img src="img\CX30\Cx30-Avatar.png" alt="CX-30" width="150">
                                                        <p>CX-30</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-CX5" style="text-decoration: none;">
                                                        <img src="img\CX5\CX5-avatar.jpg" alt="CX-5" width="150">
                                                        <p>CX5</p>
                                                    </a>
                                                </div>
                                                <div style="flex: 1; padding: 10px; text-align: center;">
                                                    <a href="url-to-CX8" style="text-decoration: none;">
                                                        <img src="img\CX8\CX8-avatar.jpg" alt="CX-8" width="150">
                                                        <p>CX8</p>
                                                    </a>
                                                </div>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                                <script>
                                    const danhSachDongXe = document.getElementById('danhSachDongXe');
                                    const dropdownMenu = document.querySelector('.dropdown-menu');

                                    danhSachDongXe.addEventListener('mouseenter', function() {
                                        setTimeout(() => {
                                            dropdownMenu.style.display = 'block';
                                            setTimeout(() => {
                                                dropdownMenu.style.opacity = '1';
                                            }, 0); // Hiệu ứng opacity khi hover
                                        }, 500); // Độ trễ 0.5 giây
                                    });

                                    document.querySelector('.nav-item.dropdown').addEventListener('mouseleave', function() {
                                        dropdownMenu.style.opacity = '0';
                                        setTimeout(() => {
                                            dropdownMenu.style.display = 'none';
                                        }, 500); // Thời gian hiệu ứng 0.5 giây trước khi ẩn hoàn toàn
                                    });
                                </script>

                            </div>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{ url('/tin-tuc') }}">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{ url('/gioi-thieu') }}">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{ url('/lai-thu') }}">Lái thử</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{ url('/lien-he') }}">Liên hệ</a>
                            </li>
                        </ul>
                        <div class="d-flex ms-3">
                            <!-- form tìm kiếm -->
                            <form class="d-flex flex-grow-1" action="{{ url('/tim-kiem') }}" method="GET">
                                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="q">
                                <button class="btn btn-outline-success" type="submit">Tìm</button>
                            </form>
                            <!-- Nút Đăng ký -->
                            <a href="users/register" class="btn btn-outline-danger me-2">Đăng ký</a>
                            <!-- Nút Đăng nhập -->
                            <a href="users/login" class="btn btn-outline-danger">Đăng nhập</a>
                            <!-- Tùy chọn ngôn ngữ -->
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Chọn Ngôn Ngữ
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="alert('Chọn ngôn ngữ tiếng Việt')">
                                            <img src="img\pngtree-best-vietnam-flag-realistic-with-3d-shadow-effect-png-image_4553564.png" alt="" width="20"> Tiếng Việt
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="alert('Chọn ngôn ngữ tiếng Anh')">
                                            <img src="img\Flag_of_the_United_Kingdom_(3-5).svg.png" alt="UK Flag" width="20"> English
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tùy chỉnh cho sửa thành ngôn ngữ -->
                            <script>
                                function changeLanguage(lang) {
                                    // Lấy URL hiện tại
                                    var currentUrl = window.location.href;
                                    var newUrl;

                                    // Kiểm tra nếu URL có tham số lang thì thay thế, nếu không thì thêm vào
                                    if (currentUrl.includes('?lang=')) {
                                        newUrl = currentUrl.replace(/(\?lang=)[a-zA-Z]{2}/, '?lang=' + lang);
                                    } else {
                                        newUrl = currentUrl + '?lang=' + lang;
                                    }

                                    // Chuyển trang với URL mới
                                    window.location.href = newUrl;
                                }
                            </script>

                        </div>
                    </div>
            </nav>
        </header>
    </div>

    <!-- Mục nội dung chính -->

    <!-- Navbar -->
    <div style="background-color: #000; color: #fff; padding: 10px; text-align: center;">
        <a href="#" style="color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold; text-decoration: underline;">Tất cả</a>
        <a href="#" style="color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold;">SUV</a>
        <a href="#" style="color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold;">Sedan</a>
        <a href="#" style="color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold;">Hatchback</a>
    </div>

    <!-- Danh mục xe -->
    <div style="margin: 30px auto; width: 80%; text-align: center;">

        <!-- Hàng xe đầu tiên -->
        <div style="display: flex; justify-content: space-around; margin: 20px 0;">
            <div style="text-align: center; width: 200px;">
                <img src="\img\CX3\CX3-Avatar.jpg" alt="Mazda CX-3" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA CX-3</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="\img\CX30\Cx30-Avatar.png" alt="Mazda CX-30" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA CX-30</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="\img\CX5\CX5-avatar.jpg" alt="Mazda CX-5" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA CX-5</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="mazda-cx-8.jpg" alt="Mazda CX-8" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA CX-8</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
        </div>

        <!-- Divider -->
        <div style="width: 80%; height: 1px; background-color: #ddd; margin: 30px auto;"></div>

        <!-- Hàng xe thứ hai -->
        <div style="display: flex; justify-content: space-around; margin: 20px 0;">
            <div style="text-align: center; width: 200px;">
                <img src="mazda2.jpg" alt="Mazda2" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA2</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="mazda3.jpg" alt="Mazda3" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA3</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="mazda6.jpg" alt="Mazda6" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA6</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
        </div>

        <!-- Divider -->
        <div style="width: 80%; height: 1px; background-color: #ddd; margin: 30px auto;"></div>

        <!-- hàng xe thứ 3 -->
        <div style="display: flex; justify-content: space-around; margin: 20px 0;">
            <div style="text-align: center; width: 200px;">
                <img src="mazda2.jpg" alt="Mazda2" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA 2 SPORT</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="mazda3.jpg" alt="Mazda3" style="width: 100%; height: auto;">
                <h3 style="margin: 10px 0; font-size: 18px;">MAZDA 3 SPORT</h3>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">LIÊN HỆ</p>
                <p style="margin: 5px 0; font-size: 14px; color: #777;">ĐĂNG KÝ LÁI THỬ</p>
            </div>
        </div>
    </div>

    <!-- Nút button clink lên đầu trang -->
    <button onclick="scrollToTop()" style="position: fixed; bottom: 20px; right: 20px; padding: 15px 27px; background-color: #000; color: white; border: none; border-radius: 50%; cursor: pointer; font-size: 24px;">
        ↑
    </button>

    <!-- JavaScript để cuộn lên đầu trang -->
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>


    <!-- Khối chân footer -->
    <footer class="bg-dark text-light pt-4">
        <div class="container">
            <div class="row">
                <!-- Các dòng xe -->
                <div class="col-md-2">
                    <h6>Các dòng xe</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Sedan</a></li>
                        <li><a href="#" class="text-decoration-none text-light">SUV</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Hatchback</a></li>
                    </ul>
                </div>

                <!-- Mua xe -->
                <div class="col-md-2">
                    <h6>Mua xe</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Ưu đãi mới nhất</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Tìm xe mới</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Tìm xe đã qua sử dụng</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Bảng giá xe</a></li>
                    </ul>
                </div>

                <!-- Tư vấn mua xe -->
                <div class="col-md-2">
                    <h6>Tư vấn mua xe</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Yêu cầu tư vấn</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Đăng ký lái thử</a></li>
                    </ul>
                </div>

                <!-- Dịch vụ -->
                <div class="col-md-3">
                    <h6>Dịch vụ</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Đặt lịch bảo dưỡng</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Phụ kiện chính hãng</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Hướng dẫn sử dụng dịch vụ</a></li>
                    </ul>
                </div>

                <!-- Khám phá về Mazda -->
                <div class="col-md-3">
                    <h6>Khám phá về Mazda</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Tìm đại lý gần nhất</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Liên hệ</a></li>
                        <ul class="list-unstyled ms-3">
                            <li><a href="tel:+1234567890" class="text-white text-decoration-none">
                                    <img src="" alt="Phone" width="16"> Số điện thoại
                                </a></li>
                            <li><a href="mailto:example@example.com" class="text-white text-decoration-none">
                                    <img src="path/to/email_icon.png" alt="Email" width="16"> Email
                                </a></li>
                            <li><a href="http://example.com" class="text-white text-decoration-none">
                                    <img src="path/to/website_icon.png" alt="Website" width="16"> Website
                                </a></li>
                        </ul>
                    </ul>
                </div>
            </div>

            <!-- Đường gạch ngang -->
            <hr class="my-3 bg-light">

            <!-- Icon mạng xã hội -->
            <div class="text-center pb-3">
                <a href="#" class="me-3 text-decoration-none text-white">
                    <img src="img\logo-fb.png" alt="Facebook" width="24">
                </a>
                <a href="#" class="me-3 text-decoration-none text-white">
                    <img src="path/to/website_icon.png" alt="Website" width="24">
                </a>
                <a href="#" class="text-decoration-none text-white">
                    <img src="https://banner2.cleanpng.com/20180729/uwy/1a179ff9617a9bf05426d9170b164557.webp" alt="Instagram" width="24">
                </a>
            </div>
        </div>
    </footer>

    <!-- JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</body>

</html>