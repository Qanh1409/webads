<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Support\Facades\File;
class CarController extends Controller
{
    //
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
            $anhcu = 'images/cars' . $car->image;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image' . time() . '_' . $request->name . '.' . $extention;
            $image_path = public_path('images/cars');
            $file->move($image_path, $filename);
            $car->image = $filename;
        }

        $car->save();

        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');
    }

    public function deleteCar($id)
    {
        $car = Car::findOrFail($id);

        // Kiểm tra và xóa ảnh nếu có
        $image = 'images/cars/' . $car->image;
        if (File::exists($image)) {
            File::delete($image);
        }
        $car->delete();
        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');
    }

}
