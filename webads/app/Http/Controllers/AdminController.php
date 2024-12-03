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

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admins.category', compact('categories'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('admins.blog', compact('blogs'));
    }

    public function addBlog()
    {
        return view("admins.blog_create");
    }
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

    public function editBlog($id)
    {
        $post = Blog::find($id);
        return view('admins.blog_edit', compact('post'));
    }

    public function updateBlog(Request $request, $id)
    {
        // Xác định các quy tắc validate
        $rules = [
            'title' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ];

        // Các thông báo lỗi khi validate
        $messages = [
            'title.required' => 'Tiêu đề bài viết là bắt buộc.',
            'title.string' => 'Tiêu đề bài viết phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề bài viết không được vượt quá 255 ký tự.',
            'img.image' => 'Tệp tải lên phải là hình ảnh.',
            'img.mimes' => 'Hình ảnh phải thuộc các định dạng: jpeg, png, jpg, gif.',
            'img.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
            'content.required' => 'Nội dung bài viết là bắt buộc.',
            'content.string' => 'Nội dung bài viết phải là một chuỗi ký tự.',
        ];

        // Thực hiện validate
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Nếu validate không thành công, trả lại lỗi kèm dữ liệu cũ
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tìm bài viết theo ID, hoặc báo lỗi nếu không tồn tại
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title; // Cập nhật tiêu đề
        $blog->content = $request->content; // Cập nhật nội dung

        // Kiểm tra nếu có tệp hình ảnh được tải lên
        if ($request->hasFile('img')) {
            // Xóa hình ảnh cũ nếu có
            if ($blog->img) {
                $this->removeImage($blog->img); // Hàm xóa file ảnh (định nghĩa bên dưới)
            }

            // Upload và lưu đường dẫn hình ảnh mới
            $blog->img = $this->uploadImage($request->file('img')); // Hàm upload file ảnh (định nghĩa bên dưới)
        }

        // Lưu các thay đổi
        $blog->save();

        // Trả về thông báo thành công
        return redirect()->route('admin.blog')->with('success', 'Bài viết đã được cập nhật thành công.');
    }
    public function deleteBlog($id)
    {
        // Tìm bài viết theo ID
        $post = Blog::find($id);

        // Kiểm tra nếu bài viết không tồn tại
        if (!$post) {
            return redirect()->route('admin.blog')->with('error', 'Bài viết không tồn tại.');
        }

        // Kiểm tra và xóa hình ảnh liên quan (nếu có)
        if ($post->img) {
            $this->removeImage($post->img);
        }

        // Xóa bài viết
        $post->delete();

        // Trả về với thông báo thành công
        return redirect()->route('admin.blog')->with('success', 'Bài viết đã được xóa thành công.');
    }


    public function addCategory()
    {
        return view('admins.category_create');
    }

    public function car($id)
    {
        $category = Category::findOrFail($id);
        $cars = Car::where('category_id', $id)->get();
        return view('admins.car', compact('cars', 'category'));
    }

    public function addCar($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.car_create', compact('category'));
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

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.category_edit', compact('category'));
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


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::findOrFail($id);
        $category->name = $request->category_name;

        if ($request->hasFile('img_url')) {
            // Remove the old image
            if ($category->img) {
                $this->removeImage($category->img);
            }
            // Upload the new image
            $category->img = $this->uploadImage($request->file('img_url'));
        }

        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        if ($category->img) {
            $this->removeImage($category->img);
        }
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Category deleted successfully.');
    }

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

    public function editCar($id)
    {
        $car = Car::find($id);
        return view('admins.car_edit', compact('car'));
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
            $imagePath = $request->file('image')->store('images', 'public');
            $car->image = $imagePath;
        }

        $car->save();

        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');
    }


    public function deleteCar($id)
    {
        $car = Car::findOrFail($id);

        // Kiểm tra và xóa ảnh nếu có
        if ($car->img) {
            $this->removeImage($car->img);
        }

        $car->delete();

        return redirect()->route('admin.car.index', ['id' => $car->category_id])->with('success', 'Car created successfully.');
    }
    // Controller của carDetail
    public function carDetail($id)
    {
        $car = Car::find($id);
        $carDetail = CarDetail::with('car')->where('car_id', $id)->first();

        if (!$carDetail) {
            return redirect()->back()->withErrors('CarDetail not found.');
        }

        return view('admins.carDetail', compact('carDetail', 'car'));
    }

    // Controller của engineTranmission


    public function editCarDetail($id)
    {
        $carDetail = CarDetail::find($id);
        return view('admins.carDetail_edit', compact('carDetail'));
    }


    public function updateCarDetail(Request $request, $id)
    {
        $request->validate([
            'size' => 'required|string|max:255',
            'wheelbase' => 'required|string|max:255',
            'turning_radius' => 'required|string|max:255',
            'ground_clearance' => 'required|string|max:255',
            'curb_weight' => 'required|string|max:255',
            'gross_weight' => 'required|string|max:255',
            'cargo_volume' => 'required|numeric',
            'fuel_tank_capacity' => 'required|numeric',
            'deposit_required' => 'required|string|max:255',
        ]);

        // Find the car detail by ID
        $carDetail = CarDetail::findOrFail($id);

        // Update the car detail attributes
        $carDetail->size = $request->size;
        $carDetail->wheelbase = $request->wheelbase;
        $carDetail->turning_radius = $request->turning_radius;
        $carDetail->ground_clearance = $request->ground_clearance;
        $carDetail->curb_weight = $request->curb_weight;
        $carDetail->gross_weight = $request->gross_weight;
        $carDetail->cargo_volume = $request->cargo_volume;
        $carDetail->fuel_tank_capacity = $request->fuel_tank_capacity;
        $carDetail->deposit_required = $request->deposit_required;

        // Save the updated car detail
        $carDetail->save();

        // Redirect back to a relevant page with a success message

        return redirect()->route('admin.car.index', ['id' => $carDetail->car->category_id])->with('success', 'Car created successfully.');
    }

    public function engineTranmission($id)
    {

        // Tìm kiếm thông tin động cơ của chiếc xe với ID tương ứng
        $carDetail = CarDetail::find($id); // Tìm chiếc xe theo ID

        $car = $carDetail->car;

        $engineDetail = EngineTransmission::with('carDetail')->where('detail_id', $carDetail->id)->first(); // Lấy chi tiết động cơ của chiếc xe

        // Kiểm tra nếu không tìm thấy chi tiết động cơ
        if (!$engineDetail) {
            return redirect()->back()->withErrors('EngineTransmission not found.');
        }

        // Trả về view với các dữ liệu cần thiết
        return view('admins.engineTranmission', compact('engineDetail', 'carDetail', 'car'));
    }

    public function engineTranmissionEdit($id)
    {

        // Tìm kiếm thông tin động cơ của chiếc xe với ID tương ứng


        $engineTransmission = EngineTransmission::find($id);
        // Kiểm tra nếu không tìm thấy chi tiết động cơ
        if (!$engineTransmission) {
            return redirect()->back()->withErrors('EngineTransmission not found.');
        }

        // Trả về view với các dữ liệu cần thiết
        return view('admins.engineTranmission_edit', compact('engineTransmission'));
    }

    public function updateEngineTransmission(Request $request, $id)
    {

        $request->validate([
            'type_engine' => 'required|string|max:255',
            'fuel_system' => 'required|string|max:255',
            'cylinder_capacity' => 'required|numeric',
            'max_power' => 'required|numeric',
            'max_torque' => 'required|numeric',
            'transmission' => 'required|string|max:255',
            'sport_mode' => 'required|boolean',
            'GVC_system' => 'required|boolean',
            'iStop' => 'required|boolean'
        ]);

        // Tìm đối tượng EngineTransmission dựa vào $id, nếu không tìm thấy thì trả về lỗi 404
        $engineTransmission = EngineTransmission::findOrFail($id);
        $carDetail = $engineTransmission->carDetail;
        $car = $carDetail->car;
        // Gán giá trị từ request vào các thuộc tính của đối tượng
        $engineTransmission->type_engine = $request->type_engine;
        $engineTransmission->fuel_system = $request->fuel_system;
        $engineTransmission->cylinder_capacity = $request->cylinder_capacity;
        $engineTransmission->max_power = $request->max_power;
        $engineTransmission->max_torque = $request->max_torque;
        $engineTransmission->transmission = $request->transmission;
        $engineTransmission->sport_mode = $request->sport_mode;
        $engineTransmission->GVC_system = $request->GVC_system;
        $engineTransmission->iStop = $request->iStop;

        // Lưu các thay đổi vào cơ sở dữ liệu
        $engineTransmission->save();

        // Điều hướng về trang danh sách hoặc chi tiết với thông báo thành công
        return redirect()->route('admin.car.engineTranmisstion', ['id' => $carDetail->id, 'car' => $car->id])->with('success', 'Engine and Transmission updated successfully.');
    }

    public function chassis($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;

        $chassisDetail = Chassis::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (!$chassisDetail) {
            return redirect()->back()->withErrors('ChassisDetail not found.');
        }
        return view('admins.chassis', compact('chassisDetail', 'carDetail', 'car'));
    }

    public function editChassis($id)
    {
        $chassisDetail = Chassis::find($id);
        return view('admins.chassis_edit', compact('chassisDetail'));
    }

    public function updateChassis(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'front_suspension' => 'required|string|max:255',
            'rear_suspension' => 'required|string|max:255',
            'front_brake' => 'required|string|max:255',
            'rear_brake' => 'required|string|max:255',
            'steering_assistance' => 'required|string|max:255',
            'size_tire' => 'required|string|max:255',
            'wheel_diameter' => 'required|numeric',
        ]);

        // Retrieve the chassis detail or return 404 if not found
        $chassisDetail = Chassis::findOrFail($id);
        $carDetail = $chassisDetail->carDetail; // Assuming each ChassisDetail is linked to a CarDetail
        $car = $carDetail->car; // Assuming CarDetail is linked to a Car

        // Assign request data to chassis detail attributes
        $chassisDetail->front_suspension = $request->front_suspension;
        $chassisDetail->rear_suspension = $request->rear_suspension;
        $chassisDetail->front_brake = $request->front_brake;
        $chassisDetail->rear_brake = $request->rear_brake;
        $chassisDetail->steering_assistance = $request->steering_assistance;
        $chassisDetail->size_tire = $request->size_tire;
        $chassisDetail->wheel_diameter = $request->wheel_diameter;

        // Save the updated chassis detail
        $chassisDetail->save();

        // Redirect to a specific page with a success message
        return redirect()->route('admin.car.chassis', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Chassis details updated successfully.');
    }

    public function exterior($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;

        $exteriorDetail  = Exterior::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (! $exteriorDetail) {
            return redirect()->back()->withErrors('ChassisDetail not found.');
        }
        return view('admins.exterior', compact('exteriorDetail', 'carDetail', 'car'));
    }

    public function editExterior($id)
    {
        $exteriorDetail = Exterior::find($id);
        return view('admins.exterior_edit', compact('exteriorDetail'));
    }

    public function updateExterior(Request $request, $id)
    {
        // 1. Xác nhận dữ liệu từ form
        $validatedData = $request->validate([
            'detail_id' => 'required|string|max:255',
            'low_beam' => 'required|string|max:255',
            'high_beam' => 'required|string|max:255',
            'LED_light_day' => 'required|boolean',
            'auto_headlights' => 'required|boolean',
            'auto_leveling' => 'required|boolean',
            'power_mirror' => 'required|boolean',
            'auto_folding' => 'required|boolean',
            'auto_wipers' => 'required|boolean',
            'rear_LED_light' => 'required|boolean',
            'sunroof' => 'required|boolean',
            'double_exhaust' => 'required|boolean',
        ]);

        // 2. Tìm và cập nhật bản ghi ExteriorDetail
        $exteriorDetail = Exterior::findOrFail($id);
        $carDetail = $exteriorDetail->carDetail; // Assuming each ChassisDetail is linked to a CarDetail
        $car = $carDetail->car;

        $exteriorDetail->detail_id = $validatedData['detail_id'];
        $exteriorDetail->low_beam = $validatedData['low_beam'];
        $exteriorDetail->high_beam = $validatedData['high_beam'];
        $exteriorDetail->LED_light_day = $validatedData['LED_light_day'];
        $exteriorDetail->auto_headlights = $validatedData['auto_headlights'];
        $exteriorDetail->auto_leveling = $validatedData['auto_leveling'];
        $exteriorDetail->power_mirror = $validatedData['power_mirror'];
        $exteriorDetail->auto_folding = $validatedData['auto_folding'];
        $exteriorDetail->auto_wipers = $validatedData['auto_wipers'];
        $exteriorDetail->rear_LED_light = $validatedData['rear_LED_light'];
        $exteriorDetail->sunroof = $validatedData['sunroof'];
        $exteriorDetail->double_exhaust = $validatedData['double_exhaust'];

        // 3. Lưu thay đổi
        $exteriorDetail->save();

        return redirect()->route('admin.car.exterior', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Chassis details updated successfully.');
    }

    public function interior($id)
    {
        $carDetail = CarDetail::findOrFail($id);
        $car = $carDetail->car;

        $interiorDetail  = Interior::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (! $interiorDetail) {
            return redirect()->back()->withErrors('interiorDetail not found.');
        }
        return view('admins.interior', compact('interiorDetail', 'carDetail', 'car'));
    }

    public function editInterior($id)
    {
        $interiorDetail = Interior::find($id);
        return view('admins.interior_edit', compact('interiorDetail'));
    }

    public function updateInterior(Request $request, $id)
    {

        // Retrieve the interior detail record or return 404 if not found


        $interiorDetail = Interior::find($id);

        $carDetail = $interiorDetail->carDetail; // Assuming each InteriorDetail is linked to a CarDetail
        $car = $carDetail->car; // Assuming CarDetail is linked to a Car

        // Assign request data to interior detail attributes
        $interiorDetail->seat_material = $request->seat_material;
        $interiorDetail->driver_seat_electric = $request->has('driver_seat_electric');
        $interiorDetail->driver_seat_memory = $request->has('driver_seat_memory');
        $interiorDetail->passenger_seat_electric = $request->has('passenger_seat_electric');
        $interiorDetail->dvd_player = $request->has('dvd_player');
        $interiorDetail->touchscreen = $request->touchscreen;
        $interiorDetail->speaker = $request->speaker;
        $interiorDetail->electric_parking_brake = $request->has('electric_parking_brake');
        $interiorDetail->auto_hold = $request->has('auto_hold');
        $interiorDetail->button_engine_start = $request->has('button_engine_start');
        $interiorDetail->cruise_control = $request->has('cruise_control');
        $interiorDetail->automatic_climate_control = $request->automatic_climate_control;
        $interiorDetail->rear_air_vents = $request->has('rear_air_vents');
        $interiorDetail->electric_windows = $request->has('electric_windows');
        $interiorDetail->auto_dimming_mirror = $request->has('auto_dimming_mirror');
        $interiorDetail->hud = $request->has('hud');
        $interiorDetail->sunshades_center = $request->has('sunshades_center');
        $interiorDetail->sunshades_window_2nd_row = $request->has('sunshades_window_2nd_row');
        $interiorDetail->rear_armrest = $request->has('rear_armrest');
        $interiorDetail->rear_armrest_usb = $request->has('rear_armrest_usb');
        $interiorDetail->rear_seats_fold_60_40 = $request->has('rear_seats_fold_60_40');

        // Save the updated interior detail
        $interiorDetail->save();

        // Redirect to a specific page with a success message
        return redirect()->route('admin.car.interior', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Interior details updated successfully.');
    }



    public function safety($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;

        $safetyDetail  = safety::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (! $safetyDetail) {
            return redirect()->back()->withErrors('safetyDetail not found.');
        }
        return view('admins.safety', compact('safetyDetail', 'carDetail', 'car'));
    }

    public function editSafety($id)
    {
        $safety = Safety::find($id);
        return view("admins.safety_edit", compact('safety'));
    }

    public function updateSafety(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'detail_id' => 'required|string|max:255',
            'air_bag' => 'required|boolean',
            'abs' => 'required|boolean',
            'ebd' => 'required|boolean',
            'eba' => 'required|boolean',
            'ess' => 'required|boolean',
            'dsc' => 'required|boolean',
            'tcs' => 'required|boolean',
            'hla' => 'required|boolean',
            'immobilizer' => 'required|boolean',
            'burgler_alarm' => 'required|boolean',
            'rear_camera' => 'required|boolean',
            'front_sensor' => 'required|boolean',
            'rear_sensor' => 'required|boolean',
            'camera360' => 'required|boolean',
            'seatbelt_warning' => 'required|boolean',
        ]);

        // Find the safety record to update
        $safety = Safety::findOrFail($id);
        $carDetail = $safety->carDetail;
        $car = $carDetail->car;

        // Update the safety record with validated data
        $safety->detail_id = $validatedData['detail_id'];
        $safety->air_bag = $validatedData['air_bag'];
        $safety->abs = $validatedData['abs'];
        $safety->ebd = $validatedData['ebd'];
        $safety->eba = $validatedData['eba'];
        $safety->ess = $validatedData['ess'];
        $safety->dsc = $validatedData['dsc'];
        $safety->tcs = $validatedData['tcs'];
        $safety->hla = $validatedData['hla'];
        $safety->immobilizer = $validatedData['immobilizer'];
        $safety->burgler_alarm = $validatedData['burgler_alarm'];
        $safety->rear_camera = $validatedData['rear_camera'];
        $safety->front_sensor = $validatedData['front_sensor'];
        $safety->rear_sensor = $validatedData['rear_sensor'];
        $safety->camera360 = $validatedData['camera360'];
        $safety->seatbelt_warning = $validatedData['seatbelt_warning'];

        // Save the updated safety record
        $safety->save();

        // Redirect with success message
        return redirect()->route('admin.car.safety', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Safety details updated successfully.');
    }




    public function fuelConsumtion($id)
    {
        $carDetail = CarDetail::find($id);
        $car = $carDetail->car;

        $fuelConsumption  = FuelConsumption::with('carDetail')->where('detail_id', $carDetail->id)->first();

        if (! $fuelConsumption) {
            return redirect()->back()->withErrors('fuelConsumption not found.');
        }
        return view('admins.fuelConsumption', compact('fuelConsumption', 'carDetail', 'car'));
    }

    public function editfuelConsumtion($id)
    {
        $fuelConsumption = FuelConsumption::find($id);
        return view('admins.fuelConsumption_edit', compact('fuelConsumption'));
    }

    public function updateFuelConsumption(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'detail_id' => 'required|string|max:255',
            'city_consumption' => 'required|numeric|min:0',
            'hightway_consumption' => 'required|numeric|min:0',
            'total_consumption' => 'required|numeric|min:0',
        ]);

        // Find the FuelConsumption record by ID
        $fuelConsumption = FuelConsumption::findOrFail($id);

        // Get related CarDetail and Car for redirection
        $carDetail = $fuelConsumption->carDetail;
        $car = $carDetail->car;

        // Update the FuelConsumption fields with validated data
        $fuelConsumption->detail_id = $validatedData['detail_id'];
        $fuelConsumption->city_consumption = $validatedData['city_consumption'];
        $fuelConsumption->hightway_consumption = $validatedData['hightway_consumption'];
        $fuelConsumption->total_consumption = $validatedData['total_consumption'];

        // Save the changes
        $fuelConsumption->save();

        // Redirect to the FuelConsumption list or detail page with a success message
        return redirect()->route('admin.car.fuelConsumtion', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Fuel Consumption details updated successfully.');
    }

    public function iActivsense($id)
    {
        // Tìm thông tin chi tiết xe dựa vào ID
        $carDetail = CarDetail::find($id);

        // Kiểm tra nếu không tìm thấy `CarDetail`, trả về thông báo lỗi
        if (!$carDetail) {
            return redirect()->back()->withErrors('Car Detail not found.');
        }

        // Lấy thông tin chi tiết iActivesense theo `detail_id`
        $iActivesense = IActivsense::with('carDetail')->where('detail_id', $carDetail->id)->first();

        // Kiểm tra nếu không tìm thấy chi tiết iActivesense, trả về thông báo lỗi
        if (!$iActivesense) {
            return redirect()->back()->withErrors('iActivesense detail not found.');
        }

        // Lấy thông tin của xe tương ứng
        $car = $carDetail->car;

        // Trả về view và truyền các biến cần thiết
        return view('admins.iActivsense', compact('iActivesense', 'carDetail', 'car'));
    }


    public function editIactivense($id)
    {
        $iActivesense = iActivsense::findOrFail($id); // Ensure you fetch the correct model instance
        return view('admins.iActivsense_edit', compact('iActivesense'));
    }

    public function updateIactivense(Request $request, $id)
    {

        // Xác thực dữ liệu
        $validatedData = $request->validate([
            'detail_id' => 'required|string|max:255',
            'afs' => 'required|boolean',
            'hbc' => 'required|boolean',
            'alh' => 'required|boolean',
            'rcta' => 'required|boolean',
            'ldw' => 'required|boolean',
            'las' => 'required|boolean',
            'city_brake_support_front' => 'required|boolean',
            'city_brake_support_rear' => 'required|boolean',
            'sbs' => 'required|boolean',
            'mrcc' => 'required|boolean',
            'daa' => 'required|boolean',
            'bsm' => 'required|boolean',
        ]);


        // Tìm iActivesense cần cập nhật
        $iActivesense
            = IActivsense::findOrFail($id);
        $carDetail = $iActivesense->carDetail;
        $car = $carDetail->car;
        // Cập nhật dữ liệu từ form
        $iActivesense->detail_id = $validatedData['detail_id'];
        $iActivesense->afs = $validatedData['afs'];
        $iActivesense->hbc = $validatedData['hbc'];
        $iActivesense->alh = $validatedData['alh'];
        $iActivesense->rcta = $validatedData['rcta'];
        $iActivesense->ldw = $validatedData['ldw'];
        $iActivesense->las = $validatedData['las'];
        $iActivesense->city_brake_support_front = $validatedData['city_brake_support_front'];
        $iActivesense->city_brake_support_rear = $validatedData['city_brake_support_rear'];
        $iActivesense->sbs = $validatedData['sbs'];
        $iActivesense->mrcc = $validatedData['mrcc'];
        $iActivesense->daa = $validatedData['daa'];
        $iActivesense->bsm = $validatedData['bsm'];

        // Lưu thay đổi 
        $iActivesense->save();

        // Trả về thông báo thành công
        return redirect()->route('admin.car.iActivsense', ['id' => $carDetail->id, 'car' => $car->id])
            ->with('success', 'Interior details updated successfully.');
    }


    private function uploadImage($file)
    {
        $filename = 'image_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/cars'), $filename);
        return $filename;
    }

    private function removeImage($filename)
    {
        $imagePath = public_path('images/cars' . $filename);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // KHAI BÁO MỤC "GIỚI THIỆU CỦA XE"
    public function introduce_design()
    {
        return view('introduce_design');
    }

    public function introduce_creative()
    {
        return view('introduce_creative');
    }

    public function introduce_iActivsense()
    {
        return view('introduce_iActivsense');
    }


}
