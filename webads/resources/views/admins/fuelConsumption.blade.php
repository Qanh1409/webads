@extends('layouts.admin')

@section('title', 'Fuel Consumption Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN TIÊU THỤ NHIÊN LIỆU -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Fuel Consumption Specifications
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Detail ID -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Detail ID</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $fuelConsumption->detail_id }}</td>
                </tr>
                <!-- City Consumption -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">City Consumption</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $fuelConsumption->city_consumption }} L/100km</td>
                </tr>
                <!-- Highway Consumption -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Highway Consumption</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $fuelConsumption->hightway_consumption }} L/100km</td>
                </tr>
                <!-- Total Consumption -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Total Consumption</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $fuelConsumption->total_consumption }} L/100km</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{route('admin.car.fuelConsumtion.edit',$fuelConsumption->id)}}"
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