<!-- TIN TỨC -->

@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="max-width: 900px; margin: 20px auto; font-family: 'Roboto', Arial, sans-serif; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 40px; line-height: 1.6; color: #333;">
    <!-- Tiêu đề chính -->
    <div style="text-align: center; margin-bottom: 30px; border-bottom: 3px solid #007BFF; padding-bottom: 20px;">
        <h2 style="margin: 0; font-size: 32px; font-weight: bold; color: #007BFF; text-transform: uppercase;">Thông tin đặt cọc</h2>
    </div>

    <!-- Form đặt cọc -->


    <form style="display: flex; flex-direction: column; gap: 40px;" method="POST" action="{{route('user.deposit',$car->id)}}" onsubmit="return confirmDeposit();">
        @csrf
        <!-- Mục 1: Thông tin khách hàng -->
        <div>
            <h3 style="margin-bottom: 20px; font-size: 22px; font-weight: 600; color: #333;">Thông tin khách hàng</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Họ và tên</label>
                    <input type="text" name="ho_ten" value="{{ old('ho_ten', $data->name?? '') }}" placeholder="Nhập họ và tên" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Quê quán</label>
                    <input type="text" name="que_quan" value="{{ old('que_quan', $data->que_quan ?? '') }}" placeholder="Nhập quê quán" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Số điện thoại</label>
                    <input type="tel" name="so_dien_thoai" value="{{ old('so_dien_thoai', $data->phone_number ?? '') }}" placeholder="Nhập số điện thoại" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Căn cước công dân</label>
                    <input type="text" name="cccd" value="{{ old('cccd', $data->cccd ?? '') }}" placeholder="Nhập số căn cước công dân" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
            </div>

        </div>

        <!-- Mục 2: Thông tin xe -->
        <div>
            <h3 style="margin-bottom: 20px; font-size: 22px; font-weight: 600; color: #333;">Thông tin xe</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Tên xe và phiên bản</label>
                    <select name="ten_xe" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        <option value="">Chọn xe</option>
                        @foreach($cars as $car)
                        <option value="{{ $car->id }}" {{ old('ten_xe', $data->ten_xe) == $car->id ? 'selected' : '' }}>
                            {{ $car->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Màu xe</label>
                    <input type="text" name="mau_xe" value="{{ old('mau_xe', $data->mau_xe ?? '') }}" placeholder="Nhập màu xe" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>


        <!-- Mục 3: Thông tin đặt cọc -->
        <div>
            <h3 style="margin-bottom: 20px; font-size: 22px; font-weight: 600; color: #333;">Thông tin đặt cọc</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Số tiền đặt cọc</label>
                    <input type="number" name="dat_coc" id="dat_coc" value="{{ old('dat_coc', $data->dat_coc ?? '') }}" placeholder="Nhập số tiền đặt cọc" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);" oninput="convertNumberToWords()">
                </div>
                <div>
                    <label style="font-size: 14px; font-weight: 500; margin-bottom: 8px; display: block;">Số tiền ghi bằng chữ</label>
                    <input type="text" name="dat_coc_chu" id="dat_coc_chu" value="{{ old('dat_coc_chu', $data->dat_coc_chu ?? '') }}" placeholder="Số tiền bằng chữ" style="padding: 14px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);" readonly>
                </div>
            </div>
        </div>
        <!-- Chọn hình thức thanh toán -->
        <div style="max-width: 900px; margin: 30px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h3 style="margin-bottom: 20px; font-size: 24px; font-weight: 600; color: #333; text-align: center;">Chọn hình thức thanh toán</h3>

            <!-- Form lựa chọn hình thức thanh toán -->
            <div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
                <label for="transfer" style="font-size: 16px; font-weight: 500; color: #444; display: flex; align-items: center; cursor: pointer;">
                    <input type="radio" id="transfer" name="payment_method" value="transfer" onclick="togglePaymentForm()" checked>
                    <span style="margin-left: 8px;">Chuyển khoản ngân hàng</span>
                </label>

                <label for="credit_card" style="font-size: 16px; font-weight: 500; color: #444; display: flex; align-items: center; cursor: pointer;">
                    <input type="radio" id="credit_card" name="payment_method" value="credit_card" onclick="togglePaymentForm()">
                    <span style="margin-left: 8px;">Tiền mặt</span>
                </label>
            </div>

            <!-- Khối thông tin chuyển khoản ngân hàng (Hình thức 1) -->
            <div id="bank_transfer_form" style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); padding: 40px; line-height: 1.6; color: #333;">
                <div style="text-align: center; margin-bottom: 30px; border-bottom: 3px solid #007BFF; padding-bottom: 20px;">
                    <h2 style="margin: 0; font-size: 32px; font-weight: bold; color: #007BFF; text-transform: uppercase;">Thanh Toán QR Code</h2>
                </div>
                <!-- Form thanh toán QR Code -->
                    <!-- Thông tin thanh toán -->


                    <!-- Mã QR -->
                    <div>
                        <h3 style="margin-bottom: 20px; font-size: 22px; font-weight: 600; color: #333;">Mã QR thanh toán</h3>
                        <div style="text-align: center;">
                            <img src="{{ $qrCodePath }}"  style="max-width: 300px; margin: 0 auto; border-radius: 8px;">
                        </div>
                    </div>
            </div>

            <!-- Khối thông tin thẻ ngân hàng (Hình thức 2) -->
            <div id="cash_payment_form" style="display: none; margin-top: 20px;">
                <!-- <div style="margin-bottom: 15px;">
                    <label style="font-size: 14px; font-weight: 500; color: #555;">Số tiền thanh toán</label>
                    <input type="number" name="amount_cash" placeholder="Nhập số tiền" style="padding: 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="font-size: 14px; font-weight: 500; color: #555;">Ghi chú (tuỳ chọn)</label>
                    <textarea name="note" placeholder="Nhập ghi chú (nếu có)" style="padding: 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; width: 100%; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);"></textarea>
                </div> -->
            </div>
        </div>

        <div style="text-align: center;">
            <button type="submit" style="padding: 14px 40px; background-color: #007BFF; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; text-transform: uppercase; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                Xác nhận đặt cọc
            </button>
        </div>

        <script>
            // Hàm để điều chỉnh hiển thị các phần tương ứng khi người dùng chọn phương thức thanh toán
            function togglePaymentForm() {
                var transferForm = document.getElementById('bank_transfer_form');
                var cashForm = document.getElementById('cash_payment_form');

                // Kiểm tra xem người dùng có chọn "Chuyển khoản ngân hàng" hay không
                if (document.getElementById('transfer').checked) {
                    transferForm.style.display = 'block';
                    cashForm.style.display = 'none';
                } else {
                    transferForm.style.display = 'none';
                    cashForm.style.display = 'block';
                }
            }
        </script>

    </form>



</div>

@endsection