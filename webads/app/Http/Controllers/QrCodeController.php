<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class QrCodeController extends Controller
{
    public function generateQrCode()
    {
        // Tạo mã QR với nội dung
        $qrContent = 'https://example.com';

        // Tạo mã QR và lưu thành file ảnh
        $fileName = 'qrcode-' . time() . '.jpg'; // Tên file duy nhất
        $filePath = 'qrcodes/' . $fileName;     // Thư mục lưu file

        // Sinh mã QR và lưu thành file JPG
        Storage::put($filePath, QrCode::format('png')->size(300)->generate($qrContent));

        // Trả về view để hiển thị mã QR
        return view('qrcode_image', ['imagePath' => $filePath]);
    }
}
