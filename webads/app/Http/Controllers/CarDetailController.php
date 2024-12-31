<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarDetail;
use App\Models\Category;
use App\Models\Chassis;
use App\Models\EngineTransmission;
use App\Models\Exterior;
use App\Models\FuelConsumption;
use App\Models\Interior;
use App\Models\Safety;
use App\Models\IActivsense;

class CarDetailController extends Controller
{
    //

    public function show($id)
    {
        $categories = Category::all(); // Lấy tất cả danh mục
        $carDetail = CarDetail::where('car_id', $id)->first(); // Lấy thông tin car_detail với car_id = $id

        if (!$carDetail) {
            // Xử lý trường hợp không tìm thấy chi tiết xe
            return redirect()->back()->with('error', 'Không tìm thấy thông tin chi tiết xe.');
        }

        return view('car_detail', compact('categories', 'carDetail'));
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
}
