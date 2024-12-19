@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f9fafb; color: #333;">

    <!-- Thanh Header -->

    <div style="margin: 0; font-family: 'Roboto', sans-serif;">

        <!-- Thanh Header -->
        <div style="background-color: white; color: black; display: flex; justify-content: center; align-items: center; height: 60px; border-bottom: 1px solid #ddd;">
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease; border-right: 1px solid #ddd;">Tên xe</a>
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease; border-right: 1px solid #ddd;">Thông số kỹ thuật</a>
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease;">Hình ảnh</a>
        </div>

    </div>

    <!-- Khối chứa thông tin -->
    <div id="car-details" style="max-width: 900px; margin: auto; padding: 40px; background-color: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">

        <!-- Tiêu đề chính -->
        <h2 style="text-align: center; margin-bottom: 40px; font-size: 36px; font-weight: bold; color: #1a202c; letter-spacing: 1px;">
            Thông số kỹ thuật dòng xe Mazda 2
        </h2>

        <!-- Kích thước tổng thể -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('sizeDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">Kích thước tổng thể - Khối lượng</span>
                <span id="sizeIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="sizeDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Chiều dài: <span style="color: #2b6cb0;">4.500 mm</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Chiều rộng: <span style="color: #2b6cb0;">1.850 mm</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Chiều dài cơ sở: <span style="color: #2b6cb0;">2.700 mm</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Bán kính vòng quay: <span style="color: #2b6cb0;">5.5 m</span></li>
                </ul>
            </div>
        </div>

        <!-- Động cơ -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('engineDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">Động cơ - Hộp số</span>
                <span id="engineIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="engineDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Mã lực: <span style="color: #2b6cb0;">155 HP</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Mô men xoắn: <span style="color: #2b6cb0;">200 Nm</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Loại động cơ: <span style="color: #2b6cb0;">Xăng I4 2.0L</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hộp số: <span style="color: #2b6cb0;">Tự động 6 cấp</span></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Script JavaScript -->
    <script>
        function toggleContent(id) {
            var content = document.getElementById(id);
            var icon = document.querySelector(`#${id} ~ div span`) || document.getElementById(id + "Icon");

            if (content.style.display === "block") {
                content.style.display = "none";
                icon.textContent = "+";
                icon.style.transform = "rotate(0deg)";
            } else {
                content.style.display = "block";
                icon.textContent = "−";
                icon.style.transform = "rotate(180deg)";
            }
        }
    </script>

</div>







@endsection