-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `laravel`;

-- Dumping structure for table laravel.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.admins: ~0 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
REPLACE INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `token`, `created_at`, `updated_at`) VALUES
	(1, 'Jang Keyte', 'jangkeyte@gmail.com', '$2y$12$VyGSEhRrZ8CVGZrW21SDy.brR3BspJ1Pl9kgAj2W63Z6.3I86i4vy', 'admin.png', '', '2024-03-11 23:38:30', '2024-03-17 12:03:26');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table laravel.candidates
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidates: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
REPLACE INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Jang Keyte', NULL, 'jangkeyte', 'jangkeyte@gmail.com', '$2y$12$VQ7N1WMC/b3oaAcH1tHULutHr5rGBeohGYYUiWwoYAt5medN62PA6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-03-17 17:52:52', '2024-03-17 18:03:25'),
	(2, 'Kha Thiết Giang', 'Thợ chụp hình dạo', 'kangmaru', 'ktgiang@vespatopcom.com', '$2y$12$OtyCItGy2XRl3mOYRiwJYOD6ea1qRpIIG2z6ekcVK6SU4oRgtk9/i', '', 'candidate_photo_1710867701.png', 'Ăn ở không đợi kèo chụp hình', '0973333124', 'Việt Nam', '318 Trần Hưng Đạo, phường Nguyễn Cư Trinh, quận 1, TPHCM', 'Hồ Chỉ Minh', 'Hồ Chí Minh', '700000', 'Female', 'Unmarried', '2013-02-15', 'https://jangkeyte.com', 1, '2024-03-19 16:29:31', '2024-03-19 17:07:05');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;

-- Dumping structure for table laravel.companies
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_location_id` int(11) DEFAULT NULL,
  `company_industry_id` int(11) DEFAULT NULL,
  `company_size_id` int(11) DEFAULT NULL,
  `founded_on` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `oh_mon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_tue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_thu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_fri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_sat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oh_sun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_code` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.companies: ~1 rows (approximately)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
REPLACE INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'TOPCOM', 'Kha Thiết Giang', 'jangkeyte', 'jangkeyte@gmail.com', '$2y$12$U.4cyzMk9T2GPlEO5o7PKeXna8Upcvu7BoFJIKUNSWCiIMVMCGzxG', '', 'company_logo_1710781190.png', '0973333124', '318 Tran Hung Dao', 1, 4, 9, '2019', 'https://jangkeyte.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '8:00 - 20h00', '8:00 - 20h00', '8:00 - 20h00', '8:00 - 20h00', '8:00 - 20h00', '8:00 - 20h00', '8:00 - 20h00', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7694686606687!2d106.65983917573566!3d10.752242259637828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ef73ae3f9cb%3A0xbfa314a64e14926a!2zMzE4IMSQLiBUcuG6p24gSMawbmcgxJDhuqFvLCBQaMaw4budbmcgMTEsIFF14bqtbiA1LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1710781860977!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'https://facebook.com/jangkeyte', 'https://twitter.com/jangkeyte', 'https://linkedin.com/jangkeyte', 'https://instagram.com/jangkeyte', 1, '2024-03-17 16:12:53', '2024-03-18 17:11:35');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Dumping structure for table laravel.company_industries
CREATE TABLE IF NOT EXISTS `company_industries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_industries: ~5 rows (approximately)
/*!40000 ALTER TABLE `company_industries` DISABLE KEYS */;
REPLACE INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Det May', '2024-03-18 15:46:02', '2024-03-18 15:46:02'),
	(2, 'Dien Tu', '2024-03-18 15:46:08', '2024-03-18 15:46:08'),
	(3, 'Xe May', '2024-03-18 15:46:13', '2024-03-18 15:46:13'),
	(4, 'O to', '2024-03-18 15:46:17', '2024-03-18 15:46:17');
/*!40000 ALTER TABLE `company_industries` ENABLE KEYS */;

-- Dumping structure for table laravel.company_locations
CREATE TABLE IF NOT EXISTS `company_locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_locations: ~2 rows (approximately)
/*!40000 ALTER TABLE `company_locations` DISABLE KEYS */;
REPLACE INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Vung Tau', '2024-03-18 15:38:02', '2024-03-18 15:38:02'),
	(2, 'Quang Ninh', '2024-03-18 15:38:08', '2024-03-18 15:38:08');
/*!40000 ALTER TABLE `company_locations` ENABLE KEYS */;

-- Dumping structure for table laravel.company_photos
CREATE TABLE IF NOT EXISTS `company_photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_photos: ~2 rows (approximately)
/*!40000 ALTER TABLE `company_photos` DISABLE KEYS */;
REPLACE INTO `company_photos` (`id`, `company_id`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 1, 'company_photo_1710856364.png', '2024-03-19 13:52:44', '2024-03-19 13:52:44'),
	(2, 1, 'company_photo_1710856370.jpg', '2024-03-19 13:52:50', '2024-03-19 13:52:50');
/*!40000 ALTER TABLE `company_photos` ENABLE KEYS */;

