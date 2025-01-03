@extends('layouts.admin')

@section('title', 'iActivesense Details')

@section('content')
@auth

@include('layouts.header_adminDetails')

<br><br><br><br><br>

<!-- KHỐI HIỂN THỊ THÔNG TIN iACTIVESENSE -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            iActivesense
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Detail ID -->
                <!-- <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Detail ID</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->detail_id }}</td>
                </tr> -->
                <!-- Adaptive Front-Lighting System (AFS) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hệ thống mở rộng góc chiếu đèn trước theo hướng đánh lái AFS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->afs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- High Beam Control (HBC) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hệ thống tự động điều chỉnh chế độ đèn chiếu xa HBC</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->hbc ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Adaptive LED Headlights (ALH) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hệ thống đèn thích ứng thông minh ALH </td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->alh ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Rear Cross Traffic Alert (RCTA) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cảnh báo phương tiện cắt ngang khi lùi RCTA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->rcta ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Lane Departure Warning (LDW) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cảnh báo chệch làn LDW</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->ldw ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Lane-keep Assist System (LAS) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hỗ trợ giữ làn LAS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->las ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Smart City Brake Support - Front -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hỗ trợ phanh thông minh trong thành phố (phía trước)</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->city_brake_support_front ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Smart City Brake Support - Rear -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hỗ trợ phanh thông minh trong thành phố (phía sau)</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->city_brake_support_rear ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Smart Brake Support (SBS) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hỗ trợ phanh thông minh SBS</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->sbs ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Mazda Radar Cruise Control (MRCC) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hệ thống điều khiển hành trình tích hợp radar(MRCC)</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->mrcc ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Driver Attention Alert (DAA) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Hệ thống nhắc nhở người lái tập trung DAA</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->daa ? 'Yes' : 'No' }}</td>
                </tr>
                <!-- Blind Spot Monitoring (BSM) -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Cảnh báo điểm bù BSM</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $iActivesense->bsm ? 'Yes' : 'No' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br><br>

<!-- Edit and Back Buttons -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{route('admin.car.iActivsense.edit',$iActivesense->id)}}"
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