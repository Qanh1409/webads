@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<body>

    <!-- KHỐI VIDEO -->
    <div class="item-container">
        <video width="100%" autoplay muted playsinline loop>
            <source src="\img\introduce_creative\why-mazda-innovation-hero.mp4" type="video/mp4">
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
        <img src="\img\introduce_creative\innovation-icon.png" alt="Car Icon" style="
            width: 138px; /* Điều chỉnh kích thước chiều rộng */
            height: 111px; /* Điều chỉnh kích thước chiều cao */
            margin-bottom: 20px;">
        <!-- Title -->
        <h2 style="
            font-size: 24px;
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 15px;
            font-family: 'Merriweather', Montserrat;">
            TÔN VINH NGƯỜI LÁI
        </h2>

        <!-- Description -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 600px; /* Limit text width for readability */
            line-height: 1.6;">
            Tại Mazda, tất cả chúng ta đều nói về việc lái xe và cảm giác hứng khởi mà điều đó mang lại.
            Lái xe không đơn thuần chỉ là vận hành một cỗ máy mà còn liên hệ đến những va chạm và cảm xúc.
            Một chiếc xe không những phải phản ứng hoàn hảo với các thao tác của người lái mà còn phải sở hữu
            các hệ thống trực quan.
        </p>
    </div>

    <!-- CÔNG NGHỆ MAZDA SKYACTIV® -->
    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: #f5f5f5; height: 600px;  font-family: 'Roboto', Montserrat;">
        <div style="flex: 1; padding-left: 40px;padding-right: 40px; color: black; line-height: 2;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">CÔNG NGHỆ MAZDA SKYACTIV®</h1>
            <p style="font-size: 1rem; text-align: justify;">Khi các thành phần của một hệ thống được thiết kế để hoạt động nhịp nhàng với nhau,
                hệ thống đó sẽ hoạt động với hiệu suất cao nhất. Đây chính là ý tưởng đằng sau công nghệ Mazda SKYACTIV®.
                Công nghệ này không những chỉ mang đến hiệu quả động cơ mà còn cung cấp trải nghiệm lái vượt trội.</p>
        </div>
        <div style="flex: 1; position: relative; overflow: hidden; height: 100%;">
            <img src="\img\introduce_creative\whymazda-innovation-skyactiv.jpg" alt="Image description"
                style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
    </section>


    <!-- HỆ TRUYỀN ĐỘNG PHẢN ỨNG TỐT VÀ TƯƠNG TÁC TỐT -->

    <p style="padding: 50px ; font-family: 'Playfair Display', sans-serif; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; color: #000; margin: 0; text-align: center;">
        HỆ TRUYỀN ĐỘNG PHẢN ỨNG TỐT VÀ TƯƠNG TÁC TỐT
    </p>
    <div>
        <div style="display: flex; justify-content: space-between; gap: 20px; padding: 20px 40px; flex-wrap: wrap;background: #f5f5f5;">
            <!-- Cột 1 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%;">
                <a href="https://www.example.com/su-an-toan" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="\img\introduce_creative\Steering.png" alt="Hình ảnh 1"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px;">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        HỘP SỐ TỰ ĐỘNG 6 CẤP SKYACTIV®
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 700px;">
                        Hộp số tự động 6 cấp SKYACTIV® chuyển số mượt mà và nhanh chóng để tăng tốc ổn định.
                        Mô-đun điều khiển tiên tiến của nó đảm bảo độ chính xác, phản ứng nhanh nhạy và hiệu quả.
                    </p>
                </div>
            </div>

            <!-- Cột 2 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%;">
                <a href="https://www.example.com/su-an-toan" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="/img/introduce_creative/cần số.jpg" alt="Hình ảnh 2"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px;">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        HỘP SỐ TỰ ĐỘNG 6 CẤP SKYACTIV®
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 700px;">
                        Hộp số tự động 6 cấp SKYACTIV® chuyển số mượt mà và nhanh chóng để tăng tốc ổn định.
                        Mô-đun điều khiển tiên tiến của nó đảm bảo độ chính xác, phản ứng nhanh nhạy và hiệu quả.
                    </p>
                </div>
            </div>
        </div>

        <!-- Thêm hiệu ứng hover -->
        <style>
            /* Hiệu ứng hover trên khối ảnh */
            a:hover img {
                transform: scale(1.03);
                /* Giảm độ zoom */
            }

            /* Chuyển động mượt */
            a img {
                transition: transform 5.0s ease;
                /* Tăng thời gian để giảm tốc độ */
            }

            /* Khối bên ngoài không thay đổi */
            a {
                overflow: hidden;
                display: block;
                border-radius: 8px;
            }
        </style>

    </div>

    <!-- KHUNG GẦM VÀ THÂN XE CỨNG HƠN, NHẸ HƠN -->

    <section style="padding: 20px; background: black; color: white; font-family: 'Playfair Display', sans-serif;">
        <!-- Dòng 1: Thẻ p -->
        <p style="padding: 50px; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; margin: 0; text-align: center;">
            HỆ TRUYỀN ĐỘNG PHẢN ỨNG TỐT VÀ TƯƠNG TÁC TỐT
        </p>

        <!-- Dòng 2: Khối ảnh và nội dung -->
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;">
            <!-- Khối ảnh -->
            <div style="flex: 1; position: relative; overflow: hidden; min-width: 300px; margin: 10px;">
                <img src="\img\introduce_creative\Chassis.jpg" alt="Image description"
                    style="width: 100%; height: 100%; object-fit: cover;" />
            </div>

            <!-- Khối nội dung -->

            <body>
                <div style="flex: 1; padding: 20px 40px; line-height: 2; min-width: 300px; margin: 10px; font-family: 'Roboto', Montserrat;">
                    <h1 style="font-size: 2rem; margin-bottom: 15px; font-weight: 500;">Nền tảng Skyactiv®</h1>
                    <p style="font-size: 1rem; text-align: justify; font-weight: 400;">
                        Nền tảng Skyactiv®, bao gồm thân và khung xe, là trung tâm của trải nghiệm lái xe. Khung gầm đạt được hai mục tiêu dường như mâu thuẫn cùng một lúc: nhanh nhẹn ở tốc độ thấp và ổn định ở tốc độ cao. Khung kết hợp thép cường lực cao ở các khu vực quan trọng nhằm giúp xe nhẹ hơn, cứng hơn và mạnh mẽ hơn.
                    </p>
                </div>
            </body>
        </div>
    </section>

    <!-- LUÔN ĐẶT NGƯỜI DÙNG TRONG TÂM TRÍ -->
    <div style="position: relative; width: 100%; height: 800px; overflow: hidden;">
        <!-- Hình nền -->
        <img src="\img\introduce_creative\tâmtri.jpg" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">

        <!-- Khối nội dung -->
        <div style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); width: 35%; color: black; padding: 30px 20px; z-index: 1; border-radius: 20px;">
            <!-- Tiêu đề -->
            <h2 style="font-size: 20px; font-weight: bold; text-transform: uppercase; margin-bottom: 15px; line-height: 1.4; text-align: left; font-family: Montserrat;">
                LUÔN ĐẶT NGƯỜI DÙNG TRONG TÂM TRÍ
            </h2>
            <!-- Nội dung đoạn văn -->
            <p style="font-size: 16px; font-weight: 300; line-height: 1.6; margin: 0; text-align: left;font-family: 'Roboto', Montserrat;">
                Đặt niềm vui lái xe vào mọi sản phẩm, Mazda đi sâu vào triết lý phát triển lấy con người làm trung tâm – xuất phát điểm để tạo nên SKYACTIV-VEHICLE DYNAMICS cùng hệ thống kiểm soát gia tốc G-Vectoring Control.
            </p>
            <p style="font-size: 16px; font-weight: 300; line-height: 1.6; margin-top: 10px; text-align: left;font-family: 'Roboto', Montserrat;">
                Thay vì tập trung vào các cơ chế kiểm soát động lực học xe hơi, chúng tôi bắt đầu với chính con người. Tiến hành vô số nghiên cứu về đặc điểm hành vi của con người, chúng tôi đặt mục tiêu thiết kế một chiếc xe hoạt động hài hòa với người lái.
            </p>
            <p style="font-size: 16px; font-weight: 300; line-height: 1.6; margin-top: 10px; text-align: left;font-family: 'Roboto', Montserrat;">
                Kết quả khiến người lái có cảm giác chiếc xe như một phần mở rộng của chính cơ thể họ. Tay lái chính xác hơn, kiểm soát tốt hơn và ít mệt mỏi hơn.
            </p>
        </div>
    </div>


    <!-- MAZDA CONNECT -->
    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: black;">
        <div style="flex: 1; position: relative; overflow: hidden;">
            <img src="\img\introduce_creative\Communication.jpg" alt="Image description" style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
        <div style="flex: 1; padding-left: 80px; padding-right: 80px; color: white; line-height: 2; font-family: Montserrat;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">CÔNG NGHỆ MAZDA CONNECT</h1>
            <p style="font-size: 1rem; text-align: justify;">Thúc đẩy sự gắn kết giữa xe và người lái là một nhiệm vụ
                vượt ra ngoài cảm giác lái bùng nổ. Trong thế giới siêu kết nối như ngày nay, ô tô đã trở thành một
                công cụ giao tiếp. Và đây chính là cơ hội để Mazda cải thiện trải nghiệm lái xe.
                MAZDA CONNECT là giao diện thuộc thế hệ tiếp theo của chúng tôi, cho phép bạn truy cập thông tin
                khi cần và giải trí khi muốn.</p>
        </div>
    </section>

    <!-- NGHỆ THUẬT SẢN XUẤT -->
    <div style="
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #f5f5f5; /* Light background color */
        padding: 40px;
        border-radius: 8px; /* Rounded corners */
        font-family: Arial, sans-serif;">
        <!-- Title -->
        <h2 style="
            font-size: 24px;
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;">
            NGHỆ THUẬT SẢN XUẤT
        </h2>

        <!-- NGHỆ THUẬT SẢN XUẤT -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 600px; /* Limit text width for readability */
            line-height: 1.6; font-family: 'Roboto Mono', monospace;">
            Trong quá trình biến các chất liệu giấy, đất sét, kim loại thành tác phẩm
            và sử dụng máy móc để cắt và đánh bóng như nghệ sĩ, sự va chạm là điều diễn ra liên tục.
            Đặt niềm tự hào và đam mê trong từng giai đoạn sản xuất, Mazda giúp khách hàng luôn cảm thấy
            tự hào khi sở hữu sản phẩm.
        </p>

        <!-- Nút Xem video -->
        <button id="openModal" style="background-color: black; color: white; font-size: 1rem; padding: 12px 24px; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);">
            Xem video
        </button>

        <!-- Cửa sổ modal -->
        <div id="videoModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; z-index: 9999; opacity: 0; pointer-events: none; transition: opacity 0.3s ease;">
            <div style="position: relative; background: white; padding: 20px; border-radius: 8px; transform: scale(0.8); transition: all 0.3s ease;">
                <!-- Đóng modal -->
                <span id="closeModal" style="position: absolute; top: 10px; right: 10px; font-size: 2rem; color: #333; cursor: pointer; transition: color 0.3s ease;">&times;</span>

                <!-- Video nhúng -->
                <iframe id="videoFrame" width="560" height="315"
                    src="https://youtu.be/Wx6hNel7MlQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <script>
            // Lấy phần tử modal và nút mở modal
            var modal = document.getElementById("videoModal");
            var btn = document.getElementById("openModal");
            var span = document.getElementById("closeModal");

            // Khi người dùng nhấn vào nút, mở modal
            btn.onclick = function() {
                modal.style.display = "flex";
                setTimeout(function() {
                    modal.style.opacity = 1;
                    modal.style.pointerEvents = "auto";
                }, 10); // Đảm bảo rằng opacity được áp dụng sau khi display được thay đổi
            }

            // Khi người dùng nhấn vào dấu x, đóng modal
            span.onclick = function() {
                modal.style.opacity = 0;
                modal.style.pointerEvents = "none";
                setTimeout(function() {
                    modal.style.display = "none";
                }, 300); // Ẩn modal sau khi hiệu ứng chuyển đổi kết thúc
            }

            // Khi người dùng nhấn ra ngoài modal, đóng modal
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.opacity = 0;
                    modal.style.pointerEvents = "none";
                    setTimeout(function() {
                        modal.style.display = "none";
                    }, 300); // Ẩn modal sau khi hiệu ứng chuyển đổi kết thúc
                }
            }
        </script>


    </div>

    <!-- NHÂN MÃ NHẤT THỂ - JINBA ITTAI -->
    <div style="position: relative; width: 100%; height: 800px; overflow: hidden;">
        <!-- Hình nền -->
        <img src="\img\introduce_creative\jinba-ittai.png" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">

        <!-- Khối nội dung -->
        <div style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); width: 35%; color: white; padding: 30px 20px; z-index: 1; border-radius: 20px;">
            <!-- Tiêu đề -->
            <h2 style="font-size: 15px; font-weight: bold; text-transform: uppercase; margin-bottom: 15px; line-height: 1.4; text-align: left; font-family: Montserrat;">
                NGỰA VÀ NGƯỜI LÁI
            </h2>
            <!-- Tiêu đề -->
            <h2 style="font-size: 20px; font-weight: bold; text-transform: uppercase; margin-bottom: 15px; line-height: 1.4; text-align: left; font-family: Montserrat;">
                NHÂN MÃ NHẤT THỂ - JINBA ITTAI
            </h2>
            <!-- Nội dung đoạn văn -->
            <p style="font-size: 16px; font-weight: 300; line-height: 1.6; margin: 0; text-align: left;font-family: 'Roboto', Montserrat;">
                Khi các kỹ sư của chúng tôi tạo ra SKYACTIV-VEHICLE DYNAMICS và hệ thống kiểm soát gia tốc G-Vectoring Control,
                họ đã tuân theo triết lý cổ xưa của Nhật Bản về Jinba Ittai – Người ngựa là một. Điều này dẫn đến trải nghiệm
                lái thú vị hơn, phản ứng nhanh hơn và đa dạng hơn.
            </p>
        </div>
    </div>

    <!-- TÌM HIỂU THÊM -->

    <p style="padding: 40px ; font-family: 'Playfair Display', sans-serif; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; color: #000; margin: 0; text-align: center;">
        TÌM HIỂU THÊM VỀ MAZDA
    </p>
    <div>
        <div style="display: flex; justify-content: space-between; gap: 20px; padding: 20px 40px; flex-wrap: wrap;background: #f5f5f5;">
            <!-- Cột 1 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%;">
                <a href="/introduce/design" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="\img\introduce_design\2017_visioncoupe.jpg" alt="Hình ảnh 1"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px;">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        THIẾT KẾ
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 700px;">
                        Mỗi thiết kế trên đều được xoay quanh người lái.
                    </p>
                </div>
            </div>

            <!-- Cột 2 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%;">
                <a href="/introduce/iActivsense" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="\img\introduce_design\childreninCar.jpg" alt="Hình ảnh 2"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px;">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        SỰ AN TOÀN
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 700px;">
                        Cùng khám phá phương pháp tiếp cận toàn diện của chúng tôi để xây dựng nên công nghệ an toàn.
                    </p>
                </div>
            </div>
        </div>

        <!-- Thêm hiệu ứng hover -->
        <style>
            /* Hiệu ứng hover trên khối ảnh */
            a:hover img {
                transform: scale(1.03);
                /* Giảm độ zoom */
            }

            /* Chuyển động mượt */
            a img {
                transition: transform 5.0s ease;
                /* Tăng thời gian để giảm tốc độ */
            }

            /* Khối bên ngoài không thay đổi */
            a {
                overflow: hidden;
                display: block;
                border-radius: 8px;
            }
        </style>

    </div>
</body>


@endsection