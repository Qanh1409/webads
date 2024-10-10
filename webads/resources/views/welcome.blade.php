<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazda Thaco</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrr3fy2-_N7kS2H4V9mV4ggKJlHkvp-p0cOg&s" type="icon">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Khối header -->
    <div>
        <header class="bg-light">
            <nav class="navbar navbar-expand-lg navbar-light container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- logo Mazda -->
                        <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrr3fy2-_N7kS2H4V9mV4ggKJlHkvp-p0cOg&s') }}" alt="Logo" alt="Mazda Logo" height="30">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{ url('/dong-xe') }}">Dòng xe</a>
                            </li>
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
                                        <a class="dropdown-item" href="#">
                                            <img src="img\pngtree-best-vietnam-flag-realistic-with-3d-shadow-effect-png-image_4553564.png" alt="" width="20"> Tiếng Việt
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="img\Flag_of_the_United_Kingdom_(3-5).svg.png" alt="UK Flag" width="20"> English
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </nav>
        </header>
    </div>

    <!-- Mục nội dung chính -->
    <!-- video giới thiệu -->
    <div>
        <div class="container-fluid p-0">
            <div class="position-relative w-100">
                <video class="w-100" autoplay muted loop>
                    <source src="img\introMazda.mp4" type="video/mp4">
                    Đây là video giới thiệu
                </video>
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center fs-1" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                </div>
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
    <div style="text-align: left; margin-top: 50px;">
        <a href="#" style="text-decoration: none; color: #007BFF; font-family: 'Arial', sans-serif; font-size: 30px; font-weight: bold; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
            Sự kết hợp hoàn hảo giữa sự sang trọng, tính thể thao <br> và hiệu suất: Khám phá các mẫu xe mới nhất của chúng tôi
        </a>
    </div>


    <!-- JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</body>

</html>