@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<body>
    <div class="item-container">
        <video width="100%" autoplay muted playsinline loop>
            <source src="\img\introduce_design\mazda-design-short.mp4" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ video.
        </video>
    </div>

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
        <img src="\img\introduce_design\design-icon(chu Han).png" alt="Car Icon" style="
            width: 138px; /* Điều chỉnh kích thước chiều rộng */
            height: 111px; /* Điều chỉnh kích thước chiều cao */
            margin-bottom: 20px;">
        <!-- Title -->
        <h2 style="
            font-size: 24px;
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 15px;
            font-family: 'Merriweather', serif;">
            THỔI HỒN VÀO NHỮNG TẤM KIM LOẠI
        </h2>

        <!-- Description -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 600px; /* Limit text width for readability */
            line-height: 1.6;">
            Chúng tôi mang đến niềm vui lái xe thuần túy bằng cách tạo nên những mẫu xe chứa đựng tính cách và tâm hồn.
            Trong đó, ngôn ngữ thiết kế chính là nét độc đáo mà Mazda sử dụng để tác động và kết nối các giác quan của người nhìn.
        </p>
    </div>


    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: black;">
        <div style="flex: 1; position: relative; overflow: hidden;">
            <img src="\img\introduce_design\2017_specialist-stories.jpg" alt="Image description" style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
        <div style="flex: 1; padding-left: 40px;padding-right: 40px; color: white; line-height: 2;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">NGHỆ THUẬT CHẾ TÁC THỦ CÔNG</h1>
            <p style="font-size: 1rem; text-align: justify;">Tương tự như cách mà một nghệ sĩ tương tác với khán giả của mình,
                Mazda muốn tạo nên những thiết kế xe khơi gợi cảm xúc của người lái. Và chúng tôi bắt đầu quá trình này với đôi bàn tay con người – thứ có thể tạo nên nghệ thuật thực thụ. Trong giai đoạn “Chuẩn bị mang tính khám phá” này, chúng tôi hiếm khi tạo ra các mẫu vật giống xe hơi mà thay vào đó, thử nghiệm các hình thức mà chúng tôi thấy thú vị và hài lòng, sau đó chuyển những ý tưởng này qua khâu chế tác.
                Mỗi một bước trong quá trình này đều có sự xuất hiện của bàn tay con người.</p>
        </div>
    </section>
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
            XE LÀ NGHỆ THUẬT - CAR AS ART
        </h2>

        <!-- Description -->
        <p style="
            font-size: 16px;
            color: #666; /* Slightly lighter text color */
            max-width: 600px; /* Limit text width for readability */
            line-height: 1.6; font-family: 'Roboto Mono', monospace;">
            Nhìn vào từng mẫu xe của Mazda, bạn sẽ có cảm giác trân trọng như khi nhìn một tác phẩm nghệ thuật.
            Vẻ đẹp của hình khối cùng những phản chiếu của bóng sáng thay đổi trên thân xe gợi cảm giác về tốc độ,
            sự duyên dáng và cả sức mạnh, thôi thúc bạn phải trải nghiệm việc lái xe.
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
                <iframe id="videoFrame" width="560" height="315" src="https://www.youtube.com/watch?v=PcdLwHfiZJE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <!-- LINH HỒN SỰ CHUYỂN ĐỘNG -->
    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: black; height: 600px;">
        <div style="flex: 1; padding-left: 40px;padding-right: 40px; color: white; line-height: 2;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">THIẾT KẾ KODO: LINH HỒN CỦA SỰ CHUYỂN ĐỘNG</h1>
            <p style="font-size: 1rem; text-align: justify;">Tạo cảm giác chuyển động ngay cả khi đang đứng yên chính
                là cốt lõi trong triết lý thiết kế của Mazda. Điều này cho phép các nhà thiết kế thấm nhuần đặc trưng, cá tính của từng mô hình xe trong khi vẫn đi theo một chủ đề thống nhất.
                Từng mẫu xe đều mang dáng vẻ thu hút người lái đến trải nghiệm.</p>
        </div>
        <div style="flex: 1; position: relative; overflow: hidden;">
            <img src="\img\introduce_design\mazda3hatchback-exterior-kodo-overlay.jpg" alt="Image description" style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
    </section>

    <!-- CHUYÊN GIA CHẾ TÁC -->
    <!-- <div style="position: relative; width: 80%; max-width: 800px; height: 400px; border-radius: 20px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <img src="https://www.insidemazda.co.uk/wp-content/uploads/2019/11/yy-980x490.jpg" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover;">
        <div style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); text-align: center; color: white; background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
            <p style="font-size: 20px; font-weight: 600; margin: 0; line-height: 1.5;">
                “Tôi muốn mọi người cảm nhận được sự tận tâm của Mazda trong khâu thiết kế.
                Bởi nếu cảm nhận được, tôi tin tất cả sẽ tìm thấy niềm vui khi lái xe và yêu chiếc xe của mình hơn."
            </p>
            <p style="font-size: 16px; font-weight: bold; margin: 10px 0 0; text-transform: uppercase;">OSAMU FUJIKI, CHUYÊN GIA CHẾ TÁC</p>
        </div>
    </div> -->

    <!-- MÔ HÌNH ĐẤT SÉT -->
    <section style="display: flex; align-items: center; justify-content: space-between; padding: 20px; background: black;">
        <div style="flex: 1; position: relative; overflow: hidden;">
            <img src="\img\introduce_design\2017_visioncoupe.jpg" alt="Image description" style="width: 100%; height: 100%; object-fit: cover;" />
        </div>
        <div style="flex: 1; padding-left: 40px;padding-right: 40px; color: white; line-height: 2;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">GẮN BÓ VỚI MÔ HÌNH ĐẤT SÉT</h1>
            <p style="font-size: 1rem; text-align: justify;">Chúng ta đang ở trong thời kỳ hoàng kim của thiết kế đồ họa,
                thứ cho phép chúng ta tạo nên các mô hình 3D với mức độ chính xác vượt trội so với vài năm trước.
                Nhưng tại Mazda, việc thiết kế luôn bắt đầu bằng một khối đất sét. Và điều này không hề bị thay thế.
                Các nghệ nhân định hình khối đất sét cho đến khi các đường nét lý tưởng hiện lên, sau đó mới kết hợp với
                các nhà thiết kế đồ họa. Việc tận dụng tốt hai phương pháp truyền thống và hiện đại giúp Mazda tạo nên các
                thiết kế hấp dẫn và độc đáo.</p>
        </div>
    </section>

    <!-- QUÁ TRÌNH CHẾ TÁC -->
    <div style="position: relative; width: 100%; height: 800px; overflow: hidden;">
        <!-- Hình nền -->
        <img src="\img\introduce_design\vision-interior2.jpg" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">

        <!-- Khối nội dung -->
        <div style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); width: 45%; color: white; padding: 40px 30px; z-index: 1; border-radius: 20px;">
            <!-- Tiêu đề -->
            <h2 style="font-size: 34px; font-weight: bold; text-transform: uppercase; margin-bottom: 20px; line-height: 1.4; text-align: left;">
                QUÁ TRÌNH CHẾ TÁC
            </h2>
            <!-- Nội dung đoạn văn -->
            <p style="font-size: 20px; font-weight: 300; line-height: 1.8; margin: 0; text-align: left;">
                Sau khi thiết kế ban đầu được hoàn thiện, chuyên gia chế tác sẽ biến nó thành một mô hình tỷ lệ thực.
                Mục tiêu tạo ra một mô hình thậm chí còn hoàn hảo hơn so với xe thật. Các bộ phận trên xe được sao chép
                chính xác và hiển thị rõ với người ngồi trong xe. Các sửa đổi về thiết kế cũng có thể được thực hiện tại
                thời điểm này, minh chứng cho quy trình thiết kế mang tính cộng tác tại Mazda. Với tiêu chí này,
                chất lượng là điều không bao giờ bị phá vỡ.
            </p>
        </div>
    </div>

    <!-- MÀU SƠN CỦA MAZDA -->
    <section style="display: flex; align-items: stretch; justify-content: space-between; height: 70vh; margin: 0; background: black;">
        <!-- Hình ảnh -->
        <div style="flex: 1; position: relative; overflow: hidden;">
            <img src="\img\introduce_design\soul-red.jpg" alt="Image description" style="width: 100%; height: 100%; object-fit: cover;" />
        </div>

        <!-- Khối nội dung -->
        <div style="flex: 1; max-width: 600px; padding: 40px; background-color: #CCCCCC; line-height: 1.8; color: black; display: flex; flex-direction: column; justify-content: center;">
            <h1 style="font-size: 2rem; margin-bottom: 15px;">MÀU SƠN CAO CẤP</h1>
            <p style="font-size: 1rem; text-align: justify;">Sự chăm sóc tận tụy thể hiện trong khâu thiết kế và chế tạo vẫn tiếp tục được giữ vững trong quá trình sơn.
                Nhà thiết kế màu sắc và họa sĩ bậc thầy làm việc cùng nhau để đảm bảo màu sắc trên thiết kế được tái hiện
                hoàn hảo lên những chiếc xe mới được chế tạo. Sự chính xác của kỹ thuật pha trộn dưới bàn tay chuyên gia
                đảm bảo màu sắc hoàn thiện phải tôn vinh thiết kế ngoạn mục của xe. Màu Soul Red Crystal chính là kết quả
                của quá trình đầy tâm huyết này.
            </p>
            <a href="https://youtu.be/u-iaG-EdDyw" target="_blank"
                style="display: inline-block; background-color: black; color: white; text-decoration: none; 
           padding: 8px 16px; font-size: 0.9rem; font-weight: bold; border-radius: 5px; 
           margin-top: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
           transition: transform 0.3s ease, background-color 0.3s ease; max-width: 120px; text-align: center;"
                onmouseover="this.style.backgroundColor='#C0C0C0'"
                onmouseout="this.style.backgroundColor='black'">
                XEM VIDEO
            </a>
        </div>
    </section>

    <!-- XE CONCEPT -->
    <div style="position: relative; width: 100%; height: 800px; overflow: hidden;">
        <!-- Hình nền -->
        <img src="\img\introduce_design\vision-coupe_concept.jpg" alt="Mazda Design" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">

        <!-- Khối nội dung -->
        <div style="position: absolute; top: 50%; left: 5%; transform: translateY(-50%); width: 45%; color: white; padding: 40px 30px; z-index: 1; border-radius: 20px;">
            <!-- Tiêu đề -->
            <h2 style="font-size: 14px; font-weight: bold; text-transform: uppercase; margin-bottom: 20px; line-height: 1.4; text-align: left;">
                XE CONCEPT
            </h2>
            <!-- Tiêu đề -->
            <h2 style="font-size: 24px; font-weight: bold; text-transform: uppercase; margin-bottom: 20px; line-height: 1.4; text-align: left;">
                VISION COUPE
            </h2>
            <!-- Nội dung đoạn văn -->
            <p style="font-size: 20px; font-weight: 300; line-height: 1.8; margin: 0; text-align: left;">
                Vision Coupe là cách bày tỏ lòng tôn kính với những tác phẩm kinh điển đã định nghĩa nên sự sang trọng của Mazda.
                Mẫu xe concept xuất hiện lần đầu tại Tokyo Motor Show 2017 này được trang bị công nghệ động cơ Skyactiv-X mang tính
                cách mạng, thân xe biểu thị độ tương phản của bóng và ánh sáng, tạo cảm giác như một chất lỏng biến động không ngừng.
            </p>
        </div>
    </div>

    <section style="display: flex; align-items: flex-end; justify-content: center; height: 100vh; background-color: black; text-align: center; color: white; position: relative;">
        <!-- Hình nền hoa và thanh kim loại -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('\img\introduce_design\all-new-mazda3-2.jpg'); background-size: cover; background-position: center; filter: brightness(0.8); z-index: 0;"></div>

        <!-- Nội dung chính -->
        <div style="z-index: 1; max-width: 800px; padding: 20px; margin-bottom: 30px;">
            <h1 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;">THỔI HỒN VÀO NHỮNG TẤM KIM LOẠI</h1>
            <p style="font-size: 1.2rem; margin-bottom: 20px;">Thổi hồn vào những chiếc xe. Đó là triết lý thiết kế của Mazda.</p>
            <a href="/category" style="display: inline-block; padding: 10px 20px; background-color: #C0C0C0; color: black; text-decoration: none; font-size: 1rem; font-weight: bold; border-radius: 5px; transition: background-color 0.3s ease;"
                onmouseover="this.style.backgroundColor='#AAAAAA'"
                onmouseout="this.style.backgroundColor='#C0C0C0'">
                SẢN PHẨM MAZDA
            </a>
        </div>
    </section>

    <!-- TÌM HIỂU THÊM VỀ MAZDA -->

    <p style="padding: 40px ; font-family: 'Playfair Display', sans-serif; font-size: 2rem; font-weight: 100; text-transform: uppercase; letter-spacing: 0.2rem; color: #000; margin: 0; text-align: center;">
        TÌM HIỂU THÊM VỀ MAZDA
    </p>


    <!-- KHỐI TÌM HIỂU THÊM VỀ MAZDA -->
    <div>
        <div style="display: flex; justify-content: space-between; gap: 20px; padding: 20px 40px; flex-wrap: wrap;">
            <!-- Cột 1 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%; box-sizing: border-box;">
                <a href="/introduce/iActivsense" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="\img\introduce_design\childreninCar.jpg" alt="Hình ảnh 1"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px; border-radius: 10px; background: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        Sự An Toàn
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 600px;">
                        Tìm hiểu cách chúng tôi mang đến sự an toàn vượt trội thông qua công nghệ tiên tiến, đảm bảo hành trình của bạn luôn được bảo vệ tốt nhất.
                    </p>
                </div>
            </div>

            <!-- Cột 2 -->
            <div style="text-align: center; max-width: 48%; flex: 1 1 48%; box-sizing: border-box;">
                <a href="https://www.example.com/cai-tien" style="display: block; position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="\img\introduce_design\xep_hang_an_toan_5sao_6.webp" alt="Hình ảnh 2"
                        style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.3s ease;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.3);"></div>
                </a>
                <div style="text-align: center; padding: 20px; border-radius: 10px; background: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.8rem; font-weight: bold; color: #222; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1.5px;">
                        CẢI TIẾN
                    </h3>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin: 0 auto; max-width: 600px;">
                        Tìm hiểu cách chúng tôi mang đến sự an toàn vượt trội thông qua công nghệ tiên tiến, đảm bảo hành trình của bạn luôn được bảo vệ tốt nhất.
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

    <br><br>

    @endsection