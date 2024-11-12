<!-- Gọi header -->
@include('layouts.header_users')

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu về Mazda</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; color: #333; line-height: 1.6; background-color: #f4f4f4;">

    <!-- Phần tiêu đề chính với ảnh nền -->
    <header style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://example.com/mazda-header.jpg') center/cover no-repeat; color: #fff; text-align: center; padding: 100px 20px;">
        <h1 style="font-size: 50px; margin: 0; font-weight: bold; letter-spacing: 1.5px;">Mazda - Sự Tinh Tế Và Hiệu Suất</h1>
        <p style="font-size: 22px; margin-top: 15px; max-width: 800px; margin: 15px auto 0; line-height: 1.8;">
            Mazda luôn mang đến phong cách và hiệu suất đột phá với triết lý KODO - Linh hồn của chuyển động.
        </p>
    </header>

    <!-- Container chính -->
    <main style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">

        <!-- Phần giới thiệu chung về Mazda -->
        <section style="margin-bottom: 60px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 36px; font-weight: bold; color: #333; margin-bottom: 20px; text-align: center;">Giới Thiệu Về Thương Hiệu Mazda</h2>
            <p style="font-size: 18px; color: #555; text-align: center; line-height: 1.8; max-width: 1000px; margin: 0 auto;">
                Mazda không chỉ là một hãng xe, mà còn là một biểu tượng của nghệ thuật và công nghệ. Với bề dày lịch sử, Mazda luôn tiên phong trong công nghệ và thiết kế để mang lại trải nghiệm lái xe tuyệt vời nhất.
            </p>
        </section>

        <!-- Phần các dòng xe nổi bật -->
        <section style="margin-bottom: 60px;">
            <h2 style="font-size: 36px; font-weight: bold; color: #333; margin-bottom: 20px; text-align: center;">Các Dòng Xe Đặc Trưng</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">

                <!-- Mẫu Mazda 3 -->
                <div style="flex: 1 1 calc(33.33% - 20px); background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center; transition: transform 0.3s ease;">
                    <img src="https://example.com/mazda3.jpg" alt="Mazda 3" style="width: 100%; border-radius: 8px; height: auto;">
                    <h3 style="font-size: 24px; color: #333; margin-top: 15px;">Mazda 3</h3>
                    <p style="font-size: 16px; color: #666;">Mazda 3 với thiết kế trẻ trung và phong cách, mang lại trải nghiệm lái đầy cảm xúc và sự tiện nghi vượt trội.</p>
                </div>

                <!-- Mẫu Mazda CX-5 -->
                <div style="flex: 1 1 calc(33.33% - 20px); background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center; transition: transform 0.3s ease;">
                    <img src="https://example.com/mazda-cx5.jpg" alt="Mazda CX-5" style="width: 100%; border-radius: 8px; height: auto;">
                    <h3 style="font-size: 24px; color: #333; margin-top: 15px;">Mazda CX-5</h3>
                    <p style="font-size: 16px; color: #666;">Mazda CX-5 là dòng SUV sang trọng và linh hoạt, đáp ứng mọi nhu cầu của bạn trên mỗi hành trình.</p>
                </div>

                <!-- Mẫu Mazda 6 -->
                <div style="flex: 1 1 calc(33.33% - 20px); background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center; transition: transform 0.3s ease;">
                    <img src="https://example.com/mazda6.jpg" alt="Mazda 6" style="width: 100%; border-radius: 8px; height: auto;">
                    <h3 style="font-size: 24px; color: #333; margin-top: 15px;">Mazda 6</h3>
                    <p style="font-size: 16px; color: #666;">Mazda 6 - biểu tượng của sự sang trọng và phong cách, cho bạn trải nghiệm lái đẳng cấp.</p>
                </div>
            </div>
        </section>

        <!-- Phần lịch sử và giá trị thương hiệu -->
        <section style="background: #333; color: #fff; padding: 60px 20px; border-radius: 8px; margin-bottom: 60px;">
            <h2 style="font-size: 36px; font-weight: bold; color: #fff; margin-bottom: 20px; text-align: center;">Lịch Sử Và Giá Trị Mazda</h2>
            <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <p style="font-size: 18px; line-height: 1.8;">
                    Mazda khởi nguồn từ Hiroshima và phát triển thành một thương hiệu nổi tiếng toàn cầu. Với triết lý "Jinba Ittai" - hòa hợp giữa người và xe, Mazda luôn mang đến cảm giác lái đầy hứng khởi. Công nghệ SkyActiv giúp Mazda tiết kiệm nhiên liệu và giảm thiểu khí thải, thể hiện cam kết bảo vệ môi trường.
                </p>
                <p style="font-size: 18px; line-height: 1.8; margin-top: 20px;">
                    Các dòng xe Mazda được thiết kế để mang lại sự thoải mái tối đa mà vẫn bảo vệ người lái và hành khách. Mazda không ngừng cải tiến để đáp ứng nhu cầu của người dùng trên toàn thế giới.
                </p>
            </div>
        </section>

        <!-- Phần công nghệ và cam kết -->
        <section style="margin-bottom: 60px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 36px; font-weight: bold; color: #333; margin-bottom: 20px; text-align: center;">Công Nghệ Và Cam Kết Của Mazda</h2>
            <p style="font-size: 18px; color: #555; text-align: center; line-height: 1.8; max-width: 1000px; margin: 0 auto;">
                Mazda luôn cam kết cải tiến công nghệ để mang đến trải nghiệm tốt nhất cho người dùng. Công nghệ SkyActiv giúp tối ưu hiệu suất, giảm thiểu tác động môi trường. Hệ thống an toàn i-ACTIVSENSE giúp bảo vệ người lái và hành khách một cách toàn diện.
            </p>
        </section>
    </main>




        <!-- Gọi footer -->
        @include('layouts.footer_users')