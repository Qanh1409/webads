<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class BlogController extends Controller
{
    //
    public function createBlog(Request $request)
    {
        // Validation rules

        $rules = [
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];

        // Custom validation messages
        $messages = [
            'user_id.required' => 'User ID is required',
            'user_id.integer' => 'User ID must be an integer',
            'user_id.exists' => 'User ID must exist in the users table',
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'title.max' => 'Title may not be greater than 255 characters',
            'content.required' => 'Content is required',
            'content.string' => 'Content must be a string',
        ];

        // Validate the request


        // Create new blog instance
        $blog = new Blog;
        $user = Auth::user();
        $blog->user_id = $user->id;
        $blog->title = $request->title;
        $blog->content = $request->content;

        // Handle the image upload
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog_image_' . time() . '.' . $extension;
            $image_path = public_path('images/blogs');
            $file->move($image_path, $filename);
            $blog->img = $filename;
        }

        // Save the blog to the database
        $blog->save();

        $validator = Validator::make($request->all(), $rules, $messages);


        // Redirect with success message
        return redirect()->route('admin.blog')->with('success', 'Blog created successfully.');
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
