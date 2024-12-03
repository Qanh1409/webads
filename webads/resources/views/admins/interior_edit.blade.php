@extends('layouts.admin')

@section('title', 'Edit Interior Details')

@section('content')
@auth

<br><br><br><br><br>
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        Edit Interior Specifications
    </h2>

    <!-- Update Interior Form -->
    <form action="{{route('admin.car.interior.update',$interiorDetail->id)}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Seat Material -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Seat Material</label>
            <input type="text" name="seat_material" value="{{ old('seat_material', $interiorDetail->seat_material) }}" class="border rounded-lg p-2">
        </div>

        <!-- Driver Seat Electric -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Driver Seat Electric</label>
            <input type="checkbox" name="driver_seat_electric" {{ old('driver_seat_electric', $interiorDetail->driver_seat_electric) ? 'checked' : '' }}>
        </div>

        <!-- Driver Seat Memory -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Driver Seat Memory</label>
            <input type="checkbox" name="driver_seat_memory" {{ old('driver_seat_memory', $interiorDetail->driver_seat_memory) ? 'checked' : '' }}>
        </div>

        <!-- Passenger Seat Electric -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Passenger Seat Electric</label>
            <input type="checkbox" name="passenger_seat_electric" {{ old('passenger_seat_electric', $interiorDetail->passenger_seat_electric) ? 'checked' : '' }}>
        </div>

        <!-- DVD Player -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">DVD Player</label>
            <input type="checkbox" name="dvd_player" {{ old('dvd_player', $interiorDetail->dvd_player) ? 'checked' : '' }}>
        </div>

        <!-- Touchscreen -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Touchscreen</label>
            <input type="text" name="touchscreen" value="{{ old('touchscreen', $interiorDetail->touchscreen) }}" class="border rounded-lg p-2">
        </div>

        <!-- Speaker -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Speaker</label>
            <input type="text" name="speaker" value="{{ old('speaker', $interiorDetail->speaker) }}" class="border rounded-lg p-2">
        </div>

        <!-- Electric Parking Brake -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Electric Parking Brake</label>
            <input type="checkbox" name="electric_parking_brake" {{ old('electric_parking_brake', $interiorDetail->electric_parking_brake) ? 'checked' : '' }}>
        </div>

        <!-- Auto Hold -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Auto Hold</label>
            <input type="checkbox" name="auto_hold" {{ old('auto_hold', $interiorDetail->auto_hold) ? 'checked' : '' }}>
        </div>

        <!-- Button Engine Start -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Button Engine Start</label>
            <input type="checkbox" name="button_engine_start" {{ old('button_engine_start', $interiorDetail->button_engine_start) ? 'checked' : '' }}>
        </div>

        <!-- Cruise Control -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Cruise Control</label>
            <input type="checkbox" name="cruise_control" {{ old('cruise_control', $interiorDetail->cruise_control) ? 'checked' : '' }}>
        </div>

        <!-- Automatic Climate Control -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Automatic Climate Control</label>
            <input type="text" name="automatic_climate_control" value="{{ old('automatic_climate_control', $interiorDetail->automatic_climate_control) }}" class="border rounded-lg p-2">
        </div>

        <!-- Rear Air Vents -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Rear Air Vents</label>
            <input type="checkbox" name="rear_air_vents" {{ old('rear_air_vents', $interiorDetail->rear_air_vents) ? 'checked' : '' }}>
        </div>

        <!-- Electric Windows -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Electric Windows</label>
            <input type="checkbox" name="electric_windows" {{ old('electric_windows', $interiorDetail->electric_windows) ? 'checked' : '' }}>
        </div>

        <!-- Auto Dimming Mirror -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Auto Dimming Mirror</label>
            <input type="checkbox" name="auto_dimming_mirror" {{ old('auto_dimming_mirror', $interiorDetail->auto_dimming_mirror) ? 'checked' : '' }}>
        </div>

        <!-- Heads-Up Display (HUD) -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Heads-Up Display (HUD)</label>
            <input type="checkbox" name="hud" {{ old('hud', $interiorDetail->hud) ? 'checked' : '' }}>
        </div>

        <!-- Sunshades Center -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Sunshades Center</label>
            <input type="checkbox" name="sunshades_center" {{ old('sunshades_center', $interiorDetail->sunshades_center) ? 'checked' : '' }}>
        </div>

        <!-- Sunshades Window 2nd Row -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Sunshades Window 2nd Row</label>
            <input type="checkbox" name="sunshades_window_2nd_row" {{ old('sunshades_window_2nd_row', $interiorDetail->sunshades_window_2nd_row) ? 'checked' : '' }}>
        </div>

        <!-- Rear Armrest -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Rear Armrest</label>
            <input type="checkbox" name="rear_armrest" {{ old('rear_armrest', $interiorDetail->rear_armrest) ? 'checked' : '' }}>
        </div>

        <!-- Rear Armrest USB -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Rear Armrest USB</label>
            <input type="checkbox" name="rear_armrest_usb" {{ old('rear_armrest_usb', $interiorDetail->rear_armrest_usb) ? 'checked' : '' }}>
        </div>

        <!-- Rear Seats Fold 60/40 -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Rear Seats Fold 60/40</label>
            <input type="checkbox" name="rear_seats_fold_60_40" {{ old('rear_seats_fold_60_40', $interiorDetail->rear_seats_fold_60_40) ? 'checked' : '' }}>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                Save Changes
            </button>
        </div>
    </form>
</div>

<br><br>

<!-- Back Button -->
<div class="flex justify-end mb-6 pr-6">
    <a href="javascript:window.history.back()" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
        Back
    </a>
</div>

@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection