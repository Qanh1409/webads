<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('users/register',[UserController::class,'register'])->name('user.register');
Route::post('users/store', [UserController::class, 'store'])->name('user.store');
Route::get('users/login', [UserController::class, 'login'])->name('user.login');
Route::post('users/signin', [UserController::class, 'signin'])->name('user.signin');
Route::get('users/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('category',[CategoryController::class,'category'])->name('category.list');

Route::get('admin',[AdminController::class,'index'])->name('admin');
<<<<<<< HEAD
Route::get('admin/category',[AdminController::class,'category'])->name('admin.category');
=======
Route::get('admin/category',[AdminController::class,'category'])->name('admin.category');
Route::get('admin/category/add',[AdminController::class,'addCategory'])->name('admin.category.add');
Route::post('admin/category/create',[AdminController::class,'createCategory'])->name('admin.category.create');

Route::get('admin/category/edit{id}',[AdminController::class,'editCategory'])->name('admin.category.edit');
Route::put('admin/category/update{id}',[AdminController::class,'updateCategory'])->name('admin.category.update');


Route::get();
>>>>>>> 128abc0554b24cca2c89c20765fc2168404393ba