-- Dumping structure for table laravel.company_sizes
CREATE TABLE IF NOT EXISTS `company_sizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_sizes: ~9 rows (approximately)
/*!40000 ALTER TABLE `company_sizes` DISABLE KEYS */;
REPLACE INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '1 - 5', '2024-03-18 15:51:27', '2024-03-18 15:51:27'),
	(2, '5 - 10', '2024-03-18 15:51:32', '2024-03-18 15:51:32'),
	(3, '10 - 20', '2024-03-18 15:51:38', '2024-03-18 15:51:38'),
	(4, '20 - 50', '2024-03-18 15:51:44', '2024-03-18 15:51:44'),
	(5, '50 - 100', '2024-03-18 15:51:49', '2024-03-18 15:51:49'),
	(6, '100 - 200', '2024-03-18 15:51:54', '2024-03-18 15:51:54'),
	(7, '200 - 500', '2024-03-18 15:52:01', '2024-03-18 15:52:01'),
	(8, '500 - 1000', '2024-03-18 15:52:06', '2024-03-18 15:52:06'),
	(9, '1000+', '2024-03-18 15:52:10', '2024-03-18 15:52:10');
/*!40000 ALTER TABLE `company_sizes` ENABLE KEYS */;

-- Dumping structure for table laravel.company_videos
CREATE TABLE IF NOT EXISTS `company_videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_videos: ~2 rows (approximately)
/*!40000 ALTER TABLE `company_videos` DISABLE KEYS */;
REPLACE INTO `company_videos` (`id`, `company_id`, `video_id`, `created_at`, `updated_at`) VALUES
	(3, 1, 'KsdnSwu6tkI', '2024-03-19 13:53:56', '2024-03-19 13:53:56'),
	(4, 1, 'GwCUbhE0TY0', '2024-03-19 13:54:07', '2024-03-19 13:54:07');
/*!40000 ALTER TABLE `company_videos` ENABLE KEYS */;

-- Dumping structure for table laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.faqs: ~4 rows (approximately)
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
REPLACE INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
	(1, 'Lorem ipsum dolor sit amet?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi porta lorem mollis aliquam ut porttitor. Arcu felis bibendum ut tristique et egestas quis ipsum.', '2024-03-17 05:42:58', '2024-03-17 05:42:58'),
	(2, 'Metus aliquam eleifend mi in nulla posuere?', 'Metus aliquam eleifend mi in nulla posuere. Tristique et egestas quis ipsum suspendisse ultrices. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Venenatis cras sed felis eget velit aliquet sagittis.', '2024-03-17 05:43:14', '2024-03-17 05:43:14'),
	(3, 'In ante metus dictum at tempor commodo ullamcorper?', '<p>In ante metus dictum at tempor commodo ullamcorper. Tristique senectus et netus et. Velit aliquet sagittis id consectetur. Neque egestas congue quisque egestas diam in arcu cursus euismod. Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p>', '2024-03-17 05:43:50', '2024-03-17 05:48:33'),
	(5, 'Pretium fusce id velit ut tortor pretium viverra?', 'Pretium fusce id velit ut tortor pretium viverra. Egestas sed tempus urna et pharetra pharetra massa. Ullamcorper malesuada proin libero nunc. Morbi leo urna molestie at. Tellus molestie nunc non blandit massa enim. Risus feugiat in ante metus dictum at. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Platea dictumst quisque sagittis purus sit.', '2024-03-17 05:54:52', '2024-03-17 05:54:52');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Dumping structure for table laravel.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` text COLLATE utf8mb4_unicode_ci,
  `skill` text COLLATE utf8mb4_unicode_ci,
  `education` text COLLATE utf8mb4_unicode_ci,
  `benefit` text COLLATE utf8mb4_unicode_ci,
  `deadline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy` int(11) NOT NULL DEFAULT '0',
  `job_category_id` int(11) NOT NULL,
  `job_location_id` int(11) NOT NULL,
  `job_type_id` int(11) NOT NULL,
  `job_experience_id` int(11) NOT NULL,
  `job_gender_id` int(11) NOT NULL,
  `job_salary_range_id` int(11) NOT NULL,
  `map_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint(4) NOT NULL,
  `is_urgent` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.jobs: ~1 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
