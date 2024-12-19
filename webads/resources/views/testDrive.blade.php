<!-- form đăng ký lái thử -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="display: flex; gap: 20px; padding: 20px; background-color: #f3f4f6; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; max-width: 900px; margin: 0 auto;">

    <!-- Cột phải: Form điền thông tin -->
    <div style="flex: 2; display: flex; flex-direction: column; gap: 20px;">

        <!-- Tiêu đề chính -->
        <div style="text-align: center; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">
            <h2 style="margin: 0; font-size: 24px; color: #333;">ĐĂNG KÝ LÁI THỬ</h2>
            <p style="font-size: 14px; color: #555;">Để đăng ký lái thử, Quý khách cần cung cấp giấy phép lái xe cho Mazda.</p>
        </div>

        <!-- Thông tin khách hàng -->
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <h3 style="margin: 0; font-size: 18px; color: #333;">Thông tin khách hàng</h3>
            <label for="full-name" style="font-size: 14px; color: #555;">Họ và Tên</label>
            <input type="text" id="full-name" placeholder="Nhập họ và tên"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">

            <label for="phone" style="font-size: 14px; color: #555;">Số điện thoại</label>
            <input type="text" id="phone" placeholder="Nhập số điện thoại"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">

            <label for="email" style="font-size: 14px; color: #555;">Email</label>
            <input type="email" id="email" placeholder="Nhập email"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
        </div>

        <!-- Thông tin xe -->
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <h3 style="margin: 0; font-size: 18px; color: #333;">Thông tin xe</h3>
            <label for="car-name" style="font-size: 14px; color: #555;">Tên xe</label>
            <select id="car-name"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
                <option value="">Chọn tên xe</option>
                <option value="mazda-3">Mazda 3</option>
                <option value="mazda-6">Mazda 6</option>
                <option value="mazda-cx5">Mazda CX-5</option>
                <option value="mazda-cx8">Mazda CX-8</option>
                <option value="mazda-cx30">Mazda CX-30</option>
            </select>

            <label for="car-version" style="font-size: 14px; color: #555;">Phiên bản</label>
            <select id="car-version"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
                <option value="deluxe">Deluxe</option>
                <option value="luxury">Luxury</option>
                <option value="premium">Premium</option>
                <option value="signature">Signature</option>
            </select>
        </div>

        <!-- Thời gian -->
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <h3 style="margin: 0; font-size: 18px; color: #333;">Thời gian</h3>
            <label for="test-drive-time" style="font-size: 14px; color: #555;">Thời gian lái thử</label>
            <input type="datetime-local" id="test-drive-time"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
        </div>

        <!-- Yêu cầu khác -->
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <h3 style="margin: 0; font-size: 18px; color: #333;">Yêu cầu khác</h3>
            <label for="additional-request" style="font-size: 14px; color: #555;">Nhập yêu cầu</label>
            <textarea id="additional-request" placeholder="Nhập yêu cầu khác" rows="4"
                style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;"></textarea>
        </div>

        <!-- Nút gửi -->
        <button type="submit" style="padding: 12px 20px; background-color: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; text-transform: uppercase; font-weight: bold;">
            Đăng ký
        </button>
    </div>
</div>


@endsection