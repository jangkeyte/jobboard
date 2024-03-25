-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for laravel
USE `u548735003_demo_website`;

-- Dumping structure for table laravel.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.admins: ~0 rows (approximately)
DELETE FROM `admins`;

-- Dumping structure for table laravel.advertisements
DROP TABLE IF EXISTS `advertisements`;
CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `job_listing_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_listing_ad_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_listing_ad_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_listing_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_listing_ad_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_listing_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.advertisements: ~0 rows (approximately)
DELETE FROM `advertisements`;

-- Dumping structure for table laravel.banners
DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner_job_listing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_job_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_job_categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_company_listing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_company_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_pricing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_faq` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_signup` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_forget_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_company_panel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_candidate_panel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.banners: ~0 rows (approximately)
DELETE FROM `banners`;

-- Dumping structure for table laravel.candidates
DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidates: ~20 rows (approximately)
DELETE FROM `candidates`;
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Em. Cát Mạnh Tân', 'Diagnostic Medical Sonographer', 'mang.thy', 'ha.mien@example.net', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Unde omnis tempora illum soluta ducimus. Ab est molestias et quas id quaerat. Occaecati voluptas iusto veritatis expedita sequi aut. Molestiae distinctio dignissimos sint vel velit et et. Incidunt quod ut corporis fugiat id amet qui. Doloremque autem nam et numquam est qui rem reprehenderit. At velit deleniti commodi sint maxime quidem et. Inventore excepturi sint facere dolore mollitia. Maiores autem quidem modi voluptatum. Explicabo aut voluptas nihil aut dolorem voluptatibus sequi odio. Et asperiores repellendus enim quis a cum. Natus recusandae ea temporibus est voluptatibus.', '(022) 021 9877', 'Nauru', '370 Phố Bế Chiến Ý, Phường 55, Quận Hiệp\nTây Ninh', 'Kien Giang', 'Hồ Chí Minh', '697676', 'Female', 'Unmarried', '2011-02-10', 'http://binh.int.vn/', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Cụ. Lư Dương Phương', 'Parking Lot Attendant', 'znhiem', 'hoan10@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Eius veritatis aut inventore. Sed perferendis eum quisquam quidem. Facere consectetur et qui et quia sint. Mollitia blanditiis non beatae molestiae sed quia error. Rerum molestiae reprehenderit debitis. Veniam sint ut ipsum ab ipsam est temporibus. Delectus vel atque dolorem nobis. Voluptates est corporis dolorem doloremque enim. Veritatis non sed libero tempore alias molestias hic.', '0129-207-1967', 'Dominica', '8 Phố Xa Nam Phượng, Phường Thập, Quận Trang Ý\nHải Phòng', 'Ha Noi', 'Hồ Chí Minh', '371337', 'Female', 'Unmarried', '1999-04-01', 'http://hong.com/sed-consectetur-tenetur-quis-tempora', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'Chú. Võ Kỷ', 'New Accounts Clerk', 'chu.van', 'quach.khue@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Et necessitatibus inventore aut debitis laborum et. Aperiam qui ut amet optio totam neque. Et consectetur reprehenderit et. Nemo modi officiis mollitia. Non sapiente fuga et et. Et dolores consequatur totam voluptates nihil molestiae. Quo officiis repudiandae quod nam ut libero. Quisquam aut reprehenderit porro earum. Cupiditate sed voluptates tempore consequatur occaecati. Consequatur dolores inventore velit laboriosam voluptatibus. Quia enim tempore quia repellendus. Ut distinctio porro placeat. Ut rerum qui quibusdam doloribus ullam recusandae. Voluptatem voluptatem aliquam cum.', '+84-164-751-8450', 'Mali', '107 Phố Hùng Học Trúc, Phường Hà Điền Tuyến, Huyện 82\nHồ Chí Minh', 'Ca Mau', 'Cần Thơ', '94414-2787', 'Female', 'Divorced', '2011-02-25', 'http://www.pham.net.vn/non-ratione-aliquid-non-aliquid', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'Thái Vũ Tâm', 'Plating Operator OR Coating Machine Operator', 'dthap', 'nhien65@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Dolorem vel nihil in. Quisquam officia et assumenda suscipit unde inventore qui. Modi eos qui harum sit dolore qui. Soluta numquam ullam et quis quibusdam enim nihil ut. Aliquid magni velit aut sint minima non eos et. Dolores sunt ut ut at. Dolorum porro numquam dolores nemo inventore. Sequi quis magnam quae occaecati quaerat labore dolorem. Et est in totam omnis quo sint odit.', '(074)563-6737', 'Dominican Republic', '8037 Phố Đường Định Xuyến, Ấp Mạc Ngân, Huyện 0\nĐồng Nai', 'Ca Mau', 'Hải Phòng', '36135-9765', 'Female', 'Divorced', '1994-08-09', 'http://www.chau.com/eum-cupiditate-enim-dolor-atque-quia-odio', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(5, 'Bà. Hồ Trúc', 'Exhibit Designer', 'zngan', 'nguyen42@example.net', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Porro culpa quas rerum repudiandae veritatis nam quo. Eum et autem eveniet officia. Sint ab dolor quibusdam repellat debitis vitae aut laborum. Doloribus odit mollitia quia et non. Quia exercitationem velit velit laudantium nihil in. Voluptas est et omnis tempora numquam odio cum est. Et quia eos similique quos voluptatem. Rerum et consequuntur voluptates nihil qui dolorum.', '0231-152-0330', 'Tajikistan', '155 Phố Vương Trầm Vi, Xã Mâu, Quận 61\nThanh Hóa', 'Tra Vinh', 'Hồ Chí Minh', '48299-5241', 'Male', 'Married', '1976-04-07', 'http://www.khuat.int.vn/assumenda-et-harum-maxime-est', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(6, 'Cụ. Hoàng An Chung', 'Locksmith', 'xla', 'la.dat@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'In dignissimos nihil minima corporis et eveniet voluptas. Ut officia blanditiis suscipit nihil et id. Sapiente ut quo facilis reprehenderit consectetur ducimus voluptatem. Pariatur sint qui beatae voluptatibus quia qui voluptatem. Iure et nostrum consequatur eos voluptate. Odit voluptatibus iure dolorum unde velit vero impedit. Quia dolores labore id est quos. Qui incidunt impedit nesciunt mollitia voluptas. Velit deserunt necessitatibus in. Est aspernatur minus nihil dolorem doloribus.', '0241-966-0448', 'Italy', '120 Phố Kiều Đường Bắc, Ấp Tuyền Thành, Quận Lô\nLai Châu', 'Vung Tau', 'Hồ Chí Minh', '289919', 'Male', 'Divorced', '1986-12-18', 'http://chau.mil.vn/ratione-nobis-inventore-consequatur-possimus-nulla-consectetur-cum', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(7, 'Khổng Chiến', 'Real Estate Association Manager', 'obanh', 'nga.dong@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Incidunt libero eligendi placeat. Enim et molestiae consequatur aut veritatis voluptatem. Odit dolores et eum ipsam et et perferendis suscipit. Sunt ratione ut et temporibus. Reiciendis et sed eum necessitatibus dolorem. Amet dolores eos id ea maxime ullam quo dolor. Totam et et numquam cupiditate tempore autem sint. Rerum nesciunt commodi est dolores at. Molestias suscipit dolor sed maxime. Aut modi qui dolorum illum suscipit reiciendis.', '84-58-857-3635', 'Jordan', '7 Phố Khanh, Phường Phí, Huyện Lam Trang\nQuảng Trị', 'Ben Tre', 'Hồ Chí Minh', '402498', 'Female', 'Divorced', '1992-01-15', 'http://www.lo.com/exercitationem-earum-earum-veniam-quibusdam-ipsa', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(8, 'Em. Xa Triệu Xuyến', 'Vending Machine Servicer', 'wdon', 'nguy.nhan@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Exercitationem quasi aspernatur est asperiores iusto omnis maiores non. Veritatis vel incidunt dolore numquam et. Ut eos libero ipsa neque. Ipsam nemo debitis et maxime. Aut itaque quis unde dignissimos perspiciatis est et. Et dolores accusantium eum est nemo. Consequatur minima delectus itaque quidem consectetur. Ut placeat quos ut aut occaecati. Repellat fugit alias qui expedita sed eveniet.', '0780-367-2814', 'Bouvet Island (Bouvetoya)', '6 Phố Phương, Phường Huệ Nghĩa, Huyện Văn Đan\nCần Thơ', 'Bac Lieu', 'Đà Nẵng', '35871', 'Female', 'Unmarried', '1978-11-25', 'http://www.vu.com/sit-asperiores-qui-sed-veritatis.html', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(9, 'Kiều Lương Kiện', 'Social Worker', 'nnham', 'dung.luong@example.net', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Atque qui ut corporis aut. Ut animi provident et voluptas. Qui vel dicta ipsam dignissimos eos qui dolores. Eum magni est optio quia sint occaecati. Quis sit maiores illum quia. Ullam qui magni quia aut saepe. Repellat fuga iure porro. Facilis quidem quisquam rerum adipisci qui voluptates esse. Ipsam dolor omnis impedit voluptatum ullam mollitia earum. Eligendi ratione quia qui consequatur ipsum optio exercitationem.', '(094) 726 1665', 'Honduras', '2229 Phố Nhậm, Phường Trần Lễ Hải, Huyện Sương Lý\nPhú Yên', 'Tra Vinh', 'Hà Nội', '68748-4058', 'Female', 'Unmarried', '2002-11-30', 'http://www.trang.com/voluptatem-quia-sed-non-natus-dignissimos', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(10, 'Em. Châu Lý', 'Government Service Executive', 'ety', 'ton.phuong@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Ut qui qui earum minus. Quasi nesciunt veritatis voluptatem aspernatur magni. Modi reiciendis tempora autem optio tenetur vel et. Fuga sint sit et et quibusdam. Aut nemo quia adipisci ut inventore omnis nemo. Provident quas vero doloremque qui. Voluptatem voluptatem qui nulla accusamus quod sit consequuntur.', '+84-188-521-8952', 'Lebanon', '47 Phố Mã, Phường Mai Thịnh, Huyện Khang\nCần Thơ', 'Kien Giang', 'Cần Thơ', '440698', 'Male', 'Married', '2013-01-15', 'http://www.moc.com.vn/libero-ullam-qui-dolore-blanditiis-voluptatem-itaque-praesentium', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(11, 'Bác. Ngụy Anh', 'Air Traffic Controller', 'gdong', 'trinh.an@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Sapiente dicta officiis nihil quaerat pariatur. Earum vel et voluptates sunt iure non. Est rerum quasi eum. In quia vel consequatur id. Nihil dolore natus et consectetur commodi. Adipisci saepe dicta rerum et sed dolores quisquam at. Neque est maxime nihil adipisci. Eos vel itaque labore magnam velit sed et. Et eveniet est quaerat voluptates placeat ut cupiditate. Repellat ut vitae quod ex dolores.', '060-782-1415', 'South Africa', '8 Phố Lưu Thảo Chiêu, Xã Thiên, Huyện Trinh Khu\nHồ Chí Minh', 'Long An', 'Cần Thơ', '30735', 'Female', 'Married', '2005-10-11', 'http://chu.ac.vn/minus-et-aut-nihil-rerum-et-consequatur-ut', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(12, 'Hán Trúc Phong', 'Artillery Crew Member', 'trac08', 'nu96@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Quae consequuntur rerum dolores tempora iure perspiciatis nam minima. Dolorem voluptatem similique unde et. Et odit ea ratione dolore est ut nisi deserunt. Neque cumque sit autem perspiciatis necessitatibus. Aut esse quasi sequi voluptate dolores. Aut deleniti consequatur voluptatem illum est sint autem nulla. Blanditiis repudiandae quia ut aliquid. Hic est repudiandae id commodi qui. Esse aut vel in. Unde delectus vitae sapiente deserunt ducimus omnis.', '84-75-191-9911', 'Libyan Arab Jamahiriya', '5 Phố Chu Vũ Ý, Phường Thôi Khang Hà, Quận Vĩnh Quỳnh\nHà Nam', 'Binh Duong', 'Đà Nẵng', '47476', 'Male', 'Married', '1990-08-07', 'http://www.thi.org/', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(13, 'Đan Triều Ân', 'Automotive Mechanic', 'chung58', 'zthao@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Eaque iusto nostrum in facere adipisci. Optio necessitatibus eius deleniti voluptatem ducimus officia. Debitis hic cupiditate et aliquid est. Asperiores totam placeat dolorem unde. Facere aut dolorum sed quibusdam non animi. Beatae architecto qui esse aliquam. Et enim est unde earum temporibus sed numquam. Eum consequatur autem exercitationem aut non. Est recusandae suscipit explicabo aut hic modi. Tempore voluptate eligendi explicabo. Expedita non dolores cupiditate placeat quidem nam. Sit quia distinctio libero dolores fugiat ut voluptas.', '(0281) 769 0211', 'Swaziland', '56 Phố Lễ, Xã Sĩ, Quận 48\nLong An', 'Tra Vinh', 'Đà Nẵng', '06585-9651', 'Male', 'Divorced', '2016-11-30', 'https://www.lo.net/rerum-ut-quisquam-vel', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(14, 'Em. Trưng Nghi Khuyên', 'Baker', 'minh.vu', 'nong.loi@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Fugit tenetur molestiae sunt enim magni. Qui ipsum omnis qui earum cum quos. Id vitae esse enim quis. Aut est sit optio id quo consequuntur. Assumenda non voluptatem ducimus ut labore. Consequatur qui et et dolorem. Quisquam minima modi id laborum earum doloremque in iste. Cum ut id laudantium omnis saepe voluptatem aliquid.', '(0199) 741 2117', 'Iraq', '23 Phố Hình Sâm Khanh, Xã Di Mẫn, Quận Hợp Tân\nHải Phòng', 'Dong Thap', 'Hồ Chí Minh', '54440-1587', 'Female', 'Married', '1975-04-28', 'https://thai.info.vn/est-itaque-sit-molestias-laboriosam-laborum-temporibus-laborum-tempora.html', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(15, 'Mạch Đồng Long', 'Production Laborer', 'tong.thoa', 'vma@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Fugiat ipsam quia minima mollitia sunt. Labore accusamus molestias qui ut accusantium. Aperiam est architecto consectetur sequi. Dolores et est delectus tempora quis. Consequuntur sit ullam voluptate quo. Mollitia possimus veritatis et fugit velit accusamus sapiente quia. Debitis repudiandae est repudiandae omnis. Laudantium error dolorem similique dolor repellat facere velit maxime. Est qui nulla hic nobis quis quo. Consectetur magni dolores beatae cumque necessitatibus. Illum aut doloribus occaecati amet nulla aut.', '+84-97-884-4326', 'Korea', '29 Phố Điền, Thôn Nghiêm Thiện, Huyện Khanh Hậu\nCần Thơ', 'Vung Tau', 'Hồ Chí Minh', '743470', 'Female', 'Unmarried', '1994-12-24', 'http://www.nhiem.edu.vn/error-corporis-repudiandae-voluptatem-reprehenderit-sed-sunt-deserunt', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(16, 'Phi Ánh', 'Health Services Manager', 'ninh.nhu', 'hong.doan@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Impedit recusandae in fugiat sint aut fuga est. Et doloribus perspiciatis atque et vel neque commodi. Repellat id quis occaecati magnam enim atque. Alias vel exercitationem eius est velit sed unde. Voluptas facilis neque consequuntur iste consectetur nihil. Nostrum quia magni hic labore soluta earum laborum. Possimus ut occaecati quibusdam ea dolores molestias deleniti consequuntur. Dicta qui qui debitis magnam ipsum. Omnis qui rerum laborum quis voluptas porro. Consequatur accusamus tenetur commodi quia quo neque. Et sapiente a quisquam quia consectetur eum nostrum.', '(0780)766-7539', 'Hungary', '23 Phố Trương Khương Trọng, Phường Chu, Quận Ty Ty Từ\nTiền Giang', 'Dong Nai', 'Hải Phòng', '08482', 'Female', 'Married', '1976-03-13', 'http://hy.int.vn/laboriosam-consequuntur-dolorem-eos-accusantium-vero-repellat.html', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(17, 'Ông. Cầm Quân Vĩ', 'Police Identification OR Records Officer', 'yen11', 'tien46@example.com', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Quis dignissimos quos dicta in. Pariatur quam tempora dolorem repudiandae. Possimus qui tenetur est consectetur. Quaerat soluta rem quo non explicabo. Aut ipsa qui repellat illum temporibus. Corrupti illo reiciendis error sint voluptas. Unde cum reiciendis ducimus vitae quidem et provident deserunt. Ad tempore voluptatem iste omnis. Veniam repudiandae a ducimus omnis optio labore in.', '08 0808 3542', 'Latvia', '6114 Phố Thoa, Phường Liễu, Quận Trụ\nNam Định', 'Dong Nai', 'Cần Thơ', '41080-4614', 'Male', 'Married', '1989-03-27', 'http://tu.info.vn/dolorem-ipsum-aut-voluptas-rerum-et', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(18, 'Nghiêm Dũng Hạnh', 'Poet OR Lyricist', 'huyen05', 'kiet15@example.net', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Deleniti nemo quis quia explicabo quasi omnis nihil. Maxime molestiae asperiores et cumque veniam. Distinctio praesentium rerum quod qui necessitatibus deserunt explicabo nihil. Eligendi officia sequi explicabo nulla. Rem illo voluptas non dicta. Nulla sit veritatis provident minima deleniti. Qui odio est enim iste ratione aut vero. Excepturi praesentium aut nisi tempore quia incidunt. Aut natus facere et dolorum praesentium modi. Eveniet modi quis molestiae placeat.', '(0127) 154 7442', 'Iraq', '300, Ấp 71, Phường Diêm Nhàn Trân, Quận Hồng\nQuảng Ninh', 'Ho Chi Minh', 'Hải Phòng', '63553-1192', 'Female', 'Divorced', '1990-04-24', 'http://vuong.name.vn/', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(19, 'Bàng Thoại', 'Stock Clerk', 'tam82', 'nkhu@example.org', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Natus qui ullam impedit ut inventore autem. Qui quod aut magni commodi sed non at quis. Ullam architecto et quas quidem dolores reiciendis minima consequatur. Iure doloribus quidem illum et et maxime aut ipsa. Perspiciatis omnis fugiat architecto deserunt culpa dolor qui. Temporibus autem facilis et deleniti quia omnis sunt. Cum commodi tempora nisi id voluptatum. Facilis ad cumque suscipit nesciunt et qui. Illo omnis cupiditate facilis nesciunt. Quisquam laboriosam officiis excepturi rerum vero. Ducimus nulla dignissimos est dignissimos nihil et et. Sit numquam aut suscipit mollitia eligendi. Ut et quasi esse omnis quibusdam officiis. Et est et sequi non ad rem omnis quia.', '(0169)677-8383', 'Paraguay', '67, Ấp Nhậm Hòa Vọng, Phường Xuân Ma, Huyện 4\nĐắk Lắk', 'Can Tho', 'Hải Phòng', '43031', 'Female', 'Married', '1987-05-16', 'http://che.biz/dolorem-et-placeat-facilis-fugiat-dignissimos-sint.html', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `candidates` (`id`, `name`, `designation`, `username`, `email`, `password`, `token`, `photo`, `biography`, `phone`, `country`, `address`, `state`, `city`, `zip_code`, `gender`, `marital_status`, `date_of_birth`, `website`, `status`, `created_at`, `updated_at`) VALUES
	(20, 'Lâm Bích Trình', 'Woodworker', 'rtao', 'lu.thinh@example.net', '$2y$12$ilz02SYMWf0s2iz6Jb4wUO6cUd/nmc2hSpIOkmQWJS7Zgny6Zae7i', NULL, 'default.png', 'Aut tempora omnis molestiae sapiente libero omnis voluptatum. Quod harum quam corporis. Est aperiam voluptas quod. Qui reprehenderit autem sit libero. Voluptatem exercitationem dolorum eos libero. Tempora et ut est. Ut molestiae ut sunt temporibus laudantium numquam et. Vitae vel ut magni officiis. Omnis sed doloremque maiores ex consequatur quam nam.', '0123 324 5113', 'Greenland', '1 Phố Biện Kiện Hỷ, Xã Hoàng Du Lan, Huyện Thịnh Chiêu\nKhánh Hòa', 'Ha Noi', 'Hồ Chí Minh', '53410', 'Male', 'Married', '1992-05-11', 'http://www.lo.com/', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.candidate_applications
DROP TABLE IF EXISTS `candidate_applications`;
CREATE TABLE IF NOT EXISTS `candidate_applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `job_id` int NOT NULL,
  `resume_id` int NOT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_applications: ~0 rows (approximately)
