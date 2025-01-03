@extends('layouts.admin')

@section('title', 'Edit Exterior Details')

@section('content')
@auth

<br><br><br><br><br>

<!-- KHỐI FORM CẬP NHẬT NGOẠI THẤT -->
<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Chỉnh sửa Ngoại thất
        </h2>

        <!-- Form bắt đầu -->
        <form action="{{route('admin.car.exterior.update',$exteriorDetail->id)}}" method="POST">
            @csrf
            @method('PUT')

            <!-- Detail ID -->
            <!-- <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="detail_id">Detail ID</label>
                <input type="text" id="detail_id" name="detail_id" value="{{ $exteriorDetail->detail_id }}"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div> -->

            <!-- Low Beam -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="low_beam">Đèn chiếu gần</label>
                <input type="text" id="low_beam" name="low_beam" value="{{ $exteriorDetail->low_beam }}"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- High Beam -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="high_beam">Đèn chiếu xa</label>
                <input type="text" id="high_beam" name="high_beam" value="{{ $exteriorDetail->high_beam }}"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <!-- LED Daylight -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="LED_light_day">Đèn LED ban ngày</label>
                <select id="LED_light_day" name="LED_light_day" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->LED_light_day ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->LED_light_day ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Auto Headlights -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="auto_headlights">Đèn tự động Bật/Tắt</label>
                <select id="auto_headlights" name="auto_headlights" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->auto_headlights ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->auto_headlights ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Auto Leveling -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="auto_leveling">Đèn trước tự động cân bằng góc chiếu</label>
                <select id="auto_leveling" name="auto_leveling" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->auto_leveling ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->auto_leveling ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Power Mirror -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="power_mirror">Gương chỉnh điện</label>
                <select id="power_mirror" name="power_mirror" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->power_mirror ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->power_mirror ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Auto Folding Mirrors -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="auto_folding">Gương gập điện</label>
                <select id="auto_folding" name="auto_folding" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->auto_folding ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->auto_folding ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Auto Wipers -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="auto_wipers">Gạt mưa tự động</label>
                <select id="auto_wipers" name="auto_wipers" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->auto_wipers ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->auto_wipers ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Rear LED Light -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="rear_LED_light">Đèn sau dạng LED</label>
                <select id="rear_LED_light" name="rear_LED_light" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->rear_LED_light ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->rear_LED_light ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Sunroof -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="sunroof">Cửa sổ trời</label>
                <select id="sunroof" name="sunroof" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->sunroof ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->sunroof ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Double Exhaust -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="double_exhaust">Ống xả kép</label>
                <select id="double_exhaust" name="double_exhaust" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="1" {{ $exteriorDetail->double_exhaust ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$exteriorDetail->double_exhaust ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Submit and Back Buttons in the same row -->
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

<br><br>

@else
<div class="text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection