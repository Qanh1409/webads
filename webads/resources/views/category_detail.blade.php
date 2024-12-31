@extends('layouts.app') <!-- Kế thừa layout app -->

@section('content')

@include ('layouts.header_userCategory')


<!-- HIỂN THỊ VỀ MỘT DÒNG XE (SUV, SEDAN, HATCHBACK) LIST XE -->

<div class="container" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px; font-family: 'Roboto', sans-serif;">
    <!-- Hiển thị thông tin của danh mục -->
    <section style="margin-bottom: 40px;">
        <h2 style="font-size: 36px; font-weight: 800; color: #333; margin-bottom: 30px; text-align: center; border-bottom: 4px solid #ddd; padding-bottom: 10px;">
            {{ $category->name }}
        </h2>

        <!-- Danh sách xe trong danh mục -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            @forelse ($category->cars as $car)
            <!-- Card Phiên bản -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; text-align: center;">
                <img src="{{ asset('images/cars/'.$car->image) }}" alt="{{ $car->name }}"
                    style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 20px;">
                    <h4 style="font-size: 20px; font-weight: 700; color: #333; margin-bottom: 10px;">{{ $car->name }}</h4>
                    <p style="font-size: 18px; color: #007bff; font-weight: bold; margin-bottom: 20px;">{{ number_format($car->price, 0, ',', '.') }} VND</p>
                    <a href="{{route('car_detail',$car->id)}}"
                        style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; font-size: 16px; font-weight: 600; text-decoration: none; border-radius: 8px; transition: background-color 0.3s ease;">
                        Xem chi tiết
                    </a>
                </div>
            </div>
            @empty
            <p style="font-size: 16px; color: #777; text-align: center; grid-column: span 3;">Không có xe nào trong danh mục này.</p>
            @endforelse
        </div>
    </section>
</div>


<!-- <a href="{{route('car_detail',$car->id)}}" -->
 
@endsection