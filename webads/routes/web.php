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
Route::get('admin/category',[AdminController::class,'category'])->name('admin.category');