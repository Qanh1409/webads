<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class HomeController extends Controller
{
    //
    public function index()
    {
        try {
            $blogs = Blog::all();
            $categories = Category::all();

            return view('welcome', [
                'blogs' => $blogs,
                'categories' => $categories
            ]);
        } catch (\Exception $e) {
            // Handle error, optionally log it and return a user-friendly message
            \Log::error("Error fetching blogs or categories: " . $e->getMessage());
            return redirect()->back()->with('error', 'Unable to load content at this time.');
        }
    }


    public function category()
    {
        return view('category');
    }
}
