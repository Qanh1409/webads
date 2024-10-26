<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class AdminController extends Controller
{ 
    //  
    public function index()
    {
        return view('admins.index');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admins.category', compact('categories'));
    }

    public function addCategory(){
        return view('admins.category_create');
    }
    public function createCategory(Request $request)
    {
        $rules = [
            'category_name' => 'required|string|max:255',
        ];

        $messages = [
            'category_name.required' => 'Category name is required',
            'category_name.string' => 'Category name must be a string',
            'category_name.max' => 'Category name may not be greater than 255 characters',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $category = new Category;

        $category->name = $request->category_name;
       

        if ($request->hasFile('img_url')) {
            $file = $request->file('img_url');
            $extension = $file->getClientOriginalExtension();
            $filename = 'image' . time() . '-' . $request->title . '.' . $extension;
            $image_path = public_path('img');
            // echo "<h1>ahhaa".$filename."</h1>";
            // echo $image_path;
            // die();
            $file->move($image_path, $filename);
            $category->img = $filename;
        }
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Post created successfully.');
    }
                                                                            
    public function editCategory($id){
        $category = Category::find($id);
        return view('admins.category_edit',compact('category'));
    }

    public function updateCategory(Request $request,$id){
        
        $rules = [
            'category_name' => 'required|string|max:255',
        ];

        $messages = [
            'category_name.required' => 'Category name is required',
            'category_name.string' => 'Category name must be a string',
            'category_name.max' => 'Category name may not be greater than 255 characters',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::find($id);
     
        $category->name = $request->category_name;
        $category->img = $request->img_url;
                                                 
                                                       
        if ($request->hasFile('img_url')) {
            $filename = $category->img;
            $imagePath = public_path('img/' . $filename);
            if (file_exists($imagePath)) {
                unlink(filename: $imagePath);  
            }
            $file = $request->file('img_url');
            $filename = 'image' . time() . '-' . $request->title . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);
            $category->img = $filename;
        }

        $category ->save();
        return redirect()->route('admin.category')->with('success', 'Post created successfully.');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Post created successfully.');
    }
    
}