REPLACE INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Data Analyst', '*According to Decree No.13/2023/ND-CP on protecting personal data (“PDP”), Home Credit Vietnam would apply "Personal Data Processing Agreement" with all candidates to ensure compliance with the decree.\r\n\r\nBy submitting this application to Home Credit Vietnam Finance Company Limited through Vietnamwork, you agree to allow Home Credit to proceed your provided information in accordance with Personal Data Processing Agreement that you have read, fully understood and agreed to the entire content at link https://career.homecredit.vn/vn/article/id/217.', '- Monitor business trends and analyze performance\r\n- Provide business solving solutions for Top Management\r\n- Design visualization dashboard and analytics for both internal and external\r\n- Be in-charged in projects/analytics for Department in-charge\r\n- Data Management and Technology Development', '- Background of Data Analyst or Equivalent Experience\r\n- Knowledge of SQL and visualization tools\r\n- Good at communication and critical thinking\r\n- Good at English skills\r\n- Solid problem-solving skills, logical thinking\r\n- Personality: willing to learn, responsible', 'Công Nghệ Thông Tin/Viễn Thông > Data Engineer/Data Analyst/AI', NULL, '2024-03-31', 5, 4, 2, 1, 2, 1, 2, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d367.05739861255154!2d106.68560741121166!3d10.757378318198981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fcab7f4d097%3A0x76bcea8f0bff76a6!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gVG9wY29tIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1710859553655!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 0, 1, '2024-03-19 14:47:06', '2024-03-19 16:13:00'),
	(2, 1, 'PHP Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor elit sed vulputate mi sit amet mauris commodo quis. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Elementum nibh tellus molestie nunc non blandit massa enim nec. In egestas erat imperdiet sed euismod. Nullam eget felis eget nunc. Pharetra vel turpis nunc eget. Accumsan lacus vel facilisis volutpat est velit. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Sed risus ultricies tristique nulla aliquet enim tortor. Vitae proin sagittis nisl rhoncus. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam.\r\nViverra mauris in aliquam sem fringilla. Duis at tellus at urna condimentum mattis pellentesque. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi. Neque aliquam vestibulum morbi blandit cursus risus at. Tellus elementum sagittis vitae et leo duis ut diam. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Mattis pellentesque id nibh tortor id aliquet. Mi eget mauris pharetra et ultrices neque. Sit amet mattis vulputate enim. Egestas sed sed risus pretium quam vulputate dignissim suspendisse. Porttitor leo a diam sollicitudin tempor id. Integer vitae justo eget magna. Cursus mattis molestie a iaculis at. Nulla at volutpat diam ut venenatis tellus. Laoreet non curabitur gravida arcu. Aliquam purus sit amet luctus venenatis lectus magna fringilla. Leo a diam sollicitudin tempor id eu. Ultrices sagittis orci a scelerisque purus semper eget duis.', '- Rhoncus urna neque viverra justo nec ultrices dui sapien eget. Convallis aenean et tortor at.\r\n- In est ante in nibh mauris. Dui nunc mattis enim ut tellus elementum sagittis vitae. \r\n- Ut eu sem integer vitae justo eget. Euismod elementum nisi quis eleifend quam adipiscing. \r\n- Sit amet porttitor eget dolor morbi. Nec nam aliquam sem et tortor. \r\n- Amet purus gravida quis blandit turpis cursus. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus.', '- Dolor morbi non arcu risus. Non quam lacus suspendisse faucibus interdum. \r\n- Suscipit tellus mauris a diam maecenas sed. Amet facilisis magna etiam tempor. \r\n- Volutpat consequat mauris nunc congue nisi vitae suscipit tellus. \r\n- Diam donec adipiscing tristique risus nec feugiat in fermentum.', '- Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. \r\n- At lectus urna duis convallis convallis tellus id interdum. - Interdum posuere lorem ipsum dolor. \r\n- Cursus in hac habitasse platea dictumst quisque sagittis purus sit.', NULL, '2024-03-30', 3, 9, 3, 6, 4, 2, 2, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d367.05739861255154!2d106.68560741121166!3d10.757378318198981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fcab7f4d097%3A0x76bcea8f0bff76a6!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gVG9wY29tIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1710859553655!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 1, 0, '2024-03-19 15:13:06', '2024-03-19 15:13:06');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table laravel.job_categories
CREATE TABLE IF NOT EXISTS `job_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_categories: ~9 rows (approximately)
/*!40000 ALTER TABLE `job_categories` DISABLE KEYS */;
REPLACE INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(1, 'Engineering', 'fas fa-magic', '2024-03-13 17:08:48', '2024-03-13 17:23:15'),
	(2, 'Medical', 'fas fa-stethoscope', '2024-03-13 17:10:31', '2024-03-13 17:10:31'),
	(3, 'Accounting', 'fas fa-landmark', '2024-03-13 17:11:34', '2024-03-13 17:11:34'),
	(4, 'Data Entry', 'fas fa-share-alt', '2024-03-13 17:12:05', '2024-03-13 17:12:05'),
	(5, 'Marketing', 'fas fa-bullhorn', '2024-03-13 17:12:18', '2024-03-13 17:12:18'),
	(6, 'Production', 'fas fa-sitemap', '2024-03-13 17:12:27', '2024-03-13 17:12:27'),
	(7, 'Garments', 'fas fa-users', '2024-03-13 17:12:46', '2024-03-13 17:12:46'),
	(8, 'Education', 'fas fa-user-graduate', '2024-03-13 17:13:23', '2024-03-13 17:13:23'),
	(9, 'Technician', 'fas fa-street-view', '2024-03-13 17:13:40', '2024-03-13 17:13:40');
/*!40000 ALTER TABLE `job_categories` ENABLE KEYS */;

-- Dumping structure for table laravel.job_experiences
CREATE TABLE IF NOT EXISTS `job_experiences` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_experiences: ~7 rows (approximately)
/*!40000 ALTER TABLE `job_experiences` DISABLE KEYS */;
REPLACE INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '10 year', '2024-03-18 15:14:56', '2024-03-18 15:14:56'),
	(2, '5 year', '2024-03-18 15:15:03', '2024-03-18 15:15:03'),
	(3, '3 year', '2024-03-18 15:15:07', '2024-03-18 15:15:07'),
	(4, '1 year', '2024-03-18 15:15:11', '2024-03-18 15:15:11'),
	(5, '6 Month', '2024-03-18 15:15:18', '2024-03-18 15:15:18'),
	(6, '3 Month', '2024-03-18 15:15:23', '2024-03-18 15:15:23'),
	(7, '1 Month', '2024-03-18 15:15:27', '2024-03-18 15:15:27');
/*!40000 ALTER TABLE `job_experiences` ENABLE KEYS */;

-- Dumping structure for table laravel.job_genders
CREATE TABLE IF NOT EXISTS `job_genders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_genders: ~2 rows (approximately)
/*!40000 ALTER TABLE `job_genders` DISABLE KEYS */;
REPLACE INTO `job_genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Male', '2024-03-18 15:21:35', '2024-03-18 15:21:35'),
	(2, 'Female', '2024-03-18 15:21:40', '2024-03-18 15:21:40'),
	(4, 'Not Specified', '2024-03-18 15:22:53', '2024-03-18 15:22:53');
/*!40000 ALTER TABLE `job_genders` ENABLE KEYS */;

-- Dumping structure for table laravel.job_locations
CREATE TABLE IF NOT EXISTS `job_locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_locations: ~2 rows (approximately)
/*!40000 ALTER TABLE `job_locations` DISABLE KEYS */;
REPLACE INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'TP.Ho Chi Minh', '2024-03-18 14:58:28', '2024-03-18 14:58:28'),
	(3, 'Ha Noi', '2024-03-18 14:58:33', '2024-03-18 14:58:33');
