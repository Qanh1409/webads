<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarDetail;
use App\Models\Category;
use App\Models\EngineTransmission;
use App\Models\Chassis;
use App\Models\Exterior;
use App\Models\FuelConsumption;
use App\Models\IActivsense;
use App\Models\Interior;
use App\Models\Safety;

class CarDetailController extends Controller
{
    //

    public function show($id)
    {
        $car = Car::find($id);
        $categories = Category::all(); // Lấy tất cả danh mục
        $carDetail = CarDetail::where('car_id', $id)->first(); // Lấy thông tin car_detail với car_id = $id
        $carDetailID = $carDetail->id;
        if (!$carDetail) {
            // Xử lý trường hợp không tìm thấy chi tiết xe
            return redirect()->back()->with('error', 'Không tìm thấy thông tin chi tiết xe.');
        }
        $carEngine = EngineTransmission::where('detail_id', $carDetailID)->first();
        $carChassis = Chassis::where('detail_id',$carDetailID)->first();
        $carInterior = Interior::where('detail_id', $carDetailID)->first();
        $carExterior = Exterior::where('detail_id', $carDetailID)->first();
        $fuelConsumption = FuelConsumption::where('detail_id', $carDetailID)->first();
        $carSafety = Safety::where('detail_id', $carDetailID)->first();
        $iActivesense = IActivsense::where('detail_id', $carDetailID)->first();
        return view('car_detail', compact(
            'car',
            'categories',
            'carDetail',
            'carEngine',
            'carChassis',
            'carInterior',
            'carExterior',
            'fuelConsumption',
            'carSafety',
            'iActivesense'
        ));
    }
}
