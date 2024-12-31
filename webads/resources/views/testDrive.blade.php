<!-- form đăng ký lái thử -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="display: flex; justify-content: center; padding: 40px; background-color: #e9ecef; font-family: Arial, sans-serif;">

    <!-- Form Container -->
    <div style="width: 100%; max-width: 800px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px;">

        <!-- Tiêu đề chính -->
        <div style="text-align: center; margin-bottom: 30px; border-bottom: 2px solid #007BFF; padding-bottom: 10px;">
            <h2 style="margin: 0; font-size: 28px; color: #212529;">Đăng Ký Lái Thử</h2>
            <p style="margin: 0; font-size: 16px; color: #6c757d;">Cung cấp giấy phép lái xe khi đến trung tâm Mazda để lái thử xe.</p>
        </div>

        <!-- Form -->
        <form style="display: flex; flex-direction: column; gap: 25px;">

            <!-- Thông tin khách hàng -->
            <div>
                <h3 style="margin: 0 0 10px 0; font-size: 20px; color: #212529;">Thông tin khách hàng</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <label for="full-name" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Họ và Tên</label>
                        <input type="text" id="full-name" placeholder="Nhập họ và tên"
                            style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                    </div>
                    <div>
                        <label for="phone" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Số điện thoại</label>
                        <input type="text" id="phone" placeholder="Nhập số điện thoại"
                            style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <label for="email" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Email</label>
                    <input type="email" id="email" placeholder="Nhập email"
                        style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                </div>
            </div>

            <!-- Thông tin xe -->
            <div>
                <h3 style="margin: 0 0 10px 0; font-size: 20px; color: #212529;">Thông tin xe</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <label for="car-name" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Tên xe</label>
                        <select id="car-name"
                            style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                            <option value="">Chọn tên xe</option>
                            <option value="mazda-3">Mazda 3</option>
                            <option value="mazda-6">Mazda 6</option>
                            <option value="mazda-cx5">Mazda CX-5</option>
                            <option value="mazda-cx8">Mazda CX-8</option>
                            <option value="mazda-cx30">Mazda CX-30</option>
                        </select>
                    </div>
                    <div>
                        <label for="car-version" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Phiên bản</label>
                        <select id="car-version"
                            style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                            <option value="deluxe">Deluxe</option>
                            <option value="luxury">Luxury</option>
                            <option value="premium">Premium</option>
                            <option value="signature">Signature</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Thời gian -->
            <div>
                <h3 style="margin: 0 0 10px 0; font-size: 20px; color: #212529;">Thời gian</h3>
                <div>
                    <label for="test-drive-time" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Thời gian lái thử</label>
                    <input type="datetime-local" id="test-drive-time"
                        style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;">
                </div>
            </div>

            <!-- Yêu cầu khác -->
            <div>
                <h3 style="margin: 0 0 10px 0; font-size: 20px; color: #212529;">Yêu cầu khác</h3>
                <div>
                    <label for="additional-request" style="display: block; margin-bottom: 8px; font-size: 14px; color: #495057;">Nhập yêu cầu</label>
                    <textarea id="additional-request" placeholder="Nhập yêu cầu khác" rows="4"
                        style="width: 100%; padding: 12px; border: 1px solid #ced4da; border-radius: 4px; font-size: 14px;"></textarea>
                </div>
            </div>

            <!-- Nút gửi -->
            <button type="submit"
                style="padding: 12px; background-color: #007BFF; color: #ffffff; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; text-transform: uppercase; font-weight: bold;">
                Đăng ký
            </button>
        </form>
    </div>
</div>





@endsection