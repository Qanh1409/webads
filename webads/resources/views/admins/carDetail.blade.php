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
            Kích thước khối lượng
        </h2>

        <table class="w-full border-collapse">
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Kích thước tổng thể</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->size }}</td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Chiều dài cơ sở</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->wheelbase }}</td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Bán kính quay vòng tối thiểu</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->turning_radius }}</td>
                </tr>
                <!-- Row 4 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Khoảng sáng gầm xe</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->ground_clearance }}</td>
                </tr>
                <!-- Row 5 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Khối lượng không tải</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->curb_weight }}</td>
                </tr>
                <!-- Row 6 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Khối lượng toàn tải</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->gross_weight }}</td>
                </tr>
                <!-- Row 7 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Dung tích khoang hành lý</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->cargo_volume }}</td>
                </tr>
                <!-- Row 8 -->
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Dung tích bình nhiên liệu</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->fuel_tank_capacity }}</td>
                </tr>
                <!-- Row 9 -->
                <!-- <tr>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-700 font-semibold">Deposit Required</td>
                    <td class="py-3 px-6 border-b border-gray-300 text-gray-600">{{ $carDetail->deposit_required }}</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
<br><br>

<!-- Edit Button -->
<div class="flex justify-end mb-6 pr-6">
    <a href="{{ route('admin.carDetail.edit', $carDetail->id) }}" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out mr-2">
        Chỉnh sửa
    </a>
    <a href="javascript:window.history.back()" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
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