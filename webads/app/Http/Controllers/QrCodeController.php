<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\Facades\Image;
class QRCodeController extends Controller
{
    //
    public function generate()
    {
        // Tạo URL cho mã QR
        $paymentUrl = route('payment.success'); // URL để hiển thị thông báo

        // Đặt tên file cho mã QR
        $fileName = 'payment_qr_' . time() . '.png'; // Tùy chỉnh tên file

        // Đường dẫn lưu file ảnh
        $filePath = public_path('images/qr_codes/' . $fileName);

        // Kiểm tra thư mục 'images/qr_codes', nếu chưa tồn tại thì tạo
        if (!file_exists(public_path('images/qr_codes'))) {
            mkdir(public_path('images/qr_codes'), 0755, true);
        }

        // Tạo mã QR và lưu vào file
        QrCode::format('png')->size(300)->generate($paymentUrl, $filePath);

        // Trả về view với đường dẫn file ảnh
        $qrCodePath = asset('images/qr_codes/' . $fileName); // Đường dẫn URL đến tệp ảnh

        return view('qrcode', compact('qrCodePath')); // Truyền đường dẫn vào view
    }


    public function confirmSuccess(){
        return view('pay');
    }



}
