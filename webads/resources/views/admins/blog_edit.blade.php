@extends('layouts.admin') <!-- Kế thừa layout admin -->

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Chỉnh sửa bài viết</h1>

    <!-- Form chỉnh sửa bài viết -->
    <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-xl shadow-lg">
        @csrf <!-- Token bảo mật -->
        @method('PUT') <!-- Phương thức PUT -->

        <!-- Tiêu đề -->
        <div class="mb-6">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Tiêu đề bài viết</label>
            <input type="text" id="title" name="title"
                class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                placeholder="Nhập tiêu đề bài viết" value="{{ old('title', $post->title) }}" required>
            @error('title')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Hình ảnh hiện tại -->
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Hình ảnh hiện tại</label>
            @if($post->img)
            <img src="{{ asset('images/blogs/'.$post->img) }}" alt="Hình ảnh bài viết" class="w-40 h-40 object-cover rounded-lg mb-4">
            @else
            <p class="text-gray-500 text-sm">Chưa có hình ảnh</p>
            @endif
        </div>

        <!-- Hình ảnh mới -->
        <div class="mb-6">
            <label for="img" class="block text-gray-700 font-semibold mb-2">Thay đổi hình ảnh</label>
            <input type="file" id="img" name="img"
                class="w-fuzll px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                accept="image/*">
            @error('img')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Nội dung -->
        <div class="mb-6">
            <label for="content" class="block text-gray-700 font-semibold mb-2">Nội dung bài viết</label>
            <textarea id="content" name="content"
                class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                rows="8" placeholder="Nhập nội dung bài viết" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Nút hành động -->
        <div class="flex justify-end items-center space-x-4">
            <a href="" class="bg-black text-white px-6 py-2 rounded-md shadow-sm transition-transform transform hover:bg-gray-800 hover:scale-105">
                Hủy
            </a>
            <button type="submit" class="bg-black text-white px-6 py-2 rounded-md shadow-sm transition-transform transform hover:bg-gray-800 hover:scale-105">
                Cập nhật bài viết
            </button>
        </div>

    </form>
</div>
@endsection