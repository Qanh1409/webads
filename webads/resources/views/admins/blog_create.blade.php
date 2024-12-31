@extends('layouts.admin') <!-- Kế thừa layout admin -->

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Thêm bài viết mới</h1>

    <!-- Form tạo bài viết -->
    <form action="{{ route('admin.blog.create') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf <!-- Token bảo mật -->
        <!-- Tiêu đề -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Tiêu đề</label>
            <input type="text" id="title" name="title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Nhập tiêu đề bài viết" value="{{ old('title') }}" required>
            @error('title')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Hình ảnh -->
        <div class="mb-4">
            <label for="img" class="block text-gray-700 font-medium mb-2">Hình ảnh</label>
            <input type="file" id="img" name="img"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                accept="image/*">
            @error('img')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Nội dung -->
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-medium mb-2">Nội dung</label>
            <textarea id="content" name="content"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                rows="6" placeholder="Nhập nội dung bài viết" required>{{ old('content') }}</textarea>
            @error('content')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Nút hành động -->
        <div class="flex justify-end">
            <a href="" class="bg-black text-white px-4 py-2 rounded-lg mr-2 shadow-md transition-transform transform hover:bg-gray-800 hover:scale-105">
                Hủy
            </a>
            <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg shadow-md transition-transform transform hover:bg-gray-800 hover:scale-105">
                Lưu bài viết
            </button>
        </div>

    </form>
</div>
@endsection