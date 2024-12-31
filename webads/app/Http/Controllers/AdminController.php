<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Car;
use App\Models\CarDetail;
use App\Models\Chassis;
use App\Models\EngineTransmission;
use App\Models\Exterior;
use App\Models\FuelConsumption;
use App\Models\Interior;
use App\Models\Safety;
use App\Models\IActivsense;

class AdminController extends Controller
{
    // Constructor để inject các Controller liên quan
    protected $blogController;
    protected $categoryController;
    protected $carController;
    protected $carDetailController;

    public function __construct(
        BlogController $blogController,
        CategoryController $categoryController,
        CarController $carController,
        CarDetailController $carDetailController
    ) {
        $this->blogController = $blogController;
        $this->categoryController = $categoryController;
        $this->carController = $carController;
        $this->carDetailController = $carDetailController;
    }

    // Trang chính của admin
    public function index()
    {
        return view('admins.index');
    }

    // ------------------------------- Quản lý bài viết -------------------------------

    public function blog()
    {
        $blogs = Blog::all();
        return view('admins.blog', compact('blogs'));
    }

    public function addBlog()
    {
        return view("admins.blog_create");
    }

    public function editBlog($id)
    {
        $post = Blog::find($id);
        return view('admins.blog_edit', compact('post'));
    }

    public function createBlog(Request $request)
    {
        return $this->blogController->createBlog($request);
    }

    public function updateBlog(Request $request, $id)
    {
        return $this->blogController->updateBlog($request, $id);
    }

    public function deleteBlog($id)
    {
        return $this->blogController->deleteBlog($id);
    }

    // ------------------------------- Quản lý danh mục -------------------------------

    public function category()
    {
        $categories = Category::all();
        return view('admins.category', compact('categories'));
    }

    public function addCategory()
    {
        return view('admins.category_create');
    }

    public function createCategory(Request $request)
    {
        return $this->categoryController->createCategory($request);
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.category_edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        return $this->categoryController->updateCategory($request, $id);
    }

    public function deleteCategory($id)
    {
        return $this->categoryController->deleteCategory($id);
    }

    // ------------------------------- Quản lý xe -------------------------------

    public function car($id)
    {
        $category = Category::findOrFail($id);
        $cars = Car::where('category_id', $id)->get();
        return view('admins.car', compact('cars', 'category'));
    }

