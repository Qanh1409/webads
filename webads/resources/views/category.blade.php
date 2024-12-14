@extends('layouts.app') <!-- Kế thừa layout app -->

@section('content')

<!-- KHỐI HEADER -->
@include('layouts.header_userCategory')
<br>



<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
    @forelse ($categories as $category)
    @foreach ($category->cars as $car)
    <!-- Card Phiên bản -->
    <div style="background-color: #f9f9f9; border-radius: 15px; padding: 25px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; text-align: center;">
        <img src="{{ asset('images/cars/'.$car->image) }}" alt="{{ $car->name }}"
            style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
        <h4 style="font-size: 22px; font-weight: 700; color: #333; margin-bottom: 12px;">{{ $car->name }}</h4>
        <p style="font-size: 20px; color: #007bff; font-weight: bold; margin-bottom: 20px;">{{ number_format($car->price, 0, ',', '.') }} VND</p>
        <a href="/cars/{{ $car->id }}"
            style="display: inline-block; padding: 12px 25px; background-color: #007bff; color: #fff; font-size: 18px; font-weight: 600; text-decoration: none; border-radius: 10px; transition: background-color 0.3s ease, transform 0.3s ease;">
            Xem chi tiết
        </a>
    </div>
    @endforeach
    @empty
    <p class="text-gray-500">Không có xe nào trong danh mục này.</p>
    @endforelse
</div>

@endsection