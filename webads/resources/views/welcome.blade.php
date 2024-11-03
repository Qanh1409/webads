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
                                            <h3>Hatchback</h3> <hr>
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

    <!-- video giới thiệu -->
    <!-- Container bao quanh để căn giữa -->
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #000000;">
        <!-- Container video và lớp phủ -->
        <div style="position: relative; display: inline-block;">

            <!-- Video -->
            <video autoplay loop muted style="width: 1600" height="900">
                <source src="img\IntroduceM3Sport.mp4" type="video/mp4">
            </video>

            <!-- Lớp phủ với chữ và nút button -->
            <div style="position: absolute; top: 60%; left: 20%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <p style="font-size: 30px; font-weight: bold;">All New Mazda3 - Art That Moves You</p>
                <a href="https://www.mercedes-benz.com.vn/vi" style="text-decoration: none;">
                    <button style="padding: 12px 40px; font-size: 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
                        Tìm hiểu sự kiện
                    </button>
            </div>
        </div>
    </div>


    <div style="text-align: center; margin-top: 50px;">
        <a href="#" style="text-decoration: none; color: #007BFF; font-family: 'Arial', sans-serif; font-size: 20px; font-weight: bold; padding: 10px 20px; border: 2px solid #007BFF; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
            Tìm hiểu thêm
        </a>
    </div>

    <div class="container mt-4">
        <!-- Hàng ngang 1 với 2 cột tỉ lệ 2/3 -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin Tức 1</h5>
                        <p class="card-text">Nội dung tin tức 1. Đây là một ví dụ về thông tin chi tiết.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin Tức 2</h5>
                        <p class="card-text">Nội dung tin tức 2. Thông tin bổ sung cho tin tức này.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng ngang 2 với 3 cột bằng nhau -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin Tức 3</h5>
                        <p class="card-text">Nội dung tin tức 3. Một số thông tin hữu ích về chủ đề này.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin Tức 4</h5>
                        <p class="card-text">Nội dung tin tức 4. Thêm thông tin cho bạn đọc.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tin Tức 5</h5>
                        <p class="card-text">Nội dung tin tức 5. Khám phá thêm các chủ đề khác.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

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

    <div style="margin-left:10px ; padding: 20px;">
        <p style="margin-right:90px; margin-left:10px ; padding: 0px; font-size: 40px; font-weight: bold; font-family: 'Times New Roman', serif; line-height: 1.5;">
            Sự kết hợp hoàn hảo giữa sự sang trọng, <br> tính thể thao và hiệu suất: Khám phá các <br>màu xe mới nhất của chúng tôi
        </p>
    </div>

    <!-- Các khối hiển thị tất cả các dòng xe -->
    <div style="display: flex; justify-content: space-between;">
        <!-- Cột 1 -->
        <div style="flex: 1; padding: 30px;">
            <a href="https://example.com/suv1" style="text-decoration: none; color: inherit;">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px; border: 1px solid #ccc;">
                    <div>
                        <h1 style="font-size: 28px; font-weight: bold;">Hatchback</h1>
                        <p style="font-size: 18px;">Khám phá tất cả các dòng xe</p>
                    </div>
                    <div>
                        <img src="https://xedoisong.vn/uploads/user_4/2023/4-2023/6/mazda/xedoisong_mazda_3_2023_1.jpg" alt="Mazda CX-5" width="250">
                    </div>
                </div>
        </div>
        <!-- Cột 2 -->
        <div style="flex: 1; padding: 30px;">
            <a href="https://example.com/suv1" style="text-decoration: none; color: inherit;">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px; border: 1px solid #ccc;">
                    <div>
                        <h1 style="font-size: 28px; font-weight: bold;">Sedan</h1>
                        <p style="font-size: 18px;">Khám phá tất cả các dòng xe</p>
                    </div>
                    <div>
                        <img src="https://mazdamotors.vn/media/llclsos0/mazda6_gsj9eae_25d_gt7_ext_360_36_png_0007.jpg" alt="Mazda CX-5" width="250">
                    </div>
                </div>
        </div>
        <!-- Cột 3 -->
        <div style="flex: 1; padding: 30px">
            <a href="https://example.com/suv1" style="text-decoration: none; color: inherit;">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px; border: 1px solid #ccc;">
                    <div>
                        <h1 style="font-size: 28px; font-weight: bold;">SUV</h1>
                        <p style="font-size: 18px;">Khám phá tất cả các dòng xe</p>
                    </div>
                    <div>
                        <img src="img\CX5\CX5-avatar.jpg" alt="Mazda CX-5" width="180">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <br><br>

    <!-- Khối dịch vụ của hãng xe -->

    <div class="container my-5">
        <h2 class="text-center mb-4" style="font-size: 36px; font-weight: bold;">Dịch vụ</h2>

        <!-- Carousel -->
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Mục 1: Hướng dẫn sử dụng cho chủ xe -->
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="https://heyoto.vn/wp-content/uploads/2024/07/mam-xe-mazda-cx-5-premium-exclusive.jpg" alt="Hướng dẫn sử dụng cho chủ xe" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6" style="padding: 20px;">
                            <h3 style="font-size: 24px; font-weight: bold;">Hướng dẫn sử dụng cho chủ xe</h3>
                            <p style="font-size: 16px; color: #666;">Bảng thông tin tính năng và hướng dẫn chi tiết dành cho xe của bạn.</p>
                            <button class="btn btn-outline-dark" style="font-size: 16px; padding: 10px 20px;">Tìm hiểu thêm</button>
                        </div>
                    </div>
                </div>

                <!-- Mục 2: Đặt hẹn dịch vụ trực tuyến -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="https://mazdamotors.vn/media/fzace3nd/call-center.jpg?width=550&height=393" alt="Đặt hẹn dịch vụ trực tuyến" style="width: 80%; height: auto;">
                        </div>
                        <div class="col-md-6" style="padding: 20px;">
                            <h3 style="font-size: 24px; font-weight: bold;">Đặt hẹn dịch vụ trực tuyến</h3>
                            <p style="font-size: 16px; color: #666;">Đặt lịch hẹn dịch vụ trực tuyến một cách thuận tiện.</p>
                            <button class="btn btn-outline-dark" style="font-size: 16px; padding: 10px 20px;">Đặt lịch hẹn</button>
                        </div>
                    </div>
                </div>

                <!-- Mục 3: Hỗ trợ đăng ký lái thử -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="https://mazdavinhlong.vn/media/l04pmg5g/hi-nh-7.jpg" alt="Hỗ trợ đăng ký lái thử" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-md-6" style="padding: 20px;">
                            <h3 style="font-size: 24px; font-weight: bold;">Hỗ trợ khách hàng</h3>
                            <p style="font-size: 16px; color: #666;">Cung cấp thông tin và hỗ trợ khách hàng 24/7.</p>
                            <button class="btn btn-outline-dark" style="font-size: 16px; padding: 10px 20px;">Liên hệ ngay</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Điều khiển Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


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