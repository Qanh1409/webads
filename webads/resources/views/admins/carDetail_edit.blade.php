@extends('layouts.admin')

@section('title', 'Edit Car Detail')

@section('content')
<div class="container mx-auto mt-10 p-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Kích thước - khối lượng</h2>

    <!-- Form chỉnh sửa Car Detail -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.carDetail.update', [ 'id' => $carDetai->detail_id]) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Size -->
            <div class="mb-4">
                <label for="size" class="block text-gray-700 text-sm font-bold mb-2">Kích thước tổng thể</label>
                <input type="text" name="size" id="size" value="{{ $carDetail->size }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Wheelbase -->
            <div class="mb-4">
                <label for="wheelbase" class="block text-gray-700 text-sm font-bold mb-2">Chiều dài cơ sở</label>
                <input type="text" name="wheelbase" id="wheelbase" value="{{ $carDetail->wheelbase }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Turning Radius -->
            <div class="mb-4">
                <label for="turning_radius" class="block text-gray-700 text-sm font-bold mb-2">Bán kính quay vòng tối thiểu </label>
                <input type="text" name="turning_radius" id="turning_radius" value="{{ $carDetail->turning_radius }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Ground Clearance -->
            <div class="mb-4">
                <label for="ground_clearance" class="block text-gray-700 text-sm font-bold mb-2">Khoảng sáng gầm xe</label>
                <input type="text" name="ground_clearance" id="ground_clearance" value="{{ $carDetail->ground_clearance }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Curb Weight -->
            <div class="mb-4">
                <label for="curb_weight" class="block text-gray-700 text-sm font-bold mb-2">Khối lượng không tải</label>
                <input type="text" name="curb_weight" id="curb_weight" value="{{ $carDetail->curb_weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Gross Weight -->
            <div class="mb-4">
                <label for="gross_weight" class="block text-gray-700 text-sm font-bold mb-2">Khối lượng toàn tải</label>
                <input type="text" name="gross_weight" id="gross_weight" value="{{ $carDetail->gross_weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Cargo Volume -->
            <div class="mb-4">
                <label for="cargo_volume" class="block text-gray-700 text-sm font-bold mb-2">Dung tích khoang hành lý</label>
                <input type="number" name="cargo_volume" id="cargo_volume" value="{{ $carDetail->cargo_volume }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Fuel Tank Capacity -->
            <div class="mb-4">
                <label for="fuel_tank_capacity" class="block text-gray-700 text-sm font-bold mb-2">Dung tích bình nhiên liệu</label>
                <input type="number" name="fuel_tank_capacity" id="fuel_tank_capacity" value="{{ $carDetail->fuel_tank_capacity }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Buttons -->
            <div class="flex justify-end items-center space-x-4">
                <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                    Lưu thay đổi
                </button>
                <a href="javascript:window.history.back()" class="bg-black text-white px-6 py-3 rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out">
                    Quay trở lại
                </a>
            </div>
        </form>
    </div>
</div>
@endsection