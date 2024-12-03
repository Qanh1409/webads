<div class="bg-white shadow-md fixed w-[82.3%] top-14.6 left-1/5 z-20 p-4 rounded-b-xl flex flex-col items-center">
    <!-- Tiêu đề -->
    <h1 class="text-2xl font-semibold text-gray-800 mb-2">Thông số kỹ thuật</h1>

    <!-- Nút Button -->
    <div class="flex gap-5 flex-wrap justify-center">
        <a href="{{ route('admin.car.detail', ['id' => $car->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                  {{ request()->routeIs('admin.car.detail') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Kích thước khối lượng
        </a>

        <a href="{{ route('admin.car.engineTranmisstion', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                  {{ request()->routeIs('admin.car.engineTranmisstion') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Động cơ hộp số
        </a>

        <a href="{{ route('admin.car.chassis', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                  {{ request()->routeIs('admin.car.chassis') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Khung gầm
        </a>

        <a href="{{ route('admin.car.interior', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                  {{ request()->routeIs('admin.car.interior') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Nội thất
        </a>

        <a href="{{ route('admin.car.exterior', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                  {{ request()->routeIs('admin.car.exterior') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Ngoại thất
        </a>

        <a href="{{ route('admin.car.safety', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                    {{ request()->routeIs('admin.car.safety') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            An toàn
        </a>

        <a href="{{ route('admin.car.fuelConsumtion', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                    {{ request()->routeIs('admin.car.fuelConsumtion') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            Mức nhiên liệu
        </a>

        <a href="{{ route('admin.car.iActivsense', ['id' => $carDetail->id]) }}"
            class="px-4 py-2 rounded-md text-sm transition duration-300 hover:bg-gray-800 hover:scale-105
                    {{ request()->routeIs('admin.car.iActivsense') ? 'bg-blue-600 text-white' : 'bg-black text-white' }}">
            i-Activsense
        </a>
        <!-- Các nút khác -->
        <!-- Tiếp tục thêm các nút tương tự với điều kiện request()->is() hoặc request()->routeIs() phù hợp -->
    </div>
</div>