@extends('layouts.admin')

@section('title', 'Safety Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN AN TOÀN -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Safety Features
        </h2>

        @if ($safetyDetail && $safetyDetail->safety)
        <table class="w-full border-collapse">
            <tbody>
                <!-- Air Bag -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Air Bag</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->air_bag ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- ABS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">ABS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->abs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- EBD -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">EBD</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->ebd ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- EBA -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">EBA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->eba ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- ESS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">ESS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->ess ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- DSC -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">DSC</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->dsc ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- TCS -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">TCS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->tcs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- HLA -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">HLA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->hla ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Immobilizer -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Immobilizer</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->immobilizer ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Burglar Alarm -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Burglar Alarm</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->burgler_alarm ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Rear Camera -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Camera</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->rear_camera ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Front Sensor -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Front Sensor</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->front_sensor ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Rear Sensor -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Sensor</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->rear_sensor ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Camera 360 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Camera 360</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->camera360 ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Seatbelt Warning -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Seatbelt Warning</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $safetyDetail->safety->seatbelt_warning ? 'Yes' : 'No' }}</td>
                </tr>
            </tbody>
        </table>
        @else
        <div class="text-center text-red-500">
            <p>No safety features available for this car.</p>
        </div>
        @endif
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