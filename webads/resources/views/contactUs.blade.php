@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<!-- Đưa link đến Google Fonts để sử dụng font chữ đẹp -->
<!-- Đưa link đến Google Fonts để sử dụng font chữ đẹp -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<div style="font-family: 'Roboto', sans-serif; background-color: #f4f4f4; padding-top: 60px; padding-bottom: 40px; text-align: center;">

    <!-- Tiêu đề nằm ngoài khối form -->
    <h2 style="font-size: 28px; font-weight: 500; color: #333; margin-bottom: 50px; text-align: center;">VUI LÒNG ĐỂ LẠI THÔNG TIN LIÊN HỆ THEO MẪU BÊN DƯỚI</h2>

    <!-- Khối form -->
    <div style="background-color: #fff; padding: 30px 40px; border-radius: 8px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); max-width: 900px; margin: 0 auto; transition: transform 0.3s ease;">

        <form id="contactForm" method="post" action="#">

            <!-- Các trường nhập liệu, chia thành 3 cột với khoảng cách đều -->
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">
                <div style="flex: 1; min-width: 280px;">
                    <label for="name" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">Họ và tên <span style="color: red;">*</span></label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; transition: all 0.3s ease; font-size: 14px;">
                </div>
                <div style="flex: 1; min-width: 280px;">
                    <label for="phone" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">SĐT <span style="color: red;">*</span></label>
                    <input type="text" id="phone" name="phone" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; transition: all 0.3s ease; font-size: 14px;">
                </div>
                <div style="flex: 1; min-width: 280px;">
                    <label for="email" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">Email <span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; transition: all 0.3s ease; font-size: 14px;">
                </div>
            </div>

            <!-- Trường chọn Dòng xe -->
            <div style="margin-top: 20px;">
                <label for="car" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">Dòng xe <span style="color: red;">*</span></label>
                <select id="car" name="car" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                    <option value="">Chọn dòng xe</option>
                    <option value="Mazda 2">Mazda 2</option>
                    <option value="Mazda 2 Sport">Mazda 2 Sport</option>
                    <option value="Mazda 3">Mazda 3</option>
                    <option value="Mazda 3 Sport">Mazda 3 Sport</option>
                    <option value="Mazda 6">Mazda 6</option>
                    <option value="Mazda CX3">Mazda CX3</option>
                    <option value="Mazda CX30">Mazda CX30</option>
                    <option value="Mazda CX5">Mazda CX5</option>
                    <option value="Mazda CX8">Mazda CX8</option>
                </select>
            </div>

            <!-- Trường chọn Dịch vụ -->
            <div style="margin-top: 20px;">
                <label for="service" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">Dịch vụ <span style="color: red;">*</span></label>
                <select id="service" name="service" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; transition: all 0.3s ease;">
                    <option value="">Chọn dịch vụ</option>
                    <option value="Báo giá">Báo giá</option>
                    <option value="Dịch vụ">Dịch vụ</option>
                    <option value="Khiếu nại">Khiếu nại</option>
                </select>
            </div>

            <!-- Trường nhập Tin nhắn -->
            <div style="margin-top: 20px;">
                <label for="message" style="font-weight: 500; display: block; margin-bottom: 8px; text-align: left;">Tin nhắn <span style="color: red;">*</span></label>
                <textarea id="message" name="message" required style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; height: 120px; resize: vertical; transition: all 0.3s ease; font-size: 14px;"></textarea>
            </div>

            <!-- Các ô chọn xác nhận -->
            <div style="margin-top: 20px; text-align: left;">
                <input type="checkbox" id="agree1" name="agree1" required style="margin-right: 10px;">
                <label for="agree1" style="font-size: 14px;">Tôi xác nhận cung cấp thông tin để liên hệ với Thaco Mazda <span style="color: red;">*</span></label>
            </div>

            <div style="margin-top: 20px; text-align: left;">
                <input type="checkbox" id="agree2" name="agree2" required style="margin-right: 10px;">
                <label for="agree2" style="font-size: 14px;">Tôi đã đọc và đồng ý với các quy định của Thaco Mazda <span style="color: red;">*</span></label>
            </div>

            <!-- Nút Đăng ký -->
            <button type="submit" style="background-color: #000; color: #fff; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-top: 20px; transition: background-color 0.3s ease, transform 0.3s ease; width: auto; text-align: center; font-weight: bold;">
                Đăng ký
            </button>
        </form>
    </div>
</div>

<script>
    // Basic validation (if needed, you can extend this)
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Custom validation logic can be added here if required
    });
</script>


<!-- Đưa link đến Google Fonts để sử dụng font chữ đẹp -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

@endsection