@extends('layouts.admin')

@section('title', 'Engine Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- Engine Information Display Section -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Engine Specifications
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Engine Type</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->type_engine }}</td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Fuel System</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->fuel_system }}</td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cylinder Capacity</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->cylinder_capacity }}</td>
                </tr>
                <!-- Row 4 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Max Power</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->max_power }}</td>
                </tr>
                <!-- Row 5 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Max Torque</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->max_torque }}</td>
                </tr>
                <!-- Row 6 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Transmission</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->transmission }}</td>
                </tr>
                <!-- Row 7 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Sport Mode</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->sport_mode }}</td>
                </tr>
                <!-- Row 8 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">GVC System</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->GVC_system }}</td>
                </tr>
                <!-- Row 9 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">i-Stop</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $engineDetail->iStop }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
        Edit
    </a>
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