-- TẠM THỜI HOÀN THIỆN DÒNG M2SEDAN Ở TẤT CẢ HẠNG MỤC, ĐANG THIẾU BẢNG CUỐI CÙNG I_ACTIVSENSE CẦN BỔ SUNG THÊM

INSERT INTO categories (name, img, created_at, updated_at) VALUES
('Sedan', '/images/sedan.jpg', NOW(), NOW()),
('SUV', '/images/suv.jpg', NOW(), NOW()),
('Hatchback', '/images/hatchback.jpg', NOW(), NOW()),


INSERT INTO users (name, email, email_verified_at, password, test_driver_date, feedback, phone_number, role, address, content, deposit, created_at, updated_at) VALUES
('Nguyễn Văn A', 'nva@example.com', '2023-09-01 12:00:00', '123456', '2023-09-10', 'Xe chạy rất êm, thoải mái.', '0901123456', 'user', '123 Đường ABC, Quận 1', 'Yêu cầu đặt xe sớm nhất', 100000.00, NOW(), NOW()),
('Trần Thị B', 'ttb@example.com', '2023-09-02 12:00:00', '123456', '2023-09-15', 'Cảm thấy hài lòng với dịch vụ.', '0902234567', 'user', '456 Đường DEF, Quận 3', 'Liên hệ tư vấn thêm', 200000.00, NOW(), NOW()),
('Lê Minh C', 'lmc@example.com', '2023-09-03 12:00:00', '123456', '2023-09-20', 'Động cơ mạnh mẽ, vượt trội.', '0903345678', 'user', '789 Đường GHI, Quận 5', 'Chưa quyết định mua', 150000.00, NOW(), NOW()),
('Phạm Thị D', 'ptd@example.com', '2023-09-04 12:00:00', '123456', '2023-09-25', 'Ghế ngồi thoải mái, không gian rộng rãi.', '0904456789', 'user', '101 Đường JKL, Quận 7', 'Có thể đặt cọc thêm', 250000.00, NOW(), NOW()),
('Vũ Văn E', 'vve@example.com', '2023-09-05 12:00:00', '123456', '2023-09-30', 'Tiết kiệm nhiên liệu, hiệu quả cao.', '0905567890', 'user', '202 Đường MNO, Quận 9', 'Cần thêm tư vấn kỹ thuật', 300000.00, NOW(), NOW()),
('Ngô Thị F', 'ntf@example.com', NULL, '123456', '2023-10-05', 'Hài lòng với trải nghiệm lái thử.', '0906678901', 'user', '303 Đường PQR, Quận 2', 'Chưa có phản hồi cụ thể', 180000.00, NOW(), NOW()),
('Đỗ Minh G', 'dmg@example.com', '2023-09-06 12:00:00', '123456', NULL, NULL, '0907789012', 'admin', '404 Đường STU, Quận 6', 'Đang xem xét thêm các tùy chọn', 500000.00, NOW(), NOW()),
('Hoàng Văn H', 'hvh@example.com', '2023-09-07 12:00:00', '123456', '2023-10-10', 'Đánh giá xe ổn định, lái tốt.', '0908890123', 'user', '505 Đường VWX, Quận 8', 'Mua nếu có ưu đãi', 350000.00, NOW(), NOW()),
('Phan Thị I', 'pti@example.com', NULL, '123456', '2023-10-15', 'Không hài lòng với ngoại thất.', '0909901234', 'user', '606 Đường YZ, Quận 10', 'Chưa quyết định', 220000.00, NOW(), NOW()),
('Bùi Văn J', 'bvj@example.com', '2023-09-08 12:00:00', '123456', '2023-10-20', 'Chất lượng dịch vụ tốt, nhân viên hỗ trợ nhiệt tình.', '0910012345', 'admin', '707 Đường ABC, Quận 4', 'Hài lòng với mọi thứ', 400000.00, NOW(), NOW());



INSERT INTO cars (image, name, price, category_id, description, created_at, updated_at) VALUES
('/images/mazda2.jpg', 'New Mazda 2 sedan 1.5 Premium',  508.000.000 , 1, 'Mazda 2 – Sự lựa chọn hoàn hảo cho cuộc sống đô thị hiện đại, với thiết kế nhỏ gọn, tinh tế và khả năng vận hành linh hoạt trên mọi con đường.', NOW(), NOW()),
('/images/mazda3.jpg', 'New Mazda 2 sedan 1.5 Luxury',   484.000.000 , 1, 'Mazda 2 – Sự lựa chọn hoàn hảo cho cuộc sống đô thị hiện đại, với thiết kế nhỏ gọn, tinh tế và khả năng vận hành linh hoạt trên mọi con đường.', NOW(), NOW()),
('/images/mazda3.jpg', 'New Mazda 2 sedan 1.5 AT',   408.000.000  , 1, 'Mazda 2 – Sự lựa chọn hoàn hảo cho cuộc sống đô thị hiện đại, với thiết kế nhỏ gọn, tinh tế và khả năng vận hành linh hoạt trên mọi con đường.', NOW(), NOW()),

('/images/mazda2.jpg', 'New Mazda 2 Sport 1.5 Premium',    544.000.000   , 2, 'Mazda 2 – Sự lựa chọn hoàn hảo cho cuộc sống đô thị hiện đại, với thiết kế nhỏ gọn, tinh tế và khả năng vận hành linh hoạt trên mọi con đường.', NOW(), NOW()),
('/images/mazda2.jpg', 'New Mazda 2 Sport 1.5 AT',   527.000.000  , 2, 'Mazda 2 – Sự lựa chọn hoàn hảo cho cuộc sống đô thị hiện đại, với thiết kế nhỏ gọn, tinh tế và khả năng vận hành linh hoạt trên mọi con đường.', NOW(), NOW()),

('/images/mazda3.jpg', 'All New Mazda 3 sedan 1.5 Signature',  739.000.000 , 3, 'Mazda 3 – Khẳng định phong cách dẫn đầu với thiết kế tinh tế, công nghệ vượt trội và khả năng vận hành mạnh mẽ, mang đến trải nghiệm lái tuyệt vời trong từng khoảnh khắc', NOW(), NOW()),
('/images/mazda3.jpg', 'All New Mazda 3 sedan 1.5 Premium',  729.000.000 , 3, 'Mazda 3 – Khẳng định phong cách dẫn đầu với thiết kế tinh tế, công nghệ vượt trội và khả năng vận hành mạnh mẽ, mang đến trải nghiệm lái tuyệt vời trong từng khoảnh khắc', NOW(), NOW()),
('/images/mazda3.jpg', 'All New Mazda 3 sedan 1.5 Luxury',  624.000.000 , 3, 'Mazda 3 – Khẳng định phong cách dẫn đầu với thiết kế tinh tế, công nghệ vượt trội và khả năng vận hành mạnh mẽ, mang đến trải nghiệm lái tuyệt vời trong từng khoảnh khắc', NOW(), NOW()),
('/images/mazda3.jpg', 'All New Mazda 3 sedan 1.5 Deluxe',  579.000.000 , 3, 'Mazda 3 – Khẳng định phong cách dẫn đầu với thiết kế tinh tế, công nghệ vượt trội và khả năng vận hành mạnh mẽ, mang đến trải nghiệm lái tuyệt vời trong từng khoảnh khắc', NOW(), NOW()),

('/images/mazda3Sport.jpg', 'All New Mazda 3 Sport 1.5 Premium',  679.000.000, 4, 'Mazda 3 Sport – Sự kết hợp hoàn hảo giữa phong cách thể thao và sức mạnh động cơ, giúp bạn tự tin bứt phá trên mọi cung đường, vượt qua mọi giới hạn.', NOW(), NOW()),
('/images/mazda3Sport.jpg', 'All New Mazda 3 Sport 1.5 Luxury',  639.000.000, 4 'Mazda 3 Sport – Sự kết hợp hoàn hảo giữa phong cách thể thao và sức mạnh động cơ, giúp bạn tự tin bứt phá trên mọi cung đường, vượt qua mọi giới hạn.', NOW(), NOW()),

('/images/mazda-cx3.jpg', 'New Mazda CX-3 1.5 Premium', 664.000.000, 5, 'Mazda CX-3 – Đậm chất cá nhân, phong cách hiện đại và đầy cảm hứng, sẵn sàng đồng hành cùng bạn chinh phục mọi hành trình với sự tự tin và đẳng cấp.', NOW(), NOW()),
('/images/mazda-cx3.jpg', 'New Mazda CX-3 1.5 Luxury', 579.000.000, 5, 'Mazda CX-3 – Đậm chất cá nhân, phong cách hiện đại và đầy cảm hứng, sẵn sàng đồng hành cùng bạn chinh phục mọi hành trình với sự tự tin và đẳng cấp.', NOW(), NOW()),
('/images/mazda-cx3.jpg', 'New Mazda CX-3 1.5 Deluxe', 549.000.000, 5, 'Mazda CX-3 – Đậm chất cá nhân, phong cách hiện đại và đầy cảm hứng, sẵn sàng đồng hành cùng bạn chinh phục mọi hành trình với sự tự tin và đẳng cấp.', NOW(), NOW()),
('/images/mazda-cx3.jpg', 'New Mazda CX-3 1.5 AT', 512.000.000, 5, 'Mazda CX-3 – Đậm chất cá nhân, phong cách hiện đại và đầy cảm hứng, sẵn sàng đồng hành cùng bạn chinh phục mọi hành trình với sự tự tin và đẳng cấp.', NOW(), NOW()),

('/images/mazda-cx30.jpg', 'Mazda CX-30', 749.000.000, 6, 'Mazda CX-30 – Vẻ đẹp đột phá, công nghệ hiện đại cùng không gian rộng rãi, mang đến trải nghiệm lái đẳng cấp và những chuyến phiêu lưu đầy cảm hứng', NOW(), NOW()),
('/images/mazda-cx30.jpg', 'Mazda CX-30', 699.000.000, 6, 'Mazda CX-30 – Vẻ đẹp đột phá, công nghệ hiện đại cùng không gian rộng rãi, mang đến trải nghiệm lái đẳng cấp và những chuyến phiêu lưu đầy cảm hứng', NOW(), NOW()),

('/images/mazda-cx5.jpg', 'All New Mazda CX-5 2.0 Deluxe', 749.000.000, 7, 'Mazda CX-3 is a small SUV with agile handling.', NOW(), NOW()),
('/images/mazda-cx5.jpg', 'All New Mazda CX-5 2.0 Luxury', 789.000.000, 7 , 'Mazda CX-3 is a small SUV with agile handling.', NOW(), NOW()),
('/images/mazda-cx5.jpg', 'All New Mazda CX-5 2.0 Premium Active', 819.000,000, 7 , 'Mazda CX-5 – Mẫu xe SUV đa dụng hoàn hảo cho gia đình, mang lại sự an toàn, tiện nghi vượt trội và những hành trình trọn vẹn trong cuộc sống hiện đại.', NOW(), NOW()),
('/images/mazda-cx5.jpg', 'All New Mazda CX-5 2.0 Premium Sport', 849.000.000, 7, 'Mazda CX-5 – Mẫu xe SUV đa dụng hoàn hảo cho gia đình, mang lại sự an toàn, tiện nghi vượt trội và những hành trình trọn vẹn trong cuộc sống hiện đại.', NOW(), NOW()),
('/images/mazda-cx5.jpg', 'All New Mazda CX-5 2.0 Premium Exclusive', 869.000.000, 7 , 'Mazda CX-5 – Mẫu xe SUV đa dụng hoàn hảo cho gia đình, mang lại sự an toàn, tiện nghi vượt trội và những hành trình trọn vẹn trong cuộc sống hiện đại.', NOW(), NOW()),

('/images/mazda-cx8.jpg', 'New Mazda CX-8 2.5 Premium AWD 6S', 1.119.000.000, 8, 'Mazda CX-8 – Đẳng cấp sang trọng, rộng rãi và tiện nghi bậc nhất, đưa cả gia đình bạn đến với những chuyến đi thoải mái và đầy phong cách."', NOW(), NOW()),
('/images/mazda-cx8.jpg', 'New Mazda CX-8 2.5 Premium AWD 7S', 1.109.000.000, 8, 'Mazda CX-8 – Đẳng cấp sang trọng, rộng rãi và tiện nghi bậc nhất, đưa cả gia đình bạn đến với những chuyến đi thoải mái và đầy phong cách."', NOW(), NOW()),
('/images/mazda-cx8.jpg', 'New Mazda CX-8 2.5 Premium', 1.014.000.000, 8, 'Mazda CX-8 – Đẳng cấp sang trọng, rộng rãi và tiện nghi bậc nhất, đưa cả gia đình bạn đến với những chuyến đi thoải mái và đầy phong cách."', NOW(), NOW()),
('/images/mazda-cx8.jpg', 'New Mazda CX-8 2.5 Luxury', 939.000.000, 8, 'Mazda CX-8 – Đẳng cấp sang trọng, rộng rãi và tiện nghi bậc nhất, đưa cả gia đình bạn đến với những chuyến đi thoải mái và đầy phong cách."', NOW(), NOW()),

('/images/mazda6.jpg', 'New Mazda 6 2.5 Sig Premium GTCCC', 899.000.000, 9, 'Mazda 6 Sedan – Sự kết hợp hoàn hảo giữa sang trọng và hiệu suất của phân khúc sedan hạng sang, mang lại trải nghiệm lái mượt mà, đẳng cấp cùng không gian thoải mái, vượt qua mọi kỳ vọng của bạn', NOW(), NOW()),
('/images/mazda6.jpg', 'New Mazda 6 2.0 Premium GTCCC', 815.000.000, 9, 'Mazda 6 Sedan – Sự kết hợp hoàn hảo giữa sang trọng và hiệu suất của phân khúc sedan hạng sang, mang lại trải nghiệm lái mượt mà, đẳng cấp cùng không gian thoải mái, vượt qua mọi kỳ vọng của bạn', NOW(), NOW()),
('/images/mazda6.jpg', 'New Mazda 6 2.0 Premium', 769.000.000, 9, 'Mazda 6 Sedan – Sự kết hợp hoàn hảo giữa sang trọng và hiệu suất của phân khúc sedan hạng sang, mang lại trải nghiệm lái mượt mà, đẳng cấp cùng không gian thoải mái, vượt qua mọi kỳ vọng của bạn', NOW(), NOW()),

INSERT INTO car_details (car_id, size, wheelbase, turning_radius, ground_clearance, curb_weight, gross_weight, cargo_volume, fuel_tank_capacity, deposit_required)
VALUES 
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, '4355 x 1695 x 1470 (mm)', 2570, 5.0, 140, 1109, 1528, 440, 44, 10.000.000);
(NULL, '4355 x 1695 x 1470 (mm)', 2570, 5.0, 140, 1109, 1528, 440, 44, 10.000.000);
(NULL, '4355 x 1695 x 1470 (mm)', 2570, 5.0, 140, 1109, 1528, 440, 44, 10.000.000);

-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
(NULL, '4080 x 1695 x 1515 (mm)', 2570, 5.0, 143, 1029, 1524, 280, 44, 25.000.000);
(NULL, '4080 x 1695 x 1515 (mm)', 2570, 5.0, 143, 1029, 1524, 280, 44, 25.000.000);

-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
(NULL, '4660 x 1795 x 1440', 2725, 5.3, 145, 1330, 1780, 450, 51, 50.000.000);
(NULL, '4660 x 1795 x 1440', 2725, 5.3, 145, 1330, 1780, 450, 51, 50.000.000);
(NULL, '4660 x 1795 x 1440', 2725, 5.3, 145, 1330, 1780, 450, 51, 50.000.000);
(NULL, '4660 x 1795 x 1440', 2725, 5.3, 145, 1330, 1780, 450, 51, 50.000.000);

-- Mazda 3 Sport 1.5 Premium, Luxury
(NULL, '4460 x 1795 x 1435 (mm)', 2725, 5.3, 145, 1340, 1790, 334, 51, 30.000.000);
(NULL, '4460 x 1795 x 1435 (mm)', 2725, 5.3, 145, 1340, 1790, 334, 51, 30.000.000);

-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
(NULL, '4,275 x 1,765 x 1,535 (mm)', 2570, 5.3, 155, 1264, 1695, 350, 48, 20.000.000);
(NULL, '4,275 x 1,765 x 1,535 (mm)', 2570, 5.3, 155, 1264, 1695, 350, 48, 20.000.000);

-- Mazda CX-30 2.0 Premium, Luxury
(NULL, '4,395 x 1,795 x 1,540 (mm)', 2655, 5.3, 175, 1441, 1936, 430, 51, 20.000.000);
(NULL, '4,395 x 1,795 x 1,540 (mm)', 2655, 5.3, 175, 1441, 1936, 430, 51, 20.000.000);

-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
(NULL, '4,590 x 1,845 x 1,680 (mm)', 2700, 5.5, 200, 1550, 2000, 442, 56, 100.000.000);
(NULL, '4,590 x 1,845 x 1,680 (mm)', 2700, 5.5, 200, 1550, 2000, 442, 56, 100.000.000);
(NULL, '4,590 x 1,845 x 1,680 (mm)', 2700, 5.5, 200, 1550, 2000, 442, 56, 100.000.000);
(NULL, '4,590 x 1,845 x 1,680 (mm)', 2700, 5.5, 200, 1550, 2000, 442, 56, 100.000.000);
(NULL, '4,590 x 1,845 x 1,680 (mm)', 2700, 5.5, 200, 1550, 2000, 442, 56, 100.000.000);

-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
(NULL, '4900 x 1840 x 1730 (mm)', 2930, 5.8, 200, 1770, 2365, 209, 72, 60.000.000);
(NULL, '4900 x 1840 x 1730 (mm)', 2930, 5.8, 200, 1770, 2365, 209, 72, 60.000.000);
(NULL, '4900 x 1840 x 1730 (mm)', 2930, 5.8, 200, 1770, 2365, 209, 72, 60.000.000);
(NULL, '4900 x 1840 x 1730 (mm)', 2930, 5.8, 200, 1770, 2365, 209, 72, 60.000.000);

-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium
(NULL, '4865 x 1840 x 1450', 2830, 5.6, 165, 1520, 1970, 480, 62, 50.000.000);
(NULL, '4865 x 1840 x 1450', 2830, 5.6, 165, 1520, 1970, 480, 62, 50.000.000);

INSERT INTO blogs (user_id, title, img, content, created_at, updated_at) VALUES
-- M2 sedan Premium, Luxury, AT
(NULL, 'Mazda 2 Sedan 1.5 Premium - Phong cách và hiệu suất vượt trội', 'mazda2_premium.jpg', 
'Mazda 2 Sedan 1.5 Premium là sự lựa chọn hoàn hảo cho những ai tìm kiếm một chiếc sedan nhỏ gọn, 
linh hoạt nhưng vẫn đậm chất sang trọng. Được trang bị động cơ Skyactiv-G 1.5L tiết kiệm nhiên liệu cùng với
 hệ thống an toàn i-Activsense hiện đại, Mazda 2 Premium không chỉ mang lại cảm giác lái mượt mà mà 
 còn đảm bảo sự an toàn tối ưu trên mọi hành trình.', NOW(), NOW());
(NULL, 'Mazda 2 Sedan 1.5 Luxury - Phong cách và hiệu suất vượt trội', 'mazda2_Luxury.jpg', 
'Mazda 2 Sedan 1.5 Luxury là sự lựa chọn hoàn hảo cho những ai tìm kiếm một chiếc sedan nhỏ gọn, 
linh hoạt nhưng vẫn đậm chất sang trọng. Được trang bị động cơ Skyactiv-G 1.5L tiết kiệm nhiên liệu cùng với
 hệ thống an toàn i-Activsense hiện đại, Mazda 2 không chỉ mang lại cảm giác lái mượt mà mà 
 còn đảm bảo sự an toàn tối ưu trên mọi hành trình.', NOW(), NOW());
(NULL, 'Đánh giá Mazda 2 Sedan 1.5 AT - Tinh tế trong từng chi tiết', 'mazda2-sedan-1.5-at-review.jpg',
   'Mazda 2 Sedan 1.5 AT là một trong những lựa chọn nổi bật trong phân khúc xe cỡ nhỏ, mang đến sự kết hợp
   hoàn hảo giữa phong cách thể thao và tính năng hiện đại. Với động cơ 1.5L mạnh mẽ, hệ thống điều hòa 
	tự động và công nghệ an toàn tiên tiến, đây là mẫu xe lý tưởng cho các gia đình trẻ và những người yêu
	thích sự di chuyển linh hoạt.', NOW(), NOW());
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
(NULL, 'New Mazda 2 Sport 1.5 Premium – Thể thao và đẳng cấp trên từng hành trình', 'new-mazda2-sport-1.5-premium.jpg', 
'New Mazda 2 Sport 1.5 Premium là biểu tượng của phong cách thể thao và sang trọng. 
Với động cơ SkyActiv 1.5L mạnh mẽ, xe mang lại trải nghiệm lái linh hoạt và tiết kiệm nhiên liệu tối ưu. 
Ngoại thất sắc sảo với những đường nét tinh tế, kết hợp cùng nội thất hiện đại và các tính năng thông minh
 như màn hình cảm ứng 7 inch, hệ thống điều hòa tự động, và hệ thống giải trí kết nối Apple CarPlay/Android Auto. 
 Xe còn được trang bị hệ thống an toàn i-Activsense, bao gồm cảnh báo điểm mù, hỗ trợ giữ làn đường và 
 phanh tự động khẩn cấp, mang đến sự an toàn tối đa cho người lái.', 
NOW(), NOW());
(NULL, 'Khám phá New Mazda 2 Sport 1.5 AT – Xe thể thao dành cho người trẻ', 'mazda2-sport-dynamic.jpg', 
'New Mazda 2 Sport 1.5 AT mang phong cách thể thao và hiện đại với ngoại hình 
nhỏ gọn nhưng không kém phần tinh tế. Xe phù hợp với người trẻ thích khám phá và 
di chuyển linh hoạt trong đô thị. Hệ thống truyền động SkyActiv, hộp số tự động 6 
cấp giúp xe tăng tốc mạnh mẽ và vận hành êm ái. Hệ thống điều hòa tự động và ghế da 
cao cấp mang đến sự thoải mái tối đa. Đây là lựa chọn lý tưởng cho những ai yêu thích cảm giác lái thể thao và an toàn.', 
NOW(), NOW());

-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
(NULL, 
'Mazda 3 Sedan 1.5 Signature – Thiết kế đẳng cấp, công nghệ tiên tiến', 
'mazda3-sedan-signature.jpg', 
'Mazda 3 Sedan 1.5 Signature là sự kết hợp hoàn hảo giữa phong cách sang trọng và công nghệ hiện đại. Thiết kế ngoại thất của xe mang đến vẻ đẹp thanh lịch, với những đường nét tinh tế tạo nên sự khác biệt. Động cơ SkyActiv 1.5L không chỉ giúp xe vận hành mạnh mẽ mà còn tiết kiệm nhiên liệu đáng kể. Các tính năng công nghệ như hệ thống cảnh báo điểm mù, ga tự động Cruise Control, và hệ thống giải trí tích hợp Apple CarPlay, Android Auto giúp người lái có những trải nghiệm thoải mái và an toàn tuyệt đối.', 
NOW(), NOW()),
(NULL, 
'Mazda 3 Sedan 1.5 Premium – Đỉnh cao của sự tinh tế và đẳng cấp', 
'mazda3-sedan-15-premium.jpg', 
'Mazda 3 Sedan 1.5 Premium là biểu tượng của phong cách sang trọng và công nghệ tiên tiến. Với thiết kế KODO nổi tiếng, từng chi tiết trên xe đều toát lên sự tinh tế và hiện đại. Động cơ SkyActiv 1.5L mang lại hiệu suất mạnh mẽ nhưng vẫn tiết kiệm nhiên liệu, phù hợp cho những hành trình dài. Nội thất cao cấp với ghế da, màn hình cảm ứng 8.8 inch, hệ thống âm thanh 8 loa Bose cùng hệ thống điều hòa 2 vùng tự động, tất cả nhằm mang đến trải nghiệm lái xe thoải mái và đầy cảm hứng.', 
NOW(), NOW()),
(NULL, 
'Mazda 3 Sedan 1.5 Deluxe – Phong cách đẳng cấp, hiệu suất vượt trội', 
'mazda3-sedan-15-deluxe.jpg', 
'Mazda 3 Sedan 1.5 Deluxe sở hữu thiết kế hiện đại và thanh lịch, là sự kết hợp hoàn hảo giữa vẻ đẹp thẩm mỹ và công nghệ tiên tiến. Động cơ SkyActiv 1.5L giúp xe vận hành mạnh mẽ và tiết kiệm nhiên liệu tối ưu. Hệ thống an toàn i-ActivSense bao gồm hỗ trợ phanh tự động, cảnh báo lệch làn đường và cảnh báo điểm mù giúp đảm bảo an toàn tối đa cho mọi chuyến đi. Nội thất sang trọng với ghế da cao cấp, màn hình giải trí 8 inch tích hợp Apple CarPlay và Android Auto, mang đến trải nghiệm lái xe đẳng cấp và tiện nghi.', 
NOW(), NOW()),
(NULL, 
'Mazda 3 Sedan 1.5 AT – Phiên bản giá hợp lý, hiệu suất vừa đủ', 
'mazda3-sedan-15at.jpg', 
'Mazda 3 Sedan 1.5 AT phiên bản thấp mang đến một lựa chọn hấp dẫn cho những ai tìm kiếm một mẫu xe với thiết kế đẹp mắt, vận hành ổn định, nhưng không cần quá nhiều công nghệ hiện đại. Xe trang bị động cơ SkyActiv 1.5L, đủ để cung cấp sức mạnh vừa phải và tiết kiệm nhiên liệu. Tuy nhiên, phiên bản này thiếu một số tính năng cao cấp như ghế chỉnh điện, màn hình cảm ứng lớn hay hệ thống điều hòa tự động. Đây là lựa chọn phù hợp với những khách hàng không quá chú trọng vào công nghệ, nhưng muốn có một chiếc xe sedan ổn định và đáng tin cậy.', 
NOW(), NOW()),

-- Mazda 3 Sport 1.5 Premium, Luxury
(NULL, 
'Mazda 3 Sport 1.5 Premium – Đỉnh cao của phong cách và công nghệ', 
'mazda3-sport-1-5-premium.jpg', 
'Mazda 3 Sport 1.5 Premium bản full option sở hữu thiết kế ngoại thất tinh tế và sắc sảo, 
với những đường nét thể thao nổi bật. Xe được trang bị động cơ SkyActiv 1.5L mang đến 
hiệu suất vận hành mạnh mẽ, kết hợp với hộp số tự động 6 cấp, tạo cảm giác lái mượt mà 
và tối ưu hóa hiệu quả nhiên liệu. Các tính năng an toàn cao cấp bao gồm hệ thống cảnh 
báo điểm mù, hỗ trợ giữ làn đường và phanh tự động thông minh. Nội thất sang trọng với
ghế da cao cấp, màn hình cảm ứng 8.8 inch và hệ thống âm thanh Bose 12 loa, tạo không
gian giải trí đẳng cấp trong mọi hành trình.', 
NOW(), NOW()),

(NULL, 
'Khám phá Mazda 3 Sport 1.5 Luxury – Xe thể thao với công nghệ hàng đầu', 
'mazda3-sport-premium-dynamic.jpg', 
'Mazda 3 Sport 1.5 Premium bản full option là sự lựa chọn hoàn hảo cho những ai tìm kiếm
 một chiếc xe có thiết kế thể thao, hiệu suất vượt trội và tiện nghi hàng đầu.
Được trang bị động cơ SkyActiv 1.5L và hộp số tự động 6 cấp, xe không chỉ mang 
lại khả năng vận hành mạnh mẽ mà còn tiết kiệm nhiên liệu đáng kể.
Hệ thống an toàn chủ động i-Activsense và các tính năng hiện đại như hệ thống
đèn LED thích ứng, camera 360 độ và điều hòa tự động 2 vùng khí hậu mang lại sự an toàn và thoải mái tối đa cho người lái'

-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Dữ liệu cho Mazda CX-3 1.5 Premium bản full option
(NULL, 
'Mazda CX-3 1.5 Premium – Đẳng cấp và tiện nghi vượt trội', 
'mazda-cx3-premium.jpg', 
'Mazda CX-3 1.5 Premium bản full option mang đến trải nghiệm lái vượt trội với thiết kế SUV nhỏ gọn, phù hợp với nhu cầu di chuyển linh hoạt trong đô thị. Xe được trang bị động cơ SkyActiv-G 1.5L cho công suất mạnh mẽ và tiết kiệm nhiên liệu đáng kể. Các tính năng an toàn cao cấp của i-Activsense như cảnh báo chệch làn, hỗ trợ phanh tự động và giám sát điểm mù giúp người lái cảm thấy yên tâm trên mọi cung đường. Nội thất sang trọng với ghế da cao cấp, màn hình HUD hiển thị thông tin lái và hệ thống âm thanh Bose giúp nâng tầm trải nghiệm hành trình.', 
NOW(), NOW()),
(NULL, 
'Khám phá Mazda CX-3 1.5 Luxury – Sự kết hợp hoàn hảo giữa phong cách và công nghệ', 
'cx3-premium-sport.jpg', 
'Mazda CX-3 1.5 Premium là chiếc SUV nhỏ gọn nhưng sở hữu phong cách thiết kế mạnh mẽ và công nghệ hiện đại. Xe được trang bị động cơ SkyActiv-G 1.5L và hệ thống truyền động 6 cấp, cho khả năng tăng tốc ấn tượng và tiết kiệm nhiên liệu tối ưu. Không gian nội thất rộng rãi với màn hình giải trí 7 inch, điều hòa tự động và hệ thống điều khiển bằng giọng nói giúp nâng cao tiện nghi sử dụng. Hệ thống an toàn chủ động i-Activsense giúp bảo vệ người lái và hành khách trên mọi hành trình với các tính năng như cảnh báo điểm mù, phanh khẩn cấp thông minh và camera 360 độ.', 
NOW(), NOW());
-- Dữ liệu cho Mazda CX-3 1.5 Luxury (đầy đủ công nghệ)
(NULL, 
'Mazda CX-3 1.5 Luxury – Sang trọng và công nghệ hiện đại', 
'mazda-cx3-luxury.jpg', 
'Mazda CX-3 1.5 Luxury là phiên bản sở hữu công nghệ hiện đại và sang trọng, đáp ứng nhu cầu cao của người dùng. Xe trang bị động cơ SkyActiv-G 1.5L kết hợp với hộp số tự động 6 cấp, mang đến hiệu suất vận hành ấn tượng. Phiên bản này được trang bị đầy đủ hệ thống an toàn i-Activsense như cảnh báo chệch làn đường, phanh tự động thông minh và hỗ trợ giữ làn đường. Nội thất tiện nghi với màn hình cảm ứng 7 inch, hệ thống điều hòa tự động và kết nối Apple CarPlay/Android Auto, mang lại sự thoải mái và kết nối tối ưu cho người dùng.', 
NOW(), NOW()),
-- Dữ liệu cho Mazda CX-3 1.5 AT (thiếu công nghệ và trang bị)
(NULL, 
'Mazda CX-3 1.5 AT – Tinh tế nhưng tiết kiệm', 
'mazda-cx3-at.jpg', 
'Mazda CX-3 1.5 AT là phiên bản tiêu chuẩn với trang bị cơ bản, dành cho những người tìm kiếm sự tiết kiệm mà vẫn muốn trải nghiệm chất lượng của dòng xe Mazda. Xe vẫn sử dụng động cơ SkyActiv-G 1.5L, mang đến khả năng vận hành tốt, tuy nhiên không có các tính năng cao cấp như cảnh báo điểm mù, hỗ trợ giữ làn đường hay phanh tự động thông minh. Phiên bản này chỉ trang bị màn hình giải trí thông thường và điều hòa chỉnh tay. Đây là lựa chọn hợp lý cho người dùng cần một chiếc SUV nhỏ gọn với giá thành hợp lý.', 
NOW(), NOW());

-- Mazda CX-30 2.0 Premium, Luxury
-- Dữ liệu cho Mazda CX-30 2.0 Premium
(NULL, 
'Mazda CX-30 2.0 Premium – Sang trọng và công nghệ tiên tiến', 
'mazda-cx30-premium.jpg', 
'Mazda CX-30 2.0 Premium mang đến trải nghiệm lái đẳng cấp với thiết kế tinh tế và hiệu suất mạnh mẽ. Được trang bị động cơ SkyActiv-G 2.0L, xe cung cấp khả năng vận hành mượt mà và tiết kiệm nhiên liệu vượt trội. Hệ thống an toàn i-Activsense với nhiều tính năng hiện đại như cảnh báo điểm mù, hỗ trợ giữ làn đường và hệ thống phanh tự động thông minh, giúp bảo vệ toàn diện cho người lái và hành khách. Nội thất rộng rãi với ghế da cao cấp, hệ thống điều hòa tự động 2 vùng và hệ thống giải trí với màn hình cảm ứng 8.8 inch kết nối Apple CarPlay và Android Auto.', 
NOW(), NOW()),
-- Dữ liệu cho Mazda CX-30 2.0 Luxury
(NULL, 
'Mazda CX-30 2.0 Luxury – Sự kết hợp hoàn hảo giữa phong cách và tiện nghi', 
'mazda-cx30-luxury.jpg', 
'Mazda CX-30 2.0 Luxury là sự lựa chọn hoàn hảo cho những ai tìm kiếm sự cân bằng giữa phong cách sang trọng và tiện nghi hiện đại. Xe được trang bị động cơ 2.0L mạnh mẽ và hệ thống treo êm ái, mang lại trải nghiệm lái đầy hứng khởi. Hệ thống an toàn bao gồm cảnh báo va chạm, hỗ trợ phanh tự động và camera 360 độ giúp tăng cường khả năng quan sát và xử lý tình huống. Nội thất được bọc da cao cấp với ghế chỉnh điện, hệ thống âm thanh Bose sống động và không gian chứa đồ rộng rãi, mang đến sự tiện nghi tối đa trong mọi chuyến đi.', 
NOW(), NOW());

-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Dữ liệu cho Mazda CX-5 2.0 Premium Exclusive
(NULL, 
'Mazda CX-5 2.0 Premium Exclusive – Đẳng cấp và sang trọng', 
'mazda-cx5-exclusive.jpg', 
'Mazda CX-5 2.0 Premium Exclusive là lựa chọn hoàn hảo cho những ai tìm kiếm sự kết hợp giữa phong cách và tiện nghi hiện đại. Với ngoại thất sang trọng và nội thất bọc da cao cấp, CX-5 Exclusive mang đến không gian thoải mái và tinh tế. Xe trang bị động cơ SkyActiv 2.0L mạnh mẽ, hệ thống an toàn i-Activsense và hệ thống điều khiển hành trình thông minh, mang đến sự an toàn và tự tin khi lái xe.', 
NOW(), NOW()),
-- Dữ liệu cho Mazda CX-5 2.0 Premium Sport
(NULL, 
'Mazda CX-5 2.0 Premium Sport – Sức mạnh và thể thao', 
'mazda-cx5-sport.jpg', 
'Với thiết kế thể thao và hiệu suất vượt trội, Mazda CX-5 2.0 Premium Sport mang đến trải nghiệm lái mạnh mẽ và đầy cảm xúc. Động cơ SkyActiv-G 2.0L giúp xe vận hành mượt mà và tiết kiệm nhiên liệu. Các tính năng an toàn tiên tiến như hệ thống cảnh báo điểm mù, hỗ trợ phanh thông minh và cảnh báo lệch làn đường giúp bạn an tâm trên mọi hành trình. CX-5 Sport không chỉ là một chiếc SUV mạnh mẽ mà còn sở hữu phong cách thể thao hiện đại.', 
NOW(), NOW()),
-- Dữ liệu cho Mazda CX-5 2.0 Premium Active
(NULL, 
'Mazda CX-5 2.0 Premium Active – Tinh tế trong từng chi tiết', 
'mazda-cx5-active.jpg', 
'Mazda CX-5 2.0 Premium Active là sự kết hợp giữa hiệu suất và sự thoải mái. Ngoại thất mạnh mẽ, khỏe khoắn cùng các tính năng nội thất hiện đại như hệ thống điều hòa tự động 2 vùng, ghế lái chỉnh điện và hệ thống thông tin giải trí tiên tiến. Động cơ SkyActiv-G 2.0L mang đến khả năng vận hành êm ái và linh hoạt. Phiên bản này đặc biệt phù hợp với những ai yêu thích sự tiện nghi và hiện đại trong một chiếc SUV cỡ vừa.', 
NOW(), NOW()),
-- Dữ liệu cho Mazda CX-5 2.0 Premium Luxury
(NULL, 
'Mazda CX-5 2.0 Premium Luxury – Sự lựa chọn tinh tế cho gia đình', 
'mazda-cx5-luxury.jpg', 
'Phiên bản Mazda CX-5 2.0 Premium Luxury mang đến không gian rộng rãi và các tính năng tiện nghi hiện đại. Hệ thống an toàn i-Activsense giúp bảo vệ hành khách trong mọi tình huống. Nội thất sang trọng với ghế bọc da cao cấp, hệ thống âm thanh Bose 10 loa và màn hình cảm ứng 8 inch tạo không gian giải trí đẳng cấp. Đây là sự lựa chọn lý tưởng cho các gia đình muốn trải nghiệm sự sang trọng và tiện nghi khi di chuyển.', 
NOW(), NOW()),

-- Dữ liệu cho Mazda CX-5 2.0 Premium Deluxe
(NULL, 
'Mazda CX-5 2.0 Premium Deluxe – Phong cách đỉnh cao và công nghệ vượt trội', 
'mazda-cx5-deluxe.jpg', 
'Mazda CX-5 2.0 Premium Deluxe nổi bật với phong cách thiết kế đẳng cấp và các tính năng công nghệ hiện đại. Động cơ SkyActiv-G 2.0L mạnh mẽ và hệ thống an toàn i-Activsense giúp xe vận hành an toàn trên mọi địa hình. Nội thất bọc da cao cấp, ghế lái chỉnh điện 8 hướng, điều hòa tự động và hệ thống giải trí với Apple CarPlay và Android Auto mang đến trải nghiệm lái thoải mái và đầy tiện nghi. Phiên bản Deluxe chắc chắn sẽ làm hài lòng những khách hàng khó tính nhất.', 
NOW(), NOW());

-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Dữ liệu cho Mazda CX-8 2.5 Premium 2 cầu bản 6 ghế
(NULL, 
'Mazda CX-8 2.5 Premium 2 cầu 6 ghế – Sự lựa chọn đẳng cấp cho gia đình', 
'mazda-cx8-2.5-premium-6-seat.jpg', 
'Mazda CX-8 2.5 Premium 2 cầu bản 6 ghế mang đến trải nghiệm lái mạnh mẽ với hệ dẫn động 2 cầu toàn thời gian, kết hợp động cơ 2.5L SkyActiv-G. Thiết kế sang trọng, không gian nội thất rộng rãi với 6 ghế da cao cấp, tạo sự thoải mái tối đa cho cả gia đình. Các tính năng an toàn hàng đầu như hỗ trợ phanh tự động, cảnh báo chệch làn đường và ga tự động thích ứng giúp đảm bảo an toàn tuyệt đối trên mọi hành trình.', 
NOW(), NOW()),

-- Dữ liệu cho Mazda CX-8 Premium cao cấp bản 7 ghế
(NULL, 
'Mazda CX-8 Premium cao cấp 7 ghế – Không gian rộng rãi cho cả gia đình', 
'mazda-cx8-premium-7-seat.jpg', 
'Mazda CX-8 Premium bản 7 ghế cao cấp được thiết kế để mang lại sự tiện nghi tối đa cho những gia đình đông thành viên. Với động cơ 2.5L và hộp số tự động 6 cấp, xe không chỉ mang lại hiệu suất vượt trội mà còn tiết kiệm nhiên liệu. Ngoài ra, các tính năng công nghệ như màn hình giải trí 10.25 inch, hệ thống điều hòa tự động 3 vùng khí hậu và dàn âm thanh Bose 10 loa mang lại không gian tiện nghi và đẳng cấp cho mỗi chuyến đi.', 
NOW(), NOW()),

-- Dữ liệu cho Mazda CX-8 Premium bản đầy đủ
(NULL, 
'Mazda CX-8 Premium bản đầy đủ – Hoàn hảo cho mọi hành trình', 
'mazda-cx8-premium-full.jpg', 
'Mazda CX-8 Premium bản đầy đủ mang đến sự kết hợp hoàn hảo giữa thiết kế sang trọng, không gian rộng rãi và công nghệ tiên tiến. Động cơ 2.5L mạnh mẽ kết hợp với hệ thống an toàn i-Activsense, bao gồm cảnh báo điểm mù, hỗ trợ phanh khẩn cấp và điều khiển hành trình thích ứng, giúp bạn yên tâm trên mọi nẻo đường. Hàng ghế thứ hai có thể gập 60/40, linh hoạt với nhu cầu vận chuyển đồ hoặc hành khách.', 
NOW(), NOW()),

-- Dữ liệu cho Mazda CX-8 Luxury bản cắt công nghệ trang bị
(NULL, 
'Mazda CX-8 Luxury – Phiên bản tinh giản với mức giá hợp lý', 
'mazda-cx8-luxury.jpg', 
'Mazda CX-8 Luxury là sự lựa chọn hoàn hảo cho những ai tìm kiếm một chiếc SUV rộng rãi với mức giá hợp lý. Mặc dù đã cắt giảm một số công nghệ tiên tiến so với bản Premium, nhưng Luxury vẫn giữ nguyên những tính năng thiết yếu như động cơ SkyActiv-G 2.5L, hệ thống điều hòa 3 vùng khí hậu và hệ thống thông tin giải trí 8 inch. Với mức giá cạnh tranh, đây là lựa chọn lý tưởng cho gia đình cần một chiếc xe vừa đủ tiện nghi mà vẫn tiết kiệm chi phí.', 
NOW(), NOW());

-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium
 INSERT INTO blogs (user_id, title, img, content, created_at, updated_at) VALUES
-- Dữ liệu cho Mazda 6 Signature Premium GTCCC
(NULL, 
'Mazda 6 Signature Premium GTCCC – Tinh hoa của sự sang trọng và hiệu suất vượt trội', 
'mazda6-signature-gtccc.jpg', 
'Mazda 6 Signature Premium GTCCC là đỉnh cao của thiết kế sang trọng và công nghệ tiên tiến. Với động cơ SkyActiv 2.5L mạnh mẽ và hệ dẫn động tiên tiến, xe mang đến trải nghiệm lái đầy phấn khích. Phiên bản này còn nổi bật với hệ thống treo cải tiến, đem lại cảm giác lái êm ái và ổn định trên mọi địa hình. Nội thất cao cấp với ghế bọc da Nappa, điều hòa 2 vùng độc lập và hệ thống âm thanh Bose 12 loa tạo nên không gian tiện nghi và đẳng cấp cho chủ nhân. Các tính năng an toàn chủ động như phanh tự động, cảnh báo va chạm và giữ làn đường giúp người lái yên tâm trên mọi hành trình.', 
NOW(), NOW()),

-- Dữ liệu cho Mazda 6 Premium với gói tùy chọn cao cấp
(NULL, 
'Mazda 6 Premium với gói tùy chọn cao cấp – Đẳng cấp và tiện nghi vượt trội', 
'mazda6-premium-highend.jpg', 
'Phiên bản Mazda 6 Premium với gói tùy chọn cao cấp là lựa chọn hoàn hảo cho những ai yêu thích sự tinh tế và hiện đại. Động cơ SkyActiv 2.5L không chỉ mạnh mẽ mà còn tiết kiệm nhiên liệu tối ưu. Gói tùy chọn cao cấp bổ sung thêm nhiều tính năng vượt trội như màn hình HUD hiển thị thông tin trên kính lái, ghế lái chỉnh điện có nhớ vị trí và chức năng sưởi ghế, cùng cửa sổ trời toàn cảnh mang lại trải nghiệm tuyệt vời cho hành khách. Hệ thống an toàn i-Activsense, bao gồm camera 360 độ, cảnh báo điểm mù và ga tự động thông minh, giúp tăng cường an toàn tối đa trên mọi cung đường.', 
NOW(), NOW());

-- Insert dữ liệu vào bảng engine_transmissions
INSERT INTO engine_transmissions (engine_transmission, car_id, type_engine, fuel_system, cylinder_capacity, max_power, max_torque, tranmission, sport_mode, GVC_sysem, iStop, created_at, updated_at)
VALUES
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, NULL, 'Skyactiv-G 1.5L', 'Phun xăng trực tiếp', 1496, 110/6000, 144/4000, '6AT', true, 'GVC Plus', false, NOW(), NOW()),
(NULL, NULL, 'Skyactiv-G 1.5L', 'Phun xăng trực tiếp', 1496, 110/6000, 144/4000, '6AT', true, 'GVC Plus', true, NOW(), NOW()),
(NULL NULL, 'Skyactiv-G 1.5L', 'Phun xăng trực tiếp', 1496, 110/6000, 144/4000, '6AT', true, 'GVC Plus', true, NOW(), NOW()),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
(NULL, NULL, 'Skyactiv-G 1.5L', 'Phun xăng trực tiếp', 1496, 110/6000, 144/4000, '6AT', true, 'GVC Plus', true, NOW(), NOW()),
(NULL, NULL, 'Skyactiv-G 1.5L', 'Phun xăng trực tiếp', 1496, 110/6000, 144/4000, '6AT', true, 'GVC Plus', true, NOW(), NOW());
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT

-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium


-- Chèn dữ liệu giả lập cho bảng chassis
INSERT INTO chassis (chassis_id, car_id, front_suspension, rear_suspension, drive_train, front_brake, rear_brake, steering_assistance, size_tire, weel_diameter, created_at, updated_at)
VALUES
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, NULL, 'MacPherson', 'Thanh xoắn', 'Cầu trước (FWD)','Đĩa thông gió', 'Đĩa đặc', 'Trợ lực điện', '185/65 R15', '15''', NOW(), NOW()),
(NULL, NULL, 'MacPherson', 'Thanh xoắn', 'Cầu trước (FWD)','Đĩa thông gió', 'Đĩa đặc', 'Trợ lực điện', '185/60 R16', '16''', NOW(), NOW()),
(NULL, NULL, 'MacPherson', 'Thanh xoắn', 'Cầu trước (FWD)','Đĩa thông gió', 'Đĩa đặc', 'Trợ lực điện', '185/60 R16', '16''', NOW(), NOW()),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
(NULL, NULL, 'MacPherson', 'Thanh xoắn', 'Cầu trước (FWD)','Đĩa', 'Đĩa', 'Trợ lực điện', '185/60 R16', '16''', NOW(), NOW()),
(NULL, NULL, 'MacPherson', 'Thanh xoắn', 'Cầu trước (FWD)','Đĩa', 'Đĩa', 'Trợ lực điện', '185/60 R16', '16''', NOW(), NOW()),
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium


-- Chèn dữ liệu giả lập cho các dòng xe Mazda
INSERT INTO exteriors (car_id, low_beam, hight_beam, LEDLight_Day, auto_headlights, auto_leveling, power_mirror, auto_folding, auto_wipers, rear_LEDLight, sunroof, double_exhaust)
VALUES
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, 'LED', 'LED', 'halogen', FALSE, TRUE, 'Chỉ chỉnh điện, báo rẽ', FALSE, TRUE, 'Halogen', FALSE, FALSE),
(NULL, 'LED', 'LED', 'LED', true, TRUE, 'Gập điện/chỉnh điện', TRUE, TRUE, 'Halogen', FALSE, FALSE),
(NULL, 'LED', 'LED', 'LED', true, TRUE, 'Gập điện/chỉnh điện', TRUE, TRUE, 'Halogen', FALSE, FALSE),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium
-- Mazda 3


INSERT INTO interiors (car_id, seat_material, driverSeat_Electric, driverSeat_Memory, passengerSeat_Electric, DCV_player, touchscreen, connectBluetooth_AUX_USB, speaker, paddler_shifter, brakeHand_electric, autoHold, Buton_engine, cruise_control, auto_climate, rear_airvents, window_electric, autoDimming_mirror, HUD, window2nd_sunshadesCenter, window2nd_sunshades, armrest, armrest_USB, rearSeatsFold60_40, created_at, updated_at) 
VALUES 
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, 'Nỉ', 'Chỉnh cơ', FALSE, 'Chỉnh cơ', 'Màn hình Analog + Digital', FALSE, '4 loa tiêu chuẩn', FALSE, FALSE, FALSE, TRUE, FALSE, '1 vùng', FALSE, 'Một chạm ghế lái', FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, NOW(), NOW()),
(NULL, 'Da + Nỉ', 'Chỉnh cơ', FALSE, 'Chỉnh cơ', '7inh', TRUE, '6 loa tiêu chuẩn', TRUE, FALSE, FALSE, TRUE, TRUE, '1 vùng', FALSE, 'Một chạm ghế lái', TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE,NOW(), NOW()),
(NULL, 'Da + Nỉ', 'Chỉnh cơ', FALSE, 'Chỉnh cơ', '7inh', TRUE, '6 loa tiêu chuẩn', TRUE, FALSE, FALSE, TRUE, TRUE, '1 vùng', FALSE, 'Một chạm ghế lái', TRUE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE,NOW(), NOW()),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium


INSERT INTO safeties (car_id, air_bag, abs, ebd, eba, ess, dsc, tcs, hla, immobilizer, burgler_alarm, rear_camera, front_sensor, rear_sensor, camera360, seatbelt_warning)
VALUES
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, 2, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE, FALSE, TRUE),
(NULL, 2, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, TRUE),
(NULL, 6, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, TRUE),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium

-- Insert data about 'fuel_consumptions' table
INSERT INTO fuel_consumptions (car_id, city_consumption, hightway_consumption, total_consumption, created_at, updated_at)
VALUES
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
(NULL, 7.91, 5.07, 6.11, NOW(), NOW()),
(NULL, 7.13, 4.82, 5.66, NOW(), NOW()),
(NULL, 7.49, 4.9, 5.84, NOW(), NOW()),
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium


-- CHÚ THÍCH TỔNG HỢP CÁC DÒNG XE
-- Dòng xe New Mazda 2 sedan 1.5 Premium, Luxury, AT
-- Dòng xe New Mazda 2 Sport 1.5 Premium, AT
-- Mazda 3 Sedan 1.5 Signature, Premium, Luxury, Deluxe, AT
-- Mazda 3 Sport 1.5 Premium, Luxury
-- Mazda CX-3 1.5 Premium, Luxury, Deluxe, AT
-- Mazda CX-30 2.0 Premium, Luxury
-- Mazda CX-5 2.0 Premium Exclusive, Sport, Active, Luxury, Deluxe
-- Mazda CX-8 2.5 Premium AWD 6S, Premium AWD 7S, Premium, Luxury
-- Mazda 6 Sig Premium GTCCC, Premium GTCCC, Premium

