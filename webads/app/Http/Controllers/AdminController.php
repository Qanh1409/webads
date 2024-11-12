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

        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');
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
        $request->validate([
            'size' => 'required|string|max:255',
            'wheelbase' => 'required|string|max:255',
            'turning_radius' => 'required|string|max:255',
            'ground_clearance' => 'required|string|max:255',
            'curb_weight' => 'required|string|max:255',
            'gross_weight' => 'required|string|max:255',
            'cargo_volume' => 'required|numeric',
            'fuel_tank_capacity' => 'required|numeric',
            'deposit_required' => 'required|string|max:255',
        ]);

        // Find the car detail by ID
        $carDetail = CarDetail::findOrFail($id);

        // Update the car detail attributes
        $carDetail->size = $request->size;
        $carDetail->wheelbase = $request->wheelbase;
        $carDetail->turning_radius = $request->turning_radius;
        $carDetail->ground_clearance = $request->ground_clearance;
        $carDetail->curb_weight = $request->curb_weight;
        $carDetail->gross_weight = $request->gross_weight;
        $carDetail->cargo_volume = $request->cargo_volume;
        $carDetail->fuel_tank_capacity = $request->fuel_tank_capacity;
        $carDetail->deposit_required = $request->deposit_required;
      
        // Save the updated car detail
        $carDetail->save();

        // Redirect back to a relevant page with a success message

        return redirect()->route('admin.car.index', ['id' => $carDetail->car->category_id])->with('success', 'Car created successfully.');
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
