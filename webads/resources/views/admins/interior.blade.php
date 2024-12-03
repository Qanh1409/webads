@extends('layouts.admin')

@section('title', 'Interior Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg mt-16">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Interior Specifications</h2>

    <table class="w-full border-collapse">
        <tbody>
            @foreach([
            'Seat Material' => $interiorDetail->seat_material,
            'Driver Seat Electric' => $interiorDetail->driver_seat_electric ? 'Yes' : 'No',
            'Driver Seat Memory' => $interiorDetail->driver_seat_memory ? 'Yes' : 'No',
            'Passenger Seat Electric' => $interiorDetail->passenger_seat_electric ? 'Yes' : 'No',
            'DVD Player' => $interiorDetail->dvd_player ? 'Yes' : 'No',
            'Touchscreen' => $interiorDetail->touchscreen,
            'Speaker' => $interiorDetail->speaker,
            'Electric Parking Brake' => $interiorDetail->electric_parking_brake ? 'Yes' : 'No',
            'Auto Hold' => $interiorDetail->auto_hold ? 'Yes' : 'No',
            'Button Engine Start' => $interiorDetail->button_engine_start ? 'Yes' : 'No',
            'Cruise Control' => $interiorDetail->cruise_control ? 'Yes' : 'No',
            'Automatic Climate Control' => $interiorDetail->automatic_climate_control,
            'Rear Air Vents' => $interiorDetail->rear_air_vents ? 'Yes' : 'No',
            'Electric Windows' => $interiorDetail->electric_windows ? 'Yes' : 'No',
            'Auto Dimming Mirror' => $interiorDetail->auto_dimming_mirror ? 'Yes' : 'No',
            'HUD' => $interiorDetail->hud ? 'Yes' : 'No',
            'Sunshades Center' => $interiorDetail->sunshades_center ? 'Yes' : 'No',
            'Sunshades Window 2nd Row' => $interiorDetail->sunshades_window_2nd_row ? 'Yes' : 'No',
            'Rear Armrest' => $interiorDetail->rear_armrest ? 'Yes' : 'No',
            'Rear Armrest USB' => $interiorDetail->rear_armrest_usb ? 'Yes' : 'No',
            'Rear Seats Fold 60/40' => $interiorDetail->rear_seats_fold_60_40 ? 'Yes' : 'No',
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
        Edit
    </a>
    <a href="javascript:window.history.back()"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
        Back
    </a>
</div>

@else
<div class="text-center mt-16">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection