@extends('layouts.admin')

@section('title', 'Interior Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg mt-16"><br><br><br>
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Nội thất</h2>

    <table class="w-full border-collapse">
        <tbody>
            @foreach([
            'Ghế da' => $interiorDetail->seat_material,
            'Ghế lái chỉnh điện' => $interiorDetail->driver_seat_electric ? 'Yes' : 'No',
            'Nhớ ghế vị trí lái' => $interiorDetail->driver_seat_memory ? 'Yes' : 'No',
            'Ghế bên phải chỉnh điện ' => $interiorDetail->passenger_seat_electric ? 'Yes' : 'No',
            'Đầu DVD' => $interiorDetail->dvd_player ? 'Yes' : 'No',
            'Màn hình cảm ứng' => $interiorDetail->touchscreen,
            'Loa' => $interiorDetail->speaker,
            'Phanh tay điện tử' => $interiorDetail->electric_parking_brake ? 'Yes' : 'No',
            'Auto Hold' => $interiorDetail->auto_hold ? 'Yes' : 'No',
            'Khởi động bằng nút bấm' => $interiorDetail->button_engine_start ? 'Yes' : 'No',
            'Ga tự động' => $interiorDetail->cruise_control ? 'Yes' : 'No',
            'Điều hòa tự động' => $interiorDetail->automatic_climate_control,
            'Cửa gió hàng ghế sau' => $interiorDetail->rear_air_vents ? 'Yes' : 'No',
            'Cửa sổ chỉnh điện' => $interiorDetail->electric_windows ? 'Yes' : 'No',
            'Gương chiếu hậu trung tâm chống chói tự động' => $interiorDetail->auto_dimming_mirror ? 'Yes' : 'No',
            'Màn hình hiển thị tốc độ HUD' => $interiorDetail->hud ? 'Yes' : 'No',
            'Rèm che kính trung tâm phía sau' => $interiorDetail->sunshades_center ? 'Yes' : 'No',
            'Rèm che nắng kính sau chỉnh điện' => $interiorDetail->sunshades_window_2nd_row ? 'Yes' : 'No',
            'Tựa tay hàng ghế sau' => $interiorDetail->rear_armrest ? 'Yes' : 'No',
            'Tựa tay ghế sau tích hợp cổng USB' => $interiorDetail->rear_armrest_usb ? 'Yes' : 'No',
            'Hàng ghế thứ hai gập theo tỉ lệ 60:40' => $interiorDetail->rear_seats_fold_60_40 ? 'Yes' : 'No',
            ] as $label => $value)
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">{{ $label }}</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex justify-end mt-6 pr-6">
    <a href="{{ route('admin.car.interior.edit', $interiorDetail->id) }}"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
        Chỉnh sửa
    </a>
    <a href="javascript:window.history.back()"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
        Quay lại
    </a>
</div>
<br><br>

@else
<div class="text-center mt-16">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection