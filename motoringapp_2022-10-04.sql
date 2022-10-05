# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.28)
# Database: motoringapp
# Generation Time: 2022-10-04 07:17:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table car_brands
# ------------------------------------------------------------

DROP TABLE IF EXISTS `car_brands`;

CREATE TABLE `car_brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint unsigned NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `car_brands_category_id_foreign` (`category_id`),
  CONSTRAINT `car_brands_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `car_brands` WRITE;
/*!40000 ALTER TABLE `car_brands` DISABLE KEYS */;

INSERT INTO `car_brands` (`id`, `name`, `created_at`, `updated_at`, `category_id`, `full_name`)
VALUES
	(2,'hala','2022-08-03 23:03:03','2022-08-03 23:03:03',2,'honda hala'),
	(3,'pagero','2022-08-03 23:03:17','2022-08-03 23:03:17',2,'honda pagero'),
	(4,'nexus','2022-08-03 23:03:55','2022-08-03 23:03:55',2,'honda nexus'),
	(5,'big daddy','2022-08-03 23:04:30','2022-08-03 23:04:30',5,'toyota big daddy'),
	(6,'camry','2022-08-03 23:04:44','2022-08-03 23:04:44',5,'toyota camry'),
	(7,'salty','2022-08-03 23:05:22','2022-08-03 23:05:22',5,'toyota salty'),
	(8,'250','2022-08-03 23:05:42','2022-08-03 23:05:42',4,'Benz 250'),
	(9,'230','2022-08-03 23:05:54','2022-08-03 23:05:54',4,'benz 230');

/*!40000 ALTER TABLE `car_brands` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `description`, `picture`, `created_at`, `updated_at`)
VALUES
	(2,'Honda','this is for normal cars','categories/oEwoT3iSccwrg4APhpAGRvrPMlY1OK6JJFOhK7Xh.png','2022-07-09 14:20:28','2022-08-03 21:40:29'),
	(3,'BmW','this are for convertibles or open roof cars','categories/0tgtXLvG0W0y5mt32Fnax8U7L20H3SxZoyPv4F76.png','2022-07-09 14:21:26','2022-08-03 21:41:15'),
	(4,'Benz','This category is for Mini vans and buses','categories/UDScoOkaomt1HgqQ5sPvKAPdsfz9v72IWIbqFlXh.png','2022-07-09 14:22:20','2022-08-03 21:35:32'),
	(5,'Toyota','this category is for pickup trucks','categories/X2xDNRe4NN8xwb6wnnnlpSStoMyId1jaZPtUnILe.jpg','2022-07-09 14:24:42','2022-08-03 21:43:53'),
	(6,'Audi','this are for heavy duty category vehincles','categories/2Vgow52dTUSg2o0UtWP4Cevfuqnwtr4Ma2qUxF0h.png','2022-07-09 14:26:36','2022-08-03 21:46:12'),
	(7,'mistibushi','this are for buses','categories/oYXHafbnTpOvSVlPw3LpiQ7FkFTFT4l3LmYyBdbG.png','2022-07-09 14:27:44','2022-08-03 21:50:39'),
	(8,'peugoet','this are for motorcyles','categories/cRaARnKOMwRi9gaBrF6G3mgYSIr9EkIVOA9ORFbS.jpg','2022-07-09 14:28:31','2022-08-03 21:52:23'),
	(9,'hyundai','this are for heavy duties vehincles like tractors ....','categories/CPTe1Uh83DbRnMfwuHgf9F2OTIgMBD5Ydtguoe7e.jpg','2022-07-09 14:29:26','2022-08-03 21:54:13'),
	(10,'pontiac','This are for water transportation vehincles','categories/6Au3ouM3MEmQVT2xY53XLx88hNAZn5N0XPa5uKo8.jpg','2022-07-09 14:30:08','2022-08-03 21:55:29'),
	(11,'Nissan','this is for the nissan car brands','categories/u1FsTBi8QkTM6X3zqSfEwTeCHftIRHsbYGPRFHGa.png','2022-08-03 21:39:21','2022-08-03 21:39:21');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(13,'2022_07_06_223755_create_categories_table',3),
	(14,'2022_07_06_224252_create_car_brands_table',3),
	(15,'2022_07_06_224840_create_services_table',3),
	(16,'2022_07_11_190717_create_service_locations_table',4),
	(17,'2022_07_15_131418_create_car_brands_table',5),
	(18,'2022_07_17_174033_create_service_requests_table',6),
	(19,'2022_07_22_091548_add_new_fields_to_users_table',7),
	(20,'2022_07_22_203841_add_country_and_mobile_fields_to_user_table',8),
	(21,'2022_07_25_061617_add_new_fields_to_car_brand',9),
	(22,'2022_07_30_104400_create_products_table',10),
	(23,'2022_08_05_202252_create_other_products_table',11);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table other_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `other_products`;

CREATE TABLE `other_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `other_products` WRITE;
/*!40000 ALTER TABLE `other_products` DISABLE KEYS */;

INSERT INTO `other_products` (`id`, `name`, `description`, `price`, `images`, `user_id`, `status`, `created_at`, `updated_at`)
VALUES
	(4,'Sxffrffgfrdr','Proodchgff hfgfff','50000','[\"products/4wkEG3LOP447G2EjPKlzAMx64CRmuB8XySviwnoa.jpg\", \"products/2NNOx03x8Zq3Ht6SC2cMcOgBxvEFlVo1NG7tOCU2.jpg\", \"products/gaFt1se7sMFl4QI8mPRt9ic1yhwdCrNV5aWbgoY6.jpg\"]',5,'pending','2022-08-05 22:44:09','2022-08-05 22:44:09'),
	(6,'Spare part','This is the description of the item','15000','[\"products/3b3NTCfgyv69r3oInieXyAO8HNkLBVJrb1NMOvsf.png\", \"products/eiHdKoO6PROoD99nzTKcJPbx38XsgrneKauQQkEY.jpg\", \"products/Qx6J8usGIdIUMLZTD23nJLwXn8gR5Orv2TD2TDCk.jpg\"]',5,'pending','2022-08-13 13:46:19','2022-08-13 13:46:19');

/*!40000 ALTER TABLE `other_products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`)
VALUES
	(1,'App\\Models\\User',2,'motoringapp','20d9d38e1dd219fd7351f773bdd1791744e67c626b1cca08203df2794fca5d50','[\"*\"]',NULL,'2022-07-17 20:59:20','2022-07-17 20:59:20'),
	(2,'App\\Models\\User',3,'motoringapp','476e881074a92ba7e9464d3232f97011eed8ed467b93162433fa820520b30758','[\"*\"]',NULL,'2022-07-18 09:42:53','2022-07-18 09:42:53'),
	(3,'App\\Models\\User',2,'motoringapp','2e37863bf98f77f907efd449a2fbe12cf31f2c9ff0664eab8b7128fd450b2aec','[\"*\"]',NULL,'2022-07-18 18:48:58','2022-07-18 18:48:58'),
	(4,'App\\Models\\User',2,'motoringapp','8a05c5169f1676f396279564fa63c32946212b3cf96967d9df4b62ce2ac6d410','[\"*\"]',NULL,'2022-07-18 19:26:32','2022-07-18 19:26:32'),
	(5,'App\\Models\\User',2,'motoringapp','324c1d738af1115de1fd3b560899a605d9a2118db687f43c13d0b4155e6a5d0d','[\"*\"]',NULL,'2022-07-22 13:23:31','2022-07-22 13:23:31'),
	(6,'App\\Models\\User',2,'motoringapp','8dc09dab8a64f4f800cd277823a13b613783674521ec9343f16d08d719cd0a70','[\"*\"]',NULL,'2022-07-22 13:36:26','2022-07-22 13:36:26'),
	(7,'App\\Models\\User',2,'motoringapp','4d2c58e96f667a6bad0d8f7892c3df17842a75c99c91b1e644c684242cf6ac1e','[\"*\"]',NULL,'2022-07-22 13:46:14','2022-07-22 13:46:14'),
	(8,'App\\Models\\User',2,'motoringapp','9b45931df5da8f0aeaaa1b8744134d5466c00f0f080f28823bc858339a4bf552','[\"*\"]',NULL,'2022-07-22 13:53:14','2022-07-22 13:53:14'),
	(9,'App\\Models\\User',2,'motoringapp','bfcd824e1302aad285b4a49f0bbcca60c54ccb088e128a20d99ba8ea73a7b77f','[\"*\"]',NULL,'2022-07-22 14:00:10','2022-07-22 14:00:10'),
	(10,'App\\Models\\User',2,'motoringapp','e8ed4007b3f244a7701f5a95f8d379e64a4afa27e732e5a47d12089ccedd5d2f','[\"*\"]',NULL,'2022-07-22 14:02:21','2022-07-22 14:02:21'),
	(11,'App\\Models\\User',2,'motoringapp','9a232341b3dfe60c3378e81e4e0a99368a7d7463c0c0ca709a69c8acfdfcd095','[\"*\"]',NULL,'2022-07-22 14:02:47','2022-07-22 14:02:47'),
	(12,'App\\Models\\User',2,'motoringapp','e9585015e1cc92e3b1a3ac42ba35d5621923614255f4ec58a7e6acba4b4e6ac0','[\"*\"]','2022-07-22 14:50:01','2022-07-22 14:05:44','2022-07-22 14:50:01'),
	(13,'App\\Models\\User',2,'motoringapp','bb1038dda597eb89c0ac66e80dc98458f9715ccdc3b14e49f3f44ec2d73eb48f','[\"*\"]','2022-07-22 15:01:01','2022-07-22 14:51:18','2022-07-22 15:01:01'),
	(14,'App\\Models\\User',2,'motoringapp','0be24fef3a3c14c9a99d122a0e3b7adcf8071d30e2e5ebe035c2d84f9d5e6274','[\"*\"]','2022-07-22 15:04:03','2022-07-22 15:02:37','2022-07-22 15:04:03'),
	(15,'App\\Models\\User',2,'motoringapp','0085b6a4acc6aadb59ae607ad4554de1928a2dbe80006cdc329ba60f4dfef038','[\"*\"]',NULL,'2022-07-22 15:20:11','2022-07-22 15:20:11'),
	(16,'App\\Models\\User',2,'motoringapp','37cebd8dfe981b5c83aa6162fe2ebf5fe57caccaca89d5c3ebb4667e049ac94e','[\"*\"]',NULL,'2022-07-22 15:23:16','2022-07-22 15:23:16'),
	(17,'App\\Models\\User',2,'motoringapp','cc10f19b132677fff7c69811f8900f474b01b7d215c4463d8dccbb7d1d65fbd7','[\"*\"]',NULL,'2022-07-22 15:36:13','2022-07-22 15:36:13'),
	(18,'App\\Models\\User',2,'motoringapp','56688a734b2a4dabeac83d6d295483134c356a7de3c7924c503834be3086167e','[\"*\"]','2022-07-22 16:25:06','2022-07-22 16:22:20','2022-07-22 16:25:06'),
	(19,'App\\Models\\User',2,'motoringapp','52f8caaacb6d0c12207ee8d795777ac083d09532496cb4a14112b112feb0a14d','[\"*\"]','2022-07-22 17:47:40','2022-07-22 16:25:28','2022-07-22 17:47:40'),
	(20,'App\\Models\\User',2,'motoringapp','a1db5a8a85bd400feafbbe1352ffdc6e5ee5c16d5be92a79a4528bd8d8db1e4c','[\"*\"]',NULL,'2022-07-22 19:41:40','2022-07-22 19:41:40'),
	(21,'App\\Models\\User',2,'motoringapp','7242c4dd396ffdf40f05904b14ffff460364a0dbaf8ee95357346015206e700b','[\"*\"]',NULL,'2022-07-22 19:47:16','2022-07-22 19:47:16'),
	(22,'App\\Models\\User',2,'motoringapp','344f214e7bd59ff865baa03c10843ea9e441d61fd34677efd930c036b888c6cc','[\"*\"]','2022-07-22 20:06:03','2022-07-22 19:52:25','2022-07-22 20:06:03'),
	(23,'App\\Models\\User',2,'motoringapp','e9378244906228f8420340e07d49203f5664deba750ddd4b9c9af0d95a92e706','[\"*\"]',NULL,'2022-07-22 20:24:48','2022-07-22 20:24:48'),
	(24,'App\\Models\\User',2,'motoringapp','49eedd734677058e028bfc099295e1710f3baa969930fb52aedfd8ce4951428e','[\"*\"]',NULL,'2022-07-22 20:26:58','2022-07-22 20:26:58'),
	(25,'App\\Models\\User',2,'motoringapp','09f5bec34dd2adbd6a6a872557d4e25776b17cb843f2722cb8819ee9255f9e43','[\"*\"]',NULL,'2022-07-22 20:28:40','2022-07-22 20:28:40'),
	(26,'App\\Models\\User',2,'motoringapp','e82fd7d4f77e6e84711e9cb8c1f780857410a509a1a3723f1a2358c2d153fd24','[\"*\"]',NULL,'2022-07-22 20:30:57','2022-07-22 20:30:57'),
	(27,'App\\Models\\User',2,'motoringapp','235abd87482ddf2a9c24de16371eba99955cadc4f000e1afbc7906c305144cf3','[\"*\"]',NULL,'2022-07-22 20:35:15','2022-07-22 20:35:15'),
	(28,'App\\Models\\User',2,'motoringapp','52bcd0545a41be2ecfea9722ff654c8718bcc305f8d2222949aaa0eba9738612','[\"*\"]',NULL,'2022-07-22 20:40:41','2022-07-22 20:40:41'),
	(29,'App\\Models\\User',4,'motoringapp','1c381690753d964858d2fb600a05f762af862f80191fef9a187e4403593830bb','[\"*\"]',NULL,'2022-07-22 21:11:39','2022-07-22 21:11:39'),
	(30,'App\\Models\\User',5,'motoringapp','de24aec9bfc85d86adf29f9feb9dc593e2f135f2bec901588a8a4474896950ae','[\"*\"]',NULL,'2022-07-22 21:33:25','2022-07-22 21:33:25'),
	(31,'App\\Models\\User',5,'motoringapp','3b28d7cbf58225836788ae06fc6474596f6fcb0c45fc7efc4ad01157431a9ba8','[\"*\"]',NULL,'2022-07-22 21:48:49','2022-07-22 21:48:49'),
	(32,'App\\Models\\User',5,'motoringapp','465e9f3442439a1b80e529ab1c67c238d72e06fed91df6266f4d2cfb40e700f7','[\"*\"]',NULL,'2022-07-22 21:51:15','2022-07-22 21:51:15'),
	(33,'App\\Models\\User',5,'motoringapp','1eff677003f1faaeee3221a557475e180243a20831c007a4efc8496152b0618d','[\"*\"]',NULL,'2022-07-22 21:52:42','2022-07-22 21:52:42'),
	(34,'App\\Models\\User',5,'motoringapp','f6aaafcad974bfd7465f622e60aa3514e553b35f6f8c16e2a55ac5c46cffd2b9','[\"*\"]',NULL,'2022-07-22 21:53:52','2022-07-22 21:53:52'),
	(35,'App\\Models\\User',5,'motoringapp','3707681077ca08d6eb743aa19987ae3351ebd00756bd7ac7a8f16f1e581d92fb','[\"*\"]',NULL,'2022-07-22 21:55:35','2022-07-22 21:55:35'),
	(36,'App\\Models\\User',5,'motoringapp','14d424a90065b46e071ec20058699f0370a8094200df02ad46646f81a78a1af5','[\"*\"]',NULL,'2022-07-22 21:58:03','2022-07-22 21:58:03'),
	(37,'App\\Models\\User',5,'motoringapp','17cd6fa30fe6914261b2ad05a9617f1562d3784806803cd137f951f971b04e00','[\"*\"]',NULL,'2022-07-22 21:59:35','2022-07-22 21:59:35'),
	(38,'App\\Models\\User',5,'motoringapp','1936701913b0c3b0dbd78e7a241b0481aceaeea4cffe238e0f6bebfb5c1365c0','[\"*\"]',NULL,'2022-07-23 19:38:48','2022-07-23 19:38:48'),
	(39,'App\\Models\\User',5,'motoringapp','06001ccae8428c57c493d58cefaaa24f64c58ffe61feb878793ca727cc3de937','[\"*\"]',NULL,'2022-07-23 19:46:50','2022-07-23 19:46:50'),
	(40,'App\\Models\\User',5,'motoringapp','aaeb498021814cbdd1e99d8e6f0522b44eb07317df5380ee4cea4dfb480db5b0','[\"*\"]',NULL,'2022-07-23 19:49:26','2022-07-23 19:49:26'),
	(41,'App\\Models\\User',5,'motoringapp','50e22d68253724557cf31b201ba919bf256d1d8123c1930c539db7079821bb3b','[\"*\"]',NULL,'2022-07-24 08:05:57','2022-07-24 08:05:57'),
	(42,'App\\Models\\User',5,'motoringapp','b640ac5e5a3d7ce29a6e6e2215b9d497bb21f9203e0f7284ae7ea6e4a6569c27','[\"*\"]',NULL,'2022-07-24 09:14:43','2022-07-24 09:14:43'),
	(43,'App\\Models\\User',5,'motoringapp','7909f4a9172f9096b7049a17c91da6cf35b1224231871bf5336da0bcca1248e9','[\"*\"]',NULL,'2022-07-24 09:16:37','2022-07-24 09:16:37'),
	(44,'App\\Models\\User',5,'motoringapp','0a8f5df32f0b8978f29e2a61048fc5740a4df5bd0dae6e3a982d1e5dde1fe5a1','[\"*\"]',NULL,'2022-07-24 10:33:59','2022-07-24 10:33:59'),
	(45,'App\\Models\\User',5,'motoringapp','578389768d3ce099acb34ff10ea33d61aac49dcdc8c829fdf34ffe6251f54a7e','[\"*\"]',NULL,'2022-07-24 10:36:26','2022-07-24 10:36:26'),
	(46,'App\\Models\\User',5,'motoringapp','8c4e2e0059e4efe72b3cba46fe3e3dde3cdb12332dcbbec7d21770885318a537','[\"*\"]',NULL,'2022-07-24 10:39:32','2022-07-24 10:39:32'),
	(47,'App\\Models\\User',5,'motoringapp','b180cd4567a02303dd578acbfa67641005aba8b5236fc2766703e9b91f598761','[\"*\"]','2022-07-24 10:56:29','2022-07-24 10:42:48','2022-07-24 10:56:29'),
	(48,'App\\Models\\User',5,'motoringapp','92b076e83547e0fbdef917d97018d52f717f8daf0ee5ae1c6587155d384f4a0e','[\"*\"]','2022-07-24 11:04:08','2022-07-24 11:02:01','2022-07-24 11:04:08'),
	(49,'App\\Models\\User',5,'motoringapp','232a8ff02e781653240664c6284a88aa1e1a0156ae5ed115516039347f5c7425','[\"*\"]','2022-07-24 11:07:11','2022-07-24 11:06:13','2022-07-24 11:07:11'),
	(50,'App\\Models\\User',5,'motoringapp','1b9e7f315956b14263c69b2b4983e30eb44b976efb4595500126e8a6d364345e','[\"*\"]','2022-07-24 11:09:36','2022-07-24 11:07:34','2022-07-24 11:09:36'),
	(51,'App\\Models\\User',5,'motoringapp','115d8bca8546cfbba0f86031eecfc4b668205f793c13029d13659cc7d7c35289','[\"*\"]','2022-07-24 11:10:49','2022-07-24 11:10:07','2022-07-24 11:10:49'),
	(52,'App\\Models\\User',5,'motoringapp','f5da4bae4738bdedb771701085e9c60fc0bb055ea51c8b64c6b1eef277ef5a97','[\"*\"]','2022-07-24 11:12:24','2022-07-24 11:11:48','2022-07-24 11:12:24'),
	(53,'App\\Models\\User',5,'motoringapp','c7759f212d75e01fc4caa4aa3aec2d6c4e2ef5f2948ef357f1449309ecb5dc5f','[\"*\"]',NULL,'2022-07-24 11:30:33','2022-07-24 11:30:33'),
	(54,'App\\Models\\User',5,'motoringapp','66a2f0766db57b8a6dfa098f5fab898b326dccb630e3aaf2eacaf04ff1d2c661','[\"*\"]',NULL,'2022-07-24 11:41:58','2022-07-24 11:41:58'),
	(55,'App\\Models\\User',5,'motoringapp','ab659313d59abffe5e38194c088622a731dfa2a0192028a2e8e0be5724c59b3c','[\"*\"]','2022-07-24 12:09:42','2022-07-24 11:58:56','2022-07-24 12:09:42'),
	(56,'App\\Models\\User',5,'motoringapp','bf5b6d3b26f1d16b13afebd93c272701ea8054de41d4ef3d7772985e4d147bec','[\"*\"]','2022-07-24 12:12:55','2022-07-24 12:12:31','2022-07-24 12:12:55'),
	(57,'App\\Models\\User',5,'motoringapp','37d25c5203cf7c5140fc399e3fbd0e9b1e8b0df33c6a4e65620c1d69d78a42a7','[\"*\"]',NULL,'2022-07-24 12:25:44','2022-07-24 12:25:44'),
	(58,'App\\Models\\User',5,'motoringapp','8b9010d38b66f8db65e8b6ed5b58f1d8ec1e0cb3c7de202347b0689a5fcb303b','[\"*\"]','2022-07-24 12:33:37','2022-07-24 12:28:52','2022-07-24 12:33:37'),
	(59,'App\\Models\\User',5,'motoringapp','37823a1e9d0c2206bad99d37dc288a55146ce6d93a4e007faf3c69980ec61f62','[\"*\"]','2022-08-04 12:08:54','2022-08-04 12:01:31','2022-08-04 12:08:54'),
	(60,'App\\Models\\User',5,'motoringapp','ce40da4f3f183bc526aad886382bcaa3d5d2c6144bfb5ddf1c3da477c2df8c92','[\"*\"]',NULL,'2022-08-04 12:16:45','2022-08-04 12:16:45'),
	(61,'App\\Models\\User',5,'motoringapp','10fd1fb28c514718593d309d7ab180afed92d9a42dfda18bf5081faf3df622ce','[\"*\"]','2022-08-04 13:46:18','2022-08-04 12:39:34','2022-08-04 13:46:18'),
	(62,'App\\Models\\User',5,'motoringapp','8680188f86be249577924f51b0ecc4a65922cb06127caaeda74f27f65a13013e','[\"*\"]',NULL,'2022-08-05 21:35:08','2022-08-05 21:35:08'),
	(63,'App\\Models\\User',5,'motoringapp','1a2032211793384219a6fb08de2414435161b3efed20beb15839fba63c0bf723','[\"*\"]','2022-08-05 21:51:26','2022-08-05 21:44:49','2022-08-05 21:51:26'),
	(64,'App\\Models\\User',5,'motoringapp','27163c56477ce74198190151d98024400d64413b4cd7cf39793479ec2c37eae7','[\"*\"]',NULL,'2022-08-05 21:52:19','2022-08-05 21:52:19'),
	(65,'App\\Models\\User',5,'motoringapp','4249b5408467c6338cdee1c1f1773ab4d29822a441c9142411b438286e87cf81','[\"*\"]',NULL,'2022-08-05 21:55:36','2022-08-05 21:55:36'),
	(66,'App\\Models\\User',5,'motoringapp','f33f35d0d69620c6d612b6899934661078ea464c4bf6e56eea6e0ca9e7905e1b','[\"*\"]',NULL,'2022-08-05 22:01:16','2022-08-05 22:01:16'),
	(67,'App\\Models\\User',5,'motoringapp','9f3d4d6041e416a6df332ccb31357e6b4cc020cc4a324c7b6fb5dd1870b04064','[\"*\"]','2022-08-05 22:15:47','2022-08-05 22:05:25','2022-08-05 22:15:47'),
	(68,'App\\Models\\User',5,'motoringapp','4ab238d7400cfc1e9a43ec719db6e18c531993455e91be64c0f24258af0d6f3f','[\"*\"]','2022-08-05 22:28:35','2022-08-05 22:17:24','2022-08-05 22:28:35'),
	(69,'App\\Models\\User',5,'motoringapp','7529e4afef296221577a998ca38bee1384656c8ac790e23510c2b2861e73a5e7','[\"*\"]','2022-08-05 22:44:09','2022-08-05 22:39:33','2022-08-05 22:44:09'),
	(70,'App\\Models\\User',5,'motoringapp','1f96c0f0879a80802c9edf1f66818f05c8d1b4d5a4946c88e0f74e0549409200','[\"*\"]',NULL,'2022-08-08 15:23:33','2022-08-08 15:23:33'),
	(71,'App\\Models\\User',5,'motoringapp','9e49ffd8bfaccbbf147c2b1e1bb4468bb14b9695a6b0e93d25335364542cead4','[\"*\"]',NULL,'2022-08-08 15:26:16','2022-08-08 15:26:16'),
	(72,'App\\Models\\User',5,'motoringapp','e8286c41c2aa8e6390a6d0e2871d8c216453d9daa07cf73c81c8a26158e71c6b','[\"*\"]',NULL,'2022-08-09 00:33:13','2022-08-09 00:33:13'),
	(73,'App\\Models\\User',5,'motoringapp','ce1637d2c922d79ea820841be9b68a4e27e75faec614bea067f7824b4dcdb934','[\"*\"]',NULL,'2022-08-09 00:35:41','2022-08-09 00:35:41'),
	(74,'App\\Models\\User',5,'motoringapp','54b9c54b7c3796c8e15795fc1a6b5488b0f641b9e3d955001b94370b9d51a839','[\"*\"]',NULL,'2022-08-09 00:37:48','2022-08-09 00:37:48'),
	(75,'App\\Models\\User',5,'motoringapp','2d51f9dc5f7a3697343a4b3bcd76dd7e2cf1c175600ffff99df3ba90194e7de5','[\"*\"]',NULL,'2022-08-09 00:40:55','2022-08-09 00:40:55'),
	(76,'App\\Models\\User',5,'motoringapp','19fd8411801cd49d843daba71b4bdb7f6ad0ca63c07879bd5d74e275748490d7','[\"*\"]',NULL,'2022-08-09 00:44:26','2022-08-09 00:44:26'),
	(77,'App\\Models\\User',5,'motoringapp','539d6ccfae102d4b47fe5e8776d644740b545a9692c06dd65fa2eb2c956f06bb','[\"*\"]',NULL,'2022-08-09 00:46:20','2022-08-09 00:46:20'),
	(78,'App\\Models\\User',5,'motoringapp','408a491fc16117f2c60a10cc24835a79e3e400865c2c9e894cbf11b4c1321bae','[\"*\"]',NULL,'2022-08-09 00:46:46','2022-08-09 00:46:46'),
	(79,'App\\Models\\User',5,'motoringapp','908988409190c7e988eef5fd2d2b6681524903e6520bbbe25ff142fc55149da8','[\"*\"]',NULL,'2022-08-11 15:18:10','2022-08-11 15:18:10'),
	(80,'App\\Models\\User',5,'motoringapp','3615bc36025e282b0ae84dff9a0930b6c0da6e8dbfb01c8ae365b8b8a5a18a03','[\"*\"]',NULL,'2022-08-11 18:24:20','2022-08-11 18:24:20'),
	(81,'App\\Models\\User',5,'motoringapp','3c2400617295e61b96170c1352bd4f8a8fc264c2ae8978da1f5f4bd3b87d0258','[\"*\"]',NULL,'2022-08-11 18:34:10','2022-08-11 18:34:10'),
	(82,'App\\Models\\User',5,'motoringapp','07004a03c8c4cc0c40cb076031a859b6ee9988d97cbc18690678087ca92ee3ba','[\"*\"]',NULL,'2022-08-11 18:36:28','2022-08-11 18:36:28'),
	(83,'App\\Models\\User',5,'motoringapp','568cc6a927619eebe660587318fd87db9bef6a1faf9a451f0384935e6590eeeb','[\"*\"]',NULL,'2022-08-11 18:42:13','2022-08-11 18:42:13'),
	(84,'App\\Models\\User',5,'motoringapp','cb6e2afc9b4e58e62e7a6932e496a59d42e447c24897609340ccc95b54817ac7','[\"*\"]',NULL,'2022-08-11 18:53:46','2022-08-11 18:53:46'),
	(85,'App\\Models\\User',5,'motoringapp','5bf477e31c4c5811ec5460d083ba1fafeae730ee0ea0b1b8e930522e11f92a22','[\"*\"]',NULL,'2022-08-11 18:59:37','2022-08-11 18:59:37'),
	(86,'App\\Models\\User',5,'motoringapp','ea4842c06c08c0abf8bd39f6881bfce4879be6af0db930cc3616db7cff20e241','[\"*\"]',NULL,'2022-08-11 19:01:11','2022-08-11 19:01:11'),
	(87,'App\\Models\\User',5,'motoringapp','da7efca1dfec426e28b8d3d2f4018bf37a0d9e3d3d69bdbd25ccdf5c8cf3bb66','[\"*\"]',NULL,'2022-08-11 19:01:31','2022-08-11 19:01:31'),
	(88,'App\\Models\\User',5,'motoringapp','2a19a08e6c5ffeaaaccefd4bb86d449a85834e86195c33b9f040975eca411296','[\"*\"]',NULL,'2022-08-11 19:02:22','2022-08-11 19:02:22'),
	(89,'App\\Models\\User',5,'motoringapp','3e2fa721d9df9de0d29e402b5ba7376245e920dd18a7f7b05f5a4eb1c157e3a3','[\"*\"]',NULL,'2022-08-11 19:48:30','2022-08-11 19:48:30'),
	(90,'App\\Models\\User',5,'motoringapp','dbf7bd97bca320342878971f209b9ee73aa0ef1242b1f4904fe13b6d07fae156','[\"*\"]',NULL,'2022-08-11 19:49:04','2022-08-11 19:49:04'),
	(91,'App\\Models\\User',5,'motoringapp','b75d3dd74c4b989ca019ad589987478d14172096bcb09bf689e09a7cd9ab6978','[\"*\"]',NULL,'2022-08-11 19:50:26','2022-08-11 19:50:26'),
	(92,'App\\Models\\User',5,'motoringapp','23a0d26c98fc1362723e9e8b6f65cdcb2eee8ec39086358d75a865ec406172fb','[\"*\"]',NULL,'2022-08-11 19:52:22','2022-08-11 19:52:22'),
	(93,'App\\Models\\User',5,'motoringapp','b81269932db78075a52fe07ba00cd6bd51e7bba56e9c8cab3297f51941c982d4','[\"*\"]',NULL,'2022-08-11 19:58:05','2022-08-11 19:58:05'),
	(94,'App\\Models\\User',5,'motoringapp','74607550c86d089351921adef47e6bd5767c30c54cf3755346eb47f14e6b033a','[\"*\"]',NULL,'2022-08-11 20:06:24','2022-08-11 20:06:24'),
	(95,'App\\Models\\User',5,'motoringapp','7a33b7d66bb30b8d328ee7c9f74f70863089fc7284427af6fac5c900d53abde0','[\"*\"]',NULL,'2022-08-11 20:07:19','2022-08-11 20:07:19'),
	(96,'App\\Models\\User',5,'motoringapp','8a0bd0355599b9df2309f00e842fcab918d3299af2a2abd0fd591724efa37202','[\"*\"]',NULL,'2022-08-11 20:09:34','2022-08-11 20:09:34'),
	(97,'App\\Models\\User',5,'motoringapp','d2ededde429f5ab258c75440a178a93073d0e600ba34da87ba409e9d618312d8','[\"*\"]',NULL,'2022-08-11 20:10:04','2022-08-11 20:10:04'),
	(98,'App\\Models\\User',5,'motoringapp','5eca4f226a0a88c7c6595a03b4738e88a10f2eaa4c5b772567add39a735ab00d','[\"*\"]',NULL,'2022-08-11 20:10:57','2022-08-11 20:10:57'),
	(99,'App\\Models\\User',5,'motoringapp','dc47c80512b412b69b3927c96fd0759dae4be271112ecd53cc6c2d94be060a02','[\"*\"]',NULL,'2022-08-11 20:12:19','2022-08-11 20:12:19'),
	(100,'App\\Models\\User',5,'motoringapp','4bd95e746ed8b57d0d39e50c56d3e95f93e0b5c9074ec6550eab1a4be9753ad8','[\"*\"]',NULL,'2022-08-11 20:13:52','2022-08-11 20:13:52'),
	(101,'App\\Models\\User',5,'motoringapp','5f90daf2dd3affb8f0039ad138a480dc045827d2cfba0028748751a05cb84028','[\"*\"]',NULL,'2022-08-11 20:15:31','2022-08-11 20:15:31'),
	(102,'App\\Models\\User',5,'motoringapp','3ecb144cfdd7d384221e91d9d1c1dfe14d7e45bea7b80d5ff2f9ecff6c9e58e3','[\"*\"]',NULL,'2022-08-11 20:16:16','2022-08-11 20:16:16'),
	(103,'App\\Models\\User',5,'motoringapp','95bd451cc8a3221c7ee36c683261332612d4187e0529510c4683cfd8916e906e','[\"*\"]',NULL,'2022-08-11 20:17:49','2022-08-11 20:17:49'),
	(104,'App\\Models\\User',5,'motoringapp','63b4a42ee9c4b7c9ec43d94112077522f13ed2d3ee3c6a90df6bae195607fd19','[\"*\"]',NULL,'2022-08-11 20:19:53','2022-08-11 20:19:53'),
	(105,'App\\Models\\User',5,'motoringapp','b6b5d651fe78fdff0d59f8063a6dbe913ba464ff63813cb6b143eb364b8c1d84','[\"*\"]',NULL,'2022-08-11 20:20:47','2022-08-11 20:20:47'),
	(106,'App\\Models\\User',5,'motoringapp','e973ba1115b59538f34b28042d17157e6a02ffa677847b51e58f71d3c4aafe0b','[\"*\"]','2022-08-13 13:46:19','2022-08-11 20:21:40','2022-08-13 13:46:19'),
	(107,'App\\Models\\User',5,'motoringapp','cc50877066437d72597ffe99a855734da51fa3796f4cf0401ef03d35862b32ae','[\"*\"]','2022-09-18 22:04:30','2022-09-18 21:58:45','2022-09-18 22:04:30'),
	(108,'App\\Models\\User',5,'motoringapp','375a95a50d604a6fa36f32b939d54d1cc6d5bb18c02ce7a739886cb2e423d345','[\"*\"]',NULL,'2022-09-18 22:11:41','2022-09-18 22:11:41'),
	(109,'App\\Models\\User',5,'motoringapp','17e5c6bec7370d2277ca54d8b7821326d82757aef4df1a6895e8da9cf245ac90','[\"*\"]',NULL,'2022-09-30 03:06:27','2022-09-30 03:06:27'),
	(110,'App\\Models\\User',5,'motoringapp','21ab85c123f7af76d5ec1858aa220842e158806933eb24c09a9d9baff5498fdd','[\"*\"]',NULL,'2022-10-01 09:15:57','2022-10-01 09:15:57'),
	(111,'App\\Models\\User',5,'motoringapp','90733d74860cb2e27ee11ff05007fbdda9af8f9c3eee291523d3a1066649a913','[\"*\"]',NULL,'2022-10-01 09:24:51','2022-10-01 09:24:51');

/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `maker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caryear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuelType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gearType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellingCondition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `maker`, `model`, `caryear`, `mileage`, `fuelType`, `bodyType`, `gearType`, `sellingCondition`, `price`, `name`, `email`, `phone_number`, `address`, `area`, `state`, `images`, `date`, `type`, `user_id`, `status`, `created_at`, `updated_at`)
VALUES
	(2,'Honda','honda pagero','2014','250000','hybrid','Pickup','automatic','foreign','200000999','Benjamin Olanrewaju','anglbendgr8@gmail.com','+2348130337697','34, ifesowapo solagbade lagos','joke ayo','Lagos','[\"products/WvaXn6yUqNk3zAiS7YLbM3ULmuxXFEQ4XguriFk3.jpg\", \"products/5cgtNPpednO0r591IROQOY3f95dAaHSCRIhVMDc5.jpg\", \"products/UQ1h9FSkCwhphv7xcuUSjpsj56pdDKxQ4XLGf2rX.png\", \"products/HvLM37ypSHcIGwONiwq7D0L12bqAy4UJbEQRHPm4.jpg\"]','2022-08-04 00:00:00','Dropoff',5,'active','2022-08-04 13:20:19','2022-08-07 20:14:10'),
	(3,'Honda','honda pagero','2014','250000','hybrid','Pickup','automatic','foreign','200000999','Benjamin Olanrewaju','anglbendgr8@gmail.com','+2348130337697','34, ifesowapo solagbade lagos','joke ayo','Lagos','[\"products/7PKUyubuUro1X3dQuZ6CYOksLCFSvEqYxTfEBMti.jpg\", \"products/1F3Kuj0CtAMopAJ0izVhmzuZD2v8ff673EVNBph2.jpg\"]','2022-08-04 00:00:00','Dropoff',5,'pending','2022-08-04 13:40:55','2022-08-04 13:40:55'),
	(4,'Honda','honda pagero','2014','250000','hybrid','Pickup','automatic','foreign','200000999','Benjamin Olanrewaju','anglbendgr8@gmail.com','+2348130337697','34, ifesowapo solagbade lagos','joke ayo','Lagos','[\"products/U0CJFN0A94iYC8gKKFZJo0mC9gaDO0kX8kpqmlMX.jpg\", \"products/LDgABHzgEhaJOG5TU5WDhXwvtbfrMVlsysdicTht.jpg\"]','2022-08-04 00:00:00','Dropoff',5,'pending','2022-08-04 13:42:01','2022-08-04 13:42:01'),
	(5,'Honda','honda pagero','2014','250000','diesel','Saloon','automatic','local','2000000','Benjamin Olanrewaju','anglbendgr8@gmail.com','+2348133297563','34, ifesowapo solagbade lagos','joke ayo','Lagos','[\"products/5x2ahNjE58mmM8AkPQVE7LZwt0tLlWDFU2cRSMv8.jpg\", \"products/ZeJNvbntPeIwc3EaI9PUkp1ThJoVjCh9sF2hddrB.jpg\"]','2022-08-04 00:00:00','Dropoff',5,'pending','2022-08-04 13:46:18','2022-08-04 13:46:18'),
	(6,'Toyota','toyota camry','2006','2000000','diesel','Pickup','automatic','foreign','2000000','Benjamin Olanrewaju','anglbendgr8@gmail.com','+2348130337697','34, ifesowapo solagbade lagos','joke ayo','Lagos','[\"products/bLbRZuyUlTUEFOea3qNCOBYBLCGtO8YHgd6oBFNr.jpg\", \"products/zA45T3Ijw6Og2SX5Ny29T4xPbpjfnV07g0ncEURf.jpg\"]','2022-08-31 00:00:00','Dropoff',5,'pending','2022-09-18 22:04:31','2022-09-18 22:04:31');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_locations`;

CREATE TABLE `service_locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `service_locations` WRITE;
/*!40000 ALTER TABLE `service_locations` DISABLE KEYS */;

INSERT INTO `service_locations` (`id`, `state`, `area`, `address`, `created_at`, `updated_at`)
VALUES
	(1,'Lagos','joke ayo','34, ifesowapo solagbade lagos','2022-07-15 22:24:07','2022-07-15 22:24:07'),
	(2,'Lagos','apanisile','21, gowon street layi miogba','2022-07-15 22:24:44','2022-07-15 22:24:44');

/*!40000 ALTER TABLE `service_locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_requests
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_requests`;

CREATE TABLE `service_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_requests_service_id_foreign` (`service_id`),
  CONSTRAINT `service_requests_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `service_requests` WRITE;
/*!40000 ALTER TABLE `service_requests` DISABLE KEYS */;

INSERT INTO `service_requests` (`id`, `service_id`, `name`, `email`, `phone_number`, `address`, `area`, `state`, `date`, `type`, `user_id`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'Ogunmakinju olanrewaju','anglbendgr8@gmail.com','+2347030166775','34, ifesowapo solagbade lagos','joke ayo','Lagos',NULL,'Dropoff',NULL,'cancelled','2022-07-17 19:42:02','2022-08-07 23:07:35'),
	(2,1,'Olamide badmus','tialalasandbox@gmail.com','+2349136951723','34, ifesowapo solagbade lagos','joke ayo','Lagos',NULL,'Dropoff',NULL,'pending','2022-07-18 08:00:27','2022-07-18 08:00:27'),
	(3,1,'Olsntrfgu wadg','ogunmakinjuolanrewajuofficial@gmail.com','+2347014566865','34, ifesowapo solagbade lagos','joke ayo','Lagos',NULL,'Dropoff',NULL,'pending','2022-07-18 09:41:18','2022-07-18 09:41:18'),
	(4,1,'Olamide Benjamin','anglbendgr8@gmail.com','+2347030166775','34, ifesowapo solagbade lagos','joke ayo','Lagos',NULL,'Dropoff',5,'pending','2022-07-24 12:31:29','2022-07-24 12:31:29');

