<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Fetch blogs
        $blogs = Blog::all();
        if ($blogs->isEmpty()) {
            Log::warning('No blogs found.');
           
        }

        // Fetch categories
        $categories = Category::all();
        if ($categories->isEmpty()) {
            Log::warning('No categories found.');
            
        }

        // Return the view with blogs and categories data
        return view('welcome', [
            'blogs' => $blogs,
            'categories' => $categories
        ]);
    }

    public function category()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    // KHAI BÁO MỤC "GIỚI THIỆU CỦA XE"
    public function introduce_design()

    {
        $categories = Category::all();

        return view('introduce_design', compact('categories'));
    }

    public function introduce_creative()
    {
        return view('introduce_creative');
    }

    public function introduce_iActivsense()
    {
        return view('introduce_iActivsense');
    }

    //Khai báo mục Tin tức
    public function blog()
    {
        $latestBlog = Blog::latest()->first(); // Lấy bài viết mới nhất
        $blogs = Blog::all();
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('blog', compact('latestBlog', 'categories', 'blogs'));
    }


    //Khai báo mục Lái thử
    public function testDrive()
    {
        $categories = Category::all(); // Lấy tất cả danh mục

        return view('testDrive', compact('categories'));
    }
    //Khai báo mục Liên hệ
    public function contactUs()
    {
        $categories = Category::all();
        return view('contactUs', compact('categories'));
    }
    
    //Khai báo mục Đặt cọc
    public function deposit($id)
    {
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
        if(Auth::check()){
            $data = Auth::user();
        }

        $categories = Category::all();
        $car = Car::find($id);
        $cars = Car::all();
        return view('deposit', compact('categories','car','data','cars','qrCodePath'));
    }

    //Khai báo mục Dự toán trả góp
    public function installment()
    {
        $categories = Category::all(); // Lấy tất cả danh mục

        return view('installment', compact('categories'));
    }

}
