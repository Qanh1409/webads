@extends('layouts.admin')

@section('title', 'Car Details')

@section('content')
@auth

@include('layouts.header_adminDetails')
<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN CHI TIẾT -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Car Specifications
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Size</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->size }}</td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Wheelbase</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->wheelbase }}</td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Turning Radius</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->turning_radius }}</td>
                </tr>
                <!-- Row 4 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Ground Clearance</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->ground_clearance }}</td>
                </tr>
                <!-- Row 5 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Curb Weight</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->curb_weight }}</td>
                </tr>
                <!-- Row 6 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Gross Weight</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->gross_weight }}</td>
                </tr>
                <!-- Row 7 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cargo Volume</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->cargo_volume }}</td>
                </tr>
                <!-- Row 8 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Fuel Tank Capacity</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->fuel_tank_capacity }}</td>
                </tr>
                <!-- Row 9 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Deposit Required</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->deposit_required }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>

<!-- Edit Button -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{ route('admin.carDetail.edit', $carDetail->id) }}" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
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