<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;

class CategoryController extends Controller
{
    //tạo mục "Dòng xe" trong khối header
    public function category()
    {
        $categories = Category::with('cars')->get(); // Lấy tất cả danh mục cùng với các xe liên quan
        // Nếu cần render view (sau khi in xong)
        return view('category', compact('categories'));
    }
    public function show($id)
    {
        $category = Category::with('cars')->find($id); // Tìm danh mục theo ID
        $categories = Category::all(); // Lấy tất cả danh mục để hiển thị trong menu
        $name =  $category->name;
        foreach ($category->cars as $car){
            $nameCar = $car->name;
            $priceCar = $car->price;
        }
        return view('category_detail', compact('category', 'categories','name'));
    }


    // Tạo mục "Giới thiệu trong khối header"
    public function introduce()
    {
        return view('introduce'); // Đảm bảo view 'introduce' tồn tại trong thư mục resources/views
    }
}
