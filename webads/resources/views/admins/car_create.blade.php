@extends('layouts.admin')

@section('title', 'Add New Car')

@section('content')

@auth
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden p-6">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Form Container -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Add New Car</h2>

            <form action="{{route('admin.car.create',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Car Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Car Name</label>
                    <input type="text" id="name" name="name" class="form-input w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Cột giá -->
                <div class="mb-6">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                    <input type="number" id="price" name="price" class="form-input w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    @error('price')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Miêu tả -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" class="form-textarea w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" rows="4" required></textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Upload ảnh-->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Image</label>
                    <input type="file" id="image" name="image" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" accept="image/*" required>
                    @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        Thêm
                    </button>
                    <!-- Back Button -->
                    <button onclick="goBack()" style="background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                        Quay lại
                    </button>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
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