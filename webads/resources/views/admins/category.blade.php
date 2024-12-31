@extends('layouts.admin')

@section('title', 'Category')

@section('content')
@auth
<div class="flex">
    <!-- Main Content Area -->
    <div class="flex-1 p-6 overflow-y-auto max-h-screen">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Danh sách các dòng xe</h1>
            <p class="text-lg">Xin chào, {{ Auth::user()->name }}</p>
        </header>

        <!-- Insert Button -->
        <div class="mb-6">
            <!-- <a href="{{route('admin.category.add')}}" class="text-blue-500 hover:text-blue-700">Thêm kiểu xe</a> -->
            <button style="padding: 10px 20px; font-size: 16px; font-weight: bold; color: white; background-color: black; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                <a href="{{route('admin.category.add')}}">Thêm kiểu xe</a>
            </button>
        </div>



        <!-- Category Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow">
                <thead class="bg-black text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Ảnh dòng xe</th> <!-- New column for the image -->
                        <th class="py-2 px-4 text-left">Tên dòng xe</th>
                        <th class="py-2 px-4 text-left">Tính năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="border-b">
                        <!-- Column for the Category Image -->
                        <td class="py-2 px-4 text-center">
                            <!-- Show the category image, fallback to a default image if none exists -->
                            @if($category->img)
                            <img src="{{ asset('images/categories/'.$category->img) }}" alt="{{ $category->name }}" class="w-16 h-16 object-cover rounded-full">
                            @else
                            <img src="{{ asset('images/default-category.png') }}" alt="No Image" class="w-16 h-16 object-cover rounded-full">
                            @endif
                        </td>
                        <td class="py-2 px-4 truncate">{{ $category->name }}</td>
                        <td class="py-2 px-4 flex space-x-2">
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ route('admin.category.edit', $category->id) }}" style="background: black; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">
                                    Chỉnh sửa
                                </a>
                            </div>
                            <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: black; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;
">
                                    Xóa dòng xe
                                </button>
                            </form>
                            <a href="{{ route('admin.car.index', $category->id) }}" style="background: black; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;
">
                                Chi tiết
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@else
<!-- Unauthorized Access Message -->
<div class="flex-1 p-6 text-center">
    <h1 class="text-3xl font-bold mb-6">Unauthorized Access</h1>
    <p>You are not authorized to access this page.</p>
</div>
@endauth
@endsection