/*!40000 ALTER TABLE `service_requests` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `process` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `assurance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `name`, `description`, `picture`, `process`, `assurance`, `others`, `created_at`, `updated_at`)
VALUES
	(1,'Selling Cars','this is the app description','services/P1iUbVIO59aqAbR4rkPSrxWnEstUWZDaZyRFCeF5.jpg','process1,process2,process3','this is the assurance',NULL,'2022-07-08 19:03:43','2022-09-17 08:48:44'),
	(2,'Spare Part Sales','second decription for the services created','services/4wlm23H1FulfDNfrvZXC3wU9ztyg1ZuBysTD9Pis.jpg','anotherPro1,anotherPro2,anotherPro3','assurance here now again','another addition updated content here','2022-07-08 19:05:17','2022-07-09 19:20:11'),
	(4,'Car Maintainance','this is for car engine service','services/OJDzR1CkqWnzQu4uxXziSNHopICOyi3cecHupboz.jpg','','','','2022-07-08 19:13:06','2022-07-09 19:21:35'),
	(5,'Body works','this is to check if the toast is showing','services/cPyYtSHxV92HYIvcW9VuiSOeEAk7xz1WysGOeyZk.jpg','Process her,process there,process when, another process','assurance is here now so grab it very well','','2022-07-08 19:16:29','2022-07-09 19:22:17'),
	(7,'Rescue Services','this is the service seven description','services/T76ZvqZ60yLQjuiG411JFzfpfyn84BRmOhd5MKDf.jpg','no process, no process seh','this is a good assurance for the application','another thing that you need to know about up','2022-07-08 19:20:22','2022-07-09 19:23:22');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_pics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NG',
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `profile_pics`, `date_of_birth`, `country`, `mobile_number`, `code`)
VALUES
	(1,'MotoringApp Admin','admin@motoringapp.com','2022-07-05 21:48:42','$2y$10$Y5JlS94Cx9liSpk.Q3BdyeYRi3l7nld0tIBAWhBDRxV7uE.mZdMY2',1,'EpW7v76fmm','2022-07-05 21:48:42','2022-07-05 21:48:42',NULL,NULL,'NG',NULL,''),
	(5,'Benjamin Olanrewaju','anglbendgr8@gmail.com',NULL,'$2y$10$d8vbLCO/SP78m5Y6e0K1SOGC91eJgkBX3101bf.blmbtpupkn0.RC',0,NULL,'2022-07-22 21:33:25','2022-08-04 12:08:54','users/9jAOohbQHy1XGBVuilhcSiLg2xr1weZzJTmnfzva.jpg','1978-07-24','NG','8130337697','234');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
