<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\CategoryController;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admins.index');
    }

    public function category(){
        $categoryController = new CategoryController();
        return $categoryController->category();
    }
    public function users_Category()
    {
        return view('users.category');
    } 
    
}
