@extends('layouts.admin')

@section('title', 'Chassis Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN KHUNG GẦM -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Chassis Specifications
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Detail ID -->
               
                <!-- Front Suspension -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Front Suspension</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->front_suspension }}</td>
                </tr>
                <!-- Rear Suspension -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Suspension</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->rear_suspension }}</td>
                </tr>
                <!-- Front Brake -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Front Brake</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->front_brake }}</td>
                </tr>
                <!-- Rear Brake -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Brake</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->rear_brake }}</td>
                </tr>
                <!-- Steering Assistance -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Steering Assistance</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->steering_assistance }}</td>
                </tr>
                <!-- Size of Tire -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Size of Tire</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->size_tire }}</td>
                </tr>
                <!-- Wheel Diameter -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Wheel Diameter</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $chassisDetail->wheel_diameter }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{route('admin.car.chassis.edit',$chassisDetail->id)}}"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
        Edit
    </a>
    <a href="javascript:window.history.back()"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
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