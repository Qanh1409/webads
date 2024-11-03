@extends('layouts.admin')

@section('title', 'Edit Car Detail')

@section('content')
<div class="container mx-auto mt-10 p-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Edit Car Detail</h2>

    <!-- Form chỉnh sửa Car Detail -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.carDetail.update', ['carId' => $carDetail->car_id, 'id' => $carDetail->id]) }}" method="POST">
            @csrf
            @method('PUT')



            <!-- Size -->
            <div class="mb-4">
                <label for="size" class="block text-gray-700 text-sm font-bold mb-2">Size</label>
                <input type="text" name="size" id="size" value="{{ $carDetail->size }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Wheelbase -->
            <div class="mb-4">
                <label for="wheelbase" class="block text-gray-700 text-sm font-bold mb-2">Wheelbase</label>
                <input type="text" name="wheelbase" id="wheelbase" value="{{ $carDetail->wheelbase }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Turning Radius -->
            <div class="mb-4">
                <label for="turning_radius" class="block text-gray-700 text-sm font-bold mb-2">Turning Radius</label>
                <input type="text" name="turning_radius" id="turning_radius" value="{{ $carDetail->turning_radius }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Ground Clearance -->
            <div class="mb-4">
                <label for="ground_clearance" class="block text-gray-700 text-sm font-bold mb-2">Ground Clearance</label>
                <input type="text" name="ground_clearance" id="ground_clearance" value="{{ $carDetail->ground_clearance }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Curb Weight -->
            <div class="mb-4">
                <label for="curb_weight" class="block text-gray-700 text-sm font-bold mb-2">Curb Weight</label>
                <input type="text" name="curb_weight" id="curb_weight" value="{{ $carDetail->curb_weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Gross Weight -->
            <div class="mb-4">
                <label for="gross_weight" class="block text-gray-700 text-sm font-bold mb-2">Gross Weight</label>
                <input type="text" name="gross_weight" id="gross_weight" value="{{ $carDetail->gross_weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Cargo Volume -->
            <div class="mb-4">
                <label for="cargo_volume" class="block text-gray-700 text-sm font-bold mb-2">Cargo Volume</label>
                <input type="number" name="cargo_volume" id="cargo_volume" value="{{ $carDetail->cargo_volume }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Fuel Tank Capacity -->
            <div class="mb-4">
                <label for="fuel_tank_capacity" class="block text-gray-700 text-sm font-bold mb-2">Fuel Tank Capacity</label>
                <input type="number" name="fuel_tank_capacity" id="fuel_tank_capacity" value="{{ $carDetail->fuel_tank_capacity }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Deposit Required -->
            <div class="mb-4">
                <label for="deposit_required" class="block text-gray-700 text-sm font-bold mb-2">Deposit Required</label>
                <input type="text" name="deposit_required" id="deposit_required" value="{{ $carDetail->deposit_required }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Save Changes
                </button>
                <a href="" class="text-blue-500 hover:text-blue-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection