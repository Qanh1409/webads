<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarDetail;
use App\Models\Category;

class CarDetailController extends Controller
{
    //

    public function show($id)
    {
        $categories = Category::all(); // Lấy tất cả danh mục
        $carDetail = CarDetail::where('car_id', $id)->first(); // Lấy thông tin car_detail với car_id = $id

        if (!$carDetail) {
            // Xử lý trường hợp không tìm thấy chi tiết xe
            return redirect()->back()->with('error', 'Không tìm thấy thông tin chi tiết xe.');
        }
       
        return view('car_detail', compact('categories', 'carDetail'));
    }
}
