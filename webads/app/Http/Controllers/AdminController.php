<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Car;
use App\Models\CarDetail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admins.category', compact('categories'));
    }

    public function addCategory()
    {
        return view('admins.category_create');
    }

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

    public function createCategory(Request $request)
    {
        $rules = [
            'category_name' => 'required|string|max:255',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $messages = [
            'category_name.required' => 'Category name is required',
            'category_name.string' => 'Category name must be a string',
            'category_name.max' => 'Category name may not be greater than 255 characters',
            'img_url.image' => 'Uploaded file must be an image',
            'img_url.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'img_url.max' => 'Image size may not be greater than 2MB',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = new Category;
        $category->name = $request->category_name;

        if ($request->hasFile('img_url')) {
            $file = $request->file('img_url');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image' . time() . '_' . $request->name . '.' . $extention;
            $image_path = public_path('images/categories');
            $file->move($image_path, $filename);
            $category->img = $filename;
        }

        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category created successfully.');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.category_edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $rules = [
            'category_name' => 'required|string|max:255',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $messages = [
            'category_name.required' => 'Category name is required',
            'category_name.string' => 'Category name must be a string',
            'category_name.max' => 'Category name may not be greater than 255 characters',
            'img_url.image' => 'Uploaded file must be an image',
            'img_url.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'img_url.max' => 'Image size may not be greater than 2MB',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::findOrFail($id);
        $category->name = $request->category_name;

        if ($request->hasFile('img_url')) {
            // Remove the old image
            if ($category->img) {
                $this->removeImage($category->img);
            }
            // Upload the new image
            $category->img = $this->uploadImage($request->file('img_url'));
        }

        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        if ($category->img) {
            $this->removeImage($category->img);
        }
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Category deleted successfully.');
    }

    public function createCar(Request $request, $id)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',

        ];

        $messages = [
            'name.required' => 'Car name is required',
            'name.string' => 'Car name must be a string',
            'name.max' => 'Car name may not be greater than 255 characters',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price must be at least 0',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
            'description.max' => 'Description may not be greater than 1000 characters',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);




        $car = new Car;
        $category = Category::find($id);


        $car->name = $request->name;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->category_id = $category->id;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image' . time() . '_' . $request->name . '.' . $extention;
            $image_path = public_path('images/cars');
            $file->move($image_path, $filename);
            $car->image = $filename;
        }

        $car->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        return redirect()->route('admin.car.index', ['id' => $category->id])->with('success', 'Car created successfully.');
    }

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('admins.car_edit', compact('car'));
    }

    public function updateCar(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

      
        $car = Car::findOrFail($id);
        $car->name = $request->name;
        $car->price = $request->price;
        $car->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $car->image = $imagePath;
        }

        $car->save();

        return redirect()->route('admin.car.index', ['id' =>$car->category_id])->with('success', 'Car created successfully.');
    }


    public function deleteCar($id)
    {
        $car = Car::findOrFail($id);

        // Kiểm tra và xóa ảnh nếu có
        if ($car->img) {
            $this->removeImage($car->img);
        }

        $car->delete();

        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');

    }
    
    public function carDetail($id){
        $car = Car::find($id);
        $carDetail = CarDetail::with('car')->get();
        return view('admins.carDetail',compact('carDetail','car'));
    }

    public function editCarDetail($id){
        $carDetail = CarDetail::find($id);
        return view('admins.carDetail_edit',compact('carDetail'));
    }
    public function updateCarDetail(Request $request, $id,$carId)
    {
       
        // 1. Xác thực dữ liệu nhận được
        $validatedData = $request->validate([
            'size' => 'required|numeric',
            'wheelbase' => 'required|numeric',
            'turning_radius' => 'required|numeric',
            'ground_clearance' => 'required|numeric',
            'curb_weight' => 'required|numeric',
            'gross_weight' => 'required|numeric',
            'cargo_volume' => 'required|integer',
            'fuel_tank_capacity' => 'required|integer',
            'deposit_required' => 'required|numeric',
        ]);

        // 2. Tìm kiếm CarDetail theo ID
        $carDetail = CarDetail::findOrFail($id);

        // 3. Cập nhật các thuộc tính với dữ liệu mới từ request
        $carDetail->size = $validatedData['size'];
        $carDetail->wheelbase = $validatedData['wheelbase'];
        $carDetail->turning_radius = $validatedData['turning_radius'];
        $carDetail->ground_clearance = $validatedData['ground_clearance'];
        $carDetail->curb_weight = $validatedData['curb_weight'];
        $carDetail->gross_weight = $validatedData['gross_weight'];
        $carDetail->cargo_volume = $validatedData['cargo_volume'];
        $carDetail->fuel_tank_capacity = $validatedData['fuel_tank_capacity'];
        $carDetail->deposit_required = $validatedData['deposit_required'];

        // 4. Lưu các thay đổi
        $carDetail->save();

        // 5. Điều hướng về trang danh sách kèm thông báo thành công
     
        return redirect()->route('admin.car.index', ['id' =>$car->category_id])->with('success', 'Car created successfully.');
    }

    private function uploadImage($file)
    {
        $filename = 'image_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/cars'), $filename);
        return $filename;
    }

    private function removeImage($filename)
    {
        $imagePath = public_path('images/cars' . $filename);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
}
