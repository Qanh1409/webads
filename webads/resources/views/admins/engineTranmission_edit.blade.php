@extends('layouts.admin')

@section('title', 'Edit Engine & Transmission')

@section('content')
@auth



<!-- FORM CHỈNH SỬA ENGINE & TRANSMISSION -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        Edit Engine & Transmission
    </h2>
    <!--   -->
    <form action="{{route('admin.engine_transmission.update', ['id' => $engineTransmission->id])}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Detail ID -->
       

        <!-- Type Engine -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Type Engine</label>
            <input type="text" name="type_engine" value="{{ old('type_engine', $engineTransmission->type_engine) }}" class="border rounded-lg p-2">
        </div>

        <!-- Fuel System -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Fuel System</label>
            <input type="text" name="fuel_system" value="{{ old('fuel_system', $engineTransmission->fuel_system) }}" class="border rounded-lg p-2">
        </div>

        <!-- Cylinder Capacity -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Cylinder Capacity (cc)</label>
            <input type="number" name="cylinder_capacity" value="{{ old('cylinder_capacity', $engineTransmission->cylinder_capacity) }}" class="border rounded-lg p-2">
        </div>

        <!-- Max Power -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Max Power (HP)</label>
            <input type="number" name="max_power" value="{{ old('max_power', $engineTransmission->max_power) }}" class="border rounded-lg p-2">
        </div>

        <!-- Max Torque -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Max Torque (Nm)</label>
            <input type="number" name="max_torque" value="{{ old('max_torque', $engineTransmission->max_torque) }}" class="border rounded-lg p-2">
        </div>

        <!-- Transmission -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Transmission</label>
            <input type="text" name="transmission" value="{{ old('transmission', $engineTransmission->transmission) }}" class="border rounded-lg p-2">
        </div>

        <!-- Sport Mode -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Sport Mode</label>
            <select name="sport_mode" class="border rounded-lg p-2">
                <option value="1" {{ old('sport_mode', $engineTransmission->sport_mode) ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !old('sport_mode', $engineTransmission->sport_mode) ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <!-- GVC System -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">GVC System</label>
            <select name="GVC_system" class="border rounded-lg p-2">
                <option value="1" {{ old('GVC_system', $engineTransmission->GVC_system) ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !old('GVC_system', $engineTransmission->GVC_system) ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <!-- iStop -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">iStop</label>
            <select name="iStop" class="border rounded-lg p-2">
                <option value="1" {{ old('iStop', $engineTransmission->iStop) ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !old('iStop', $engineTransmission->iStop) ? 'selected' : '' }}>No</option>
            </select>
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