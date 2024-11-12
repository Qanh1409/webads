@extends('layouts.admin')

@section('title', 'Interior Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        Interior Specifications
    </h2>

    <table class="w-full border-collapse">
        <tbody>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Seat Material</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->seat_material }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Driver Seat Electric</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->driverSeat_Electric ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Driver Seat Memory</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->driverSeat_Memory ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Passenger Seat Electric</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->passengerSeat_Electric ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">DCV Player</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->DCV_player ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Touchscreen</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->touchscreen }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Speaker</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->speaker }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Brake Hand Electric</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->brakeHand_electric ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Auto Hold</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->autoHold ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Button Engine Start</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->Buton_engine ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cruise Control</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->cruise_control ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Auto Climate</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->auto_climate }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Rear Air Vents</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->rear_airvents ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Electric Window</td>
                <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $interior->window_electric ? 'Yes' : 'No' }}</td>
            </tr>
            <!-- Add more fields as needed -->
        </tbody>
    </table>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href=""
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