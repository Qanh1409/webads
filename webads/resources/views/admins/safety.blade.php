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
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Detail ID</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->detail_id }}</td>
                </tr>
                <!-- Air Bag -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Air Bag</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->air_bag }}</td>
                </tr>
                <!-- ABS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">ABS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->abs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- EBD -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">EBD</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->ebd ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- EBA -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">EBA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->eba ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- ESS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">ESS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->ess ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- DSC -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">DSC</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->dsc ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- TCS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">TCS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->tcs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- HLA -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">HLA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->hla ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Immobilizer -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Immobilizer</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->immobilizer ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Burgler Alarm -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Burgler Alarm</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->burgler_alarm ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Rear Camera -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Camera</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->rear_camera ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Front Sensor -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Front Sensor</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->front_sensor ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Rear Sensor -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Sensor</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->rear_sensor ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- 360 Camera -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">360 Camera</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->camera360 ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Seatbelt Warning -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Seatbelt Warning</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->seatbelt_warning ? 'Yes' : 'No' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{route('admin.car.safety.edit',$safetyDetail->id)}}"
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