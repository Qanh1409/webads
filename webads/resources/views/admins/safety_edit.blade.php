@extends('layouts.admin')

@section('title', 'Update Safety Details')

@section('content')
@auth
<br><br><br><br><br>

<div class="max-w-5xl mx-auto p-4 bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Chỉnh sửa An toàn
        </h2>

        <form action="{{ route('admin.car.safety.update', $safety->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Detail ID -->
            <!-- <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Detail ID</label>
                <input type="text" name="detail_id" value="{{ old('detail_id', $safety->detail_id) }}"
                    class="w-full px-4 py-2 border rounded-lg" required>
            </div> -->

            <!-- Air Bag -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Túi khí</label>
                <select name="air_bag" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->air_bag ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->air_bag ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- ABS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống chống bó cứng phanh (ABS)</label>
                <select name="abs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->abs ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->abs ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- EBD -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống phân bổ lực phanh điện tử (EBD)</label>
                <select name="ebd" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->ebd ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->ebd ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- EBA -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ phanh khẩn cấp (EBA)</label>
                <select name="eba" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->eba ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->eba ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- ESS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tín hiệu dừng khẩn cấp (ESS)</label>
                <select name="ess" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->ess ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->ess ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- DSC -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống kiểm soát ổn định động học (DSC)</label>
                <select name="dsc" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->dsc ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->dsc ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- TCS -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hệ thống kiểm soát lực kéo (TCS)</label>
                <select name="tcs" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->tcs ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->tcs ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- HLA -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Hỗ trợ khởi hành ngang dốc (HLA)</label>
                <select name="hla" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->hla ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->hla ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Immobilizer -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Mã hóa chống sao chép chìa khóa</label>
                <select name="immobilizer" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->immobilizer ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->immobilizer ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Burgler Alarm -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảnh báo chống trộm</label>
                <select name="burgler_alarm" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->burgler_alarm ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->burgler_alarm ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Rear Camera -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Camera sau</label>
                <select name="rear_camera" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->rear_camera ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->rear_camera ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Front Sensor -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảm biến trước</label>
                <select name="front_sensor" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->front_sensor ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->front_sensor ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Rear Sensor -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảm biến sau</label>
                <select name="rear_sensor" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->rear_sensor ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->rear_sensor ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Camera 360 -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Camera 360</label>
                <select name="camera360" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->camera360 ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->camera360 ? 'selected' : '' }}>Không</option>
                </select>
            </div>

            <!-- Seatbelt Warning -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Cảnh báo dây an toàn</label>
                <select name="seatbelt_warning" class="w-full px-4 py-2 border rounded-lg">
                    <option value="1" {{ $safety->seatbelt_warning ? 'selected' : '' }}>Có</option>
                    <option value="0" {{ !$safety->seatbelt_warning ? 'selected' : '' }}>Không</option>
                </select>
            </div>


            <!-- Submit Button -->
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