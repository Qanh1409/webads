<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Blog;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index()
    {
        try {
            $blogs = Blog::all();
            $categories = Category::all();

            return view('welcome', [
                'blogs' => $blogs,
                'categories' => $categories
            ]);
        } catch (\Exception $e) {
            // Import đúng Log và dùng trực tiếp Log::error
            Log::error("Error fetching blogs or categories: " . $e->getMessage());
            return redirect()->back()->with('error', 'Unable to load content at this time.');
        }
    }



    public function category()
    {
        $categories = Category::all();
        return view('category',compact('categories'));
    }

    // KHAI BÁO MỤC "GIỚI THIỆU CỦA XE"
    public function introduce_design()
    {
        return view('introduce_design');
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
        return view('blog');
    }
    
    //Khai báo mục Lái thử
    public function testDrive()
    {
        return view('testDrive');
    }
    
    //Khai báo mục Liên hệ
    public function contactUs()
    {
        return view('contactUs');
    }

    //khai báo car_details (chi tiết các xe)
    public function carDetail()
    {
        return view('car_detail');
    }

}