    public function addCar($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.car_create', compact('category'));
    }

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('admins.car_edit', compact('car'));
    }

    public function createCar(Request $request, $id)
    {
        return $this->carController->createCar($request, $id);
    }

    public function updateCar(Request $request, $id)
    {
        return $this->carController->updateCar($request, $id);
    }

    public function deleteCar($id)
    {
        return $this->carController->deleteCar($id);
    }

    // ------------------------------- Quản lý chi tiết xe -------------------------------

    public function carDetail($id)
    {
        $car = Car::find($id);
        $carDetail = CarDetail::with('car')->where('car_id', $id)->first();
        
        if (!$carDetail) {
            return redirect()->back()->withErrors('CarDetail not found.');
        }

        return view('admins.carDetail', compact('carDetail', 'car'));
    }

    public function editCarDetail($id)
    {
        $carDetail = CarDetail::find($id);
        return view('admins.carDetail_edit', compact('carDetail'));
    }

    public function updateCarDetail(Request $request, $id)
    {
        return $this->carDetailController->updateCarDetail($request, $id);
    }

    // ------------------------------- Quản lý động cơ và hộp số -------------------------------

    public function engineTranmission($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;
        $engineDetail = EngineTransmission::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$engineDetail) {
            return redirect()->back()->withErrors('EngineTransmission not found.');
        }

        return view('admins.engineTranmission', compact('engineDetail', 'carDetail', 'car'));
    }

    public function engineTranmissionEdit($id)
    {
        $engineTransmission = EngineTransmission::find($id);

        if (!$engineTransmission) {
            return redirect()->back()->withErrors('EngineTransmission not found.');
        }

        return view('admins.engineTranmission_edit', compact('engineTransmission'));
    }

    public function updateEngineTransmission(Request $request, $id)
    {
        return $this->carDetailController->updateEngineTransmission($request, $id);
    }

    // ------------------------------- Quản lý khung gầm -------------------------------

    public function chassis($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;
        $chassisDetail = Chassis::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$chassisDetail) {
            return redirect()->back()->withErrors('ChassisDetail not found.');
        }

        return view('admins.chassis', compact('chassisDetail', 'carDetail', 'car'));
    }

    public function editChassis($id)
    {
        $chassisDetail = Chassis::find($id);
        return view('admins.chassis_edit', compact('chassisDetail'));
    }

    public function updateChassis(Request $request, $id)
    {
        return $this->carDetailController->updateChassis($request, $id);
    }

    // ------------------------------- Quản lý ngoại thất -------------------------------

    public function exterior($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;
        $exteriorDetail = Exterior::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$exteriorDetail) {
            return redirect()->back()->withErrors('ExteriorDetail not found.');
        }

        return view('admins.exterior', compact('exteriorDetail', 'carDetail', 'car'));
    }

    public function editExterior($id)
    {
        $exteriorDetail = Exterior::find($id);
        return view('admins.exterior_edit', compact('exteriorDetail'));
    }

    public function updateExterior(Request $request, $id)
    {
        return $this->carDetailController->updateExterior($request, $id);
    }

    // ------------------------------- Quản lý nội thất -------------------------------

    public function interior($id)
    {
        $carDetail = CarDetail::findOrFail($id);
        $car = $carDetail->car;
        $interiorDetail = Interior::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$interiorDetail) {
            return redirect()->back()->withErrors('InteriorDetail not found.');
        }

        return view('admins.interior', compact('interiorDetail', 'carDetail', 'car'));
    }

    public function editInterior($id)
    {
        $interiorDetail = Interior::find($id);
        return view('admins.interior_edit', compact('interiorDetail'));
    }

    public function updateInterior(Request $request, $id)
    {
        return $this->carDetailController->updateInterior($request, $id);
    }

    // ------------------------------- Quản lý an toàn -------------------------------

    public function safety($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;
        $safetyDetail = Safety::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$safetyDetail) {
            return redirect()->back()->withErrors('SafetyDetail not found.');
        }

        return view('admins.safety', compact('safetyDetail', 'carDetail', 'car'));
    }

    public function editSafety($id)
    {
        $safety = Safety::find($id);
        return view("admins.safety_edit", compact('safety'));
    }

    public function updateSafety(Request $request, $id)
    {
        return $this->carDetailController->updateSafety($request, $id);
    }

    // ------------------------------- Quản lý tiêu thụ nhiên liệu -------------------------------

    public function fuelConsumption($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;
        $fuelConsumption = FuelConsumption::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$fuelConsumption) {
            return redirect()->back()->withErrors('FuelConsumption not found.');
        }

        return view('admins.fuelConsumption', compact('fuelConsumption', 'carDetail', 'car'));
    }

    public function editFuelConsumption($id)
    {
        $fuelConsumption = FuelConsumption::find($id);
        return view('admins.fuelConsumption_edit', compact('fuelConsumption'));
    }

    public function updateFuelConsumption(Request $request, $id)
    {
        return $this->carDetailController->updateFuelConsumption($request, $id);
    }

    // ------------------------------- Quản lý i-Activsense -------------------------------

    public function iActivsense($id)
    {
        $carDetail = CarDetail::find($id);

        if (!$carDetail) {
            return redirect()->back()->withErrors('Car Detail not found.');
        }

        $iActivesense = IActivsense::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$iActivesense) {
            return redirect()->back()->withErrors('IActivsense detail not found.');
        }

        $car = $carDetail->car;

        return view('admins.iActivsense', compact('iActivesense', 'carDetail', 'car'));
    }

    public function editIActivsense($id)
    {
        $iActivesense = IActivsense::findOrFail($id);
        return view('admins.iActivsense_edit', compact('iActivesense'));
    }

    public function updateIActivsense(Request $request, $id)
    {
        return $this->carDetailController->updateIactivense($request, $id);
    }
}
