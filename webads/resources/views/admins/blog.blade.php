@extends('layouts.admin') <!-- Kế thừa layout admin -->

@section('content')
<div class="container mx-auto py-8">
    <!-- Tiêu đề và nút Thêm bài viết -->
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Danh sách bài viết</h1>
        <a href="{{route('admin.blog.add')}}" class="bg-green-600 text-white px-6 py-2 rounded-lg text-sm shadow-md hover:bg-green-700 transition">
            + Thêm bài viết
        </a>
    </div>

    <!-- Kiểm tra nếu có bài viết -->
    @if($blogs->count())
    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100 text-left text-gray-700 text-sm uppercase tracking-wide">
                    <th class="py-4 px-6 border-b border-gray-300">Tiêu đề</th>
                    <th class="py-4 px-6 border-b border-gray-300">Hình ảnh</th>
                    <th class="py-4 px-6 border-b border-gray-300">Tác giả</th>
                    <th class="py-4 px-6 border-b border-gray-300">Ngày tạo</th>
                    <th class="py-4 px-6 border-b border-gray-300 text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $key => $blog)
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6 border-b border-gray-300 font-medium text-gray-800">{{ $blog->title }}</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <img src="{{ asset('images/blogs/'.$blog->img) }}" alt="{{ $blog->title }}" class="w-24 h-16 object-cover rounded-md shadow-md">
                    </td>
                    <td class="py-4 px-6 border-b border-gray-300 text-gray-600">{{ $blog->user->name ?? 'Ẩn danh' }}</td>
                    <td class="py-4 px-6 border-b border-gray-300 text-gray-600">{{ $blog->created_at->format('d/m/Y') }}</td>
                    <td class="py-4 px-6 border-b border-gray-300 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <a href="" class="bg-blue-500 text-white px-3 py-1 rounded text-sm shadow hover:bg-blue-600 transition">Xem</a>
                            <a href="{{route('admin.blog.edit',$blog->id)}}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm shadow hover:bg-yellow-600 transition">Sửa</a>
                            <form action="{{route('admin.blog.delete',$blog->id)}}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm shadow hover:bg-red-600 transition" onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="text-center py-12">
        <h2 class="text-lg font-semibold text-gray-700">Không có bài viết nào!</h2>
        <p class="text-gray-500">Hãy thêm bài viết mới để hiển thị trong danh sách.</p>
    </div>
    @endif
</div>
@endsection