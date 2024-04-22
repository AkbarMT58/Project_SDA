-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: sda_data
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_logs`
--

DROP TABLE IF EXISTS `activity_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_logs`
--

LOCK TABLES `activity_logs` WRITE;
/*!40000 ALTER TABLE `activity_logs` DISABLE KEYS */;
INSERT INTO `activity_logs` VALUES (1,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Fri, Apr 5, 2024 9:13 PM',NULL,NULL),(2,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Fri, Apr 5, 2024 9:13 PM',NULL,NULL),(3,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sat, Apr 6, 2024 8:01 PM',NULL,NULL),(4,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sun, Apr 7, 2024 7:24 PM',NULL,NULL),(5,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 8, 2024 12:30 PM',NULL,NULL),(6,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 8, 2024 7:54 PM',NULL,NULL),(7,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Fri, Apr 12, 2024 10:55 PM',NULL,NULL),(8,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sat, Apr 13, 2024 11:20 AM',NULL,NULL),(9,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sat, Apr 13, 2024 8:15 PM',NULL,NULL),(10,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sun, Apr 14, 2024 11:12 AM',NULL,NULL),(11,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sun, Apr 14, 2024 7:46 PM',NULL,NULL),(12,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 15, 2024 4:03 PM',NULL,NULL),(13,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 15, 2024 9:19 PM',NULL,NULL),(14,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Mon, Apr 15, 2024 11:05 PM',NULL,NULL),(15,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Tue, Apr 16, 2024 7:55 AM',NULL,NULL),(16,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Tue, Apr 16, 2024 3:15 PM',NULL,NULL),(17,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Tue, Apr 16, 2024 4:10 PM',NULL,NULL),(18,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Tue, Apr 16, 2024 4:10 PM',NULL,NULL),(19,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 10:50 AM',NULL,NULL),(20,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 11:36 AM',NULL,NULL),(21,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 3:05 PM',NULL,NULL),(22,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 3:06 PM',NULL,NULL),(23,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 3:19 PM',NULL,NULL),(24,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 3:32 PM',NULL,NULL),(25,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 4:41 PM',NULL,NULL),(26,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 4:41 PM',NULL,NULL),(27,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 5:06 PM',NULL,NULL),(28,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 5:07 PM',NULL,NULL),(29,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 5:11 PM',NULL,NULL),(30,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 5:12 PM',NULL,NULL),(31,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 5:13 PM',NULL,NULL),(32,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 5:14 PM',NULL,NULL),(33,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Wed, Apr 17, 2024 10:59 PM',NULL,NULL),(34,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Wed, Apr 17, 2024 11:18 PM',NULL,NULL),(35,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Thu, Apr 18, 2024 9:20 AM',NULL,NULL),(36,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Thu, Apr 18, 2024 5:03 PM',NULL,NULL),(37,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Fri, Apr 19, 2024 8:59 AM',NULL,NULL),(38,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Fri, Apr 19, 2024 11:33 AM',NULL,NULL),(39,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Fri, Apr 19, 2024 1:22 PM',NULL,NULL),(40,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Fri, Apr 19, 2024 2:17 PM',NULL,NULL),(41,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Fri, Apr 19, 2024 2:17 PM',NULL,NULL),(42,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sat, Apr 20, 2024 3:26 AM',NULL,NULL),(43,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sat, Apr 20, 2024 3:58 PM',NULL,NULL),(44,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sun, Apr 21, 2024 5:50 AM',NULL,NULL),(45,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Sun, Apr 21, 2024 4:16 PM',NULL,NULL),(46,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 22, 2024 4:35 AM',NULL,NULL),(47,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 22, 2024 8:00 AM',NULL,NULL),(48,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Mon, Apr 22, 2024 11:24 AM',NULL,NULL),(49,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 22, 2024 11:27 AM',NULL,NULL),(50,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log out','Mon, Apr 22, 2024 11:33 AM',NULL,NULL),(51,'Muhammad Taufik Akbar','admin_sda@gmail.com','Has log in','Mon, Apr 22, 2024 11:34 AM',NULL,NULL);
/*!40000 ALTER TABLE `activity_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `namamenu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaicons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorymenu` int DEFAULT NULL,
  `sub_categorymenu` int DEFAULT NULL,
  `sub_childcategorymenu` int DEFAULT NULL,
  `index_no` int DEFAULT NULL,
  `link_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (2,'Master Data','la la-book',2,2,2,3,NULL,NULL,NULL,NULL,'2024-04-06 13:06:08','2024-04-22 01:33:58'),(3,'Data Saluran Drainase','la la-water',2,3,NULL,2,NULL,NULL,NULL,NULL,'2024-04-06 13:07:37','2024-04-22 01:33:42'),(4,'Settings','la la-gear',2,4,NULL,4,NULL,NULL,NULL,NULL,'2024-04-06 13:08:00','2024-04-21 22:22:53'),(10,'List Menu','la la-building',3,4,4,1,'/menus/page',NULL,NULL,NULL,'2024-04-19 07:40:19','2024-04-21 22:24:09'),(11,'List Role & Modul Access','la la-key',3,4,4,1,'/roles/permissions/page',NULL,NULL,NULL,'2024-04-19 07:42:20','2024-04-21 22:24:32'),(12,'List User','la la-user',3,4,4,1,'/users/page',NULL,NULL,NULL,'2024-04-19 07:46:17','2024-04-21 22:24:47'),(13,'Sal.Primer',NULL,3,3,3,1,NULL,NULL,NULL,NULL,'2024-04-21 21:45:18','2024-04-21 22:09:46'),(14,'Sal.Sekunder',NULL,3,3,3,2,NULL,NULL,NULL,NULL,'2024-04-21 21:50:46','2024-04-21 22:10:49'),(15,'Sal.Tersier',NULL,3,3,3,3,NULL,NULL,NULL,NULL,'2024-04-21 21:57:42','2024-04-21 22:11:19'),(16,'Sal.Mikro',NULL,3,3,3,4,NULL,NULL,NULL,NULL,'2024-04-21 21:59:02','2024-04-21 22:11:42'),(17,'Data Waduk/Situ/Embung','la la-water',2,3,NULL,3,NULL,NULL,NULL,NULL,'2024-04-21 22:26:56','2024-04-21 22:44:10'),(18,'Data Daerah Rawan Banjir','la la-water',2,3,NULL,4,NULL,NULL,NULL,NULL,'2024-04-21 22:47:35','2024-04-21 22:49:33'),(19,'Data Vendor','la la-building',2,3,NULL,5,NULL,NULL,NULL,NULL,'2024-04-21 22:51:34','2024-04-21 22:55:27'),(20,'Data Dump Truck','la la-truck',2,3,NULL,5,NULL,NULL,NULL,NULL,'2024-04-21 22:52:08','2024-04-21 22:55:55'),(21,'Dashboard','la la-pie-chart',2,1,NULL,1,NULL,NULL,NULL,NULL,'2024-04-21 22:56:54','2024-04-21 22:58:03'),(22,'Jadwal Kerja Satgas','las la-calendar',2,3,NULL,8,NULL,NULL,NULL,NULL,'2024-04-22 01:13:26','2024-04-22 01:25:24'),(23,'Pembangunan','las la-building',2,3,NULL,9,NULL,NULL,NULL,NULL,'2024-04-22 01:14:17','2024-04-22 01:24:37'),(24,'Pemeliharaan','las la-tools',2,3,NULL,9,NULL,NULL,NULL,NULL,'2024-04-22 01:21:05','2024-04-22 01:21:05'),(25,'Dashboard Karyawan',NULL,3,21,21,1,'/dashboard/satgas/page',NULL,NULL,NULL,'2024-04-22 01:56:28','2024-04-22 02:56:42'),(26,'Dashboard SDA',NULL,3,21,21,2,'/home',NULL,NULL,NULL,'2024-04-22 02:03:04','2024-04-22 02:09:13');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_04_25_224042_create_user_activity_logs_table',1),(6,'2021_04_30_224320_create_activity_logs_table',1),(7,'2021_05_03_061844_create_user_types_table',1),(8,'2021_05_03_061918_create_role_type_users_table',1),(9,'2021_06_04_053627_create_sequence_tbls_table',1),(10,'2021_06_04_053741_create_generate_id_tbls_table',1),(11,'2021_07_14_054840_create_employees_table',1),(12,'2021_07_16_143215_create_module_permissions_table',1),(13,'2021_08_01_052433_create_permission_lists_table',1),(14,'2021_08_08_054847_create_roles_permissions_table',1),(15,'2021_08_13_054414_create_profile_information_table',1),(16,'2022_05_07_224549_create_sequence_estimates_table',1),(17,'2022_09_04_182928_create_personal_information_table',1),(18,'2022_12_18_175400_create_categories_table',1),(19,'2024_04_02_000000_create_menus_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module_permissions`
--

DROP TABLE IF EXISTS `module_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `module_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int DEFAULT NULL,
  `module_permission` int DEFAULT NULL,
  `view` tinyint DEFAULT NULL,
  `create` tinyint DEFAULT NULL,
  `edit` tinyint DEFAULT NULL,
  `delete` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module_permissions`
--

LOCK TABLES `module_permissions` WRITE;
/*!40000 ALTER TABLE `module_permissions` DISABLE KEYS */;
INSERT INTO `module_permissions` VALUES (13,2,1,1,1,1,1,NULL,NULL),(14,2,2,1,1,1,0,NULL,NULL),(15,2,3,1,1,1,0,NULL,NULL),(16,2,4,1,1,1,1,NULL,NULL),(20,1,1,1,0,0,1,NULL,NULL),(21,5,1,1,1,1,1,NULL,NULL),(22,3,2,1,0,0,0,NULL,NULL),(31,4,1,1,0,0,1,NULL,NULL),(85,4,2,1,0,0,0,NULL,NULL),(86,4,3,1,0,0,0,NULL,NULL),(106,1,2,1,0,0,0,NULL,NULL),(107,5,2,1,1,1,1,NULL,NULL),(108,5,3,1,0,1,1,NULL,NULL),(109,5,9,1,1,1,1,NULL,NULL),(110,2,5,1,0,0,0,NULL,NULL),(111,2,6,1,0,0,0,NULL,NULL),(112,2,7,1,0,0,0,NULL,NULL),(113,2,8,1,0,0,0,NULL,NULL),(114,2,9,1,0,0,0,NULL,NULL),(115,1,4,1,0,0,0,NULL,NULL),(116,1,9,1,0,0,0,NULL,NULL),(117,2,10,1,0,0,0,NULL,NULL),(118,5,11,NULL,0,0,0,NULL,NULL),(119,5,12,NULL,0,0,0,NULL,NULL),(120,2,11,1,0,0,0,NULL,NULL),(121,2,12,1,0,0,0,NULL,NULL),(122,5,5,NULL,0,0,0,NULL,NULL),(123,5,4,NULL,0,0,0,NULL,NULL),(124,5,7,NULL,0,0,0,NULL,NULL),(125,5,8,NULL,0,0,0,NULL,NULL),(126,4,4,NULL,0,0,0,NULL,NULL),(127,3,1,1,0,0,0,NULL,NULL),(128,3,3,1,0,0,0,NULL,NULL),(129,2,13,1,0,0,0,NULL,NULL),(130,2,14,1,0,0,0,NULL,NULL),(131,2,15,1,0,0,0,NULL,NULL),(132,2,16,1,0,0,0,NULL,NULL),(133,2,17,1,0,0,0,NULL,NULL),(134,2,18,1,0,0,0,NULL,NULL),(135,2,19,1,0,0,0,NULL,NULL),(136,2,20,1,0,0,0,NULL,NULL),(137,2,21,1,0,0,0,NULL,NULL),(138,2,22,1,0,0,0,NULL,NULL),(139,2,23,1,0,0,0,NULL,NULL),(140,2,24,1,0,0,0,NULL,NULL),(141,2,25,1,0,0,0,NULL,NULL),(142,2,26,1,0,0,0,NULL,NULL);
/*!40000 ALTER TABLE `module_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_lists`
--

DROP TABLE IF EXISTS `permission_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `write` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `import` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `export` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_lists`
--

LOCK TABLES `permission_lists` WRITE;
/*!40000 ALTER TABLE `permission_lists` DISABLE KEYS */;
INSERT INTO `permission_lists` VALUES (1,'Holidays','Y','Y','Y','Y','Y','N'),(2,'Leaves','Y','Y','Y','N','N','N'),(3,'Clients','Y','Y','Y','N','N','N'),(4,'Projects','Y','N','Y','N','N','N'),(5,'Tasks','Y','Y','Y','Y','N','N'),(6,'Chats','Y','Y','Y','Y','N','N'),(7,'Assets','Y','Y','Y','Y','N','N'),(8,'Timing Sheets','Y','Y','Y','Y','N','N');
/*!40000 ALTER TABLE `permission_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_information`
--

DROP TABLE IF EXISTS `personal_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_information` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_of_spouse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `children` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_information`
--

LOCK TABLES `personal_information` WRITE;
/*!40000 ALTER TABLE `personal_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_information`
--

DROP TABLE IF EXISTS `profile_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile_information` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_information`
--

LOCK TABLES `profile_information` WRITE;
/*!40000 ALTER TABLE `profile_information` DISABLE KEYS */;
INSERT INTO `profile_information` VALUES (1,NULL,'KH_00001',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-04-17 04:37:36','2024-04-17 04:37:36');
/*!40000 ALTER TABLE `profile_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_type_users`
--

DROP TABLE IF EXISTS `role_type_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_type_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_type_users`
--

LOCK TABLES `role_type_users` WRITE;
/*!40000 ALTER TABLE `role_type_users` DISABLE KEYS */;
INSERT INTO `role_type_users` VALUES (1,'Admin',NULL,NULL),(2,'Super Admin',NULL,NULL),(3,'Normal User',NULL,NULL),(4,'Client',NULL,NULL),(5,'Employee',NULL,NULL);
/*!40000 ALTER TABLE `role_type_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_permissions`
--

DROP TABLE IF EXISTS `roles_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `permissions_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_permissions`
--

LOCK TABLES `roles_permissions` WRITE;
/*!40000 ALTER TABLE `roles_permissions` DISABLE KEYS */;
INSERT INTO `roles_permissions` VALUES (1,'Administrator',NULL,NULL),(2,'CEO',NULL,NULL),(3,'Manager',NULL,NULL),(4,'Team Leader',NULL,NULL),(5,'Accountant',NULL,NULL),(6,'Web Developer',NULL,NULL),(7,'Web Designer',NULL,NULL),(8,'HR',NULL,NULL),(9,'UI/UX Developer',NULL,NULL),(10,'SEO Analyst',NULL,NULL);
/*!40000 ALTER TABLE `roles_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sequence_estimates`
--

DROP TABLE IF EXISTS `sequence_estimates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sequence_estimates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sequence_estimates`
--

LOCK TABLES `sequence_estimates` WRITE;
/*!40000 ALTER TABLE `sequence_estimates` DISABLE KEYS */;
/*!40000 ALTER TABLE `sequence_estimates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sequence_tbls`
--

DROP TABLE IF EXISTS `sequence_tbls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sequence_tbls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sequence_tbls`
--

LOCK TABLES `sequence_tbls` WRITE;
/*!40000 ALTER TABLE `sequence_tbls` DISABLE KEYS */;
INSERT INTO `sequence_tbls` VALUES (1);
/*!40000 ALTER TABLE `sequence_tbls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_activity_logs`
--

DROP TABLE IF EXISTS `user_activity_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_activity_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modify_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_activity_logs`
--

LOCK TABLES `user_activity_logs` WRITE;
/*!40000 ALTER TABLE `user_activity_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_activity_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
INSERT INTO `user_types` VALUES (1,'Active',NULL,NULL),(2,'Inactive',NULL,NULL),(3,'Disable',NULL,NULL);
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_join_date_unique` (`join_date`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Muhammad Taufik Akbar','AkbarMT','KH_00001','admin_sda@gmail.com','Fri, Apr 5, 2024 9:12 PM','083832497471','Active','2','photo_defaults.jpg',NULL,NULL,NULL,'$2y$10$0zO2cb/7.PM8rYCS7sQbV.TBbUL5CNTnU33/vd5YpDGTjoa7a/LYC',NULL,'2024-04-05 14:13:00','2024-04-05 14:13:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `id_store` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
                INSERT INTO sequence_tbls VALUES (NULL);
                SET NEW.user_id = CONCAT("KH_", LPAD(LAST_INSERT_ID(), 5, "0"));
            END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-22 11:40:08
