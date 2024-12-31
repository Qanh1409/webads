@extends('layouts.admin')

@section('title', 'Exterior Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN NGOẠI THẤT -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Ngoại thất
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Detail ID -->
                <!-- <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Detail ID</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $exteriorDetail->detail_id }}</td>
                </tr> -->
                <!-- Low Beam -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Đèn chiếu gần</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $exteriorDetail->low_beam }}</td>
                </tr>
                <!-- High Beam -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Đèn chiếu xa</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $exteriorDetail->high_beam }}</td>
                </tr>
                <!-- LED Daylight -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Đèn LED ban ngày</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->LED_light_day)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Auto Headlights -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Đèn tự động Bật/Tắt</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->auto_headlights)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Auto Leveling -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Đèn tự động cân bằng góc chiếu</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->auto_leveling)
                     
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Power Mirror -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Gương chỉnh điện</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">@if($exteriorDetail->power_mirror)
                        Yes
                        @else
                        No
                        @endif </td>
                </tr>
                <!-- Auto Folding Mirrors -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Gương chiếu hậu gập điện/Chỉnh điện</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->auto_folding)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Auto Wipers -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Gạt mưa tự động</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->auto_wipers)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Rear LED Light -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cụm đèn sau LED</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->rear_LED_light)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Sunroof -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cửa sổ trời</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->sunroof)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
                <!-- Double Exhaust -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Ống xả kép</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">
                        @if($exteriorDetail->double_exhaust)
                        Yes
                        @else
                        No
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{route('admin.car.exterior.edit',$exteriorDetail->id)}}"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
        Chỉnh sửa
    </a>
    <a href="javascript:window.history.back()"
        class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
        Quay lại
    </a>
</div>

@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection