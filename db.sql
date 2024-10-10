CREATE TABLE `categories` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `img` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`id`) USING BTREE
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

CREATE TABLE `cars` (
    `car_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `image` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `price` DECIMAL(10, 2) NOT NULL,
    `category_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `description` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`car_id`),
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=INNODB;

CREATE TABLE `car_details` (
    `detail_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, -- Định danh chi tiết
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `size` DECIMAL(10, 2) NOT NULL,
    `wheelbase` DECIMAL(10, 2) NOT NULL, -- Chiều dài cơ sở
    `turning_radius` DECIMAL(10, 2) NOT NULL, -- Bán kính vòng quay
    `ground_clearance` DECIMAL(10, 2) NOT NULL, -- Khoảng sáng gầm
    `curb_weight` DECIMAL(10, 2) NOT NULL, -- Khối lượng không tải
    `gross_weight` DECIMAL(10, 2) NOT NULL, -- Khối lượng toàn tải
    `cargo_volume` INT NOT NULL, -- Thể tích khoang hành lý
    `fuel_tank_capacity` INT NOT NULL, -- Dung tích bình nhiên liệu
    `deposit_required` DECIMAL(10, 2) NOT NULL, -- Đặt cọc (cân nhắc)
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`detail_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

CREATE TABLE `blogs` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `img` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
    `content` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

CREATE TABLE `engine_transmissions` (
    `engine_transmission` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `type_engine` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Kiểu động cơ
    `fuel_system` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Kiểu nhiên liệu
    `cylinder_capacity` DECIMAL(10, 2) NOT NULL, -- Dung tích xi lanh
    `max_power` INT NOT NULL, -- Công suất cực đại
    `max_torque` DECIMAL(10, 2) NOT NULL, -- Mô men xoắn
    `tranmission` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Kiểu hộp số
    `sport_mode` BOOLEAN NOT NULL, -- Chế độ thể thao
    `GVC_sysem` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Hệ thống GVC
    `iStop` BOOLEAN NOT NULL, -- Hệ thống dừng/khởi động động cơ thông minh
    PRIMARY KEY (`engine_transmission`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

CREATE TABLE `chassis` (
    `chassis_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `front_suspension` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Hệ thống treo trước
    `rear_suspension` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Treo sau
    `front_brake` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Phanh trước
    `rear_brake` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Phanh sau
    `steering_assistance` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Trợ lực lái
    `size_tire` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Kích thước lốp
    `weel_diameter` INT NOT NULL, -- Đường kính mâm (inch)
    PRIMARY KEY (`chassis_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

//bảng nội thất (exteriors)
CREATE TABLE `exteriors` (
    `exteriors_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `low_beam` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Đèn chiếu gần
    `hight_beam` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Đèn chiếu xa
    `LEDLight_Day` BOOLEAN NOT NULL, -- Đèn LED ban ngày
    `auto_headlights` BOOLEAN NOT NULL, -- Tự động bật tắt đèn
    `auto_leveling` BOOLEAN NOT NULL, -- Cân bằng góc chiếu
    `power_mirror` BOOLEAN NOT NULL, -- Gương chỉnh điện
    `auto_folding` BOOLEAN NOT NULL, -- Gương gập điện
    `auto_wipers` BOOLEAN NOT NULL, -- Gạt mưa tự động 
    `rear_LEDLight` BOOLEAN NOT NULL, -- Đèn LED phía sau
    `sunroof` BOOLEAN NOT NULL, -- Cửa sổ trời
    `double_exhaust` BOOLEAN NOT NULL, -- Ống xả đôi
    PRIMARY KEY (`exteriors_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

//Bảng ngoại thất
CREATE TABLE `interiors` (
    `interiors_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,mysql
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `seat_material` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Chất liệu ghế
    `driverSeat_Electric` BOOLEAN NOT NULL, -- Ghế lái chỉnh điện
    `driverSeat_Memory` BOOLEAN NOT NULL, -- Nhớ vị trí ghế lái
    `passengerSeat_Electric` BOOLEAN NOT NULL, -- Ghế phụ chỉnh điện
    `DCV_player` BOOLEAN NOT NULL, -- Đầu DVD
    `touchscreen` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Màn cảm ứng
    `speaker` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Loa
    `brakeHand_electric` BOOLEAN NOT NULL, -- Phanh tay điện tử
    `autoHold` BOOLEAN NOT NULL, -- Tự động giữ phanh
    `Buton_engine` BOOLEAN NOT NULL, -- Khởi động bằng nút bấm
    `cruise_control` BOOLEAN NOT NULL, -- Ga tự động
    `auto_climate` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci', -- Điều hòa tự động
    `rear_airvents` BOOLEAN NOT NULL, -- Cửa gió hàng ghế sau
    `window_electric` BOOLEAN NOT NULL, -- Cửa sổ chỉnh điện
    `autoDimming_mirror` BOOLEAN NOT NULL, -- Gương trung tâm chống chói
    `HUD` BOOLEAN NOT NULL, -- HUD
    `window2nd_sunshadesCenter` BOOLEAN NOT NULL, -- Rèm che kính trung tâm
    `window2nd_sunshades` BOOLEAN NOT NULL, -- Rèm che cửa sổ
    `armrest` BOOLEAN NOT NULL, -- Tựa tay hàng ghế sau
    `armrest_USB` BOOLEAN NOT NULL, -- Tựa tay hàng ghế sau tích hợp USB
    `rearSeatsFold60_40` BOOLEAN NOT NULL, -- Hàng ghế thứ hai gập 60:40
    PRIMARY KEY (`interiors_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=INNODB;

CREATE TABLE `safeties` (
    `safeties_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, -- ID liên kết
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `air_bag` BOOLEAN NOT NULL, -- Túi khí
    `abs` BOOLEAN NOT NULL, -- ABS
    `ebd` BOOLEAN NOT NULL, -- Phân bổ phanh điện tử EBD
    `eba` BOOLEAN NOT NULL, -- Hỗ trợ phanh khẩn cấp EBA
    `ess` BOOLEAN NOT NULL, -- Cảnh báo phanh khẩn cấp ESS
    `dsc` BOOLEAN NOT NULL, -- Cân bằng điện tử DSC
    `tcs` BOOLEAN NOT NULL, -- Kiểm soát lực kéo chống trượt TCS
    `hla` BOOLEAN NOT NULL, -- Khởi hành ngang dốc HLA
    `immobilizer` BOOLEAN NOT NULL, -- Mã hóa chìa
    `burgler_alarm` BOOLEAN NOT NULL, -- Cảnh báo chống trộm
    `rear_camera` BOOLEAN NOT NULL, -- Cam lùi
    `front_sensor` BOOLEAN NOT NULL, -- Cảm biến va chạm phía trước
    `rear_sensor` BOOLEAN NOT NULL, -- Cảm biến va chạm phía sau
    `camera360` BOOLEAN NOT NULL, -- Cam 360
    `seatbelt_warning` BOOLEAN NOT NULL, -- Cảnh báo thắt dây an toàn
    PRIMARY KEY (`safeties_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

CREATE TABLE `fuel_consumptions` (
    `fuel_consumptions_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, -- Liên kết khóa chính
    `car_id` BIGINT(20) UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    `city_consumption` DECIMAL(10, 2) NOT NULL, -- Trong thành phố
    `hightway_consumption` DECIMAL(10, 2) NOT NULL, -- Đường trường
    `total_consumption` DECIMAL(10, 2) NOT NULL, -- Hỗn hợp
    PRIMARY KEY (`fuel_consumptions_id`),
    FOREIGN KEY (`car_id`) REFERENCES `cars`(`car_id`) ON DELETE SET NULL
) 
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;
car_detailscar_detailscars