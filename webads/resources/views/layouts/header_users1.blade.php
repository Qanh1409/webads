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
                    <!-- Existing menu items go here -->
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/tin-tuc') }}">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/introduce') }}">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/lai-thu') }}">Lái thử</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ url('/lien-he') }}">Liên hệ</a></li>
                </ul>

                <!-- User Greeting and Logout Button -->
                <div class="d-flex ms-3 align-items-center">

                    <!-- Display the logged-in user's name -->
                    <span class="navbar-text text-white me-3">
                        Xin chào, {{ Auth::user()->name }}!
                    </span>

                    <!-- Logout button -->
                    <form action="" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Đăng xuất</button>
                    </form>

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
</header>