/*!40000 ALTER TABLE `job_locations` ENABLE KEYS */;

-- Dumping structure for table laravel.job_salary_ranges
CREATE TABLE IF NOT EXISTS `job_salary_ranges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_salary_ranges: ~4 rows (approximately)
/*!40000 ALTER TABLE `job_salary_ranges` DISABLE KEYS */;
REPLACE INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '5 - 10m', '2024-03-18 15:29:21', '2024-03-18 15:29:21'),
	(2, '10 - 20m', '2024-03-18 15:29:26', '2024-03-18 15:29:26'),
	(3, '30 - 50m', '2024-03-18 15:29:31', '2024-03-18 15:29:31'),
	(4, '50m+', '2024-03-18 15:29:40', '2024-03-18 15:29:40');
/*!40000 ALTER TABLE `job_salary_ranges` ENABLE KEYS */;

-- Dumping structure for table laravel.job_types
CREATE TABLE IF NOT EXISTS `job_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_types: ~4 rows (approximately)
/*!40000 ALTER TABLE `job_types` DISABLE KEYS */;
REPLACE INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Full Time', '2024-03-18 15:04:14', '2024-03-18 15:05:45'),
	(3, 'Part Time', '2024-03-18 15:05:51', '2024-03-18 15:05:51'),
	(4, 'Contractual', '2024-03-18 15:05:57', '2024-03-18 15:05:57'),
	(5, 'Internship', '2024-03-18 15:06:03', '2024-03-18 15:06:03'),
	(6, 'Freelance', '2024-03-18 15:06:08', '2024-03-18 15:06:08');
/*!40000 ALTER TABLE `job_types` ENABLE KEYS */;

