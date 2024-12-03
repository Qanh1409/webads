@extends('layouts.admin')

@section('title', 'Update Safety Details')

@section('content')
@auth
<br><br><br><br><br>

<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Update Safety Specifications
        </h2>

        <form action="{{ route('admin.car.safety.update', $safety->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Detail ID -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Detail ID</label>
                <input type="text" name="detail_id" value="{{ old('detail_id', $safety->detail_id) }}"
                    class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Air Bag -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Air Bag</label>
                <select name="air_bag" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->air_bag ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->air_bag ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- ABS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Anti-lock Braking System (ABS)</label>
                <select name="abs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->abs ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->abs ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- EBD -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Electronic Brakeforce Distribution (EBD)</label>
                <select name="ebd" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->ebd ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->ebd ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- EBA -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Emergency Brake Assist (EBA)</label>
                <select name="eba" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->eba ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->eba ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- ESS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Emergency Stop Signal (ESS)</label>
                <select name="ess" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->ess ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->ess ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- DSC -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Dynamic Stability Control (DSC)</label>
                <select name="dsc" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->dsc ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->dsc ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- TCS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Traction Control System (TCS)</label>
                <select name="tcs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->tcs ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->tcs ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- HLA -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hill Launch Assist (HLA)</label>
                <select name="hla" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->hla ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->hla ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Immobilizer -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Immobilizer</label>
                <select name="immobilizer" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->immobilizer ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->immobilizer ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Burgler Alarm -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Burgler Alarm</label>
                <select name="burgler_alarm" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->burgler_alarm ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->burgler_alarm ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Rear Camera -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Rear Camera</label>
                <select name="rear_camera" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->rear_camera ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->rear_camera ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Front Sensor -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Front Sensor</label>
                <select name="front_sensor" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->front_sensor ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->front_sensor ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Rear Sensor -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Rear Sensor</label>
                <select name="rear_sensor" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->rear_sensor ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->rear_sensor ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Camera 360 -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Camera 360</label>
                <select name="camera360" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->camera360 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->camera360 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Seatbelt Warning -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Seatbelt Warning</label>
                <select name="seatbelt_warning" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->seatbelt_warning ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$safety->seatbelt_warning ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection