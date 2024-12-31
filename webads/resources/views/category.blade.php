@extends('layouts.app') <!-- Kế thừa layout app -->

@section('content')

<!-- HIỂN THỊ VỀ TẤT CẢ LIST XE -->
<!-- KHỐI HEADER -->
@include('layouts.header_userCategory')
<br>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; padding: 20px; font-family: 'Roboto', sans-serif; background-color: #f7f7f7; border-radius: 12px;">
    @forelse ($categories as $category)
    @foreach ($category->cars as $car)
    <!-- Card Phiên bản -->
    <div style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; text-align: center;">
        <!-- Ảnh xe -->
        <img src="{{ asset('images/cars/'.$car->image) }}" alt="{{ $car->name }}"
            style="width: 100%; height: 180px; object-fit: cover;">

        <!-- Nội dung xe -->
        <div style="padding: 20px;">
            <h4 style="font-size: 20px; font-weight: 700; color: #333; margin-bottom: 10px;">{{ $car->name }}</h4>
            <p style="font-size: 18px; color: #007bff; font-weight: bold; margin-bottom: 20px;">{{ number_format($car->price, 0, ',', '.') }} VND</p>
            <a href="{{route('car_detail',$car->id)}}"
                style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; font-size: 16px; font-weight: 600; text-decoration: none; border-radius: 8px; transition: background-color 0.3s ease;">
                Xem chi tiết
            </a>
        </div>
    </div>
    @endforeach
    @empty
    <p style="font-size: 16px; color: #777; text-align: center; grid-column: span 3;">Không có xe nào trong danh mục này.</p>
    @endforelse
</div>

@endsection