-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~34 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_03_11_162657_create_admins_table', 1),
	(7, '2024_03_13_154505_create_page_home_items_table', 2),
	(8, '2024_03_13_163541_create_job_categories_table', 3),
	(9, '2024_03_14_152636_create_why_choose_items_table', 4),
	(10, '2024_03_14_164322_create_testimonials_table', 5),
	(11, '2024_03_15_062028_create_posts_table', 6),
	(12, '2024_03_17_052900_create_faqs_table', 7),
	(13, '2024_03_17_060932_create_page_faq_items_table', 8),
	(14, '2024_03_17_063502_create_page_blog_items_table', 9),
	(15, '2024_03_17_070420_create_page_term_items_table', 10),
	(16, '2024_03_17_071958_create_page_privacy_items_table', 11),
	(17, '2024_03_17_115511_create_page_contact_items_table', 12),
	(18, '2024_03_17_123306_create_page_job_category_items_table', 13),
	(19, '2024_03_17_124613_create_packages_table', 14),
	(20, '2024_03_17_135722_create_page_pricing_items_table', 15),
	(21, '2024_03_17_142003_create_page_other_items_table', 16),
	(22, '2024_03_17_153945_create_companies_table', 17),
	(23, '2024_03_17_173728_create_candidates_table', 18),
	(24, '2024_03_18_121339_create_orders_table', 19),
	(25, '2024_03_18_144213_create_job_locations_table', 20),
	(26, '2024_03_18_145917_create_job_types_table', 21),
	(27, '2024_03_18_150642_create_job_experiences_table', 22),
	(28, '2024_03_18_151723_create_job_genders_table', 23),
	(29, '2024_03_18_152332_create_job_salary_ranges_table', 24),
	(30, '2024_03_18_153157_create_company_locations_table', 25),
	(31, '2024_03_18_154301_create_company_industries_table', 26),
	(32, '2024_03_18_154744_create_company_sizes_table', 27),
	(33, '2024_03_19_035910_create_company_photos_table', 28),
	(34, '2024_03_19_042555_create_company_videos_table', 28),
	(35, '2024_03_19_092940_create_jobs_table', 28);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currently_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.orders: ~5 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`id`, `company_id`, `package_id`, `order_no`, `paid_amount`, `payment_method`, `start_date`, `expire_date`, `currently_active`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, '1710771818', '49', 'QR Code', '2024-03-18', '2024-06-16', 0, '2024-03-18 14:23:38', '2024-03-19 13:52:29'),
	(2, 1, 3, '1710772677', '49', 'QR Code', '2024-03-18', '2024-06-16', 0, '2024-03-18 14:37:57', '2024-03-19 13:52:29'),
	(3, 1, 2, '1710772680', '29', 'QR Code', '2024-03-18', '2024-04-17', 0, '2024-03-18 14:38:00', '2024-03-19 13:52:29'),
	(4, 1, 1, '1710772681', '19', 'QR Code', '2024-03-18', '2024-03-25', 0, '2024-03-18 14:38:01', '2024-03-19 13:52:29'),
	(5, 1, 2, '1710856349', '29', 'QR Code', '2024-03-19', '2024-04-18', 1, '2024-03-19 13:52:29', '2024-03-19 13:52:29');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table laravel.packages
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` smallint(6) NOT NULL DEFAULT '0',
  `package_days` smallint(6) NOT NULL DEFAULT '0',
  `package_display_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_allowed_jobs` tinyint(4) NOT NULL,
  `total_allowed_featured_jobs` tinyint(4) NOT NULL,
  `total_allowed_photos` tinyint(4) NOT NULL,
  `total_allowed_videos` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.packages: ~3 rows (approximately)
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
REPLACE INTO `packages` (`id`, `package_name`, `package_price`, `package_days`, `package_display_time`, `total_allowed_jobs`, `total_allowed_featured_jobs`, `total_allowed_photos`, `total_allowed_videos`, `created_at`, `updated_at`) VALUES
	(1, 'Basic', 19, 7, '1 Week', 2, 0, 0, 0, '2024-03-17 13:24:35', '2024-03-19 14:49:47'),
	(2, 'Standard', 29, 30, '1 Month', 4, 2, 2, 2, '2024-03-17 13:25:41', '2024-03-19 14:49:54'),
	(3, 'Gold', 49, 90, '3 Months', -1, 15, 10, 10, '2024-03-17 13:26:14', '2024-03-17 13:26:14');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;

-- Dumping structure for table laravel.page_blog_items
CREATE TABLE IF NOT EXISTS `page_blog_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_blog_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_blog_items` DISABLE KEYS */;
REPLACE INTO `page_blog_items` (`id`, `heading`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Blog', 'Blog', 'Blog', '2024-03-17 13:38:30', '2024-03-17 06:41:53');
/*!40000 ALTER TABLE `page_blog_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_contact_items
CREATE TABLE IF NOT EXISTS `page_contact_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_contact_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_contact_items` DISABLE KEYS */;
REPLACE INTO `page_contact_items` (`id`, `heading`, `map_code`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Contact', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.90232151133034!2d106.66324083784767!3d10.794564773584607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175293265f41be3%3A0xf05f50d162b96a8!2zODUgUGjhuqFtIFbEg24gSGFpLCBQaMaw4budbmcgMywgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1710677239292!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'Contact', 'Contact', '2024-03-17 18:56:37', '2024-03-17 12:07:26');
/*!40000 ALTER TABLE `page_contact_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_faq_items
CREATE TABLE IF NOT EXISTS `page_faq_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_faq_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_faq_items` DISABLE KEYS */;
REPLACE INTO `page_faq_items` (`id`, `heading`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Freequently Asked Questions (FAQ)', 'FAQ', 'FAQ', '2024-03-17 13:38:33', '2024-03-17 06:26:32');
/*!40000 ALTER TABLE `page_faq_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_home_items
CREATE TABLE IF NOT EXISTS `page_home_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `job_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `search` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category_subheading` text COLLATE utf8mb4_unicode_ci,
  `job_category_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_subheading` text COLLATE utf8mb4_unicode_ci,
  `why_choose_background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_jobs_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_jobs_subheading` text COLLATE utf8mb4_unicode_ci,
  `featured_jobs_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading` text COLLATE utf8mb4_unicode_ci,
  `testimonial_background` text COLLATE utf8mb4_unicode_ci,
  `testimonial_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading` text COLLATE utf8mb4_unicode_ci,
  `blog_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_home_items: ~1 rows (approximately)
/*!40000 ALTER TABLE `page_home_items` DISABLE KEYS */;
REPLACE INTO `page_home_items` (`id`, `heading`, `text`, `job_title`, `job_category`, `job_location`, `search`, `background`, `job_category_heading`, `job_category_subheading`, `job_category_status`, `why_choose_heading`, `why_choose_subheading`, `why_choose_background`, `why_choose_status`, `featured_jobs_heading`, `featured_jobs_subheading`, `featured_jobs_status`, `testimonial_heading`, `testimonial_subheading`, `testimonial_background`, `testimonial_status`, `blog_heading`, `blog_subheading`, `blog_status`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Find Your Desired Job', 'Search the best, perfect and suitable jobs that matches  your skills in your expertise area.', 'Job Title', 'Job Category', 'Job Location', 'Search', 'banner_home.jpg', 'Job Categories', 'Get the list of all the popular job categories here', 'Show', 'Why Choose Us', 'Our Methods to help you build your career in future', 'why_choose_home_background.jpg', 'Show', 'Featured Jobs', 'Find the awesome jobs that matches your skill', 'Show', 'Testimonials', 'Our Happy Clients', 'testimonial_home_background.jpg', 'Show', 'Test', NULL, 'Show', 'JobHunt - A Complete Job Directory Website', 'JobHunt - A Complete Job Directory Website', NULL, '2024-03-17 14:16:45');
/*!40000 ALTER TABLE `page_home_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_job_category_items
CREATE TABLE IF NOT EXISTS `page_job_category_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_job_category_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_job_category_items` DISABLE KEYS */;
REPLACE INTO `page_job_category_items` (`id`, `heading`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Job Categories 1', 'Job Categories 1', 'Job Categories 1', '2024-03-17 19:34:47', '2024-03-17 12:44:05');
/*!40000 ALTER TABLE `page_job_category_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_other_items
CREATE TABLE IF NOT EXISTS `page_other_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_page_title` text COLLATE utf8mb4_unicode_ci,
  `login_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `signup_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_page_title` text COLLATE utf8mb4_unicode_ci,
  `signup_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `forget_password_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forget_password_page_title` text COLLATE utf8mb4_unicode_ci,
  `forget_password_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_other_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_other_items` DISABLE KEYS */;
REPLACE INTO `page_other_items` (`id`, `login_page_heading`, `login_page_title`, `login_page_meta_description`, `signup_page_heading`, `signup_page_title`, `signup_page_meta_description`, `forget_password_page_heading`, `forget_password_page_title`, `forget_password_page_meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Login Heading', 'Login Title', 'Login Meta Description', 'Signup Heading', 'Signup Title', 'Signup Meta Description', 'Forget Password Heading', 'Forget Password Title', 'Forget Password Meta Description', '2024-03-17 21:32:23', '2024-03-17 14:52:22');
/*!40000 ALTER TABLE `page_other_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_pricing_items
CREATE TABLE IF NOT EXISTS `page_pricing_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_pricing_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_pricing_items` DISABLE KEYS */;
REPLACE INTO `page_pricing_items` (`id`, `heading`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Pricing 1', 'Pricing 2', 'Pricing 3', '2024-03-17 20:59:08', '2024-03-17 14:05:38');
/*!40000 ALTER TABLE `page_pricing_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_privacy_items
CREATE TABLE IF NOT EXISTS `page_privacy_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_privacy_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_privacy_items` DISABLE KEYS */;
REPLACE INTO `page_privacy_items` (`id`, `heading`, `content`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Privacy Heading', '<p>Faucibus ornare suspendisse sed nisi lacus sed. Sed enim ut sem viverra aliquet. Enim neque volutpat ac tincidunt vitae semper quis. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quam pellentesque nec nam aliquam sem. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Feugiat nibh sed pulvinar proin gravida hendrerit. Est ante in nibh mauris cursus. Lorem ipsum dolor sit amet consectetur adipiscing. Id leo in vitae turpis. Tellus pellentesque eu tincidunt tortor aliquam.</p>', 'Privacy Title', 'Privacy Description', '2024-03-17 14:21:09', '2024-03-17 07:30:10');
/*!40000 ALTER TABLE `page_privacy_items` ENABLE KEYS */;

-- Dumping structure for table laravel.page_term_items
CREATE TABLE IF NOT EXISTS `page_term_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_term_items: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_term_items` DISABLE KEYS */;
REPLACE INTO `page_term_items` (`id`, `heading`, `content`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Terms Heading', '<p>Faucibus ornare suspendisse sed nisi lacus sed. Sed enim ut sem viverra aliquet. Enim neque volutpat ac tincidunt vitae semper quis. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quam pellentesque nec nam aliquam sem. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Feugiat nibh sed pulvinar proin gravida hendrerit. Est ante in nibh mauris cursus. Lorem ipsum dolor sit amet consectetur adipiscing. Id leo in vitae turpis. Tellus pellentesque eu tincidunt tortor aliquam.</p>', 'Terms Title', 'Terms Meta Description', '2024-03-17 14:12:12', '2024-03-17 07:12:54');
/*!40000 ALTER TABLE `page_term_items` ENABLE KEYS */;

-- Dumping structure for table laravel.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.password_reset_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_view` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `heading`, `slug`, `short_description`, `description`, `total_view`, `photo`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi porta lorem mollis aliquam ut porttitor. Arcu felis bibendum ut tristique et egestas quis ipsum. Tristique nulla aliquet enim tortor at auctor. Tellus pellentesque eu tincidunt tortor aliquam. Eget egestas purus viverra accumsan. In ornare quam viverra orci sagittis eu. Vel pretium lectus quam id leo in vitae. A cras semper auctor neque vitae. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Nullam ac tortor vitae purus faucibus ornare suspendisse sed. Egestas diam in arcu cursus euismod quis viverra. Enim blandit volutpat maecenas volutpat. Mauris sit amet massa vitae tortor condimentum lacinia. Aliquam sem et tortor consequat id. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Magnis dis parturient montes nascetur. Urna nec tincidunt praesent semper feugiat nibh sed pulvinar proin.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi porta lorem mollis aliquam ut porttitor. Arcu felis bibendum ut tristique et egestas quis ipsum. Tristique nulla aliquet enim tortor at auctor. Tellus pellentesque eu tincidunt tortor aliquam. Eget egestas purus viverra accumsan. In ornare quam viverra orci sagittis eu. Vel pretium lectus quam id leo in vitae. A cras semper auctor neque vitae. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Nullam ac tortor vitae purus faucibus ornare suspendisse sed. Egestas diam in arcu cursus euismod quis viverra. Enim blandit volutpat maecenas volutpat. Mauris sit amet massa vitae tortor condimentum lacinia. Aliquam sem et tortor consequat id. Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Magnis dis parturient montes nascetur. Urna nec tincidunt praesent semper feugiat nibh sed pulvinar proin.</p>\r\n<p>Faucibus ornare suspendisse sed nisi lacus sed. Sed enim ut sem viverra aliquet. Enim neque volutpat ac tincidunt vitae semper quis. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quam pellentesque nec nam aliquam sem. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Feugiat nibh sed pulvinar proin gravida hendrerit. Est ante in nibh mauris cursus. Lorem ipsum dolor sit amet consectetur adipiscing. Id leo in vitae turpis. Tellus pellentesque eu tincidunt tortor aliquam.</p>\r\n<p>Metus aliquam eleifend mi in nulla posuere. Tristique et egestas quis ipsum suspendisse ultrices. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Venenatis cras sed felis eget velit aliquet sagittis. Et ultrices neque ornare aenean euismod. Ut etiam sit amet nisl purus. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Fringilla ut morbi tincidunt augue interdum velit. Pretium fusce id velit ut tortor pretium viverra. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Vestibulum morbi blandit cursus risus at. Sed risus ultricies tristique nulla aliquet enim tortor at auctor. Volutpat est velit egestas dui id. Quis lectus nulla at volutpat diam. Amet nisl purus in mollis nunc sed id. Mollis aliquam ut porttitor leo a.</p>\r\n<p>In ante metus dictum at tempor commodo ullamcorper. Tristique senectus et netus et. Velit aliquet sagittis id consectetur. Neque egestas congue quisque egestas diam in arcu cursus euismod. Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit. Enim sit amet venenatis urna cursus eget. Ut tellus elementum sagittis vitae et leo duis ut. At varius vel pharetra vel turpis nunc eget. Sem integer vitae justo eget magna fermentum iaculis. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed. Sed risus ultricies tristique nulla aliquet enim tortor at. Nibh tellus molestie nunc non blandit massa enim nec dui. Id ornare arcu odio ut sem nulla. Eget mi proin sed libero enim sed faucibus turpis in. Auctor eu augue ut lectus arcu bibendum at varius vel.</p>\r\n<p>Id nibh tortor id aliquet lectus proin nibh nisl. Auctor neque vitae tempus quam pellentesque nec. Mauris rhoncus aenean vel elit. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Elit at imperdiet dui accumsan sit amet nulla facilisi. Tortor condimentum lacinia quis vel eros. Habitasse platea dictumst vestibulum rhoncus est. Nisl vel pretium lectus quam id. Semper eget duis at tellus at urna condimentum. At risus viverra adipiscing at. Posuere urna nec tincidunt praesent semper.</p>\r\n<p>Pretium fusce id velit ut tortor pretium viverra. Egestas sed tempus urna et pharetra pharetra massa. Ullamcorper malesuada proin libero nunc. Morbi leo urna molestie at. Tellus molestie nunc non blandit massa enim. Risus feugiat in ante metus dictum at. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Platea dictumst quisque sagittis purus sit. Ultrices in iaculis nunc sed augue lacus viverra vitae congue. Turpis nunc eget lorem dolor. Semper eget duis at tellus at urna condimentum mattis pellentesque. Nisl vel pretium lectus quam id leo in. Facilisis magna etiam tempor orci eu lobortis elementum nibh.</p>\r\n<p>Leo a diam sollicitudin tempor. Tellus orci ac auctor augue mauris augue. Blandit aliquam etiam erat velit scelerisque. Sed pulvinar proin gravida hendrerit lectus. Enim neque volutpat ac tincidunt vitae semper quis. Suspendisse in est ante in nibh. Aliquet nibh praesent tristique magna sit amet purus gravida quis. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Enim blandit volutpat maecenas volutpat blandit aliquam. Pulvinar elementum integer enim neque. Et leo duis ut diam quam nulla. Magna ac placerat vestibulum lectus. Enim nulla aliquet porttitor lacus luctus. Sed tempus urna et pharetra pharetra.</p>\r\n<p>Metus vulputate eu scelerisque felis imperdiet proin. Dictum sit amet justo donec enim diam vulputate. A diam maecenas sed enim ut sem. Quis lectus nulla at volutpat. Sed viverra ipsum nunc aliquet bibendum enim. Nibh sed pulvinar proin gravida hendrerit lectus. Mauris cursus mattis molestie a iaculis at erat pellentesque. Fermentum iaculis eu non diam phasellus. Egestas integer eget aliquet nibh praesent tristique. Dignissim sodales ut eu sem integer vitae justo eget. In nulla posuere sollicitudin aliquam ultrices sagittis. Ipsum a arcu cursus vitae congue mauris rhoncus. Vitae turpis massa sed elementum. At in tellus integer feugiat scelerisque. Vitae turpis massa sed elementum. Aliquam faucibus purus in massa tempor nec feugiat nisl. Elementum nibh tellus molestie nunc non blandit massa enim nec. Porttitor lacus luctus accumsan tortor posuere ac ut consequat semper. Enim blandit volutpat maecenas volutpat. Eget mauris pharetra et ultrices neque ornare aenean.</p>\r\n<p>Volutpat lacus laoreet non curabitur gravida. Scelerisque felis imperdiet proin fermentum leo vel orci porta. Ultricies tristique nulla aliquet enim tortor at auctor. Congue quisque egestas diam in arcu. Fringilla phasellus faucibus scelerisque eleifend donec. Tristique magna sit amet purus gravida quis blandit turpis. Risus ultricies tristique nulla aliquet enim tortor at auctor urna. Aliquet nibh praesent tristique magna sit. Mi quis hendrerit dolor magna. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Massa sapien faucibus et molestie. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Adipiscing enim eu turpis egestas pretium. At quis risus sed vulputate odio ut enim blandit. Faucibus vitae aliquet nec ullamcorper. Massa placerat duis ultricies lacus sed turpis. Dui faucibus in ornare quam viverra orci.</p>\r\n<p>Arcu odio ut sem nulla pharetra diam sit amet nisl. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. In ante metus dictum at tempor. Eu sem integer vitae justo eget. Sem nulla pharetra diam sit amet. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Turpis cursus in hac habitasse. Augue neque gravida in fermentum et sollicitudin. Non enim praesent elementum facilisis leo vel fringilla est. Fermentum odio eu feugiat pretium nibh ipsum. Mattis molestie a iaculis at erat pellentesque adipiscing. Magna etiam tempor orci eu lobortis elementum nibh tellus. Ut pharetra sit amet aliquam.</p>', '4', 'post_1710650974.png', NULL, NULL, '2024-03-17 04:49:34', '2024-03-17 05:55:08'),
	(2, 'Faucibus ornare suspendisse sed nisi lacus sed', 'faucibus-ornare-suspendisse-sed-nisi-lacus-sed', 'Faucibus ornare suspendisse sed nisi lacus sed. Sed enim ut sem viverra aliquet. Enim neque volutpat ac tincidunt vitae semper quis. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quam pellentesque nec nam aliquam sem. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Feugiat nibh sed pulvinar proin gravida hendrerit. Est ante in nibh mauris cursus. Lorem ipsum dolor sit amet consectetur adipiscing. Id leo in vitae turpis. Tellus pellentesque eu tincidunt tortor aliquam.', '<p>Faucibus ornare suspendisse sed nisi lacus sed. Sed enim ut sem viverra aliquet. Enim neque volutpat ac tincidunt vitae semper quis. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quam pellentesque nec nam aliquam sem. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Feugiat nibh sed pulvinar proin gravida hendrerit. Est ante in nibh mauris cursus. Lorem ipsum dolor sit amet consectetur adipiscing. Id leo in vitae turpis. Tellus pellentesque eu tincidunt tortor aliquam.</p>\r\n<p>Metus aliquam eleifend mi in nulla posuere. Tristique et egestas quis ipsum suspendisse ultrices. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Venenatis cras sed felis eget velit aliquet sagittis. Et ultrices neque ornare aenean euismod. Ut etiam sit amet nisl purus. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Fringilla ut morbi tincidunt augue interdum velit. Pretium fusce id velit ut tortor pretium viverra. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Vestibulum morbi blandit cursus risus at. Sed risus ultricies tristique nulla aliquet enim tortor at auctor. Volutpat est velit egestas dui id. Quis lectus nulla at volutpat diam. Amet nisl purus in mollis nunc sed id. Mollis aliquam ut porttitor leo a.</p>\r\n<p>In ante metus dictum at tempor commodo ullamcorper. Tristique senectus et netus et. Velit aliquet sagittis id consectetur. Neque egestas congue quisque egestas diam in arcu cursus euismod. Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit. Enim sit amet venenatis urna cursus eget. Ut tellus elementum sagittis vitae et leo duis ut. At varius vel pharetra vel turpis nunc eget. Sem integer vitae justo eget magna fermentum iaculis. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed. Sed risus ultricies tristique nulla aliquet enim tortor at. Nibh tellus molestie nunc non blandit massa enim nec dui. Id ornare arcu odio ut sem nulla. Eget mi proin sed libero enim sed faucibus turpis in. Auctor eu augue ut lectus arcu bibendum at varius vel.</p>', '2', 'post_1710652915.jpg', NULL, NULL, '2024-03-17 05:21:55', '2024-03-17 18:21:03'),
	(3, 'Testttt 1123', 'testttt-1', 'Tesst 1', '<p>Test 1</p>', '4', 'post_1710658337.jpg', 'Tesst 1231', 'Tst', '2024-03-17 06:52:17', '2024-03-17 18:20:36');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table laravel.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.testimonials: ~2 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
REPLACE INTO `testimonials` (`id`, `name`, `designation`, `comment`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'Nguyen Hoang Quan 1', 'Store Leader 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'testimonial_1710436383.jpg', '2024-03-14 17:03:44', '2024-03-14 17:13:38');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table laravel.why_choose_items
CREATE TABLE IF NOT EXISTS `why_choose_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.why_choose_items: ~4 rows (approximately)
/*!40000 ALTER TABLE `why_choose_items` DISABLE KEYS */;
REPLACE INTO `why_choose_items` (`id`, `icon`, `heading`, `text`, `created_at`, `updated_at`) VALUES
	(1, 'fas fa-briefcase', 'Quick Apply', 'You can just create your account in our website and apply for desired job very quickly.', '2024-03-14 15:47:21', '2024-03-14 15:50:15'),
	(2, 'fas fa-search', 'Search Tool', 'We provide a perfect and advanced search tool for job seekers, employers or companies.', '2024-03-14 15:51:41', '2024-03-14 15:51:41'),
	(3, 'fas fa-share-alt', 'Best Companies', 'The best and reputed worldwide companies registered here and so you will get the quality jobs.', '2024-03-14 15:52:26', '2024-03-14 15:52:26'),
	(4, 'fab fa-twitter', 'Twitter Service', 'We provide this service.', '2024-03-14 15:52:53', '2024-03-14 15:52:53');
/*!40000 ALTER TABLE `why_choose_items` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
