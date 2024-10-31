-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for webads
CREATE DATABASE IF NOT EXISTS `webads` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `webads`;

-- Dumping structure for table webads.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.blogs: ~0 rows (approximately)

-- Dumping structure for table webads.cars
CREATE TABLE IF NOT EXISTS `cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.cars: ~0 rows (approximately)

-- Dumping structure for table webads.car_details
CREATE TABLE IF NOT EXISTS `car_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `car_id` bigint unsigned DEFAULT NULL,
  `size` decimal(10,2) NOT NULL,
  `wheelbase` decimal(10,2) NOT NULL,
  `turning_radius` decimal(10,2) NOT NULL,
  `ground_clearance` decimal(10,2) NOT NULL,
  `curb_weight` decimal(10,2) NOT NULL,
  `gross_weight` decimal(10,2) NOT NULL,
  `cargo_volume` int NOT NULL,
  `fuel_tank_capacity` int NOT NULL,
  `deposit_required` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_id` (`car_id`),
  CONSTRAINT `car_details_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.car_details: ~0 rows (approximately)

-- Dumping structure for table webads.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.categories: ~0 rows (approximately)

-- Dumping structure for table webads.chassis
CREATE TABLE IF NOT EXISTS `chassis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `front_suspension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_suspension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_brake` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_brake` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `steering_assistance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_tire` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheel_diameter` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `chassis_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.chassis: ~0 rows (approximately)

-- Dumping structure for table webads.engine_transmissions
CREATE TABLE IF NOT EXISTS `engine_transmissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `type_engine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cylinder_capacity` decimal(10,2) NOT NULL,
  `max_power` int NOT NULL,
  `max_torque` decimal(10,2) NOT NULL,
  `transmission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_mode` tinyint(1) NOT NULL,
  `GVC_system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iStop` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `engine_transmissions_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.engine_transmissions: ~0 rows (approximately)

-- Dumping structure for table webads.exteriors
CREATE TABLE IF NOT EXISTS `exteriors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `low_beam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `high_beam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LED_light_day` tinyint(1) NOT NULL,
  `auto_headlights` tinyint(1) NOT NULL,
  `auto_leveling` tinyint(1) NOT NULL,
  `power_mirror` tinyint(1) NOT NULL,
  `auto_folding` tinyint(1) NOT NULL,
  `auto_wipers` tinyint(1) NOT NULL,
  `rear_LED_light` tinyint(1) NOT NULL,
  `sunroof` tinyint(1) NOT NULL,
  `double_exhaust` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `exteriors_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.exteriors: ~0 rows (approximately)

-- Dumping structure for table webads.fuel_consumptions
CREATE TABLE IF NOT EXISTS `fuel_consumptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_consumption` decimal(10,2) NOT NULL,
  `hightway_consumption` decimal(10,2) NOT NULL,
  `total_consumption` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `fuel_consumptions_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.fuel_consumptions: ~0 rows (approximately)

-- Dumping structure for table webads.i_activsense
CREATE TABLE IF NOT EXISTS `i_activsense` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `afs` tinyint(1) NOT NULL,
  `hbc` tinyint(1) NOT NULL,
  `alh` tinyint(1) NOT NULL,
  `rcta` tinyint(1) NOT NULL,
  `ldw` tinyint(1) NOT NULL,
  `las` tinyint(1) NOT NULL,
  `city_brake_support_front` tinyint(1) NOT NULL,
  `city_brake_support_rear` tinyint(1) NOT NULL,
  `sbs` tinyint(1) NOT NULL,
  `mrcc` tinyint(1) NOT NULL,
  `daa` tinyint(1) NOT NULL,
  `bsm` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `i_activsense_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.i_activsense: ~0 rows (approximately)

-- Dumping structure for table webads.safeties
CREATE TABLE IF NOT EXISTS `safeties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `detail_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `air_bag` tinyint(1) NOT NULL,
  `abs` tinyint(1) NOT NULL,
  `ebd` tinyint(1) NOT NULL,
  `eba` tinyint(1) NOT NULL,
  `ess` tinyint(1) NOT NULL,
  `dsc` tinyint(1) NOT NULL,
  `tcs` tinyint(1) NOT NULL,
  `hla` tinyint(1) NOT NULL,
  `immobilizer` tinyint(1) NOT NULL,
  `burgler_alarm` tinyint(1) NOT NULL,
  `rear_camera` tinyint(1) NOT NULL,
  `front_sensor` tinyint(1) NOT NULL,
  `rear_sensor` tinyint(1) NOT NULL,
  `camera360` tinyint(1) NOT NULL,
  `seatbelt_warning` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`),
  CONSTRAINT `safeties_ibfk_1` FOREIGN KEY (`detail_id`) REFERENCES `car_details` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webads.safeties: ~0 rows (approximately)

-- Dumping structure for table webads.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_driver_date` timestamp NULL DEFAULT NULL,
  `feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



-- Dumping structure for table webads.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Dumping data for table webads.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
