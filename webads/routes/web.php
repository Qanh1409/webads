<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('users/register', [UserController::class, 'register'])->name('user.register');
Route::post('users/store', [UserController::class, 'store'])->name('user.store');
Route::get('users/login', [UserController::class, 'login'])->name('user.login');
Route::post('users/signin', [UserController::class, 'signin'])->name('user.signin');
Route::get('users/logout', [UserController::class, 'logout'])->name('user.logout');

//Danh sách list các xe (khối header)
Route::get('category', [CategoryController::class, 'category'])->name('category.list');
//Mục 'GIỚI THIỆU' (khối header)
Route::get('/introduce', [CategoryController::class, 'introduce'])->name('introduce');



Route::middleware(['admin'])->group(
    function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::get('admin/category', [AdminController::class, 'category'])->name('admin.category');
        Route::get('admin/category/add', [AdminController::class, 'addCategory'])->name('admin.category.add');
        Route::post('admin/category/create', [AdminController::class, 'createCategory'])->name('admin.category.create');

        Route::get('admin/category/edit{id}', [AdminController::class, 'editCategory'])->name('admin.category.edit');
        Route::put('admin/category/update{id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
        Route::delete('admin/category/delete{id}', [AdminController::class, 'deleteCategory'])->name('admin.category.delete');

        Route::get('admin/car/index{id}', [AdminController::class, 'car'])->name('admin.car.index');
        Route::get('admin/car/addCar{id}', [AdminController::class, 'addCar'])->name('admin.car.add');
        Route::post('admin/car/create{id}', [AdminController::class, 'createCar'])->name('admin.car.create');
        Route::get('admin/car/edit{id}', [AdminController::class, 'editCar'])->name('admin.car.edit');
        Route::put('/admin/car/update/{id}', [AdminController::class, 'updateCar'])->name('admin.car.update');
        Route::delete('admin/car/delete{id}', [AdminController::class, 'deleteCar'])->name('admin.car.delete');

        Route::get('admin/car/detail{id}', [AdminController::class, 'carDetail'])->name('admin.car.detail');
        Route::get('admin/car/detail/edit{id}', [AdminController::class, 'editCarDetail'])->name('admin.carDetail.edit');
        Route::put('/admin/car/update{id}', [AdminController::class, 'updateCarDetail'])->name('admin.carDetail.update');
    }
);
