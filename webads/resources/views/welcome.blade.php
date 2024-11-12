@extends('layouts.app')

@section('title', 'Mazda Thaco')

@section('content')



<!-- KHỐI NỘI DUNG CHÍNH -->

<!-- KHỐI VIDEO -->
<!-- Container bao quanh để căn giữa -->
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #000000;">
    <!-- Container video và lớp phủ -->
    <div style="position: relative; width: 100%; height: 100%;">

        <!-- Video -->
        <video autoplay loop muted style="width: 100%; height: 100%; object-fit: cover;">
            <source src="img\IntroduceM3Sport.mp4" type="video/mp4">
        </video>

        <!-- Lớp phủ với chữ và nút button -->
        <div style="position: absolute; top: 60%; left: 25%; transform: translate(-50%, -50%); text-align: center; color: white; width: 80%; padding: 0 20px;">
            <!-- Chèn link tới Google Fonts để sử dụng font chữ Montserrat -->
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

            <p style="font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: bold; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                All New Mazda3 - Art That Moves You
            </p>

            <a href="https://www.mercedes-benz.com.vn/vi" style="text-decoration: none;">
                <button style="padding: 10px 30px; font-size: 18px; background-color: black; color: white; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.boxShadow='0 6px 12px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.backgroundColor='#000'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)';">
                    Tìm hiểu sự kiện
                </button>
            </a>
        </div>
    </div>
</div>


<!-- Button "Tìm hiểu thêm ở ngay giữa" -->

<div style="text-align: center; margin-top: 50px;">
    <a href="#" style="text-decoration: none; color: #fff; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 18px; font-weight: 600; padding: 14px 35px; 
        border: 2px solid #000; border-radius: 8px; background-color: #000; transition: all 0.3s ease; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        display: inline-block;" onmouseover="this.style.backgroundColor='#333'; this.style.boxShadow='0 6px 12px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.backgroundColor='#000'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)';">
        Tìm hiểu thêm
    </a>
</div>

<!-- CÁC KHỐI NEWS  -->

<div class="container mt-4">
    <!-- Hàng ngang 1 với 2 cột tỉ lệ 2/3 -->
    <div class="row mb-4">
        @foreach ($blogs as $blog)

        <div class="col-md-6">
            <div class="card" style="border-radius: 8px; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 24px; font-weight: 600;">{{$blog->title}}</h5>
                    <p class="card-text" style="font-family: 'Arial', sans-serif; font-size: 16px; color: #555;">{{$blog->content}}</p>
                    <a href="#" class="btn" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 16px; font-weight: 600; color: #fff; padding: 12px 35px; 
                    border: 2px solid #000; border-radius: 8px; background-color: #000; transition: all 0.3s ease; display: inline-block; text-decoration: none; 
                    transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#555'; this.style.transform='scale(1.1)';" onmouseout="this.style.backgroundColor='#000'; this.style.transform='scale(1)';">
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>


    <!-- Hàng ngang 2 với 3 cột bằng nhau -->

</div>


<br>

<div style="margin-left: 40px; padding: 20px;">
    <p style="margin-left: 20px; padding: 0px; font-size: 30px; font-weight: 700; font-family: 'Montserrat', sans-serif; line-height: 1.6; text-align: left; color: #333;">
        Sự kết hợp hoàn hảo giữa sự sang trọng,<br>
        tính thể thao và hiệu suất: <br>
        Khám phá các màu xe mới nhất của chúng tôi
    </p>
</div>


<!-- Thêm link đến Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
<div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; padding: 30px; background-image: url('https://your-image-url.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    @foreach ($categories as $category)
    <div style="flex: 1 1 30%; padding: 20px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); height: 380px; display: flex; flex-direction: column; justify-content: space-between; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)'">
        <a href="{{ $category->link }}" style="text-decoration: none; color: inherit;">
            <div style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 20px; height: 100%; justify-content: space-between;">
                <h2 style="font-family: 'Montserrat', sans-serif; font-size: 24px; font-weight: 600; color: #333; margin-bottom: 10px;">{{ $category->name }}</h2>
                <p style="font-size: 16px; color: #555; margin: 10px 0;">Khám phá tất cả các dòng xe</p>
                <img src="{{ asset('images/categories/'.$category->img) }}" alt="{{ $category->name }}" style=" height: auto; object-fit: cover; border-radius: 8px; margin-top: 10px;">
            </div>
        </a>
    </div>
    @endforeach
</div>
<br><br>

<!-- Khối quảng cáo về lịch sử thương hiệu -->
<div style="display: flex; max-width: 1100px; margin-left: 130px; background-color: white; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border-radius: 15px; overflow: hidden; transition: transform 0.3s ease;">

    <!-- Phần hình ảnh bên trái -->
    <div style="flex: 1;">
        <img src="https://photo2.tinhte.vn/data/attachment-files/2022/07/6051886_5070034_cover-lich_su_phat_trien_xe_mazda.jpg" alt="Hình ảnh nội thất Mazda" style="width: 100%; height: auto; object-fit: cover;">
    </div>

    <!-- Phần văn bản bên phải -->
    <div style="flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
        <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: bold; color: #333; margin: 0 0 10px;">
            Vị thế vượt thời gian từ 1920.
        </h1>
        <p style="font-size: 1rem; color: #666; line-height: 1.6; margin: 0 0 20px;">
            Định nghĩa về xe luôn thay đổi, nhưng đẳng cấp thì không. Khi đó là Mazda.
        </p>
        <div style="margin-top: 20px;">
            <a href="#" style="display: inline-block; padding: 12px 24px; background-color: #000; color: white; font-size: 1rem; font-weight: bold; text-decoration: none; border-radius: 5px; transition: transform 0.3s ease, background-color 0.3s ease;"
                onmouseover="this.style.backgroundColor='#333'; this.style.transform='scale(1.1)';"
                onmouseout="this.style.backgroundColor='#000'; this.style.transform='scale(1)';">
                Tìm hiểu thêm
            </a>
        </div>
    </div>

</div>

<!-- Khối carosel dịch vụ -->
<div class="container my-5">
    <h2 class="text-center mb-5" style="font-size: 36px; font-weight: 700; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333;">Dịch vụ của chúng tôi</h2>
    <hr>

    <!-- Carousel -->
    <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            <!-- Mục 1: Hướng dẫn sử dụng cho chủ xe -->
            <div class="carousel-item active">
                <div class="row align-items-center" style="display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <div class="col-md-6" style="flex: 1; padding: 0; margin-right: 20px;">
                        <img src="https://heyoto.vn/wp-content/uploads/2024/07/mam-xe-mazda-cx-5-premium-exclusive.jpg" alt="Hướng dẫn sử dụng cho chủ xe" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; transition: transform 0.3s ease-in-out; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col-md-6" style="flex: 1; padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';" onmouseout="this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                        <h3 style="font-size: 28px; font-weight: 700; color: #333; margin-bottom: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Hướng dẫn sử dụng cho chủ xe</h3>
                        <p style="font-size: 18px; color: #666; margin-bottom: 20px; line-height: 1.6;">Bảng thông tin tính năng và hướng dẫn chi tiết dành cho xe của bạn. Tìm hiểu cách sử dụng và bảo dưỡng xe hiệu quả.</p>
                        <button class="btn btn-dark mt-3" style="font-size: 16px; padding: 12px 24px; background-color: #333; border-color: #333; transition: all 0.3s ease-in-out;">Tìm hiểu thêm</button>
                    </div>
                </div>
            </div>

            <!-- Mục 2: Đặt hẹn dịch vụ trực tuyến -->
            <div class="carousel-item">
                <div class="row align-items-center" style="display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <div class="col-md-6" style="flex: 1; padding: 0; margin-right: 20px;">
                        <img src="https://mazdamotors.vn/media/fzace3nd/call-center.jpg?width=550&height=393" alt="Đặt hẹn dịch vụ trực tuyến" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; transition: transform 0.3s ease-in-out; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col-md-6" style="flex: 1; padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';" onmouseout="this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                        <h3 style="font-size: 28px; font-weight: 700; color: #333; margin-bottom: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Đặt hẹn dịch vụ trực tuyến</h3>
                        <p style="font-size: 18px; color: #666; margin-bottom: 20px; line-height: 1.6;">Đặt lịch hẹn dịch vụ trực tuyến một cách thuận tiện. Đảm bảo xe bạn luôn ở trong tình trạng tốt nhất.</p>
                        <button class="btn btn-dark mt-3" style="font-size: 16px; padding: 12px 24px; background-color: #333; border-color: #333; transition: all 0.3s ease-in-out;">Đặt lịch hẹn</button>
                    </div>
                </div>
            </div>

            <!-- Mục 3: Hỗ trợ khách hàng -->
            <div class="carousel-item">
                <div class="row align-items-center" style="display: flex; align-items: center; justify-content: center; padding: 20px;">
                    <div class="col-md-6" style="flex: 1; padding: 0; margin-right: 20px;">
                        <img src="img\serviceCar.jpg" alt="Hỗ trợ khách hàng" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; transition: transform 0.3s ease-in-out; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col-md-6" style="flex: 1; padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.05)';" onmouseout="this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
                        <h3 style="font-size: 28px; font-weight: 700; color: #333; margin-bottom: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Hỗ trợ khách hàng</h3>
                        <p style="font-size: 18px; color: #666; margin-bottom: 20px; line-height: 1.6;">Chúng tôi luôn sẵn sàng hỗ trợ khách hàng 24/7. Liên hệ ngay để được tư vấn về dịch vụ xe của bạn.</p>
                        <button class="btn btn-dark mt-3" style="font-size: 16px; padding: 12px 24px; background-color: #333; border-color: #333; transition: all 0.3s ease-in-out;">Liên hệ ngay</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Điều khiển Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev"
            style="background-color: transparent; border: none; position: absolute; top: 50%; left: 0; transform: translateY(-50%); z-index: 1;">
            <span class="carousel-control-prev-icon" aria-hidden="true"
                style="width: 40px; height: 40px; background-color: #555; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.2); transition: background-color 0.3s ease;">
                <i class="bi bi-chevron-left" style="color: #fff; font-size: 24px;"></i>
            </span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next"
            style="background-color: transparent; border: none; position: absolute; top: 50%; right: 0; transform: translateY(-50%); z-index: 1;">
            <span class="carousel-control-next-icon" aria-hidden="true"
                style="width: 40px; height: 40px; background-color: #555; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0,0,0,0.2); transition: background-color 0.3s ease;">
                <i class="bi bi-chevron-right" style="color: #fff; font-size: 24px;"></i>
            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




<!-- Nút button clink lên đầu trang -->
<button onclick="scrollToTop()" style="position: fixed; bottom: 20px; right: 20px; padding: 15px 27px; background-color: #000; color: white; border: none; border-radius: 50%; cursor: pointer; font-size: 24px;">
    ↑
</button>

<!-- JavaScript để cuộn lên đầu trang -->
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>




@endsection