@extends('layouts.admin')

@section('title', 'Edit Chassis Details')

@section('content')
@auth

<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        Thông số kỹ thuật Khung gầm
    </h2>

    <!-- Update Chassis Form -->
    <form action="{{route('admin.car.chassis.update',$chassisDetail->id)}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Detail ID (Read-only) -->


        <!-- Front Suspension -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Hệ thống treo trước</label>
            <input type="text" name="front_suspension" value="{{ old('front_suspension', $chassisDetail->front_suspension) }}" class="border rounded-lg p-2">
        </div>

        <!-- Rear Suspension -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Hệ thống treo sau</label>
            <input type="text" name="rear_suspension" value="{{ old('rear_suspension', $chassisDetail->rear_suspension) }}" class="border rounded-lg p-2">
        </div>

        <!-- Front Brake -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Hệ thống phanh trước</label>
            <input type="text" name="front_brake" value="{{ old('front_brake', $chassisDetail->front_brake) }}" class="border rounded-lg p-2">
        </div>

        <!-- Rear Brake -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Hệ thống phanh sau</label>
            <input type="text" name="rear_brake" value="{{ old('rear_brake', $chassisDetail->rear_brake) }}" class="border rounded-lg p-2">
        </div>

        <!-- Steering Assistance -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Hệ thống trợ lực lái</label>
            <input type="text" name="steering_assistance" value="{{ old('steering_assistance', $chassisDetail->steering_assistance) }}" class="border rounded-lg p-2">
        </div>

        <!-- Size of Tire -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Kích thước lốp xe</label>
            <input type="text" name="size_tire" value="{{ old('size_tire', $chassisDetail->size_tire) }}" class="border rounded-lg p-2">
        </div>

        <!-- Wheel Diameter -->
        <div class="flex flex-col">
            <label class="text-gray-700 font-semibold">Đường kính mâm xe</label>
            <input type="number" name="wheel_diameter" value="{{ old('wheel_diameter', $chassisDetail->wheel_diameter) }}" class="border rounded-lg p-2">
        </div>

        <div class="flex justify-end items-center space-x-4 mb-6 pr-6">
            <!-- Save Button -->
            <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                Lưu thay đổi
            </button>
            <!-- Back Button -->
            <a href="javascript:window.history.back()" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                Quay lại
            </a>
        </div>

    </form>
</div>

<br><br>


@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection