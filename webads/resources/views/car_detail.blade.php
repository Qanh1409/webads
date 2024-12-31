@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')

<div style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f9fafb; color: #333;">

    <!-- Thanh Header -->

    <div style="margin: 0; font-family: 'Roboto', sans-serif;">

        <!-- Thanh Header -->
        <div style="background-color: white; color: black; display: flex; justify-content: center; align-items: center; height: 60px; border-bottom: 1px solid #ddd;">
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease; border-right: 1px solid #ddd;">{{$car->name}}</a>
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease; border-right: 1px solid #ddd;">Thông số kỹ thuật</a>
            <a href="#" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease; border-right: 1px solid #ddd;">Hình ảnh</a>
            <a href="{{route('home.deposit',$carDetail->car_id)}}" style="color: black; text-decoration: none; padding: 0 20px; font-size: 18px; text-transform: uppercase; transition: color 0.3s ease;">Đặt cọc</a>
        </div>

    </div>

    <!-- Khối chứa thông tin -->
    <div id="car-details" style="max-width: 900px; margin: auto; padding: 40px; background-color: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">

        <!-- Tiêu đề chính -->
        <h2 style="text-align: center; margin-bottom: 40px; font-size: 36px; font-weight: bold; color: #1a202c; letter-spacing: 1px;">
          Thông số kỹ thuật xe {{$car->name}}
        </h2>

        <!-- Kích thước tổng thể -->
        <!-- resources/views/car_size_details.blade.php -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('sizeDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">KÍCH THƯỚC - KHỐI LƯỢNG</span>
                <span id="sizeIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="sizeDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Kích thước tổng thể: <span style="color: #2b6cb0;">{{ $carDetail->size }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Chiều dài cơ sở: <span style="color: #2b6cb0;">{{ $carDetail->wheelbase }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Bán kính quay vòng: <span style="color: #2b6cb0;">{{ $carDetail->turning_radius }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Khoảng sáng gầm xe: <span style="color: #2b6cb0;">{{ $carDetail->ground_clearance }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Khối lượng không tải: <span style="color: #2b6cb0;">{{ $carDetail->curb_weight }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Khối lượng toàn tải: <span style="color: #2b6cb0;">{{ $carDetail->gross_weight }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Thể tích khoang hành lý: <span style="color: #2b6cb0;">{{ $carDetail->cargo_volume }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Dung tích bình nhiên liệu: <span style="color: #2b6cb0;">{{ $carDetail->fuel_tank_capacity }}</span>
                    </li>
                </ul>
            </div>
        </div>


        <!-- ĐỘNG CƠ HỘP SỐ -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('engineDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">ĐỘNG CƠ - HỘP SỐ</span>
                <span id="engineIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="engineDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">

                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống nhiên liệu: <span style="color: #2b6cb0;">{{ $carEngine->fuel_system }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Dung tích xi lanh: <span style="color: #2b6cb0;">{{ $carEngine->cylinder_capacity }} cc</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Công suất tối đa: <span style="color: #2b6cb0;">{{ $carEngine->max_power }} mã lực @ {{ $carEngine->max_power_rpm }} vòng/phút</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Mô-men xoắn: <span style="color: #2b6cb0;">{{ $carEngine->max_torque }} Nm @ {{ $carEngine->max_torque_rpm }} vòng/phút</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hộp số: <span style="color: #2b6cb0;">{{ $carEngine->transmission }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Chế độ thể thao: <span style="color: #2b6cb0;">{{ $carEngine->sport_mode ? 'Có' : 'Không' }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống GVC: <span style="color: #2b6cb0;">{{ $carEngine->GVC_system }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống i-Stop: <span style="color: #2b6cb0;">{{ $carEngine->iStop ? 'Có' : 'Không' }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- KHUNG GẦM -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('chassisDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">KHUNG GẦM</span>
                <span id="chassisIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="chassisDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống treo trước: <span style="color: #2b6cb0;">{{ $carChassis->front_suspension }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống treo sau: <span style="color: #2b6cb0;">{{ $carChassis->rear_suspension }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống phanh trước: <span style="color: #2b6cb0;">{{ $carChassis->front_brake }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Hệ thống phanh sau: <span style="color: #2b6cb0;">{{ $carChassis->rear_brake }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Trợ lực lái: <span style="color: #2b6cb0;">{{ $carChassis->steering_assistance }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Kích thước lốp xe: <span style="color: #2b6cb0;">{{ $carChassis->size_tire }}</span>
                    </li>
                    <li style="margin-bottom: 10px; font-weight: 500;">
                        Đường kính mâm xe: <span style="color: #2b6cb0;">{{ $carChassis->wheel_diameter }} inch</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- NỘI THẤT -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('interiorDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">NỘI THẤT</span>
                <span id="interiorIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="interiorDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Chất liệu ghế: <span style="color: #2b6cb0;">{{ $carInterior->seat_material }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Ghế lái chỉnh điện: <span style="color: #2b6cb0;">{{ $carInterior->driver_seat_electric }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Nhớ vị trí ghế lái: <span style="color: #2b6cb0;">{{ $carInterior->driver_seat_memory ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Ghế hành khách chỉnh điện: <span style="color: #2b6cb0;">{{ $carInterior->passenger_seat_electric ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Đầu đĩa DVD: <span style="color: #2b6cb0;">{{ $carInterior->dvd_player ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Màn hình cảm ứng: <span style="color: #2b6cb0;">{{ $carInterior->touchscreen }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Số loa: <span style="color: #2b6cb0;">{{ $carInterior->speaker }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Phanh tay điện tử: <span style="color: #2b6cb0;">{{ $carInterior->electric_parking_brake ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Giữ phanh tự động (Auto Hold): <span style="color: #2b6cb0;">{{ $carInterior->auto_hold ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Khởi động bằng nút bấm: <span style="color: #2b6cb0;">{{ $carInterior->button_engine_start ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Ga tự động (Cruise Control): <span style="color: #2b6cb0;">{{ $carInterior->cruise_control ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Điều hòa tự động: <span style="color: #2b6cb0;">{{ $carInterior->automatic_climate_control }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cửa gió hàng ghế sau: <span style="color: #2b6cb0;">{{ $carInterior->rear_air_vents ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cửa sổ chỉnh điện: <span style="color: #2b6cb0;">{{ $carInterior->electric_windows }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Gương chiếu hậu chống chói tự động: <span style="color: #2b6cb0;">{{ $carInterior->auto_dimming_mirror ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Rèm che kính sau: <span style="color: #2b6cb0;">{{ $carInterior->sunshades_center ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Rèm che cửa sổ hàng ghế sau: <span style="color: #2b6cb0;">{{ $carInterior->sunshades_window_2nd_row ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Bệ tỳ tay hàng ghế sau: <span style="color: #2b6cb0;">{{ $carInterior->rear_armrest ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Bệ tỳ tay tích hợp cổng sạc USB: <span style="color: #2b6cb0;">{{ $carInterior->rear_armrest_usb }} cổng</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hàng ghế sau ngả 60/40: <span style="color: #2b6cb0;">{{ $carInterior->rear_seats_fold_60_40 ? 'Có' : 'Không' }}</span></li>
                </ul>
            </div>
        </div>

        <!-- NGOẠI THẤT -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('exteriorDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">NGOẠI THẤT</span>
                <span id="exteriorIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="exteriorDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Đèn chiếu xa: <span style="color: #2b6cb0;">{{ $carExterior->high_beam }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Đèn chiếu gần: <span style="color: #2b6cb0;">{{ $carExterior->low_beam }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">LED ban ngày: <span style="color: #2b6cb0;">{{ $carExterior->LED_light_day }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Đèn tự động Bật/Tắt: <span style="color: #2b6cb0;">{{ $carExterior->auto_headlights ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Đèn tự động cân bằng góc chiếu: <span style="color: #2b6cb0;">{{ $carExterior->auto_leveling ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Gương chỉnh điện: <span style="color: #2b6cb0;">{{ $carExterior->power_mirror ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Gương tự động gập điện: <span style="color: #2b6cb0;">{{ $carExterior->auto_folding ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Gạt mưa tự động: <span style="color: #2b6cb0;">{{ $carExterior->auto_wipers ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Đèn sau dạng LED: <span style="color: #2b6cb0;">{{ $carExterior->rear_LED_light }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cửa sổ trời: <span style="color: #2b6cb0;">{{ $carExterior->sunroof }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Ống xả kép: <span style="color: #2b6cb0;">{{ $carExterior->double_exhaust }}</span></li>
                </ul>
            </div>
        </div>
        <!-- AN TOÀN -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('safetiesDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">AN TOÀN</span>
                <span id="safetiesIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="safetiesDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Số túi khí: <span style="color: #2b6cb0;">6</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống chống bó cứng phanh ABS: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống phân bổ lực phanh điện tử EBD: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống hỗ trợ lực phanh khẩn cấp EBA: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống cảnh báo phanh khẩn cấp ESS: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống cân bằng điện tử DSC: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống kiểm soát lực kéo chống trượt TCS: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống hỗ trợ khởi hành ngang dốc HLA: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Chìa khóa mã hóa chống trộm: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cảnh báo chống trộm: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Camera lùi: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cảm biến trước: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cảm biến sau: <span style="color: #2b6cb0;">Có</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Camera 360 độ: <span style="color: #2b6cb0;">Không</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cảnh báo thắt dây an toàn: <span style="color: #2b6cb0;">Có</span></li>
                </ul>
            </div>
        </div>



        <!-- MỨC TIÊU HAO NHIÊN LIỆU -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('fuelConsumptionDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">TIÊU HAO NHIÊN LIỆU</span>
                <span id="fuelConsumptionIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="fuelConsumptionDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Trong đô thị: <span style="color: #2b6cb0;">{{ $fuelConsumption->city_consumption }} (Số Giấy Chứng Nhận: {{ $fuelConsumption->certificate_number }})</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Ngoài đô thị: <span style="color: #2b6cb0;">{{ $fuelConsumption->hightway_consumption }} (Số Giấy Chứng Nhận: {{ $fuelConsumption->certificate_number }})</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Kết hợp: <span style="color: #2b6cb0;">{{ $fuelConsumption->total_consumption }} (Số Giấy Chứng Nhận: {{ $fuelConsumption->certificate_number }})</span></li>
                </ul>
            </div>
        </div>
        <!-- i-activesen  -->
        <div style="margin: 25px 0; border: 1px solid #cbd5e0; border-radius: 12px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #f8fafc;">
            <div onclick="toggleContent('iActivesenseDetails')"
                style="background-color: #e2e8f0; padding: 20px; font-weight: bold; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; border-bottom: 1px solid #cbd5e0;">
                <span style="color: #2d3748; font-size: 18px;">I-ACTIVSENSE</span>
                <span id="iActivesenseIcon" style="font-size: 20px; font-weight: bold; color: #718096; transition: transform 0.3s ease;">+</span>
            </div>
            <div id="iActivesenseDetails" style="display: none; padding: 20px; background-color: #ffffff; color: #4a5568; line-height: 1.9; font-size: 16px;">
                <ul style="margin: 0; padding-left: 25px; list-style-type: circle;">
                    <li style="margin-bottom: 10px; font-weight: 500;">Tự động mở rộng góc chiếu khi đánh lái AFS: <span style="color: #2b6cb0;">{{ $iActivesense->afs ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống đèn tự động chiếu xa HBC: <span style="color: #2b6cb0;">{{ $iActivesense->hbc ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống đèn thích ứng thông minh ALH: <span style="color: #2b6cb0;">{{ $iActivesense->alh ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Cảnh báo phương tiện cắt ngang khi lùi RCTA: <span style="color: #2b6cb0;">{{ $iActivesense->rcta ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống cảnh báo lệch làn LDW: <span style="color: #2b6cb0;">{{ $iActivesense->ldw ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống giữ làn LAS: <span style="color: #2b6cb0;">{{ $iActivesense->las ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Phanh thông minh trong thành phố (Phanh trước): <span style="color: #2b6cb0;">{{ $iActivesense->city_brake_support_front ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Phanh thông minh trong thành phố (Phanh sau): <span style="color: #2b6cb0;">{{ $iActivesense->city_brake_support_rear ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống hỗ trợ phanh thông minh (SBS): <span style="color: #2b6cb0;">{{ $iActivesense->sbs ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống điều khiển hành trình Mazda Radar (MRCC): <span style="color: #2b6cb0;">{{ $iActivesense->mrcc ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống cảnh báo người lái mất tập trung (DAA): <span style="color: #2b6cb0;">{{ $iActivesense->daa ? 'Có' : 'Không' }}</span></li>
                    <li style="margin-bottom: 10px; font-weight: 500;">Hệ thống cảnh báo điểm mù (BSM): <span style="color: #2b6cb0;">{{ $iActivesense->bsm ? 'Có' : 'Không' }}</span></li>
                </ul>
            </div>
        </div>
        <script>
            // Hàm toggle hiển thị nội dung
            function toggleContent(sectionId) {
                const content = document.getElementById(sectionId);
                const icon = document.getElementById(sectionId + 'Icon');
                if (content.style.display === "none") {
                    content.style.display = "block";
                    icon.textContent = "-";
                } else {
                    content.style.display = "none";
                    icon.textContent = "+";
                }
            }
        </script>

    </div>







    @endsection