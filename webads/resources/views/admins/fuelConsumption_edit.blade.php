@extends('layouts.admin')

@section('title', 'Edit Fuel Consumption')

@section('content')
@auth
<div class="max-w-4xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Edit Fuel Consumption Details</h2>

    <!-- Form to update fuel consumption -->
    <form action="{{ route('admin.car.fuelConsumtion.update', $fuelConsumption->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Detail ID -->
        <div class="mb-4">
            <label for="detail_id" class="block text-gray-700 font-semibold mb-2">Detail ID</label>
            <input type="text" name="detail_id" id="detail_id" value="{{ old('detail_id', $fuelConsumption->detail_id) }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500"
                required>
        </div>

        <!-- City Consumption -->
        <div class="mb-4">
            <label for="city_consumption" class="block text-gray-700 font-semibold mb-2">City Consumption (L/100km)</label>
            <input type="number" name="city_consumption" id="city_consumption" step="0.1"
                value="{{ old('city_consumption', $fuelConsumption->city_consumption) }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500"
                required>
        </div>

        <!-- Highway Consumption -->
        <div class="mb-4">
            <label for="hightway_consumption" class="block text-gray-700 font-semibold mb-2">Highway Consumption (L/100km)</label>
            <input type="number" name="hightway_consumption" id="hightway_consumption" step="0.1"
                value="{{ old('hightway_consumption', $fuelConsumption->hightway_consumption) }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500"
                required>
        </div>

        <!-- Total Consumption -->
        <div class="mb-4">
            <label for="total_consumption" class="block text-gray-700 font-semibold mb-2">Total Consumption (L/100km)</label>
            <input type="number" name="total_consumption" id="total_consumption" step="0.1"
                value="{{ old('total_consumption', $fuelConsumption->total_consumption) }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500"
                required>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">
                Update
            </button>
        </div>
    </form>
</div>
@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection