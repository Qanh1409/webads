<!-- KHỐI HEADER -->

<!-- CÁC ĐƯỜNG DẪN -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazda Thaco</title>
    <link rel="icon" href="img\logo_Mazda.png" type="icon">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<!-- KHỐI HEADER -->
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
                    <!-- Cấu hình nút Dòng xe -->
                    <li class="nav-item dropdown" style="position: relative;">
                        <a class="nav-link fs-5" href="/category" id="danhSachDongXe" role="button" aria-expanded="false" style="cursor: pointer;">
                            Dòng xe
                        </a>

                        <!-- Dropdown Content -->
                        <ul class="dropdown-menu" aria-labelledby="danhSachDongXe"
                            style="width: 900px; position: absolute; display: none; opacity: 0; left: 0; top: 100%; transition: opacity 0.5s ease; padding: 20px; background-color: #f8f9fa; border-radius: 8px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);">

                            <!-- SUV Category -->
                            <div style="padding: 10px;">
                                <h5 style="color: #333; font-weight: bold;">SUV</h5>
                                <hr>
                                <li style="display: flex; gap: 20px; margin-bottom: 10px;">
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-CX8" style="text-decoration: none; color: #333;">
                                            <img src="img/CX8/CX8-avatar.jpg" alt="CX-8" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">CX-8</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-CX5" style="text-decoration: none; color: #333;">
                                            <img src="img/CX5/CX5-avatar.jpg" alt="CX-5" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">CX-5</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-CX30" style="text-decoration: none; color: #333;">
                                            <img src="img/CX30/Cx30-Avatar.png" alt="CX-30" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">CX-30</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-CX3" style="text-decoration: none; color: #333;">
                                            <img src="img/CX3/CX3-Avatar.jpg" alt="CX-3" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">CX-3</p>
                                        </a>
                                    </div>
                                </li>
                            </div>

                            <!-- Sedan Category -->
                            <div style="padding: 10px;">
                                <h5 style="color: #333; font-weight: bold;">Sedan</h5>
                                <hr>
                                <li style="display: flex; gap: 20px; margin-bottom: 10px;">
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-M2sedan" style="text-decoration: none; color: #333;">
                                            <img src="img/MAZDA_2_SEDAN/M2-Sedan-Avatar.jpg" alt="M2 Sedan" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">Mazda 2 Sedan</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-M3sedan" style="text-decoration: none; color: #333;">
                                            <img src="img/MAZDA_3_SEDAN/Mazda-3-Sedan-3.jpg" alt="M3 Sedan" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">Mazda 3 Sedan</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-M6" style="text-decoration: none; color: #333;">
                                            <img src="img/MAZDA_6/Mazda6-avatar.png" alt="Mazda6" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">Mazda 6</p>
                                        </a>
                                    </div>
                                </li>
                            </div>

                            <!-- Hatchback Category -->
                            <div style="padding: 10px;">
                                <h5 style="color: #333; font-weight: bold;">Hatchback</h5>
                                <hr>
                                <li style="display: flex; gap: 20px;">
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-M2sport" style="text-decoration: none; color: #333;">
                                            <img src="img/M2_SPORT/M2Sport-Avatar.jpg" alt="M2 Sport" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">Mazda 2 Sport</p>
                                        </a>
                                    </div>
                                    <div style="flex: 1; text-align: center;">
                                        <a href="url-to-M3sport" style="text-decoration: none; color: #333;">
                                            <img src="img/M3_SPORT/M3Sport-Avatar.jpg" alt="M3 Sport" width="120" style="border-radius: 8px;">
                                            <p style="margin-top: 5px;">Mazda 3 Sport</p>
                                        </a>
                                    </div>
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


                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/tin-tuc') }}">Tin tức</a></li>


                    <!-- CẤU HÌNH NÚT GIỚI THIỆU -->

                    <!-- Nút Giới thiệu -->
                    <li class="nav-item" id="dropdown-container">
                        <a class="nav-link fs-5" href="{{ url('/introduce') }}" id="intro-button">Giới thiệu</a>
                        <!-- Menu thả xuống -->
                        <!-- Menu thả xuống -->
                        <!-- Menu thả xuống -->
                        <div id="dropdown-content" style="
    display: none;
    position: absolute;
    top: 120%; /* Tăng khoảng cách để menu không bị sát quá với nút Giới thiệu */
    left: 50%;
    transform: translateX(-50%);
    background-color: #f8f8f8;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Bóng đổ nhẹ tạo cảm giác hiện đại */
    z-index: 10;
    min-width: 600px;
    border-radius: 10px;
    display: flex;
    gap: 40px;
    font-family: 'Roboto', sans-serif; /* Phông chữ dễ đọc cho nội dung */
    font-size: 16px;
    transition: all 0.3s ease; /* Hiệu ứng chuyển động mượt mà */
">
                            <!-- Phần bên trái -->
                            <div style="width: 250px;">
                                <h3 style="font-weight: 700; font-size: 22px; color: #333; margin-bottom: 15px; font-family: 'Merriweather', serif;">THƯƠNG HIỆU MAZDA</h3>
                                <a href="{{ url('/design') }}" style="color: #555; padding: 10px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease;">
                                    THIẾT KẾ
                                </a>
                                <a href="{{ url('/creativity') }}" style="color: #555; padding: 10px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease;">
                                    SÁNG TẠO
                                </a>
                                <a href="{{ url('/safety') }}" style="color: #555; padding: 10px 0; text-decoration: none; display: block; font-size: 16px; line-height: 1.6; transition: color 0.3s ease;">
                                    TÍNH NĂNG AN TOÀN
                                </a>
                            </div>

                            <!-- Đường kẻ dọc -->
                            <div style="border-left: 1px solid #ddd; height: auto; margin: 0 30px;"></div>

                            <!-- Phần bên phải -->
                            <div style="width: 250px;">
                                <h3 style="font-weight: 700; font-size: 22px; color: #333; margin-bottom: 15px; font-family: 'Merriweather', serif;">MAZDA VIỆT NAM</h3>
                                <p style="font-size: 16px; color: #666; line-height: 1.6; margin-bottom: 15px;">
                                    Năm 2011, Thaco hợp tác với tập đoàn Mazda Nhật Bản xây dựng nhà máy sản xuất và lắp ráp xe Mazda tại khu Kinh tế mở Chu Lai, Quảng Nam với công suất 10.000 xe/năm.
                                </p>
                                <a href="{{ url('/mazda-vietnam') }}" style="color: #007BFF; text-decoration: none; font-size: 16px; font-weight: 600; transition: color 0.3s ease;">
                                    VỀ MAZDA VIỆT NAM
                                </a>
                            </div>
                        </div>



                        <script>
                            const introButton = document.getElementById("intro-button");
                            const dropdownContent = document.getElementById("dropdown-content");

                            // Hiển thị menu khi hover vào nút "Giới thiệu"
                            introButton.addEventListener("mouseenter", () => {
                                dropdownContent.style.display = "flex"; // Hiển thị menu khi hover vào nút "Giới thiệu"
                            });

                            // Giữ menu mở khi chuột còn trong menu
                            dropdownContent.addEventListener("mouseenter", () => {
                                dropdownContent.style.display = "flex"; // Giữ menu mở khi chuột trong menu
                            });

                            // Ẩn menu khi chuột rời khỏi cả nút "Giới thiệu" và menu
                            introButton.addEventListener("mouseleave", (event) => {
                                setTimeout(() => {
                                    if (!dropdownContent.matches(":hover")) {
                                        dropdownContent.style.display = "none"; // Ẩn menu khi chuột không còn trong menu
                                    }
                                }, 200); // Đợi một chút để đảm bảo chuột có thể di chuyển vào menu
                            });

                            // Ẩn menu khi chuột rời khỏi menu
                            dropdownContent.addEventListener("mouseleave", (event) => {
                                setTimeout(() => {
                                    if (!introButton.matches(":hover")) {
                                        dropdownContent.style.display = "none"; // Ẩn menu khi chuột ra khỏi cả nút "Giới thiệu" và menu
                                    }
                                }, 200); // Đợi một chút để tránh ẩn menu quá nhanh
                            });
                        </script>
                    </li>



                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/lai-thu') }}">Lái thử</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/lien-he') }}">Liên hệ</a></li>
                </ul>

                <!-- Các nút chức năng bên phải -->
                <div class="d-flex ms-3 align-items-center">
                    <!-- Form tìm kiếm -->
                    <form class="d-flex" action="{{ url('/tim-kiem') }}" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="q" style="min-width: 200px;">
                        <!-- Icon Kính lúp cho Tìm kiếm với khoảng cách được thêm vào bên phải -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor"
                            style="color: #f8f9fa; cursor: pointer; transition: transform 0.3s ease, color 0.3s ease; margin-right: 10px;"
                            class="bi bi-search" viewBox="0 0 16 16" role="img" aria-label="Tìm kiếm"
                            onmouseover="this.style.color='#ffc107'; this.style.transform='scale(1.2)';"
                            onmouseout="this.style.color='#f8f9fa'; this.style.transform='scale(1)';">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.099zm-5.442-.344a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" />
                        </svg>

                        <!-- <button class="btn btn-success" type="submit" style="padding: 8px 20px; border-radius: 25px; border: none; color: white; font-weight: 500; transition: background-color 0.3s ease;">
                                Tìm
                            </button> -->
                    </form>
                    <!-- Nút Đăng ký -->
                    <a href="users/register" class="btn me-2"
                        style="padding: 10px 24px; border-radius: 30px; color: white; background: linear-gradient(90deg, #4CAF50, #66BB6A); 
                font-weight: 600; box-shadow: 0px 4px 12px rgba(76, 175, 80, 0.5); border: none; 
                transition: transform 0.3s ease, box-shadow 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 14px rgba(76, 175, 80, 0.7)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 12px rgba(76, 175, 80, 0.5)';">
                        Đăng ký
                    </a>

                    <!-- Nút Đăng nhập -->
                    <a href="users/login" class="btn me-3"
                        style="padding: 10px 24px; border-radius: 30px; color: white; background: linear-gradient(90deg, #FF9800, #FFB74D); 
                font-weight: 600; box-shadow: 0px 4px 12px rgba(255, 152, 0, 0.5); border: none; 
                transition: transform 0.3s ease, box-shadow 0.3s ease;"
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0px 6px 14px rgba(255, 152, 0, 0.7)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 4px 12px rgba(255, 152, 0, 0.5)';">
                        Đăng nhập
                    </a>

                    <!-- Tùy chọn ngôn ngữ -->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 8px 20px; border-radius: 25px; font-weight: 500; background-color: #6c757d; color: white; transition: background-color 0.3s ease;">
                            Chọn Ngôn Ngữ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="#" onclick="alert('Chọn ngôn ngữ tiếng Việt')">
                                    <img src="img\flag-vietnam.png" alt="Vietnamese Flag" width="20"> Tiếng Việt
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="alert('Chọn ngôn ngữ tiếng Anh')">
                                    <img src="img/flag-UK.png" alt="UK Flag" width="20"> English
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>


</header>