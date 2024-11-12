<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //tạo mục "Dòng xe" trong khối header
    public function category(){
        $categories = Category::all();
        return view('category',compact('categories'));
    }

    // Tạo mục "Giới thiệu trong khối header"
    public function introduce()
    {
        return view('introduce'); // Đảm bảo view 'introduce' tồn tại trong thư mục resources/views
    }
}
