@extends('layouts.admin')

@section('title', 'Update Car')

@section('content')

@auth
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden p-6">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Form Container -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Chỉnh sửa loại xe</h2>

            <form action="{{ route('admin.car.update', ['id' => $car->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Car Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Tên xe</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $car->name) }}" class="form-input w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price Field -->
                <div class="mb-6">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Giá</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $car->price) }}" class="form-input w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @error('price')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Description Field -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Mô tả</label>
                    <textarea id="description" name="description" class="form-textarea w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4" required>{{ old('description', $car->description) }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Tải ảnh lên</label>
                    <input type="file" id="image" name="image" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" accept="image/*">
                    @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                    @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" class="mt-4 w-32 h-32 rounded-md">
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 focus:ring-2 focus:ring-gray-500 focus:outline-none">
                        Cập nhật
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@else
<div class="flex-1 p-6 text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth

@endsection