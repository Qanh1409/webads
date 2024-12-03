@extends('layouts.app') <!-- Kế thừa layout app -->

@section('content')

<!-- KHỐI HEADER -->
@include('layouts.header_userCategory')

<div class="container mx-auto py-12 px-4">
    <!-- Danh sách các danh mục -->
    @foreach ($categories as $category)
    <section class="mb-16">
        <!-- Tên danh mục -->
        <h2 class="text-3xl font-bold text-gray-800 mb-8 border-b-4 border-gray-300 pb-4">{{ $category->name }}</h2>

        <!-- Nội dung danh mục -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse ($category->cars as $car)
            <div class="group border rounded-lg shadow-md overflow-hidden bg-white hover:shadow-xl transition">
                <div class="relative h-48 bg-gray-100">
                    <img src="{{ asset('images/cars/'.$car->image) }}" alt="{{ $car->name }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-blue-600 transition">
                        {{ $car->name }}
                    </h3>
                    <p class="text-gray-500 mb-4">Giá:
                        <span class="text-red-500 font-bold">{{ number_format($car->price, 0, ',', '.') }} VND</span>
                    </p>
                    <a href=""
                        class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            @empty
            <p class="text-gray-500 col-span-full text-center">Không có xe nào trong danh mục này.</p>
            @endforelse
        </div>
    </section>
    @endforeach
</div>
@endsection