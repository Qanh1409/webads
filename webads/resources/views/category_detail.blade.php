@extends('layouts.app') <!-- Kế thừa layout app -->

@section('content')

@include ('layouts.header_userCategory')

<div class="container mx-auto py-6">
    <!-- Hiển thị thông tin của danh mục -->
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6 border-b-2 pb-2">{{ $category->name }}</h2>

        <!-- Danh sách xe trong danh mục -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($category->cars as $car)
            <div class="border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('images/cars/'.$car->image) }}" alt="{{ $car->name }}" class="h-40 object-contain">
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $car->name }}</h3>
                <p class="text-gray-600 mb-2">Giá: {{ number_format($car->price, 0, ',', '.') }} VND</p>
                <a href="" class="text-blue-600 hover:underline">Xem chi tiết</a>
            </div>
            @empty
            <p class="text-gray-500">Không có xe nào trong danh mục này.</p>
            @endforelse
        </div>
    </section>
</div>

@endsection