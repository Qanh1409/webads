@extends('layouts.admin')

@section('title', 'Update iActivesense Details')

@section('content')
@auth


<br><br><br><br><br>

<!-- FORM CẬP NHẬT iACTIVESENSE -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Cập nhật iActivesense
        </h2>

        <form action="{{route('admin.car.iActivsense.update',$iActivesense->id)}}" method="POST">
            @csrf
            @method('PUT')

            <!-- Detail ID -->
            <!-- <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Detail ID</label>
                <input type="text" name="detail_id" value="{{ old('detail_id', $iActivesense->detail_id) }}"
                    class="w-full px-4 py-2 border rounded-lg" required>
            </div> -->

            <!-- Adaptive Front-Lighting System (AFS) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống mở rộng góc chiếu đèn trước theo hướng đánh lái AFS</label>
                <select name="afs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->afs ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->afs ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- High Beam Control (HBC) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống tự động điều chỉnh chế độ đèn chiếu xa HBC</label>
                <select name="hbc" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->hbc ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->hbc ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Adaptive LED Headlights (ALH) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống đèn thích ứng thông minh ALH</label>
                <select name="alh" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->alh ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->alh ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Rear Cross Traffic Alert (RCTA) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảnh báo phương tiện cắt ngang khi lùi RCTA</label>
                <select name="rcta" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->rcta ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->rcta ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Lane Departure Warning (LDW) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảnh báo chệch làn LDW</label>
                <select name="ldw" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->ldw ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->ldw ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Lane-keep Assist System (LAS) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ giữ làn LAS</label>
                <select name="las" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->las ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->las ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Smart City Brake Support - Front -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ phanh thông minh trong thành phố (phía trước)</label>
                <select name="city_brake_support_front" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->city_brake_support_front ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->city_brake_support_front ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Smart City Brake Support - Rear -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ phanh thông minh trong thành phố (phía sau)</label>
                <select name="city_brake_support_rear" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->city_brake_support_rear ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->city_brake_support_rear ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Smart Brake Support (SBS) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ phanh thông minh SBS</label>
                <select name="sbs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->sbs ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->sbs ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Mazda Radar Cruise Control (MRCC) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống điều khiển hành trình tích hợp radar MRCC</label>
                <select name="mrcc" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->mrcc ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->mrcc ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Driver Attention Alert (DAA) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống nhắc nhở người lái tập trung DAA</label>
                <select name="daa" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->daa ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->daa ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Blind Spot Monitoring (BSM) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống cảnh báo điểm mù BSM</label>
                <select name="bsm" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $iActivesense->bsm ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$iActivesense->bsm ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Submit and Back Buttons -->
            <div class="flex justify-end space-x-4">
                <!-- Cập nhật Button -->
                <button type="submit"
                    class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                    Cập nhật
                </button>

                <!-- Quay lại Button -->
                <a href="javascript:window.history.back()"
                    class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                    Quay lại
                </a>
            </div>


        </form>
    </div>
</div>

@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection