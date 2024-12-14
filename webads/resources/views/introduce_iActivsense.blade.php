@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<body>

    <!-- KHỐI VIDEO MỞ ĐẦU -->
    <div class="item-container">
        <video width="100%" autoplay muted playsinline loop>
            <source src="\img\introduce_iActivsense\why-mazda-safety-hero.mp4" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ video.
        </video>
    </div>

    <!-- KHỐI TIÊU ĐỀ VÀ HÌNH ẢNH MỞ ĐẦU  -->
    <div style="
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #EEEEEE; /* Light background color */
        padding: 40px;
        border-radius: 8px; /* Rounded corners */
        font-family: Arial, Montserrat;">

        <!-- Icon -->
        <img src="\img\introduce_iActivsense\safety_icon.png" alt="Car Icon" style="
            width: 40px; /* Điều chỉnh chiều rộng */
            height: auto; /* Chiều cao tự động để giữ tỷ lệ */
            margin-bottom: 50px;">
        <!-- Title -->
        <h2 style="
            font-size: 24px;
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 15px;
            font-family: 'Merriweather', Montserrat;">
            TRIẾT LÝ AN TOÀN CỦA MAZDA

        </h2>

        <!-- Description -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 1000px; /* Limit text width for readability */
            line-height: 1.6;">
            Mazda nhắm đến mục tiêu mang đến cho tất cả khách hàng niềm vui lái xe và hiệu suất an toàn trong một môi trường vượt trội.
            Dựa trên triết lý này, Mazda đang thúc đẩy nghiên cứu và phát triển các tính năng an toàn để hoàn thành mục tiêu quan trọng:
            xe lưu thông an toàn và không xảy ra tai nạn.
        </p>
    </div>

    <!-- I-ACTIVSENSE® -->
    <div style="position: relative; width: 100%; height: 800px; overflow: hidden;">
        <!-- Hình nền -->
        <img src="\img\introduce_iActivsense\iActivesense.jpg" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">

        <!-- Khối nội dung -->
        <div style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); width: 35%; color: white; padding: 30px 20px; z-index: 1; border-radius: 20px;">
            <!-- Tiêu đề -->
            <h2 style="font-size: 20px; font-weight: bold; text-transform: uppercase; margin-bottom: 15px; line-height: 1.4; text-align: left; font-family: Montserrat;">
                I-ACTIVSENSE®
            </h2>
            <!-- Nội dung đoạn văn -->
            <p style="font-size: 16px; font-weight: 300; line-height: 1.6; margin: 0; text-align: left;font-family: 'Roboto', Montserrat;">
                I-ACTIVSENSE® là hệ thống an toàn chủ động sử dụng các milliwave radar bước sóng cực ngắn,
                cho hình ảnh hiển thị rõ nét trên camera để giúp bạn kiểm soát môi trường xung quanh trong
                khi vẫn tập trung vào việc lái xe. Người lái sẽ càng tự tin và thích thú hơn khi biết các
                hệ thống an toàn được trang bị trên xe sẽ hoạt động liên tục để cảnh báo bạn về các mối nguy
                tiềm ẩn, tránh va chạm hoặc giảm mức độ nghiêm trọng của va chạm khi không thể tránh khỏi.
                Đây chính là một ví dụ về triết lý Jinba Ittai của chúng tôi, bảo đảm sự đồng nhất giữa xe và người lái.
            </p>
        </div>
    </div>

    <p style="padding: 40px ; font-family: 'Playfair Display', sans-serif; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; color: #000; margin: 0; text-align: center;">
        AN TOÀN TRONG MỌI TÌNH HUỐNG
    </p>

    <!-- AN TOÀN TRONG MỌI TÌNH HUỐNG -->
    <div>
        <div style="display: flex; justify-content: space-between; gap: 20px; padding: 20px 40px; flex-wrap: nowrap; overflow-x: auto;">
            <!-- Cột 1, CÔNG NGHỆ AN TOÀN CHỦ ĐỘNG -->
            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\HUD.jpg" alt="Hình ảnh 1"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        CÔNG NGHỆ AN TOÀN CHỦ ĐỘNG
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Công nghệ an toàn chủ động giúp người lái xe ngăn ngừa tai nạn bằng cách hỗ trợ khả năng dự đoán
                        và tránh các mối nguy hiểm thông qua các cảnh báo thị giác và thính giác.
                    </p>
                </div>
            </div>

            <!-- Cột 2, CÔNG NGHỆ AN TOÀN THỤ ĐỘNG -->

            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\airbag.jpg" alt="Hình ảnh 2"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        CÔNG NGHỆ AN TOÀN THỤ ĐỘNG
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Những công nghệ này giúp bảo vệ người ngồi trong xe và giảm thiệt hại trong trường hợp va chạm.
                        Công nghệ SKYACTIV® giúp thân xe cứng hơn với cấu trúc vòng, dây an toàn giảm xóc và bộ giới hạn tải,
                        hệ thống túi khí…
                    </p>
                </div>
            </div>


            <!-- Cột 3, CÔNG NGHỆ AN TOÀN CẢNH BÁO VA CHẠM -->
            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\keepdistance.jpg" alt="Hình ảnh 3"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        CÔNG NGHỆ AN TOÀN CẢNH BÁO VA CHẠM
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Công nghệ an toàn cảnh báo va chạm giúp giảm thiểu mức độ nghiêm trọng của va chạm khi không thể tránh khỏi.
                    </p>
                </div>
            </div>
        </div>

        <!-- Thêm hiệu ứng hover -->
        <style>
            /* Hiệu ứng hover trên khối ảnh */
            a:hover img {
                transform: scale(1.03);
            }

            /* Chuyển động mượt */
            a img {
                transition: transform 0.3s ease;
            }

            /* Responsive để chuyển về bố cục dọc khi không đủ không gian */
            @media (max-width: 1024px) {
                div[style*="flex-wrap: nowrap"] {
                    flex-wrap: wrap;
                }

                div[style*="max-width: 32%"] {
                    max-width: 100%;
                    flex: 1 1 100%;
                }
            }
        </style>
    </div>

    <!-- I-ACTIV AWD® -->
    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: #CCCCCC; height: 600px;  font-family: 'Roboto', Montserrat;">
        <div style="flex: 1; padding-left: 40px;padding-right: 40px; color: black; line-height: 2;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">I-ACTIV AWD®</h1>
            <p style="font-size: 1rem; text-align: justify;">Hệ thống i-ACTIV AWD® mang tính dự đoán của chúng tôi
                mang lại lực kéo và sự tự tin trên mọi cung đường và trong mọi loại thời tiết. Thông tin dữ liệu
                về điều kiện đường xá và thao tác lái xe được sử dụng để dự đoán xem có nên sử dụng hệ dẫn động
                toàn thời gian AWD và điều chỉnh việc cung cấp năng lượng phù hợp.</p>
        </div>
        <div style="flex: 1; position: relative; overflow: hidden; height: 100%;">
            <img src="\img\introduce_iActivsense\5.webp" alt="Image description"
                style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
    </section>

    <!-- CÔNG NGHỆ KIỂM SOÁT GIA TỐC G-VECTORING CONTROL -->
    <div style="
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #f5f5f5; /* Light background color */
        padding: 40px;
        border-radius: 8px; /* Rounded corners */
        font-family: Arial, sans-serif;">

        <!-- Icon -->
        <img src="\img\introduce_iActivsense\jinba-ittai-icon-top-padding.png" alt="Car Icon" style="
            width: 200px; /* Điều chỉnh kích thước chiều rộng */
            height: 80px; /* Điều chỉnh kích thước chiều cao */
            margin-bottom: 20px;">
        <!-- Title -->
        <h2 style="
            font-size: 20px;
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;">
            CÔNG NGHỆ KIỂM SOÁT GIA TỐC G-VECTORING CONTROL
        </h2>

        <!-- Description -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 600px; /* Limit text width for readability */
            line-height: 1.6; font-family: 'Roboto Mono', monospace;">
            Trong đó, ngôn ngữ thiết kế chính là nét độc đáo mà Mazda sử dụng để tác động
            và kết nối các giác quan của người nhìn.
        </p>
    </div>

    <!-- CÔNG NGHỆ KIỂM SOÁT GIA TỐC G-VECTORING CONTROL -->
    <div>
        <div style="display: flex; justify-content: space-between; gap: 20px; padding: 20px 40px; flex-wrap: nowrap; overflow-x: auto;">
            <!-- Cột 1, BẮT ĐẦU VÀO CUA-->
            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\MX5_vàocuaa.jpg" alt="Hình ảnh 1"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        BẮT ĐẦU VÀO CUA
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Phản ứng vào cua được cải thiện bằng cách giảm mô-men xoắn động cơ và chuyển tải cho bánh trước.
                    </p>
                </div>
            </div>

            <!-- Cột 2, GIỮA VÒNG CUA -->

            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\MX5_Giữacua.jpg" alt="Hình ảnh 2"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        GIỮA VÒNG CUA
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Công nghệ hiện đại có thể phát hiện hướng của vô lăng,
                        sau đó tính toán mô-men xoắn tối ưu và nhanh chóng gửi thông tin đó đến động cơ.
                    </p>
                </div>
            </div>


            <!-- Cột 3, THOÁT CUA -->
            <div style="text-align: center; max-width: 32%; flex: 1 1 32%; box-sizing: border-box;">
                <a href="" style="display: block; position: relative; overflow: hidden;">
                    <img src="\img\introduce_iActivsense\MX5_Thoátcua.jpg" alt="Hình ảnh 3"
                        style="width: 100%; height: 400px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a><br>
                <div style="text-align: center; padding-top: 10px; font-family: 'Roboto', Montserrat;">
                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #222; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.2px;">
                        THOÁT CUA
                    </h3>
                    <p style="font-size: 0.85rem; color: #555; line-height: 1.5; margin: 0 auto; max-width: 600px;">
                        Công nghệ hỗ trợ duy trì sự ổn định của xe bằng cách chuyển tải trọng sang bánh sau, cải thiện khả năng đánh góc ổn định.
                    </p>
                </div>
            </div>
        </div>

        <!-- Thêm hiệu ứng hover -->
        <style>
            /* Hiệu ứng hover trên khối ảnh */
            a:hover img {
                transform: scale(1.03);
            }

            /* Chuyển động mượt */
            a img {
                transition: transform 0.3s ease;
            }

            /* Responsive để chuyển về bố cục dọc khi không đủ không gian */
            @media (max-width: 1024px) {
                div[style*="flex-wrap: nowrap"] {
                    flex-wrap: wrap;
                }

                div[style*="max-width: 32%"] {
                    max-width: 100%;
                    flex: 1 1 100%;
                }
            }
        </style>
    </div>

    <p style="padding: 40px ; font-family: 'Playfair Display', sans-serif; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; color: #000; margin: 0; text-align: center;">
        CÔNG NGHỆ AN TOÀN I-ACTIVESENSE
    </p>

    <div class="container py-8">
        <!-- Carousel 1 -->
        <div id="carouselExample1" class="carousel slide mb-10" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex flex-column align-items-center text-center">
                        <!-- Hình ảnh -->
                        <img class="w-50 mb-4" src="/img/introduce_iActivsense/HUD.jpg" alt="Giám sát điểm mù">
                        <!-- Nội dung -->
                        <div class="w-75">
                            <h3 class="text-xl font-semibold mb-3">Giám Sát Điểm Mù</h3>
                            <p class="text-gray-600">
                                Bằng cách quét các điểm mù phía sau xe trong phạm vi lên đến 50m bằng gương chiếu hậu, radar sẽ phát hiện các phương tiện nằm ở vị trí khuất để đưa ra cảnh báo về khả năng các phương tiện thay đổi làn đường gây nguy hiểm.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel 2 -->
        <div id="carouselExample2" class="carousel slide mb-10" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 2 -->
                <div class="carousel-item active">
                    <div class="d-flex flex-column align-items-center text-center">
                        <!-- Hình ảnh -->
                        <img class="w-50 mb-4" src="/img/introduce_iActivsense/airbag.jpg" alt="Hỗ trợ phanh thông minh">
                        <!-- Nội dung -->
                        <div class="w-75">
                            <h3 class="text-xl font-semibold mb-3">Hỗ Trợ Phanh Thông Minh Trong Thành Phố</h3>
                            <p class="text-gray-600">
                                SCBS giám sát các xe phía trước để đánh giá khả năng xảy ra va chạm. Nếu có rủi ro cao, hệ thống sẽ cảnh báo bạn và kích hoạt phanh tự động nếu cần.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel 3 -->
        <div id="carouselExample3" class="carousel slide mb-10" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 3 -->
                <div class="carousel-item active">
                    <div class="d-flex flex-column align-items-center text-center">
                        <!-- Hình ảnh -->
                        <img class="w-50 mb-4" src="img/introduce_iActivsense/image3.png" alt="Third slide">
                        <!-- Nội dung -->
                        <div class="w-75">
                            <h3 class="text-xl font-semibold mb-3">Cảnh Báo Chệch Làn Đường</h3>
                            <p class="text-gray-600">
                                LDW giám sát vạch kẻ đường và cảnh báo bạn nếu bạn đi chệch làn, giúp bạn giữ an toàn trong hành trình của mình.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.getElementById("carousel-content"); // Lấy đối tượng slide
            const slides = carousel.children; // Các slide con
            const totalSlides = slides.length; // Tổng số slide
            let currentIndex = 0; // Vị trí slide hiện tại

            // Cập nhật vị trí hiển thị của slide
            const updateCarousel = () => {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            };

            // Nút lùi slide
            document.getElementById("prev-button").addEventListener("click", function() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Vòng lặp về cuối khi lùi slide
                updateCarousel();
            });

            // Nút tiến slide
            document.getElementById("next-button").addEventListener("click", function() {
                currentIndex = (currentIndex + 1) % totalSlides; // Vòng lặp về đầu khi hết slide
                updateCarousel();
            });
        });
    </script>


</body>
@endsection