<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::check()){
            $data = Auth::user();
        }
        $categories = Category::all();
        $car = Car::find($id);
        $cars = Car::all();
        return view('deposit', compact('categories','car','data','cars'));
    }

    //Khai báo mục Dự toán trả góp
    public function installment()
    {
        $categories = Category::all(); // Lấy tất cả danh mục

        return view('installment', compact('categories'));
    }

}
