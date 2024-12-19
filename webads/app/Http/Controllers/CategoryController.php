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

    public function showCategory($id)
    {
       
        $category = Category::with('cars')->find($id); // Tìm danh mục theo ID và load quan hệ cars
        $categories = Category::all(); // Lấy tất cả danh mục để hiển thị trong menu

        // Kiểm tra nếu không tìm thấy danh mục
        if (!$category) {
            return redirect()->back()->with('error', 'Danh mục không tồn tại.');
        }

        $name = $category->name;

        // Duyệt qua các xe trong danh mục
        $cars = [];
        foreach ($category->cars as $car) {
            $cars[] = [
                'name' => $car->name,
                'price' => $car->price,
            ];
        }

        return view('category_detail', compact('category', 'categories', 'name', 'cars'));
    }


    // Tạo mục "Giới thiệu trong khối header"
    public function introduce()
    {
        return view('introduce'); // Đảm bảo view 'introduce' tồn tại trong thư mục resources/views
    }
}
