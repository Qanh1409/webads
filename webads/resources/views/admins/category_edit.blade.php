@extends('layouts.admin')

@section('title', 'Cakes')

@section('content')

@auth
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden p-6">
    <div class="flex items-center justify-center min-h-screen">
        <!-- Form Container -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Update Category</h2>

            <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Category Name Field -->
                <div class="mb-6">
                    <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">Category Name</label>
                    <input type="text" id="category_name" name="category_name" class="form-input w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ $category->name }}">
                    @error('category_name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="mb-6">
                    <label for="img_url" class="block text-gray-700 text-sm font-bold mb-2">Upload Image</label>
                    <input type="file" id="img_url" name="img_url" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        Update Category
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
