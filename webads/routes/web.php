<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CategoryController;
use App\Models\User;
use App\Http\Controllers\QrCodeController;

Route::get('/generate-qr', [QrCodeController::class, 'generateQrCode']);


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('users/register', [UserController::class, 'register'])->name('user.register');
Route::post('users/store', [UserController::class, 'store'])->name('user.store');
Route::get('users/login', [UserController::class, 'login'])->name('user.login');
Route::post('users/signin', [UserController::class, 'signin'])->name('user.signin');
Route::get('users/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    $user = User::findOrFail($id);

    if (sha1($user->email) === $hash) {
        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('user.login')->with('success', 'Email của bạn đã được xác nhận.');
    }

    return redirect()->route('user.login')->with('error', 'Liên kết xác nhận không hợp lệ.');
})->name('verification.verify');
Route::post('users/store', [UserController::class, 'store'])->name('user.store');

//Danh sách list các xe (khối header)
Route::get('category', [CategoryController::class, 'category'])->name('category.list');
Route::get('/home/category{id}', [CategoryController::class, 'showCategory'])->name('category.show');
Route::get('/phpinfo', function () {
    phpinfo();
});

//Mục 'GIỚI THIỆU' (khối header)
Route::get('introduce/design', [HomeController::class, 'introduce_design'])->name('introduce_design');
Route::get('introduce/creative', [HomeController::class, 'introduce_creative'])->name('introduce_creative');
Route::get('introduce/iActivsense', [HomeController::class, 'introduce_iActivsense'])->name('introduce_iActivsense');


// Mục tin tức (khối header)
Route::get('/news', [HomeController::class, 'blog'])->name('blog');

// Mục đăng ký lái thử (khối header)
Route::get('testDrive', [HomeController::class, 'testDrive'])->name('testDrive');

// Mục liên hệ (khối header)
Route::get('contactUs', [HomeController::class, 'contactUs'])->name('contactUs');

// Tạo route cho trang Car_detail
Route::get('/category/carDetail{id}', [CarDetailController::class, 'show'])->name('car_detail');

Route::middleware(['admin'])->group(
    function () {

        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::get('admin/blog', [AdminController::class, 'blog'])->name('admin.blog');
        Route::get('admin/blog/add', [AdminController::class, 'addBlog'])->name('admin.blog.add');
        Route::post('admin/blog/create', [AdminController::class, 'createBlog'])->name('admin.blog.create');
        Route::get('admin/blog/edit{id}', [AdminController::class, 'editBlog'])->name('admin.blog.edit');
        Route::put('admin/blog/update{id}', [AdminController::class, 'updateBlog'])->name('admin.blog.update');
        Route::delete('admin/blog/delete{id}', [AdminController::class, 'deleteBlog'])->name('admin.blog.delete');


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

        Route::get('admin/car/engine{id}', [AdminController::class, 'engineTranmission'])->name('admin.car.engineTranmisstion');
        Route::get('admin/car/engine/edit{id}', [AdminController::class, 'engineTranmissionEdit'])->name('admin.car.engineTranmisstion.edỉt');
        Route::put('admin/car/engine/update{id}', [AdminController::class, 'updateEngineTransmission'])->name('admin.engine_transmission.update');


        Route::get('admin/car/chassis{id}', [AdminController::class, 'chassis'])->name('admin.car.chassis');
        Route::get('admin/car/chassis/edit{id}', [AdminController::class, 'editChassis'])->name('admin.car.chassis.edit');
        Route::put('admin/car/chassis/update{id}', [AdminController::class, 'updateChassis'])->name('admin.car.chassis.update');

        Route::get('admin/car/exterior{id}', [AdminController::class, 'exterior'])->name('admin.car.exterior');
        Route::get('admin/car/exterior/edit{id}', [AdminController::class, 'editExterior'])->name('admin.car.exterior.edit');
        Route::put('admin/car/exterior/update{id}', [AdminController::class, 'updateExterior'])->name('admin.car.exterior.update');


        Route::get('admin/car/interior{id}', [AdminController::class, 'interior'])->name('admin.car.interior');
        Route::get('admin/car/interior/edit{id}', [AdminController::class, 'editInterior'])->name('admin.car.interior.edit');
        Route::put('admin/car/interior/update{id}', [AdminController::class, 'updateInterior'])->name('admin.car.interior.update');

        Route::get('admin/car/safety{id}', [AdminController::class, 'safety'])->name('admin.car.safety');
        Route::get('admin/car/safety/edit{id}', [AdminController::class, 'editSafety'])->name('admin.car.safety.edit');
        Route::put('admin/car/safety/update{id}', [AdminController::class, 'updateSafety'])->name('admin.car.safety.update');

        Route::get('admin/car/fuelConsumtion{id}', [AdminController::class, 'fuelConsumtion'])->name('admin.car.fuelConsumtion');
        Route::get('admin/car/fuelConsumtion/edit{id}', [AdminController::class, 'editFuelConsumtion'])->name('admin.car.fuelConsumtion.edit');
        Route::put('admin/car/fuelConsumtion/update{id}', [AdminController::class, 'updateFuelConsumption'])->name('admin.car.fuelConsumtion.update');

        Route::get('admin/car/iActivsense{id}', [AdminController::class, 'iActivsense'])->name('admin.car.iActivsense');
        Route::get('admin/car/iActivsense/edit{id}', [AdminController::class, 'editIactivense'])->name('admin.car.iActivsense.edit');
        Route::put('/admin/car/iActivsense/update{id}', [AdminController::class, 'updateIactivense'])->name('admin.car.iActivsense.update');
    }

);
