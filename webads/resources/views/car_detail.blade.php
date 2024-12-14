@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div id="car-details" style="max-width: 1200px; margin: auto; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px; background-color: #f3f4f6; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);">
    <!-- Tiêu đề -->
    <h2 style="text-align: center; margin-bottom: 40px; font-size: 28px; font-weight: bold; color: #222;">Các phiên bản dòng xe Mazda 2</h2>

    <!-- Khối các phiên bản xe -->
    <div style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
        <!-- Card Phiên bản -->
        <div style="flex: 1; max-width: 300px; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <img src="img/MAZDA2_SEDAN/M2-Sedan-Avatar.jpg" alt="Mazda 2 Sedan" style="width: 100%; max-width: 200px; border-radius: 8px; margin-bottom: 15px;">
            <h4 style="font-size: 20px; font-weight: bold; color: #333; margin-bottom: 10px;">Mazda 2 Sedan</h4>
            <p style="font-size: 18px; color: #007bff; font-weight: bold; margin-bottom: 20px;">530 triệu VNĐ</p>
            <button onclick="toggleDetails('mazda2-version1')" style="padding: 12px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">Xem chi tiết</button>
        </div>
        <div style="flex: 1; max-width: 300px; background-color: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <img src="img/MAZDA2_HATCHBACK/M2-Hatchback-Avatar.jpg" alt="Mazda 2 Hatchback" style="width: 100%; max-width: 200px; border-radius: 8px; margin-bottom: 15px;">
            <h4 style="font-size: 20px; font-weight: bold; color: #333; margin-bottom: 10px;">Mazda 2 Hatchback</h4>
            <p style="font-size: 18px; color: #007bff; font-weight: bold; margin-bottom: 20px;">550 triệu VNĐ</p>
            <button onclick="toggleDetails('mazda2-version2')" style="padding: 12px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">Xem chi tiết</button>
        </div>
    </div>

    <!-- Chi tiết phiên bản -->
    <div id="mazda2-version1" style="display: none; margin-top: 40px; padding: 20px; background-color: #fff; border-radius: 10px; border: 1px solid #ddd; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <h4 style="font-size: 22px; font-weight: bold; color: #333; margin-bottom: 20px;">Thông số kỹ thuật - Mazda 2 Sedan</h4>
        <div style="margin-bottom: 20px;">
            <button onclick="toggleDropdown('dropdown1')" style="width: 100%; padding: 14px; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; font-size: 18px; font-weight: bold; text-align: left; cursor: pointer; transition: background-color 0.3s ease;">Kích thước</button>
            <div id="dropdown1" style="display: none; padding: 15px; margin-top: 10px; background-color: #f9f9f9; border-radius: 8px; border: 1px solid #ddd;">
                <p><strong>Kích thước tổng thể:</strong> 4,340 x 1,695 x 1,470 mm</p>
                <p><strong>Chiều dài cơ sở:</strong> 2,570 mm</p>
                <p><strong>Bán kính vòng quay:</strong> 4.7 m</p>
            </div>
        </div>
    </div>
    <div id="mazda2-version2" style="display: none; margin-top: 40px; padding: 20px; background-color: #fff; border-radius: 10px; border: 1px solid #ddd; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <h4 style="font-size: 22px; font-weight: bold; color: #333; margin-bottom: 20px;">Thông số kỹ thuật - Mazda 2 Hatchback</h4>
        <div style="margin-bottom: 20px;">
            <button onclick="toggleDropdown('dropdown2')" style="width: 100%; padding: 14px; background-color: #f7f7f7; border: 1px solid #ccc; border-radius: 8px; font-size: 18px; font-weight: bold; text-align: left; cursor: pointer; transition: background-color 0.3s ease;">Động cơ</button>
            <div id="dropdown2" style="display: none; padding: 15px; margin-top: 10px; background-color: #f9f9f9; border-radius: 8px; border: 1px solid #ddd;">
                <p><strong>Công suất:</strong> 125 mã lực</p>
                <p><strong>Dung tích động cơ:</strong> 1.6L</p>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDetails(id) {
        const allDetails = document.querySelectorAll('#car-details > div[id^="mazda2-version"]');
        allDetails.forEach(detail => {
            if (detail.id === id) {
                detail.style.display = detail.style.display === "block" ? "none" : "block";
            } else {
                detail.style.display = "none";
            }
        });
    }

    function toggleDropdown(id) {
        const element = document.getElementById(id);
        element.style.display = (element.style.display === "block") ? "none" : "block";
    }
</script>

@endsection