DELETE FROM `candidate_applications`;

-- Dumping structure for table laravel.candidate_awards
DROP TABLE IF EXISTS `candidate_awards`;
CREATE TABLE IF NOT EXISTS `candidate_awards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_awards: ~0 rows (approximately)
DELETE FROM `candidate_awards`;

-- Dumping structure for table laravel.candidate_bookmarks
DROP TABLE IF EXISTS `candidate_bookmarks`;
CREATE TABLE IF NOT EXISTS `candidate_bookmarks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `job_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_bookmarks: ~0 rows (approximately)
DELETE FROM `candidate_bookmarks`;

-- Dumping structure for table laravel.candidate_education
DROP TABLE IF EXISTS `candidate_education`;
CREATE TABLE IF NOT EXISTS `candidate_education` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_education: ~0 rows (approximately)
DELETE FROM `candidate_education`;

-- Dumping structure for table laravel.candidate_resumes
DROP TABLE IF EXISTS `candidate_resumes`;
CREATE TABLE IF NOT EXISTS `candidate_resumes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_resumes: ~0 rows (approximately)
DELETE FROM `candidate_resumes`;

-- Dumping structure for table laravel.candidate_skills
DROP TABLE IF EXISTS `candidate_skills`;
CREATE TABLE IF NOT EXISTS `candidate_skills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_skills: ~0 rows (approximately)
DELETE FROM `candidate_skills`;

-- Dumping structure for table laravel.candidate_work_experiences
DROP TABLE IF EXISTS `candidate_work_experiences`;
CREATE TABLE IF NOT EXISTS `candidate_work_experiences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.candidate_work_experiences: ~0 rows (approximately)
DELETE FROM `candidate_work_experiences`;

-- Dumping structure for table laravel.companies
DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_location_id` int DEFAULT NULL,
  `company_industry_id` int DEFAULT NULL,
  `company_size_id` int DEFAULT NULL,
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
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.companies: ~20 rows (approximately)
DELETE FROM `companies`;
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Lều PLC', 'Cụ. Khúc Ngọc', 'nghiem.nhan', 'chuong.man@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '08 6170 8862', '383 Phố Nguyễn Du Lâm, Ấp Loan Danh, Quận Hy Tâm Ngân\nCần Thơ', 8, 6, 0, '1996', 'http://www.bang.info.vn/aliquid-est-cum-distinctio-perferendis-dolores-dolores-occaecati.html', 'Vel ut sed esse. Eum praesentium sit at quis. Quia sunt voluptatem dolore exercitationem et. Omnis voluptas sunt vitae dolores nulla repudiandae illo. Et omnis unde quaerat quas et autem animi. Labore autem quod hic animi qui vero dignissimos. Esse dolore doloremque officiis voluptas numquam ut. Reprehenderit voluptas similique molestias dignissimos. Et et ut magnam blanditiis. Dolorem atque consequatur vitae cum ullam beatae enim. Ad consequatur voluptatem sint similique.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.768566,106.698133', 'https://facebook.com/kfokhxrm', 'https://twitter.com/titijafy', 'https://linkedin.com/kazoetso', 'https://instagram.com/tlboetww', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Quách-Hà', 'Chị. Cù Nhi', 'hoa58', 'lien60@example.org', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(84)(97)717-8383', '3308 Phố Cao Linh Hường, Xã Tuấn Ý, Quận Tạ\nCao Bằng', 0, 9, 2, '2016', 'http://www.thap.com/pariatur-ipsam-ullam-non-corporis-officia', 'Corporis accusantium deserunt sit recusandae enim ipsa repudiandae. Quae eaque et corporis iusto quas dignissimos. Error error dolorem eum soluta expedita. Recusandae beatae non optio totam. Voluptatem consequatur aut dolorum laborum consectetur delectus voluptatem. Enim totam rerum veniam quidem eos doloremque quam quam. Fuga est sequi qui neque qui soluta ipsam. Quo exercitationem ipsum consequatur omnis.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.762283,106.699837', 'https://facebook.com/rjahvtkk', 'https://twitter.com/bvqirpgr', 'https://linkedin.com/yzvoxcvm', 'https://instagram.com/tmnbkpaj', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'Tào, Sơn and Đặng', 'Ông. Thân Tài Thái', 'hang71', 'an.thai@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '84-59-339-1132', '9, Ấp Thơ Lý, Xã 36, Huyện Lều\nThừa Thiên Huế', 6, 1, 9, '2024', 'http://www.dan.com/', 'Reiciendis provident est aut maxime facere est nam. Ut voluptatibus qui quam minima. Sit laudantium veniam et dolorem maxime. Aliquid nisi culpa enim velit doloribus qui est. Voluptatem labore ratione ullam vero. Eum repellat aperiam repellat saepe eos recusandae assumenda. Occaecati blanditiis quae velit qui laboriosam a. Quis qui nostrum vel omnis temporibus id accusamus iure. Molestiae est nulla eum aperiam in fugit.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.748687,106.683141', 'https://facebook.com/eqvqoamh', 'https://twitter.com/uvgxgvbg', 'https://linkedin.com/tmixnsva', 'https://instagram.com/bqyazekd', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'Cầm LLC', 'Phạm Sĩ Khiêm', 'dtong', 'ngo.bach@example.org', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '0169 686 0420', '2 Phố Lê Lễ Toại, Ấp Vỹ Lễ, Quận Ẩn My\nTây Ninh', 9, 6, 9, '1997', 'http://www.dinh.com/exercitationem-molestias-odio-sunt-commodi-eum-vel-debitis', 'Accusamus sint incidunt tenetur minus id libero delectus. Tenetur similique deserunt consequuntur et. Architecto culpa impedit blanditiis distinctio id. Nisi quos mollitia natus culpa. Facilis tempora ducimus omnis omnis atque inventore. Placeat soluta quis quaerat nisi minima. Et eum qui qui nemo aut rerum fugit. Molestiae repudiandae quaerat id qui libero quis. Exercitationem quidem ut ullam assumenda. Qui voluptatem et sint a. Natus necessitatibus et quas quis quisquam.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.756155,106.695397', 'https://facebook.com/klrfzetb', 'https://twitter.com/apzbzpfo', 'https://linkedin.com/wjnbyvnp', 'https://instagram.com/lsdhdolk', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(5, 'Ninh-Sơn', 'Ngân Mỹ Oanh', 'htu', 'doan.dai@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '056 631 7433', '931 Phố Viên Kỷ Thảo, Phường Hỷ, Quận Chính Phương\nHà Nội', 3, 2, 7, '2007', 'http://www.cu.org/ipsam-est-provident-quis-est-laboriosam-laborum-ad', 'Neque reiciendis fuga temporibus ad id quo delectus. Itaque saepe quas sed corrupti exercitationem animi doloremque. Suscipit laborum in quia expedita assumenda. Sed distinctio quo eligendi est neque. Eligendi hic vel ipsa delectus eius. Sapiente ad in ea porro. Consectetur molestiae sed dolorum libero aut saepe. Voluptatem aut omnis ut iure accusantium atque iusto. Distinctio vero ut et sunt aut veritatis. Recusandae amet et placeat unde. Quae eum eos dolores expedita dicta suscipit minus. Deserunt et quos quo est unde voluptas possimus.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.747544,106.675626', 'https://facebook.com/gmkiifhv', 'https://twitter.com/wtchubfa', 'https://linkedin.com/tayxwnzc', 'https://instagram.com/itgldtwd', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(6, 'Thiều, Lò and Cam', 'Bác. Mẫn Lạc', 'pchu', 'zdoan@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '031 488 9602', '23, Thôn Toản Dân, Xã Đan Thân, Huyện Tiến Viên\nQuảng Bình', 0, 1, 3, '2016', 'http://www.diem.info/autem-sint-et-ut-optio-quam-quibusdam-tempora.html', 'Dolorem quidem molestiae quasi ad nihil. Eos facere blanditiis tenetur ad ut esse non. Mollitia fugiat impedit sint et. Error qui aut et in voluptatem. Et consequatur hic magni in quam libero dolorum. Accusamus repudiandae aliquid sapiente exercitationem quaerat dolorem. Eveniet eum architecto placeat blanditiis quisquam eos.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.77573,106.685375', 'https://facebook.com/zteyougm', 'https://twitter.com/kxcteghf', 'https://linkedin.com/bqoyxjeq', 'https://instagram.com/movgnzbp', 1, '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(7, 'Hùng Ltd', 'Bác. Ung Tú', 'au.tho', 'thuan58@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(84)(320)282-4222', '224, Thôn Tráng Phó, Xã Nghiêm, Huyện Giang Lệ\nKiên Giang', 5, 6, 6, '1992', 'http://man.biz.vn/ducimus-illo-voluptas-minus-aut-error-excepturi', 'Voluptate dolorum commodi ut aut perspiciatis optio. Molestiae deleniti vel expedita. Natus consectetur atque ratione minima dolores exercitationem. Id totam velit eum temporibus quae. Dolor est placeat velit et. Eligendi adipisci corrupti et sunt. Voluptate qui illum rerum consequatur cum quos. Nihil temporibus ipsa cum architecto.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.760304,106.685652', 'https://facebook.com/eerrudyc', 'https://twitter.com/qqfwugtn', 'https://linkedin.com/rtttxijl', 'https://instagram.com/sodpthxn', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(8, 'Yên PLC', 'Nhiệm Ngọc Mẫn', 'thao74', 'ucan@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '0123-308-3160', '9369 Phố Cái Thắng Kim, Phường Hậu Cấn, Quận Toại\nThái Nguyên', 8, 4, 2, '1991', 'http://www.trung.net.vn/', 'Sit maxime nisi ratione qui enim sunt eum. Ducimus nam voluptas placeat est deleniti aut. Vel enim sit facilis sequi laboriosam et. Similique qui repudiandae id reprehenderit eos. Molestias id laudantium voluptatum quis perspiciatis laudantium. Quasi qui tempore pariatur nihil neque et. Rerum dignissimos excepturi omnis accusamus neque iure.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.763034,106.68624', 'https://facebook.com/jlqqaelk', 'https://twitter.com/kpecpgib', 'https://linkedin.com/yrlsknmt', 'https://instagram.com/jjifahhu', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(9, 'Giao PLC', 'Phương Trưởng', 'lu.kim', 'tung.bac@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '+84-188-862-0749', '1 Phố Cung Bạch Trực, Xã Thái, Quận Yến Bình\nBạc Liêu', 2, 1, 4, '1997', 'http://bach.com/magnam-eius-voluptas-quam-eveniet-ut-cupiditate-ullam-dolor.html', 'Cumque adipisci repellat vitae in ducimus incidunt et quam. Nesciunt dolor consequatur veritatis voluptatem quos autem. In ea eum voluptatum nihil. Perferendis veniam qui et. Ut ullam deserunt quibusdam earum dolores vitae est. Sed rerum at ad rerum nisi voluptates. Harum nulla nam ut qui quo magni dicta. Temporibus autem molestiae sunt. Tenetur natus aut adipisci sit. Provident dolorem numquam laborum consequatur repellendus itaque repudiandae. Qui dolores commodi alias iste. Iste aperiam expedita quibusdam iusto quos exercitationem ut aut.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.742553,106.694234', 'https://facebook.com/sydmvjzd', 'https://twitter.com/hnfcgkng', 'https://linkedin.com/kttrckbo', 'https://instagram.com/erxzfknd', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(10, 'Lạc PLC', 'Tiêu Hoàng Nam', 'hoa77', 'my74@example.org', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '094-286-7224', '2337 Phố Hàn Chính Thùy, Xã Đào, Quận Miên\nNghệ An', 1, 2, 9, '2013', 'http://du.com/libero-nemo-labore-reiciendis-officiis', 'Doloremque consequuntur cumque et perspiciatis. Aperiam velit commodi voluptate repudiandae neque. Sit laboriosam voluptatem neque rerum et aut voluptatem. Non ad omnis veniam ab rerum inventore saepe. Tempore optio voluptatum qui. Voluptatem praesentium aut quod amet dolor qui aliquam. Sed omnis rerum adipisci eius ea et. Reiciendis aspernatur sint eum quo dicta est possimus ducimus. Eos ut sit ut. Blanditiis ea nulla quia et aliquid id sit.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.748542,106.685811', 'https://facebook.com/eqvzspvb', 'https://twitter.com/avuabwpv', 'https://linkedin.com/sxbsdqoi', 'https://instagram.com/bnclakud', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(11, 'Cung, Tiêu and Nhậm', 'Cụ. Thi Hòa Hoa', 'toan.vien', 'bchiem@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '04-0054-5794', '997, Thôn Đặng Mẫn Hân, Xã 18, Quận 4\nThừa Thiên Huế', 6, 4, 5, '2014', 'http://www.vi.biz.vn/pariatur-ipsum-totam-eum-qui', 'Exercitationem qui voluptates ab illum. Maiores repudiandae doloribus est a. Et magnam maiores est. Id in quia id incidunt vel quibusdam voluptate. Delectus qui distinctio vel perspiciatis soluta praesentium unde. Expedita quisquam fugit ad molestiae a et. Quidem est incidunt earum eos. Alias modi quo nam aut voluptate voluptatum. Perspiciatis impedit non ut explicabo qui sed aut. Aliquam amet eos provident quia numquam mollitia et eius. Qui eos cupiditate autem asperiores. Voluptatibus molestiae est quia nulla est. Blanditiis aperiam facere rem repudiandae nobis veniam.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.753333,106.69844', 'https://facebook.com/ndlxnjcb', 'https://twitter.com/cyslbdup', 'https://linkedin.com/ddgppfkf', 'https://instagram.com/ixbjrfne', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(12, 'Cự, Mạc and Đào', 'Bác. Lã Chung', 'chiem.vy', 'mac.ngon@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(84)(122)902-9916', '258 Phố Ninh, Phường Nhân Khê, Huyện Lỳ Lợi Duệ\nKon Tum', 0, 2, 8, '2017', 'http://www.chau.com/', 'Et commodi cupiditate sed. Expedita non ab nesciunt quisquam possimus. Similique qui quo quo. Dolores assumenda quis in voluptate est consectetur reprehenderit aliquam. Libero rerum tenetur autem dolor reprehenderit. Vero qui et dolor quod. Est eum ea cupiditate tenetur. Voluptate itaque aut fugiat cupiditate.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.767092,106.693249', 'https://facebook.com/gdpmsmyj', 'https://twitter.com/vujrnmjv', 'https://linkedin.com/qzexmask', 'https://instagram.com/czzorcmi', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(13, 'Tòng-Thôi', 'Nhữ Huy Ân', 'khuong.phuoc', 'tuyen.che@example.org', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(84)(123)046-6184', '25 Phố Cổ, Phường 03, Huyện Nhi Hoài\nHồ Chí Minh', 9, 9, 5, '2000', 'https://thao.gov.vn/iste-architecto-eum-sed-voluptatibus.html', 'Voluptatibus qui dolor provident ratione eveniet in. Placeat quia neque esse molestiae ea velit recusandae. Sequi nihil sunt doloremque distinctio dolorum id iste. Possimus repellat ab deserunt dolores. Tempora mollitia officiis et. Necessitatibus molestiae non harum voluptas hic explicabo. Vel accusantium alias qui. Odit ex possimus quia commodi eveniet expedita. Voluptatum rerum numquam dolore ab. Rerum quo nihil eum corporis dignissimos.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.758614,106.675704', 'https://facebook.com/ieznbubx', 'https://twitter.com/qrvbduoz', 'https://linkedin.com/sjhnroji', 'https://instagram.com/hiybzrgx', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(14, 'Ấu-Tông', 'Bác. Hạ Khoa Thụy', 'cquan', 'ldu@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '+84-166-242-9764', '1 Phố Trang Khánh Kha, Xã Lục Nhiên Thạc, Huyện 05\nHồ Chí Minh', 8, 8, 5, '2011', 'http://www.cai.edu.vn/ad-harum-inventore-optio-corporis-velit', 'Nemo impedit corporis tenetur cupiditate. Nihil earum commodi similique quibusdam. Sunt quis laboriosam quos sint voluptatem at fugit et. Eveniet et pariatur repellendus veritatis quibusdam. Ut quia ab est est. Et omnis voluptatem quisquam aperiam nostrum. Nesciunt similique et qui laudantium. Consequatur nobis perspiciatis quo reiciendis magni deserunt incidunt. Itaque aliquid incidunt officiis a quia modi est. Eum voluptatibus et ut incidunt et.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.746091,106.701256', 'https://facebook.com/absgupji', 'https://twitter.com/tyzftcnu', 'https://linkedin.com/vgukzimo', 'https://instagram.com/cfctferz', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(15, 'Đới, Trịnh and Tào', 'Tăng Võ', 'khanh.leu', 'han.lu@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(0218) 638 7528', '7268 Phố Chương Đài Lam, Xã Viên Lễ, Quận Lê\nHải Phòng', 4, 2, 5, '1995', 'https://www.ung.net.vn/molestiae-aperiam-corrupti-iste-at-ea-vel-similique', 'Rerum mollitia magni officiis delectus optio. Sunt molestiae eos delectus dicta voluptate quisquam cumque. Ut ut voluptas dolores dolorem. Accusantium quam placeat qui sit animi. Ea rerum ut repudiandae esse. Nisi rerum ad omnis temporibus vero incidunt velit. Enim modi error in itaque.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.763682,106.699029', 'https://facebook.com/nnrlmntb', 'https://twitter.com/cmdvngph', 'https://linkedin.com/wuodfpym', 'https://instagram.com/gamrmhsi', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(16, 'Lương PLC', 'Đôn Huân Hải', 'vo.trang', 'tao.chau@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '0281 372 8144', '9 Phố Ngân Yến Trúc, Xã Hà Hân Mỹ, Huyện Bồ Điệp\nHà Nội', 0, 6, 9, '1992', 'http://khu.org/omnis-consequatur-aut-sit-natus-magni', 'Sed sed exercitationem et veritatis neque quibusdam in. Possimus est ea neque eum vel. Veniam ratione excepturi rem voluptatum reprehenderit autem. Corrupti molestias dolores magnam asperiores aut. Vel repellendus aut amet a quo amet. Officia et nobis nemo minima. Nulla nemo aut veritatis. Dolorem porro nobis sit veritatis repellendus enim. Rerum architecto dolorum ipsam nemo. Qui dignissimos quae animi neque illum autem est. Laborum repellat perspiciatis nulla officia velit ad. Quasi perspiciatis accusantium voluptatem sequi.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.762797,106.670881', 'https://facebook.com/jhhuvtyb', 'https://twitter.com/uawjafgp', 'https://linkedin.com/vofksjqk', 'https://instagram.com/amiycngl', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(17, 'Bành-Bùi', 'Giả Nhã Chi', 'cai.loan', 'ucu@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '+84-241-302-4664', '8462, Ấp Hảo Khang, Xã 69, Huyện Đình Đậu\nPhú Thọ', 8, 0, 0, '1996', 'https://www.du.com/voluptate-temporibus-id-adipisci-velit', 'Odio commodi itaque rerum iste ullam aut eum facilis. Eius laborum dolor modi nemo vitae. Non provident aut beatae aspernatur. Vel maxime sed id omnis. Voluptas dolore velit deserunt ea eligendi est fugit. Autem magnam dicta explicabo dignissimos adipisci. Laudantium iusto quo non. Voluptate vero dolores sed molestias reprehenderit explicabo ad. Natus et magni adipisci quisquam non. Dolores accusantium veniam in similique recusandae.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.765712,106.696086', 'https://facebook.com/xhkkvmwe', 'https://twitter.com/unkfxytf', 'https://linkedin.com/fifjcyyh', 'https://instagram.com/orusqsod', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(18, 'Thôi, Bá and Tào', 'Bác. Ninh Đăng Chấn', 'udai', 'dau.do@example.org', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '+84-123-658-5241', '7 Phố Khoa, Xã Ánh Thạc, Huyện Viên Văn\nCần Thơ', 0, 9, 4, '1992', 'http://www.phi.ac.vn/beatae-optio-optio-sint-laboriosam-reiciendis-est', 'Quo reiciendis ut aperiam vel velit velit. Incidunt ullam cupiditate aut ut voluptatem praesentium omnis. Qui sed quo ut sint dolores unde. Id sunt ipsa molestias quibusdam deleniti. Animi eum amet quia esse nulla sunt quae explicabo. Excepturi nulla ut possimus culpa fugit odio. In aut optio numquam aut. Exercitationem incidunt tenetur facere exercitationem voluptate a eum. Aut exercitationem eius at culpa voluptas expedita et.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.757085,106.682193', 'https://facebook.com/nurxuslj', 'https://twitter.com/fmsdyrhm', 'https://linkedin.com/sejkbcwp', 'https://instagram.com/edclaubr', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(19, 'Thịnh, Đoàn and Nông', 'Trình Túy Hạnh', 'hong.mai', 'loc01@example.com', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '(0125)091-4104', '806 Phố Thọ, Phường Chiêu, Huyện Chương Thúy Nam\nĐà Nẵng', 8, 6, 9, '2003', 'https://www.chu.pro.vn/qui-consequuntur-ut-et-corporis-doloremque-sapiente', 'Explicabo temporibus ipsam quia et quam nihil. Labore dolore saepe dolorem. Est vel non sit aut optio voluptatem rerum recusandae. Iste et sapiente deserunt earum autem iusto autem. Iusto tenetur occaecati et quia nihil accusamus in. Eum nesciunt repudiandae et enim ea rem unde. Nisi aut quo ut sapiente. Voluptas numquam exercitationem blanditiis modi dolores voluptatem quas. Soluta aut veniam molestias enim dolores quos suscipit. Dolorum eum omnis corporis eveniet. Labore quibusdam voluptatem hic quod similique eum iusto.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.755228,106.677882', 'https://facebook.com/ibzfltmx', 'https://twitter.com/ktimttkz', 'https://linkedin.com/aiazxbpj', 'https://instagram.com/emsiukgc', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');
INSERT INTO `companies` (`id`, `company_name`, `person_name`, `username`, `email`, `password`, `token`, `logo`, `phone`, `address`, `company_location_id`, `company_industry_id`, `company_size_id`, `founded_on`, `website`, `description`, `oh_mon`, `oh_tue`, `oh_web`, `oh_thu`, `oh_fri`, `oh_sat`, `oh_sun`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
	(20, 'Thào-Phùng', 'Cô. Ca Cương', 'hop71', 'khu.my@example.net', '$2y$12$3uyn82w9w3zmDeQ8i0RVOucL.sQt9WUUpjcv0RYZTbsqcL3Wt6CBS', NULL, 'default.png', '+84-63-057-3236', '688 Phố Bảo, Thôn Thân Cầm, Quận Thủy Diệu\nPhú Yên', 3, 8, 2, '1996', 'https://tong.edu.vn/libero-commodi-rerum-quia-reprehenderit.html', 'Dolor voluptates fugiat commodi aut est dignissimos aperiam. Sapiente recusandae exercitationem id non. Dolorem impedit rerum et nostrum id voluptatem minima. Non eum voluptatem sit excepturi iste nihil. Nisi consectetur necessitatibus aut sit officiis et. Explicabo voluptatibus dolorum natus sed quas. Voluptatem consequatur aperiam recusandae ex molestiae. Sit aliquam distinctio ut voluptate est velit dolorem non. Reprehenderit fugiat repudiandae aliquam voluptatem omnis reprehenderit repellendus.', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 6:00 PM', '8:00 AM - 12:00 AM', '8:00 AM - 10:00 AM', '10.771456,106.691203', 'https://facebook.com/qgjkuwbo', 'https://twitter.com/nwlnzihd', 'https://linkedin.com/dhikqxxt', 'https://instagram.com/plqvlzzx', 1, '2024-03-24 21:10:08', '2024-03-24 21:10:08');

-- Dumping structure for table laravel.company_industries
DROP TABLE IF EXISTS `company_industries`;
CREATE TABLE IF NOT EXISTS `company_industries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_industries: ~30 rows (approximately)
DELETE FROM `company_industries`;
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Retail', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Land Leasing', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, 'Education', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, 'Commercial Leasing', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, 'Forestry', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, 'Food Industry', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, 'Apartment Rental', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(8, 'Mining', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(9, 'Accounting Firm', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(10, 'Economic Sector', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(11, 'Software Company', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(12, 'Entertainment', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(13, 'Food & Beverage', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(14, 'Health Care', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(15, 'Computer', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(16, 'Electronics', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(17, 'Hospitality', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(18, 'Manufacturing', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(19, 'Real Estate Company', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(20, 'Fishing & Hunting', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(21, 'Pharmaceutical', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(22, 'IT Company', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(23, 'Media', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(24, 'Logging', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(25, 'Advertising & Marketing', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(26, 'Aerospace', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(27, 'Telecommunication', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(28, 'Banking', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(29, 'Agriculture', '2024-03-25 00:04:15', '2024-03-25 00:04:15');
INSERT INTO `company_industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(30, 'Transportation', '2024-03-25 00:04:15', '2024-03-25 00:04:15');

-- Dumping structure for table laravel.company_locations
DROP TABLE IF EXISTS `company_locations`;
CREATE TABLE IF NOT EXISTS `company_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_locations: ~20 rows (approximately)
DELETE FROM `company_locations`;
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Vinh Long', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Tay Ninh', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, 'Ha Noi', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, 'Vung Tau', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, 'Binh Duong', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, 'Ben Tre', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, 'Soc Trang', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(8, 'Long An', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(9, 'Kien Giang', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(10, 'Kon Tum', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(11, 'Tra Vinh', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(12, 'Dong Thap', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(13, 'Hau Giang', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(14, 'Long Khanh', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(15, 'Binh Phuoc', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(16, 'Can Tho', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(17, 'Bac Lieu', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(18, 'Dong Nai', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(19, 'Ho Chi Minh', '2024-03-25 03:04:40', '2024-03-25 03:04:40');
INSERT INTO `company_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(20, 'Ca Mau', '2024-03-25 03:04:40', '2024-03-25 03:04:40');

-- Dumping structure for table laravel.company_photos
DROP TABLE IF EXISTS `company_photos`;
CREATE TABLE IF NOT EXISTS `company_photos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_photos: ~0 rows (approximately)
DELETE FROM `company_photos`;

-- Dumping structure for table laravel.company_sizes
DROP TABLE IF EXISTS `company_sizes`;
CREATE TABLE IF NOT EXISTS `company_sizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_sizes: ~6 rows (approximately)
DELETE FROM `company_sizes`;
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '10 - 20 Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, '5 - 10 Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, '2 - 5 Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, '20 - 50 Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, '50 - 100 Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');
INSERT INTO `company_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, '100+ Persons', '2024-03-25 00:05:23', '2024-03-25 00:05:23');

-- Dumping structure for table laravel.company_videos
DROP TABLE IF EXISTS `company_videos`;
CREATE TABLE IF NOT EXISTS `company_videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.company_videos: ~0 rows (approximately)
DELETE FROM `company_videos`;

-- Dumping structure for table laravel.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
DELETE FROM `failed_jobs`;

-- Dumping structure for table laravel.faqs
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.faqs: ~0 rows (approximately)
DELETE FROM `faqs`;

-- Dumping structure for table laravel.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL DEFAULT '0',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` text COLLATE utf8mb4_unicode_ci,
  `skill` text COLLATE utf8mb4_unicode_ci,
  `education` text COLLATE utf8mb4_unicode_ci,
  `benefit` text COLLATE utf8mb4_unicode_ci,
  `deadline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy` int NOT NULL DEFAULT '0',
  `job_category_id` int NOT NULL,
  `job_location_id` int NOT NULL,
  `job_type_id` int NOT NULL,
  `job_experience_id` int NOT NULL,
  `job_gender_id` int NOT NULL,
  `job_salary_range_id` int NOT NULL,
  `map_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint NOT NULL,
  `is_urgent` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.jobs: ~20 rows (approximately)
DELETE FROM `jobs`;
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(1, 4, 'Human Resources Specialist', 'Itaque quasi eum consectetur voluptatem iste doloremque reprehenderit. Quos recusandae suscipit dignissimos tempore doloribus animi quia. Amet nesciunt quisquam tenetur tenetur voluptatem deserunt totam. Ducimus qui assumenda cum eius et. Omnis est quia perferendis tempore non. Nam id harum aliquid sapiente vel id voluptatem. Sunt mollitia nobis est id esse. Magnam facilis quas et velit est consequatur fugit voluptatum.', 'Iste quos autem quisquam aut. Minus sapiente ut incidunt quo labore est explicabo. Sunt sapiente nemo consequuntur nulla ipsa. Omnis perferendis et qui dolore. Beatae sit et minus hic sunt et. Accusantium eos quia animi inventore est et labore. Id deserunt et minima qui quia dolores. Maiores neque ea esse dolor ad sint iusto sequi. Aut alias fugit cumque laborum rerum et nihil. Rerum in autem doloremque dolorem ut rerum voluptatem eveniet. Quos eos aut magni laborum enim voluptatem. Qui nisi minus ipsum facere consequatur. Sit deleniti est ut quis esse qui rem omnis.', 'Nobis eum fuga soluta. Ratione quos fuga ipsum eum eaque tempora. Ut nesciunt quae nisi autem aut tempora. Quis at qui ullam qui. Consequatur necessitatibus reiciendis et vero. Minima placeat nesciunt consectetur nulla cum ea consequuntur illo. Reiciendis nihil voluptas ducimus. Delectus qui sit enim enim.', 'Odit fuga ipsam voluptatibus id ea. Maxime velit consequatur inventore quo. Accusantium dolorem fugit velit quia molestias consequuntur modi. Consequuntur aut nobis aut facilis soluta quis. Ea excepturi beatae incidunt sunt inventore. Ipsa officia est consequatur modi sit necessitatibus sit soluta. Sed eos est expedita praesentium est qui animi. Iusto praesentium eum sit fugiat sunt. Corrupti qui aut vel aliquid cupiditate minus. Et in aut molestiae ad eos odit quibusdam sit. Quia delectus illum sed pariatur.', 'Consequatur sapiente quod labore quas. Placeat maiores odit vel facere voluptate alias est itaque. Dolorum sit sapiente in eveniet aliquid reiciendis. Id aut dignissimos sunt aut corporis temporibus soluta ea. Voluptatem error velit est omnis. Voluptatem deleniti non ab. Cumque omnis vero commodi cupiditate. Quo quia sed esse est. Est voluptas ut necessitatibus. Quaerat et voluptatum odit et sit. Harum impedit nesciunt quibusdam ut voluptas quas hic consectetur. Dolorem harum quos consequatur et sed quia nulla.', '1978-07-31', 2, 6, 7, 5, 4, 1, 6, '10.761664,106.679759', 1, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(2, 8, 'Farmworker', 'Similique labore temporibus illo et. Tempora incidunt dolores saepe et porro. Nisi ratione aut soluta at temporibus. Tempora alias est repudiandae ullam et sint. Expedita sit doloremque exercitationem quibusdam et nesciunt velit. Natus iure architecto molestias facilis mollitia beatae ullam harum. Pariatur nulla corrupti rem labore dolorem vitae eos.', 'Totam vero dolores quia quod voluptate deleniti. Id quia incidunt ratione quibusdam natus. Ipsam laborum sit accusamus consequuntur ut voluptatibus. Dolores qui voluptate voluptatem est. Eius magni est in dicta commodi quia non. Eum animi ad commodi architecto dolorem velit labore et. Perferendis harum pariatur omnis alias maxime laborum illum. Quia libero nobis ut voluptas non sapiente dolor. Ex quia enim veniam cupiditate voluptatem. Molestiae quo autem atque. Mollitia exercitationem libero tempore omnis.', 'Odio et ut sequi et error autem. Cumque minus quam omnis voluptatem assumenda ea. Placeat consequatur quaerat sed voluptatem ex alias. Eaque voluptatem unde molestiae autem expedita doloribus numquam. Porro quae et omnis. Tempora dolore sunt non est. Animi numquam architecto nisi nesciunt impedit ea et. Voluptas ut necessitatibus maiores necessitatibus et. Et nam at accusantium quidem molestiae et cupiditate. Sed quod eum beatae quia voluptatem corrupti repellendus. Magnam ratione illum repellendus rerum. Numquam quam ipsam molestias perspiciatis. Maxime consectetur doloribus et itaque eum voluptatem commodi. Voluptate fugit asperiores rerum provident harum consequatur.', 'Iste natus iste molestiae dolor quo. Autem atque nulla officia ut perspiciatis omnis dolorem. Totam autem cupiditate et. Harum dolorem hic laboriosam enim voluptatibus. Ut id aut sed modi explicabo aliquam. Quisquam eum debitis soluta vel nemo deserunt sint. Officiis voluptatibus labore laborum iusto laboriosam reiciendis iusto. Autem et eligendi minima nesciunt nam corrupti quod. Voluptas eaque molestias odio dolorem ducimus eligendi et. Blanditiis voluptas quam velit voluptatem consectetur repellat harum libero. Illum porro ea voluptate qui eaque ut ut perspiciatis.', 'Impedit aspernatur et omnis aut illum ipsam. Ab ratione iste quos illo similique. Autem eum culpa id quasi reiciendis. Et et omnis consequatur voluptatum. Repellat voluptates aut repellendus. Officia eos in porro commodi. Occaecati quos consequuntur dolore magnam deleniti. Sapiente tenetur minima voluptates quae nobis dolores. Reprehenderit et sint enim occaecati maiores consectetur ipsa.', '2004-03-25', 7, 7, 9, 5, 7, 3, 3, '10.75528,106.686076', 1, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(3, 2, 'Statistician', 'Odit unde dolores rerum debitis mollitia. Corporis dolores et ut sequi illum commodi in. Occaecati nobis ipsum sit molestiae quas nemo nulla. Sunt iure assumenda ut culpa est provident quis. Nam harum dignissimos ut praesentium laborum deserunt sint. Distinctio nihil magnam dolor. Tempore molestiae qui vero voluptatem natus facere voluptatem. Natus vitae cum vel veniam. Qui eos velit rerum labore. Dolorem nostrum vitae quos ut aspernatur rerum. Dignissimos iste officia cum provident ut eligendi.', 'Nisi voluptate maxime expedita dolorem. Voluptatem eum accusamus voluptatem. Ipsa consectetur facere aspernatur unde quo exercitationem. Fugiat quaerat eius molestiae odit qui. Est eligendi eligendi magni dignissimos minima. Optio voluptas debitis ipsum in ipsum excepturi omnis. Facere fugiat asperiores ex alias. Aperiam molestias vero laudantium sint rem reprehenderit non. Non officiis voluptatem eos magnam quo. Rem nobis non error saepe. Sunt aut aperiam est earum quasi maiores et. Odio dolorem quos ipsam non fuga. Ipsa sunt commodi nobis. Velit in veniam animi velit expedita quia.', 'Saepe fugiat veritatis nam aut accusamus eveniet ea vitae. Voluptatem nihil quidem blanditiis quo saepe dolorem nostrum. Qui sequi perspiciatis placeat esse. Ut eum ea aspernatur quia tempora nisi eaque quas. Accusantium architecto rerum saepe soluta harum et dolor. Earum quasi quia molestiae voluptates molestias debitis. Nam totam veritatis sapiente molestiae ducimus tenetur. Tenetur reprehenderit cupiditate debitis et nobis. Sed provident odit voluptatem ad.', 'Quo consequatur nostrum alias omnis saepe sit. Repellendus tenetur voluptatem eaque minus consequuntur perspiciatis voluptas. Nemo cupiditate ipsum sit dolorem modi sit. Asperiores vero nostrum vitae dolores architecto delectus dolorem in. Rerum perspiciatis qui soluta. Qui quidem quasi veritatis et fugiat rerum. Accusamus et et voluptates animi neque deleniti tempore esse. Labore culpa natus a beatae quia voluptate. Omnis ducimus soluta qui autem in odio. Cum eius ratione non ut et. Inventore iure facere deleniti vitae. Ipsa iure vel et eveniet nemo nobis occaecati. Quisquam odio officiis vel vel dolorum deleniti cumque. Eum dolor sint culpa quo quisquam deserunt excepturi.', 'Totam dicta numquam eius odit esse odit qui. Accusamus sunt veniam laudantium rem est molestiae. Eligendi nobis dolores sunt voluptate minus nesciunt fugit. Voluptatum iure recusandae voluptas necessitatibus tempora vel. Ut qui ipsum quo odio. Inventore aut non corrupti ut quasi itaque voluptatem. Accusantium voluptatem qui eaque provident.', '1978-03-20', 1, 3, 7, 3, 8, 1, 1, '10.750398,106.669823', 0, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(4, 3, 'Advertising Sales Agent', 'Aut natus veniam ducimus vero accusantium. Odio vel voluptatem autem fugiat necessitatibus qui enim. Vel recusandae illum distinctio illum at. Illo et quia neque eum rem sed quos. Quae sunt maxime quia ad. Molestiae dolorem consequatur vel consequatur modi. Voluptas consequatur est optio modi dolorem. Aut hic sit tenetur autem magni sit. Rerum soluta iste ut quisquam et reprehenderit. Eos omnis quod beatae quibusdam aut voluptas. Dignissimos voluptatem velit nisi aspernatur enim consequuntur vel.', 'Beatae perspiciatis et nulla quo. Excepturi distinctio quae et. Quaerat et itaque vel officiis maiores et consectetur est. Repellendus aut incidunt totam molestias sunt. Reiciendis quia voluptatem et velit unde dolorem earum. Eligendi sit et aut ut dolorem veritatis. Facere et sed doloribus sint minus. Consequatur et sed laudantium totam. Incidunt dolore voluptas reprehenderit laborum. Rerum mollitia suscipit totam perferendis odit adipisci. Fugiat voluptas cupiditate voluptatem eos. Facere rerum labore sed est explicabo.', 'A ut itaque aut voluptates quasi. Et aut impedit distinctio deleniti qui amet vero. Ea iusto est inventore et et veniam laborum. Ipsam provident earum vero voluptatem. Quasi porro eveniet nesciunt reprehenderit voluptatem. Sed quia ipsam numquam quas aliquid. Qui autem dolor nulla aut est. Eaque aut est ut rerum totam. Molestias aut sunt sapiente cupiditate. Nostrum natus voluptate sit iste beatae non. Totam et pariatur voluptatem saepe nobis. Esse dolore cum vitae omnis et rem. Incidunt odit quam esse reiciendis eveniet.', 'Sit ut nostrum consequuntur. Quia temporibus tempore velit architecto quo iusto. Eos est reprehenderit quia. A earum libero sit ex distinctio perferendis. Hic et aut perspiciatis. Soluta id necessitatibus voluptates occaecati amet. Fugit a nulla laborum qui quaerat voluptas iste accusamus.', 'Facilis aperiam sit illo eius tempore error. Dicta maiores sit omnis est nesciunt eligendi qui. Quidem corporis similique tempora perspiciatis ea ut. Quos et harum ex. A hic inventore sint nostrum omnis doloribus et. Et eum necessitatibus hic at eum qui omnis. Qui recusandae laboriosam sed veritatis unde libero error. Non accusantium autem ipsa ullam. Libero ullam quo nostrum consequatur.', '1997-04-12', 4, 4, 8, 4, 9, 2, 7, '10.74218,106.693271', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(5, 1, 'Education Teacher', 'Vero ea nesciunt voluptatem. Nihil adipisci possimus ipsum magni aliquid vitae quia. Dolor eius voluptatibus qui. Sit sequi vero dignissimos. Dolorum ea error nemo maxime praesentium. Odit dolorem modi ad et dolorem. Minima consectetur sit libero. Earum quae hic quam facilis magni et necessitatibus. Iste labore ratione ut eos quo id.', 'Et perspiciatis reiciendis et iure. Voluptas aut et occaecati. Rerum doloribus ea sed voluptas optio. Pariatur adipisci explicabo ut adipisci incidunt quod repellat. Dolor et qui sunt consequatur. Voluptate at voluptatibus non quod sit quibusdam. Architecto nihil ducimus dolor aspernatur est provident amet. Commodi atque dignissimos accusantium voluptas. Nisi voluptatum quia nostrum eos est quaerat id culpa. A ut natus at. Aut dolorem similique animi. Mollitia voluptatum non nihil qui quas et dolores eos. Omnis sint voluptatem ipsa quidem est eligendi aut.', 'Autem modi unde est. Accusantium ea et eligendi veritatis perspiciatis nulla eveniet. Vel consequatur maiores est error quo tenetur libero. Magnam facere nobis vitae et illum qui. Quae qui aut libero error est. Voluptatem aut vitae corrupti. Magni voluptas nemo quia exercitationem magnam unde cum maiores. Sint debitis magnam qui itaque ea deserunt. Dolorum aut dolor expedita sed repudiandae.', 'Eos distinctio ducimus aut alias reprehenderit itaque. Odit aliquid adipisci dolore tempora exercitationem aliquam aliquid ea. Et tempore aut ullam aut. Delectus facilis dolor occaecati iste voluptatem. Consequatur asperiores sint id aut. Eius commodi ut at eos. Earum dolores ea et et dolores ex excepturi. Eos et dolore quod nostrum.', 'Ea quam eos praesentium numquam eaque laudantium quisquam. Debitis totam nostrum sunt enim non. Sint reprehenderit deserunt iste minus porro repellendus praesentium. Beatae eligendi quasi aliquid nemo et. Et blanditiis sed quasi sint facere minima. Qui est omnis odio aliquid ad a magnam. Voluptas repellendus repellendus quam et voluptas. Tempora quisquam magni in veritatis a repudiandae id. Praesentium est modi repudiandae error dolorum commodi. Voluptate et sit aliquam consequuntur ex ab. Qui totam illum consequatur rerum incidunt vero suscipit. Et magni officiis occaecati maiores ut deleniti modi. Ut tenetur impedit reiciendis libero magnam.', '2008-03-02', 3, 9, 8, 4, 6, 1, 8, '10.770642,106.681239', 1, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(6, 8, 'Stone Cutter', 'Dolores excepturi et voluptas a. Ea molestias id dolores ipsa rerum optio voluptas. Ipsum est blanditiis accusamus blanditiis culpa laborum. Suscipit sunt distinctio fugit dolore cum nihil qui veniam. Quis et a mollitia non. Maiores harum ipsam culpa. Ut dolorem nulla laudantium. Tenetur debitis magnam deserunt sit nulla consequuntur occaecati. Et iure dolorem molestiae tenetur at. Et ut cupiditate optio eius nisi.', 'Porro nihil laborum et qui aut praesentium. Dolore ullam laboriosam illo architecto. Nihil dolor qui consectetur et perspiciatis tempora. Illum mollitia ut quia totam est. Totam animi eum unde ducimus officia et quo. Quasi porro aperiam consequuntur illum quia harum. Delectus eum nobis consequatur tempore suscipit at accusamus et. Voluptate deleniti sapiente est neque. Voluptates facilis ex harum aut sequi sit vel. Error ex eaque ea sit dicta fugit suscipit est. Animi ut illo provident dignissimos inventore. Ut molestias dolor esse reiciendis ut aut. Ratione ratione illo nesciunt qui odio ut qui quia.', 'Cupiditate doloribus libero aperiam eveniet repudiandae. Repellendus occaecati minima laborum nihil et omnis. Deserunt amet aut deleniti doloribus eius placeat asperiores. Blanditiis pariatur quasi non nisi ut odit perferendis aut. Libero aut qui enim sapiente. Cum ut quia magnam voluptatibus reiciendis et quia. Ducimus eum suscipit necessitatibus voluptatum molestiae pariatur. Ut sed et odit iure et numquam. Explicabo ea delectus necessitatibus deserunt ea earum necessitatibus. Perspiciatis sed velit earum accusamus illum officiis rerum. Dolore at saepe ut sit a optio. Et doloremque vel rerum error. Dicta fugiat nesciunt iusto consequuntur ut totam fugit.', 'Voluptatem laborum voluptas maxime. Sequi pariatur qui nihil. Sit qui ex impedit commodi eligendi necessitatibus consectetur. Sit nostrum qui distinctio eum et ex. Rerum quisquam et et illo quis quia deserunt reiciendis. Perspiciatis id iusto in incidunt qui ad. Perferendis quia quia rerum aut consequatur blanditiis. Voluptates placeat cupiditate unde odit accusantium vel maiores atque. Illum et pariatur eos qui.', 'Quos laudantium sed alias est praesentium. Explicabo architecto ducimus incidunt et voluptates. Assumenda vel quaerat mollitia qui eius. Occaecati est officiis recusandae. Aut in sunt sunt qui ut. Ea et et sit non. Veniam suscipit voluptatum omnis similique est voluptatibus voluptatem doloremque. Esse recusandae praesentium similique et id a. Incidunt vel et omnis in voluptas unde illo. Quasi vitae quia consequatur eaque. Alias rerum alias et repudiandae enim quis. Ut aut earum magnam fugiat.', '1974-11-11', 1, 7, 9, 3, 4, 2, 7, '10.751321,106.68606', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(7, 5, 'Motorboat Operator', 'Doloribus numquam velit tempora recusandae vero consectetur nihil. Distinctio vitae ipsum fugiat non hic tempora aut. Harum ipsa totam harum cupiditate. Neque quas velit in dolor debitis. Totam ipsa ipsam fugiat sequi. Alias accusamus dolores aut expedita. Possimus laborum id non sint illo iusto molestias. Molestiae unde eligendi cum at. Ut eligendi a deserunt voluptatem rerum atque facilis. Sit tempore molestiae tempore ex explicabo dolor.', 'Nulla qui occaecati totam quo. Harum deserunt esse rerum consectetur enim totam. Quia deleniti enim voluptas dolor. Exercitationem est officia maiores quo cum. Iure voluptatem sapiente id tempora nam. Et rerum ut similique. Amet ex magnam voluptatem repudiandae ut reprehenderit. Non et qui error ea aut voluptas. Repudiandae corrupti velit facere et. Praesentium ut est sit consectetur. Debitis voluptatum fuga et veritatis non ut. Et qui et maxime id enim velit quia.', 'Impedit repellat et rerum eos. Suscipit dolore corrupti quis sit. Fugit qui beatae non modi placeat. Quo consequatur qui sint blanditiis quod quo et sit. Et quo eius dolores veniam natus blanditiis error in. Sed vel fugiat totam quos saepe molestiae inventore. Fuga et tempore aperiam non sunt doloribus. Voluptas praesentium placeat facere veritatis necessitatibus omnis est sint. Provident adipisci tempora esse a voluptatem. Et dolores sit quia in et neque. Cum est qui ipsa porro eligendi aut doloribus. Quibusdam quia iusto architecto porro dignissimos cupiditate velit.', 'Autem officiis sequi harum minima ut aspernatur. Culpa aliquid nihil nihil dolores officia. Blanditiis quidem accusamus explicabo mollitia non molestias officiis. Iusto quos dolorem occaecati et nostrum animi sed. Repellendus tempore incidunt quia sit est ut. Quam et mollitia voluptatem aut sit et at. Sit laborum ut necessitatibus accusantium. Enim nihil consectetur voluptatem.', 'Ut ut rerum molestiae pariatur nihil praesentium. Omnis tempore cupiditate aut enim omnis dignissimos. Voluptatem delectus itaque repellendus quidem. Molestias praesentium sit earum laboriosam non blanditiis. Quia in dolorem aliquam corporis. Blanditiis aut vel porro dolorum. Incidunt sit ipsum ut magnam neque mollitia sed.', '1977-08-30', 4, 6, 8, 3, 8, 1, 3, '10.759928,106.687136', 1, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(8, 2, 'Art Teacher', 'Omnis quae voluptas asperiores sed ab. Veniam esse autem qui doloribus animi. Commodi assumenda dolores modi fugiat. Ut consequuntur vero qui distinctio corporis perferendis tempore. Eum quaerat id voluptas. Delectus et itaque doloremque quia temporibus. Harum porro fuga amet quos. Voluptates dignissimos amet eos porro et. Repellendus magnam voluptatibus sint dolor laboriosam.', 'Animi pariatur tempore quam at. Qui aliquid ea et facere hic necessitatibus temporibus. Sunt possimus ut et. Asperiores numquam repellendus nostrum asperiores. Iste explicabo harum quisquam enim quisquam error. Consequatur non sapiente impedit nesciunt omnis alias voluptates. Repudiandae quidem amet mollitia magnam. Praesentium sit excepturi suscipit aut sit facere. Ipsa distinctio voluptas dignissimos quasi nisi delectus omnis. Cumque voluptates molestias esse dignissimos. Quibusdam molestiae dolor eius laborum nisi architecto.', 'Voluptatum dolor voluptate quos quae ipsa totam iste enim. Eos ut dolores accusamus eius enim. Eos aut laborum error quod. Iusto aut modi quis dignissimos aut autem quis quis. Dolores qui repellat non. Eveniet quia facilis adipisci quod saepe. Possimus nemo et nobis quas architecto ad aut. Debitis sit dicta sed odit. Aut et ipsa voluptatem qui exercitationem itaque.', 'Ea atque sint molestias velit et rerum et aut. Et aperiam ut harum. At ut architecto dignissimos quibusdam nihil. Officia aut expedita consequatur tenetur cupiditate consectetur cum. Sunt sit sed vel quod magni praesentium. Sit ut vitae repudiandae ipsum et et ea. Qui qui in at voluptatem aliquam. Facere alias sit id id molestias. Nobis id tempora iusto sunt inventore praesentium. Eum minima blanditiis fuga eius. Dolore repellendus voluptatibus doloribus modi. Ut quia sed optio sunt numquam reiciendis consequatur sed.', 'Et dolorem eligendi quia nisi. Dolorem esse qui minima est repudiandae est ea quisquam. Quas qui quo assumenda. Impedit temporibus dolor et alias accusamus. Odio aliquid quasi quia est quo. At ducimus aut ut autem. Culpa sit repudiandae voluptatem libero atque. Sapiente rerum totam pariatur quas vitae consectetur. Facere dolorem animi et et accusamus laudantium qui quis. Omnis magnam molestiae quas amet est. Quo aliquam quas sed ratione.', '2013-02-10', 8, 4, 5, 5, 7, 2, 1, '10.758595,106.676347', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(9, 7, 'Supervisor of Police', 'Quia delectus sit est cupiditate cum. Nihil labore id illum enim a ea officiis. Excepturi expedita fuga aliquam sit libero non. Dolorem neque maiores eligendi omnis. Eum eaque hic praesentium eum. Asperiores nulla ut assumenda. Esse itaque inventore quia vitae. Atque omnis quibusdam repudiandae cupiditate. Vel voluptatum quo quis. Autem est error architecto numquam pariatur. Est et dignissimos mollitia laborum possimus in. Consequatur illo aut perspiciatis doloribus. Occaecati qui molestiae voluptatem. Perspiciatis sed nobis nemo dolores facilis.', 'Laboriosam et ab sequi aspernatur sint corrupti eum. Deserunt nesciunt et aperiam maiores labore soluta. Aut voluptatibus voluptatem sit eveniet in culpa. Eveniet qui aut amet enim facere voluptate sint. Vel eligendi omnis porro quia perferendis minima voluptatum. Sit qui aut aut id. Accusantium sit illum est veritatis. Fugit dignissimos et corporis est consectetur.', 'Unde est et unde dolores reiciendis omnis. Corporis et ut libero est. Omnis velit recusandae minus eveniet aut recusandae iure nostrum. Vel amet quia deserunt quas qui adipisci voluptatem. Voluptatem animi ut et ipsam dolorem quo repellat. Est est ab voluptas laborum. Atque voluptatum odit neque consequatur aut in. Omnis autem blanditiis distinctio doloribus ipsam distinctio. Voluptas corporis quos omnis id. Eveniet animi hic provident tempore in. Harum dicta in impedit autem consequatur. Quod illum blanditiis possimus rerum voluptatibus saepe. Eos velit saepe fugiat voluptatem enim quo. Odio culpa et fugit nemo accusamus nesciunt. Inventore ea consequatur hic non eum aut non.', 'Eos blanditiis ipsa amet aut delectus ut porro. Ullam fuga enim delectus accusamus laboriosam deleniti odit. Dicta impedit quaerat tempore itaque rerum quaerat aliquam. Alias aut voluptatibus aut eos hic. Sit laborum cupiditate et inventore sunt repellat facere consequuntur. Et expedita quae error soluta. Voluptatibus illum quia ut quas modi. Qui eligendi dolorum aspernatur illum sit sequi consectetur. Nisi incidunt nulla rem veritatis soluta aliquid enim sunt. Repudiandae nihil dolores deleniti voluptates. Atque temporibus in ea minima. Nesciunt dolorem at eos et voluptas nostrum et rerum.', 'Repellat officia sunt repellat quisquam amet consequatur nobis. Ut autem omnis laborum eligendi non dicta. Reiciendis magni vel et qui quis esse dolores asperiores. Modi voluptatibus doloribus quisquam. Eum rem rem laudantium neque qui id rerum. Quibusdam sed magni ab nobis. Et omnis minus iure corporis sit blanditiis. Accusamus dolor inventore magnam et dicta quam. Enim non quibusdam nihil. Maxime minima voluptatem aut. Asperiores maxime modi sit aliquid. Molestias quia voluptas dolor ducimus modi quis fugiat inventore.', '1985-09-22', 6, 5, 7, 5, 6, 3, 5, '10.770954,106.683706', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(10, 4, 'Credit Authorizer', 'Doloribus aliquam et autem. Natus cum aliquid rem recusandae rem. Voluptatibus est corporis non aliquam qui officiis et. Numquam recusandae voluptas accusantium et beatae quasi rem. Odit amet est quas id quas tempore. Doloribus ex dignissimos rerum ullam est ab adipisci. Velit minus laboriosam quam sit. Nulla quo reprehenderit tempore non eos saepe hic. Voluptatem iure voluptatibus excepturi dolor perferendis laborum provident et. Incidunt numquam quaerat et alias. Reprehenderit hic sint dolor voluptatibus velit quia. A animi quasi quia. Facilis ut eaque et. Asperiores sed repellat a est commodi.', 'Maiores eum cupiditate doloribus possimus voluptatem. Et iure et est voluptates necessitatibus architecto quos. Beatae non est aperiam voluptatem. Voluptate autem voluptates vel architecto aut vel temporibus. Doloremque velit quo consequuntur nulla. In qui sint qui maiores deserunt dolores. Sit qui veniam possimus. Repudiandae a quis et consequatur. Non et dignissimos corporis et enim.', 'Quod amet deleniti et fuga voluptatum tenetur animi. Voluptatem aliquid sunt reiciendis id quia veniam. Autem molestiae molestias eum eum magni. Velit adipisci omnis et sunt dolores. Sunt dolores porro voluptatem nihil accusantium cum laudantium. Blanditiis incidunt provident doloribus tempora in aperiam. Explicabo ut ratione non et porro. Sapiente doloremque libero molestiae velit id voluptatem. Hic cum dolor et corrupti. Fugit laborum consectetur at. Eum qui aut veniam natus voluptas.', 'Eos aut quae cumque maiores suscipit magni. Quia totam et animi temporibus. Et aut quia molestiae vitae repudiandae. Vero rem sed est. Ut sunt nesciunt alias ex. Labore molestiae commodi sint vitae asperiores. Eveniet mollitia in error voluptatem dolores veniam. Harum illum itaque asperiores corporis. Cupiditate ab placeat autem eos aut. Ut culpa doloribus ea non quo molestiae.', 'Quia qui occaecati quos placeat. Dignissimos atque voluptatem voluptatem sunt libero vel. Quod vero fugiat repellendus eius reprehenderit et voluptatibus. Sed perspiciatis sint qui consequatur dolorem itaque. Dolores illum expedita saepe voluptates non vitae. Esse animi ipsam ab consequuntur sapiente sunt. Velit veniam illo deserunt rerum quisquam est. Assumenda ut accusantium rerum. Vitae possimus modi nesciunt nemo. Consequatur ut maiores rem natus atque dolore.', '1996-07-25', 1, 9, 2, 5, 9, 2, 2, '10.745996,106.695919', 0, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(11, 3, 'Agricultural Crop Farm Manager', 'Et reiciendis repellat autem omnis magnam. Iure voluptas eum sapiente nostrum vero. Qui quas doloremque itaque at eveniet aut. Facere eligendi inventore ut corrupti nostrum esse. Inventore reprehenderit eaque sed nobis est qui molestiae. Atque aspernatur ea doloribus voluptatibus similique sequi. Asperiores ea qui rerum nobis doloremque. Ut quos accusamus maxime nostrum. Et consectetur qui tempora sunt consequatur. Ut excepturi repellendus quam voluptates nostrum ut itaque quas. Ut iusto est nam. Quae ut quo praesentium ipsum hic facere.', 'Et in accusamus ut fuga. Voluptatum rem ut laborum beatae fugit. Aspernatur optio voluptatem animi ullam. Sit a qui qui maiores. Voluptatem veniam sint autem fuga velit voluptas veritatis. Sint impedit quia odit nam. Dolores et et at non sint expedita quos. Assumenda sed commodi totam voluptatum labore.', 'Quaerat error velit nam veniam suscipit ut tempore. Quos voluptatem nihil qui qui accusantium voluptatibus debitis est. Tempore a explicabo voluptate excepturi et est. Eos saepe dolorem architecto alias voluptas est vel eos. Optio qui numquam voluptatem aliquid sit atque. Temporibus rerum facilis est illo sit a. Qui eum itaque molestias nihil ea modi mollitia. Ipsa sit accusamus ab eveniet. Laudantium quos ut impedit qui delectus. Necessitatibus autem et rerum nobis. Accusamus a iusto ad repellendus rem a quo. Odit dolor quidem esse.', 'Sequi a maxime aut sint omnis. Ut neque id qui. Cum reprehenderit totam rerum. Pariatur voluptatem tempore dolorem ipsum nulla. Sint magni ut laborum animi sed neque. Rerum et officiis sed placeat et. Quo est dignissimos quos est voluptas. Consectetur perspiciatis dignissimos dolorem doloribus optio. Natus ex sapiente fuga id amet molestias recusandae et. Id dolore dolores voluptas ut exercitationem.', 'Hic quia nihil et dicta at ratione. Beatae voluptatibus dolores earum cum. Ipsa dolore tempora similique beatae ut pariatur. Eos minima voluptate quibusdam qui voluptatem ab dicta. Facilis perspiciatis labore ad. Et dolorem sunt veniam eaque hic numquam. Ipsa id earum consectetur qui ut laborum suscipit blanditiis. Dignissimos dolorum sequi animi temporibus voluptas. Ut et natus qui ut asperiores commodi molestias. Rem et sint consequatur tenetur ut dolor omnis. Facere maiores et sequi reiciendis ut ut et pariatur. Incidunt odit repellat libero itaque quo rerum et. Quasi deleniti recusandae dolorem ut suscipit est laboriosam.', '1980-07-14', 9, 8, 5, 1, 4, 3, 5, '10.754757,106.697833', 1, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(12, 7, 'Travel Guide', 'Qui vitae ut natus facilis magnam et. Nobis laboriosam alias facere. Provident dignissimos corporis sapiente asperiores saepe eum molestiae. Ut maxime velit maiores modi ad. Voluptatum voluptatem repellat laudantium dolorum rerum quaerat officia. Quod dolorem voluptas explicabo. Minus omnis minima assumenda. Consequatur consequatur maiores voluptatem saepe alias. Ratione est dolorum et. Nemo sint sit asperiores rerum ad dolorum. Quo optio totam voluptatem est earum.', 'Quas dolorem ut ex. In cumque et qui est. Sint rerum consequatur occaecati reprehenderit alias corporis inventore. Dolores quis facere consequatur autem illo perspiciatis. Saepe architecto et id nihil accusantium ut consequatur. Aliquid in temporibus nihil in eaque sed. Fugit tenetur aut provident inventore recusandae necessitatibus praesentium dolor. Tempore voluptatem quod placeat quisquam. Atque quia amet totam reiciendis. Quia corporis molestiae voluptatem ea ducimus. Corporis suscipit facilis provident nisi nihil autem corporis.', 'Cum quis repudiandae et. Rerum officia eum facilis illo quas architecto. Iusto modi est provident accusamus numquam modi consequuntur. Veritatis sed similique et dolorum ea sequi voluptate. Corrupti quis sunt est quas earum. Qui sit perferendis sit possimus sunt velit optio. Facilis rerum eos consequatur sit expedita est facilis quos. Nostrum possimus ab porro non occaecati non possimus. Quaerat quod alias deleniti dicta aut sed architecto.', 'Pariatur neque ea vero consequatur harum voluptas esse. Totam corporis quia optio fuga voluptatem amet. Quam exercitationem pariatur saepe possimus vel. Amet ut fuga blanditiis omnis qui. Accusamus reprehenderit nulla facere cupiditate. Facilis sapiente tempore non sed labore aspernatur. Accusantium dolor quisquam aut omnis.', 'Harum rem quae minus magnam expedita. Sunt sunt provident voluptatem suscipit sit necessitatibus qui ut. Odit quis debitis repellendus rem. Aspernatur sed culpa iste itaque incidunt. Veniam sit cum sit sunt. Et omnis qui mollitia. Pariatur eos ipsum amet qui minus. Alias mollitia maxime facere dicta.', '2003-12-06', 5, 8, 1, 1, 10, 2, 8, '10.757509,106.678011', 0, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(13, 9, 'TSA', 'Rerum numquam in provident atque in aliquid provident veritatis. Vel nobis et ipsum quo necessitatibus laudantium id. Ipsam repudiandae at nam molestiae repellendus blanditiis. Distinctio nulla laudantium quia non. Architecto quidem dolores maxime ab consequuntur sunt unde. Ut dolorem quibusdam repellendus voluptas velit modi. Doloribus velit quia vel commodi qui rem sed corrupti. Quo natus facere magnam magnam officiis officia eius. Repellendus commodi consequatur non quaerat. Unde enim totam est in doloribus sit repudiandae.', 'Mollitia natus eos incidunt consectetur. Rerum blanditiis ullam dignissimos error mollitia nobis quis velit. A numquam pariatur voluptatum nulla placeat dolores. Molestiae aliquam qui dolorem ut. Fuga ad nemo quia fugiat. Debitis et et minima a consequatur sit. Quibusdam consequatur vitae accusantium ratione magnam. Voluptatum ipsa pariatur saepe autem. Hic voluptatibus repellendus vitae quasi. Occaecati fugiat est deserunt. Alias non dolore voluptatem modi explicabo aspernatur dolorum reiciendis. Enim nisi quaerat quod eum voluptatem. Est vel ad tempore et ut unde esse omnis.', 'Ratione est eligendi et in perferendis ab. Est dolor quisquam unde dolores ipsum dicta. Sed ea repellat enim sunt sit. Earum ipsum odit dolore quibusdam cumque et sit. Recusandae consequatur ut esse. Optio repellat voluptatem magni qui vel ut. Ad doloribus enim vel aut ratione cumque est.', 'Culpa harum aliquid sed. Expedita autem dicta omnis labore iure. Aut natus corporis enim dolorem nihil fuga minima. Ullam eum modi voluptas assumenda. Fuga nesciunt nam sit voluptatum. Qui dolorem voluptate quam temporibus. Et saepe molestias neque eos nobis non qui sit. Recusandae illo aut quod architecto. Et consequatur voluptatem necessitatibus ea non rerum. Sit architecto beatae nobis provident omnis qui dicta qui. Quo expedita labore placeat nulla reiciendis commodi. Sed exercitationem qui ea ut molestias qui. Quis illum quia exercitationem fugit aut ipsum. Iure cumque at vitae voluptate.', 'Sed cupiditate nostrum et ut mollitia quia. Suscipit quos assumenda aliquid enim rerum neque perferendis et. Molestiae vel laborum modi aliquam. Corporis iusto eum totam. Nesciunt cum occaecati sint porro ratione ut. Voluptates voluptatibus facilis inventore dolorum necessitatibus. Voluptas magnam maiores ut perferendis. Eveniet alias libero praesentium voluptate aspernatur non nam. Saepe similique harum consequatur minus voluptas. Officiis nam earum temporibus qui dolorem facilis ipsum. Ab qui deserunt labore non aliquam qui. Aut odio exercitationem eum suscipit.', '2009-01-31', 9, 6, 6, 5, 8, 1, 8, '10.754807,106.693323', 1, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(14, 4, 'Claims Adjuster', 'Dolorem veritatis nulla ipsam fuga est dolores quos ut. Magni accusamus nemo veritatis sint accusamus consequuntur. Omnis ut autem doloremque sunt quaerat voluptatem. Quaerat fugit reiciendis in nesciunt itaque. Quod magni dolor inventore earum odit. Eos repellendus et tempore est illum. Necessitatibus nihil exercitationem enim consequatur tempore ut tempora laborum. Officiis veniam sint ut et necessitatibus dicta. Qui quos illo voluptatem quos. Autem ratione omnis mollitia cum aut ut totam. Earum soluta iure illo sunt illum quis dolor. Consectetur quia deleniti aliquam ut repellat nemo et atque. Et quo et corrupti neque fuga corporis. Dolor qui qui rerum voluptas eius.', 'Nulla ut beatae sunt porro excepturi quod nam. Porro eius non possimus quia soluta sed nemo. Tenetur necessitatibus cum ipsa harum commodi est rem. Reiciendis quis dolorem aliquam quibusdam. Voluptas itaque doloremque aut quaerat nemo. Est quia tenetur et enim commodi qui. Dolor id incidunt sapiente perspiciatis enim.', 'Aliquam molestiae accusantium aut ut labore voluptas. Rerum libero iusto et assumenda quam voluptatibus minima. Delectus repellat dolor libero eum quibusdam. Odio dolore doloribus quia repudiandae. Id itaque odit dolorem in dolores. Deleniti quia voluptas quasi est consequuntur. Laboriosam vel corporis mollitia consequatur alias. Consequatur consequatur nam consequatur pariatur voluptatibus error tempora.', 'Magnam officiis ducimus accusantium laudantium officia. Dolor vel sapiente neque qui illum mollitia. Quia consequatur qui dignissimos necessitatibus reiciendis. Corporis saepe ipsum nam. In enim quos unde est ea veniam. Aliquam modi totam ullam. Quis aut nostrum voluptate consequatur facilis aspernatur. Fugit ipsam aut amet nam dolor dolorem quam. Voluptate iure adipisci voluptas beatae. Veniam in cum et aperiam cum. Ipsa voluptatem ad autem doloribus voluptatem quas.', 'Necessitatibus placeat corrupti suscipit et consectetur in non. Voluptatem provident autem ut ad consequatur natus. Consequatur laudantium et distinctio fugiat. Hic necessitatibus eos est perspiciatis dolore soluta est rerum. Aut aut id molestiae quos autem. Rerum velit quasi esse iste perferendis repellat est. Blanditiis rerum sit est iusto. Reprehenderit est odio quidem. Et iure quas molestiae. Pariatur aut quam temporibus natus et.', '1973-12-17', 4, 3, 9, 3, 6, 1, 9, '10.760549,106.701781', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(15, 2, 'Camera Operator', 'Enim ducimus non asperiores ipsa reprehenderit accusantium et natus. Beatae sint assumenda quisquam dolores maiores fuga explicabo. Asperiores accusamus non saepe quaerat. In possimus est ut ut et beatae sequi. Blanditiis ipsum architecto atque sit provident est omnis. Tenetur laborum sed placeat doloremque qui numquam voluptatibus. Dolores neque nisi necessitatibus ut est dolorum aut culpa. Magnam quo consequatur veniam qui qui. Sed et nihil est totam eum. Quae ipsa nihil tenetur voluptate dignissimos velit tempora. Velit vel repellat quo vel delectus error. Dolor sapiente occaecati harum. Et dolorem dolor vel eum vel. Doloremque rerum eveniet quis cumque similique iure dolores asperiores.', 'Consequatur qui nostrum possimus non dolor molestiae qui. Sapiente in et distinctio animi ut omnis commodi. Sint incidunt nihil qui aut. Praesentium voluptates ex dolores. Voluptas dicta voluptatem repellat ut fugiat nam. Ea eligendi et incidunt velit laudantium dolores sed. Similique veritatis voluptatem officiis voluptatem quae est quia. Iure explicabo aut nulla pariatur voluptates. Deleniti provident nisi maxime quasi a ducimus dignissimos.', 'Quae corporis autem aut velit sit sit explicabo. Omnis corporis ut quo quia. Consequatur fugiat deleniti corporis ipsa aut. Sunt occaecati aperiam iure accusamus. Dolor fugit atque eum ducimus non. Qui aliquam beatae itaque libero adipisci similique dolorum. Inventore et voluptatem aliquid. Consequatur dolores sequi deserunt adipisci. Odio recusandae cum porro nobis beatae. Fugiat aut minus fugit id dolor voluptatum. Eum quis repudiandae delectus atque explicabo necessitatibus quia. Aut deserunt exercitationem voluptatum et voluptate.', 'Voluptatibus in rem nihil quia commodi nesciunt in. Nisi iusto ipsum a omnis. Dolor veniam qui iure quod. Temporibus quaerat voluptatem et sed amet iusto ipsa. Velit hic totam quibusdam quam. Enim ut architecto reiciendis voluptatem. Sapiente non commodi laudantium blanditiis praesentium voluptas doloribus. Enim ullam ea autem beatae facilis. Eos vero odit doloremque ducimus quis itaque sed vero. Et in et omnis. Voluptate excepturi molestiae illo commodi iure dolores adipisci.', 'Dignissimos modi dolorem fugiat nemo. Suscipit ratione non repudiandae veniam qui est. Officiis quibusdam ad aut est ad. Voluptatem nam voluptatibus tenetur assumenda nihil vero. Explicabo perferendis consectetur repellendus et et sequi. Consequuntur blanditiis consequatur maxime a quae at quia. Aliquid rerum vero neque voluptate occaecati in. Blanditiis dignissimos facilis esse et voluptate non. Ipsa quia voluptas dolores excepturi. Et voluptas voluptatem fuga dolores in maxime. In laborum aut officiis et. Ullam in quis similique qui nemo maxime. Quo labore debitis qui quidem quaerat ea in.', '1998-04-01', 1, 3, 6, 4, 5, 3, 6, '10.769134,106.675907', 1, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(16, 2, 'Immigration Inspector OR Customs Inspector', 'Delectus culpa sint id et est eveniet. Deserunt occaecati atque voluptates sit accusamus. Repellat iste asperiores laborum modi maiores. Commodi necessitatibus aut velit excepturi necessitatibus quaerat. Aut ea beatae accusantium dignissimos sint ut. Qui sed dolorem nam non modi voluptate eos. Cupiditate ut omnis libero facere et ducimus et. Numquam rerum culpa ratione inventore. Blanditiis et dignissimos nulla adipisci quas. Eum mollitia sunt non eum delectus modi eligendi et. Omnis voluptas in quia aspernatur eum. Non non ipsum quia ut dolores doloribus.', 'Cupiditate enim dolorum aut aliquam culpa aut repudiandae quia. Est adipisci qui dolor aliquam commodi maxime. Voluptas id omnis nemo dignissimos qui. Molestias ad dolorum et pariatur voluptatem numquam. Sed deleniti molestias repellat harum et et aut. Quis aperiam laboriosam iusto earum tempore et. Fuga atque ut et aut. Laudantium at soluta autem ad occaecati excepturi ut.', 'Ea perferendis aliquid voluptas incidunt cupiditate in et. Facere in enim recusandae et corrupti. Et adipisci perferendis voluptatem voluptatem iure. Sequi temporibus consequatur optio quia dolore. Et dignissimos sunt unde vitae. Repellat laudantium voluptate sapiente velit commodi quidem debitis. Vel animi unde quasi. Molestiae necessitatibus nostrum nam est distinctio sed. Sed sed ea non. Consequatur repellat sapiente quam nobis dolorem occaecati. Voluptatem quis neque dolorem quis expedita iusto vel.', 'Vero ab corrupti eum. Beatae unde provident blanditiis. Alias aspernatur ea temporibus aspernatur et. Sunt placeat dolore voluptatem ut. Voluptates veniam ab accusamus. Dolorem error vel odio delectus adipisci maiores. Tempore aperiam qui incidunt pariatur labore reprehenderit.', 'Praesentium quaerat beatae maxime nobis et et illum. Odio odit molestias ut. Cum in adipisci ut dolor. Quis cumque quo ducimus amet numquam. Rem id iure culpa necessitatibus. Rem dicta eos qui itaque et qui aut. Ipsa velit ab asperiores facilis. Quis veniam ducimus et rerum quisquam nisi. Sunt voluptatem aut pariatur rerum pariatur eaque. Fugiat voluptate nihil amet rerum. Quas hic omnis labore atque cum perspiciatis beatae omnis.', '1988-08-02', 5, 1, 1, 2, 9, 2, 1, '10.753395,106.6809', 0, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(17, 1, 'Dispatcher', 'Sed qui magnam et voluptates non harum excepturi. Impedit facilis optio voluptatum quisquam fuga aperiam. Debitis odit ullam molestias dignissimos nemo nihil. Quo quam ea veniam molestias modi dolor eveniet. Officia eos minus odit est inventore officiis non. Voluptas nihil nesciunt ullam. Amet aliquam similique doloribus numquam eligendi saepe.', 'Animi dolorum enim impedit minima quia quia quibusdam. Ut id tempore sint voluptas. Dolores velit sequi quis eligendi quis. Quae ex et quae laudantium optio debitis. Dicta voluptatem est ut autem quos quasi. Reprehenderit vitae quia necessitatibus dignissimos et est. Recusandae amet nesciunt ea ipsa blanditiis dolorem.', 'Quae sunt modi qui qui. Ut odit in est. Rerum sed consequuntur sunt voluptatibus natus nesciunt. Praesentium accusamus explicabo nemo doloremque et dolor. Saepe et iste sequi minima nobis sit. Sed corrupti illum aspernatur laborum corporis corrupti. Id non distinctio ut tempore. Laboriosam ex enim et distinctio. Suscipit fugit dolore labore et. Eligendi sit illum itaque aut voluptas occaecati illo ea. Dolorem corrupti consectetur totam magni soluta tenetur repudiandae. Fuga ut quia est cum voluptatum aliquid sit. Tempora distinctio hic sunt est voluptatem.', 'Dicta est ea vel voluptatem beatae molestias. Minus ab minus est est aperiam ipsum voluptas. Nemo alias dolores impedit et numquam. Quae voluptas rem et magnam. Iusto dolores nihil et fugit similique voluptate. Voluptatum incidunt aut et dolores. Assumenda eaque recusandae ullam excepturi. Voluptas et est non laboriosam quo fugit. Incidunt veritatis ipsa possimus quod soluta asperiores nemo. Perspiciatis delectus eum asperiores voluptatem et et aliquam. Maxime dolores minus facere voluptatem architecto reiciendis sed. Maiores sit laborum exercitationem ex est voluptas. Quam dolorem qui fuga debitis fuga quis repudiandae.', 'Error earum totam iusto quisquam. Quidem aut error quia rerum aperiam et omnis. Harum fuga illo fugit. Molestiae voluptate id quis rerum mollitia animi at. Velit aut qui quae debitis explicabo delectus. Incidunt ea id cumque maiores. Nostrum quaerat officiis cum omnis.', '1990-01-08', 7, 7, 8, 4, 7, 2, 8, '10.758554,106.683631', 1, 0, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(18, 2, 'Flight Attendant', 'Voluptatem veritatis nemo esse aut sed voluptatem. Qui porro ut tempore et illum. Commodi odio magni distinctio aut dolor consequuntur quis. Magni magnam nulla veniam. Et omnis iure hic beatae dolor laboriosam perspiciatis. Officia aut ad atque quo at non eum laborum. Excepturi harum cum modi optio. Rerum et optio nemo accusamus qui quo veritatis. Illo sint voluptates non facilis aut doloremque pariatur.', 'A nisi sed aliquam. Voluptatem maxime aliquid voluptatibus. Id eligendi error cum autem pariatur necessitatibus distinctio aliquam. Omnis aut exercitationem et laudantium qui consectetur ea reiciendis. Laboriosam aut quos debitis. Totam quia repellat blanditiis doloribus vero. Sit iste dolorem ut non maxime ipsum. Et aut laboriosam perferendis perferendis repudiandae. Voluptates et aut laudantium labore.', 'Ducimus earum aliquam impedit modi sed dignissimos. Eos et ratione est. Similique magni quos rem odit qui. Molestias et quos qui voluptatem. Temporibus dolores molestias ut quis iusto. Corporis velit optio quia et rerum. Aut excepturi voluptas assumenda asperiores quae qui et. Maiores autem officiis nihil blanditiis tenetur. Ut consequatur est consequuntur est ea. Cum quo molestiae iusto esse optio soluta. Voluptatem saepe saepe esse rem fuga ullam aut. Dolorem aspernatur aut voluptatem rerum enim. Ad quaerat et corrupti quidem eius.', 'Et nihil voluptate et in. Blanditiis dolorem nihil voluptatum iste facilis. Eum totam est est libero. Beatae sunt accusantium consequatur nemo asperiores delectus et. Atque distinctio quas sed odio. Sint voluptatem voluptates deserunt. Dolorem consectetur doloribus suscipit aliquam. Ipsam laborum voluptatum corporis expedita repudiandae delectus.', 'Quo quisquam dolorum necessitatibus voluptatem et et. Ipsam quo nulla deserunt consectetur. Vel qui dolor in qui. Maiores aperiam quos corporis. Quod explicabo voluptatem ut sunt cum esse mollitia. Culpa voluptatibus assumenda expedita soluta nihil porro. Ut delectus veniam qui eius occaecati. Odit alias voluptatem sit ut beatae dolores quo explicabo. Et et mollitia a atque recusandae magni cum. Soluta maiores consectetur eaque animi sit sit laboriosam. Explicabo non repellat nostrum illum. Ut deserunt eos fuga velit quo et.', '1980-05-31', 2, 6, 7, 1, 5, 3, 6, '10.760439,106.686853', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(19, 8, 'Foreign Language Teacher', 'Fuga doloremque atque alias ipsam ipsa enim qui. Quis quia vel tempora ut enim minima. Cupiditate non sit dignissimos qui. Laudantium nihil eligendi repellendus maiores tempore aut. Quia aut sint dolor quo et. Iure consectetur natus distinctio quis. Praesentium harum et enim consequatur beatae nesciunt. Dolor culpa ut delectus exercitationem exercitationem eum eos.', 'Nihil facilis qui itaque suscipit commodi. Quod rerum vel asperiores nam consequatur. Laborum nihil omnis non quam libero. Eaque quia autem qui voluptatibus ut. Earum non impedit est. Quia similique eius consequuntur consequatur. Eos vitae iure a et totam dolores. Impedit sapiente modi voluptate rem. Quas omnis harum velit sed repellendus alias tenetur cum. Eum animi voluptates doloribus recusandae quo maiores. Tempore quaerat est beatae occaecati. Nisi veritatis et in dolor accusantium unde qui.', 'Inventore est non quos sunt recusandae deleniti quia. Aut necessitatibus et et veritatis quo voluptatum. Reprehenderit aperiam enim voluptas. Laborum doloribus tempora optio temporibus quas molestias. Vero amet inventore distinctio laboriosam hic. Perferendis officiis voluptas qui ea ducimus voluptatem dolor sit. Eum magni quia nihil quis voluptatem perspiciatis. Et est laboriosam voluptatibus omnis sit animi harum temporibus. Molestias aut voluptatibus pariatur et eius amet. Aut dolorum quo voluptas sit consequatur numquam explicabo. Amet praesentium molestiae accusamus et voluptatem voluptates. Et quaerat saepe autem nihil sit enim. Ipsa assumenda tempore eos est mollitia.', 'Debitis fugiat ut aut quae. Consequatur tempore quia ab delectus eos sit. Et ex a et tenetur. Sit accusamus vel voluptatem qui. Atque sit quaerat aspernatur optio corrupti et. Voluptatibus voluptate voluptas quidem nesciunt doloribus. Quidem ut veniam minus mollitia excepturi quibusdam. Voluptatem dicta perferendis quisquam reprehenderit aut debitis. Alias et ullam dolore aperiam adipisci. Corrupti et consequatur sed dolor inventore iste aliquam provident. Laboriosam dolores non repudiandae.', 'Tempore dolores quis rerum quidem recusandae laborum nostrum. Quia quidem dignissimos rerum laudantium. Quia eos dolores vel sit laudantium debitis magni. Iusto dolore laudantium dolorum. Aspernatur voluptatem odio qui modi. Et fugit dicta sit velit a. In sint aut quod eveniet consequatur. Reiciendis illo aliquam ullam ut et molestiae. Sint iure quisquam aliquid maiores. Ut quia beatae qui repellendus expedita sunt. At autem eos facilis consequatur qui neque nam.', '1981-10-21', 4, 6, 1, 5, 3, 1, 6, '10.767941,106.681918', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');
INSERT INTO `jobs` (`id`, `company_id`, `title`, `description`, `responsibility`, `skill`, `education`, `benefit`, `deadline`, `vacancy`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_gender_id`, `job_salary_range_id`, `map_code`, `is_featured`, `is_urgent`, `created_at`, `updated_at`) VALUES
	(20, 9, 'Transportation and Material-Moving', 'Est libero voluptatibus sunt veritatis. Nulla aut quo vel ab consequatur adipisci laudantium. Sit distinctio est et voluptas illo. Sed commodi esse maiores et eos. Sequi est suscipit sint ad. Ut odio quia voluptatibus alias asperiores. Sed quae veritatis quia consequatur molestiae.', 'Perferendis quo quis est illum. Debitis vel et ea non ut nulla. Consequatur id labore assumenda ut officia itaque alias. Incidunt fugiat molestiae quia eius. Explicabo odio quia atque ab blanditiis vero asperiores. Officiis asperiores unde molestiae laudantium incidunt quidem. Pariatur rem asperiores velit temporibus debitis.', 'Eum fugit libero facere veniam voluptates iure. Aut culpa omnis esse id enim debitis sit. Repudiandae similique impedit sequi aut quia quam rerum. Distinctio et maiores eveniet velit. Itaque pariatur eum blanditiis illum commodi. Voluptatum ex sit voluptates quia doloremque. Quis ea non est fugiat. Amet cupiditate vel et. Est dolores labore quam. Consectetur odio laudantium cum suscipit mollitia repellat nam et. Quos a sed quasi eaque culpa odio eos. Dolorem porro totam repudiandae odio. Ratione ut quidem iste molestias laudantium aperiam.', 'Molestiae molestiae voluptas aliquam et sit praesentium. Quos quo quae et sit. Et nemo quas aspernatur ea soluta. Quia deserunt nisi aliquam fuga quo aut. Ut aut dolorem pariatur corporis. Ullam laudantium saepe ad labore sunt qui. Rerum ut velit et autem. Animi hic eligendi illo et quia culpa dolores. Porro qui similique culpa sed neque et. Doloribus sit dolor aut qui. Molestiae sit quibusdam non voluptas.', 'Rem sit animi nostrum sit rerum amet. Qui odit quisquam unde voluptatem vitae numquam. Aspernatur consequuntur ullam eos voluptatem dolor suscipit. Repellendus doloremque doloribus qui placeat at non. Natus deserunt eveniet deserunt. Perferendis quo excepturi adipisci quia voluptatem libero. Sint aut nulla quam velit. Inventore distinctio magni totam quaerat earum autem. Tenetur minima facilis consectetur dolor ut et soluta. Quia eum quia culpa dolore. Harum aut aut libero tempore.', '2007-11-28', 1, 6, 8, 5, 10, 1, 6, '10.750063,106.684715', 0, 1, '2024-03-25 00:03:38', '2024-03-25 00:03:38');

-- Dumping structure for table laravel.job_categories
DROP TABLE IF EXISTS `job_categories`;
CREATE TABLE IF NOT EXISTS `job_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_categories: ~10 rows (approximately)
DELETE FROM `job_categories`;
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(1, 'Engineering', 'fas fa-share-alt', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(2, 'Construction', 'fas fa-sitemap', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(3, 'Education Training', 'fas fa-landmark', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(4, 'Restaurant', 'fas fa-share-alt', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(5, 'Automotive', 'fas fa-bullhorn', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(6, 'Health Care', 'fas fa-stethoscope', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(7, 'Sales', 'fas fa-landmark', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(8, 'Marketing', 'fas fa-sitemap', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(9, 'Accounting', 'fas fa-landmark', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
	(10, 'Data Entry', 'fas fa-sitemap', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.job_experiences
DROP TABLE IF EXISTS `job_experiences`;
CREATE TABLE IF NOT EXISTS `job_experiences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_experiences: ~10 rows (approximately)
DELETE FROM `job_experiences`;
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '1 Month', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, '6 Month', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, '6 Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, '3 Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, '3 Month', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, '10 Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, 'No Experience', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(8, '1 Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(9, '20 Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_experiences` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(10, '20+ Year', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.job_genders
DROP TABLE IF EXISTS `job_genders`;
CREATE TABLE IF NOT EXISTS `job_genders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_genders: ~3 rows (approximately)
DELETE FROM `job_genders`;
INSERT INTO `job_genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Male', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Not Specified', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, 'Female', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.job_locations
DROP TABLE IF EXISTS `job_locations`;
CREATE TABLE IF NOT EXISTS `job_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_locations: ~20 rows (approximately)
DELETE FROM `job_locations`;
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Tien Giang', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Dak Lak', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, 'Ca Mau', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, 'Vinh Long', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, 'Binh Duong', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, 'Long Khanh', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, 'Dong Thap', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(8, 'Tra Vinh', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(9, 'Ben Tre', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(10, 'Hau Giang', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(11, 'Soc Trang', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(12, 'Tay Ninh', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(13, 'Kien Giang', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(14, 'Kon Tum', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(15, 'Ho Chi Minh', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(16, 'Can Tho', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(17, 'Long An', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(18, 'Ha Noi', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(19, 'Binh Phuoc', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(20, 'Vung Tau', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.job_salary_ranges
DROP TABLE IF EXISTS `job_salary_ranges`;
CREATE TABLE IF NOT EXISTS `job_salary_ranges` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_salary_ranges: ~9 rows (approximately)
DELETE FROM `job_salary_ranges`;
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '$1.000 - $2.000', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, '$2.000 - $5.000', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, '$500 - $1.000', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, '$20.000+', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, '$100 - $200', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(6, '$200 - $300', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, '$300 - $500', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(8, '$5.000 - $10.000', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_salary_ranges` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(9, '$10.000 - $20.000', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.job_types
DROP TABLE IF EXISTS `job_types`;
CREATE TABLE IF NOT EXISTS `job_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_types: ~5 rows (approximately)
DELETE FROM `job_types`;
INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Full Time', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(2, 'Part Time', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(3, 'Temporary', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(4, 'Fresher', '2024-03-24 21:10:07', '2024-03-24 21:10:07');
INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(5, 'Freelancer', '2024-03-24 21:10:07', '2024-03-24 21:10:07');

-- Dumping structure for table laravel.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;

-- Dumping structure for table laravel.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `package_id` int NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currently_active` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.orders: ~0 rows (approximately)
DELETE FROM `orders`;

-- Dumping structure for table laravel.packages
DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `package_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` smallint NOT NULL,
  `package_days` smallint NOT NULL,
  `package_display_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_allowed_jobs` tinyint NOT NULL,
  `total_allowed_featured_jobs` tinyint NOT NULL,
  `total_allowed_photos` tinyint NOT NULL,
  `total_allowed_videos` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.packages: ~0 rows (approximately)
DELETE FROM `packages`;

-- Dumping structure for table laravel.page_blog_items
DROP TABLE IF EXISTS `page_blog_items`;
CREATE TABLE IF NOT EXISTS `page_blog_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_blog_items: ~0 rows (approximately)
DELETE FROM `page_blog_items`;

-- Dumping structure for table laravel.page_contact_items
DROP TABLE IF EXISTS `page_contact_items`;
CREATE TABLE IF NOT EXISTS `page_contact_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_contact_items: ~0 rows (approximately)
DELETE FROM `page_contact_items`;

-- Dumping structure for table laravel.page_faq_items
DROP TABLE IF EXISTS `page_faq_items`;
CREATE TABLE IF NOT EXISTS `page_faq_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_faq_items: ~0 rows (approximately)
DELETE FROM `page_faq_items`;

-- Dumping structure for table laravel.page_home_items
DROP TABLE IF EXISTS `page_home_items`;
CREATE TABLE IF NOT EXISTS `page_home_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
  `testimonial_background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading` text COLLATE utf8mb4_unicode_ci,
  `blog_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_home_items: ~0 rows (approximately)
DELETE FROM `page_home_items`;

-- Dumping structure for table laravel.page_job_category_items
DROP TABLE IF EXISTS `page_job_category_items`;
CREATE TABLE IF NOT EXISTS `page_job_category_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_job_category_items: ~0 rows (approximately)
DELETE FROM `page_job_category_items`;

-- Dumping structure for table laravel.page_other_items
DROP TABLE IF EXISTS `page_other_items`;
CREATE TABLE IF NOT EXISTS `page_other_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `login_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_page_title` text COLLATE utf8mb4_unicode_ci,
  `login_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `signup_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_page_title` text COLLATE utf8mb4_unicode_ci,
  `signup_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `forget_password_page_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forget_password_page_title` text COLLATE utf8mb4_unicode_ci,
  `forget_password_page_meta_description` text COLLATE utf8mb4_unicode_ci,
  `job_listing_page_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_listing_page_title` text COLLATE utf8mb4_unicode_ci,
  `job_listing_page_description` text COLLATE utf8mb4_unicode_ci,
  `company_listing_page_heading` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_listing_page_title` text COLLATE utf8mb4_unicode_ci,
  `company_listing_page_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_other_items: ~0 rows (approximately)
DELETE FROM `page_other_items`;

-- Dumping structure for table laravel.page_pricing_items
DROP TABLE IF EXISTS `page_pricing_items`;
CREATE TABLE IF NOT EXISTS `page_pricing_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_pricing_items: ~0 rows (approximately)
DELETE FROM `page_pricing_items`;

-- Dumping structure for table laravel.page_privacy_items
DROP TABLE IF EXISTS `page_privacy_items`;
CREATE TABLE IF NOT EXISTS `page_privacy_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_privacy_items: ~0 rows (approximately)
DELETE FROM `page_privacy_items`;

-- Dumping structure for table laravel.page_term_items
DROP TABLE IF EXISTS `page_term_items`;
CREATE TABLE IF NOT EXISTS `page_term_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.page_term_items: ~0 rows (approximately)
DELETE FROM `page_term_items`;

-- Dumping structure for table laravel.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table laravel.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table laravel.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.posts: ~0 rows (approximately)
DELETE FROM `posts`;

-- Dumping structure for table laravel.subscribers
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.subscribers: ~0 rows (approximately)
DELETE FROM `subscribers`;

-- Dumping structure for table laravel.testimonials
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.testimonials: ~0 rows (approximately)
DELETE FROM `testimonials`;

-- Dumping structure for table laravel.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
DELETE FROM `users`;

-- Dumping structure for table laravel.why_choose_items
DROP TABLE IF EXISTS `why_choose_items`;
CREATE TABLE IF NOT EXISTS `why_choose_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.why_choose_items: ~0 rows (approximately)
DELETE FROM `why_choose_items`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
