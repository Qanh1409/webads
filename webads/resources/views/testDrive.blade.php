<!-- form đăng ký lái thử -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div class="test-drive-form">
    <!-- Cột trái: Hình ảnh -->
    <div class="left-column">
        <img src="https://via.placeholder.com/500x300" alt="Test Drive" class="test-drive-image">
    </div>

    <!-- Cột phải: Form điền thông tin -->
    <div class="right-column">
        <!-- Tiêu đề chính -->
        <div class="form-header">
            <h2>ĐĂNG KÝ LÁI THỬ</h2>
            <p>Để đăng ký lái thử, Quý khách cần cung cấp giấy phép lái xe cho Mazda.</p>
        </div>

        <!-- Thông tin khách hàng -->
        <div class="form-section">
            <h3>Thông tin khách hàng</h3>
            <label for="full-name">Họ và Tên</label>
            <input type="text" id="full-name" placeholder="Nhập họ và tên">

            <label for="phone">Số điện thoại</label>
            <input type="text" id="phone" placeholder="Nhập số điện thoại">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Nhập email">
        </div>

        <!-- Thông tin xe -->
        <div class="form-section">
            <h3>Thông tin xe</h3>
            <label for="car-name">Tên xe</label>
            <select id="car-name">
                <option value="">Chọn tên xe</option>
                <option value="mazda-3">Mazda 3</option>
                <option value="mazda-6">Mazda 6</option>
                <option value="mazda-cx5">Mazda CX-5</option>
                <option value="mazda-cx8">Mazda CX-8</option>
                <option value="mazda-cx30">Mazda CX-30</option>
            </select>

            <label for="car-version">Phiên bản</label>
            <select id="car-version">
                <option value="deluxe">Deluxe</option>
                <option value="luxury">Luxury</option>
                <option value="premium">Premium</option>
                <option value="signature">Signature</option>
            </select>
        </div>

        <!-- Thời gian -->
        <div class="form-section">
            <h3>Thời gian</h3>
            <label for="test-drive-time">Thời gian lái thử</label>
            <input type="datetime-local" id="test-drive-time">
        </div>

        <!-- Yêu cầu khác -->
        <div class="form-section">
            <h3>Yêu cầu khác</h3>
            <label for="additional-request">Nhập yêu cầu</label>
            <textarea id="additional-request" placeholder="Nhập yêu cầu khác" rows="4"></textarea>
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="submit-button">Đăng ký</button>
    </div>
</div>

<style>
    .test-drive-form {
        display: flex;
        gap: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .left-column {
        flex: 1;
    }

    .test-drive-image {
        width: 100%;
        border-radius: 8px;
    }

    .right-column {
        flex: 2;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-header {
        text-align: center;
    }

    .form-header h2 {
        margin: 0;
        font-size: 24px;
    }

    .form-header p {
        font-size: 14px;
        color: #555;
    }

    .form-section {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .form-section h3 {
        margin: 0;
        font-size: 18px;
    }

    label {
        font-size: 14px;
        color: #333;
    }

    input,
    select,
    textarea {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .submit-button {
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .submit-button:hover {
        background-color: #0056b3;
    }
</style>

@endsection