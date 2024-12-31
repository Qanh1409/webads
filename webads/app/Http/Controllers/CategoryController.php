<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    //tạo mục "Dòng xe" trong khối header
    public function category()
    {
        $categories = Category::with('cars')->get(); // Lấy tất cả danh mục cùng với các xe liên quan
        // Nếu cần render view (sau khi in xong)
        return view('category', compact('categories'));
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

     

      
        $category = Category::findOrFail($id);
        $category->name = $request->category_name;
        if ($request->hasFile('img_url')) {
            $anhcu = 'images/categories/' . $category->img;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }

            $file = $request->file('img_url');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image' . time() . '_' . $request->name . '.' . $extention;
            $image_path = public_path('images/categories');
            $file->move($image_path, $filename);
            $category->img = $filename;
        }
       
        $category->update();
       
        return redirect()->route('admin.category')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $image = 'images/categories/' . $category->img;
        if (File::exists($image)) {
            File::delete($image);
        }
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Category deleted successfully.');
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
