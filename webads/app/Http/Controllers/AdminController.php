<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Car;

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
            $filename = $this->uploadImage($request->file('img_url'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
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
            'image.required' => 'Image is required',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
            'image.max' => 'Image size may not be greater than 2MB',
            'category_id.required' => 'Category is required',
            'category_id.exists' => 'Selected category does not exist',     
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

          
     
       
        $car = new Car;
        $category = Category::find($id);
    

        $car->name = $request->name;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->category_id = $category->id;

      
        $car->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        return redirect()->route('admin.car.index')->with('success', 'Car created successfully.');
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
