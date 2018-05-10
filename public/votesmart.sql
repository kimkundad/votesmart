-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: votesmart
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source_id` int(11) DEFAULT NULL,
  `ip_address` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `color_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'เศรษฐกิจ',1,'#ED2E7D','2018-02-27 03:30:59','2018-02-27 04:56:58'),(2,'สาธารณสุข',1,'#50E3C2','2018-02-27 03:32:01','2018-02-27 03:32:01'),(3,'พลังงานเเละสิ่งเเวดล้อม',1,'#F8E71C','2018-02-27 03:34:14','2018-02-27 03:34:14'),(4,'สังคม',1,'#4A90E2','2018-02-27 03:35:10','2018-02-27 03:35:10'),(5,'ท่องเที่ยวและกีฬา',1,'#5EC8F2','2018-03-01 03:52:54','2018-03-01 03:52:54'),(6,'วิทยาศาสตร์/เทคโนโลยี/ดิจิทัล',1,'#0088CC','2018-03-01 03:53:01','2018-03-01 03:53:01'),(7,'ทหารและตํารวจ',1,'#2BAAB1','2018-03-01 03:53:07','2018-03-01 03:53:07'),(8,'คมนาคม',1,'#E36159','2018-03-01 03:53:15','2018-03-01 03:53:15'),(9,'การศึกษา',1,'#734BA9','2018-03-01 03:53:35','2018-03-01 03:53:35'),(10,'การเมืองการปกครอง',1,'#5bc0de','2018-03-01 03:53:55','2018-03-01 03:53:55'),(11,'การเกษตร',1,'#47a447','2018-03-01 03:54:03','2018-03-01 03:54:03'),(12,'อื่นๆ',1,'#d9b38c','2018-03-01 03:54:13','2018-03-01 03:54:13');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondary_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `industry_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_email_unique` (`email`),
  KEY `clients_user_id_foreign` (`user_id`),
  KEY `clients_industry_id_foreign` (`industry_id`),
  CONSTRAINT `clients_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`),
  CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `source_id` int(10) unsigned NOT NULL,
  `source_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_source_id_source_type_index` (`source_id`,`source_type`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_user`
--

DROP TABLE IF EXISTS `department_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_user_department_id_foreign` (`department_id`),
  KEY `department_user_user_id_foreign` (`user_id`),
  CONSTRAINT `department_user_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  CONSTRAINT `department_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_user`
--

LOCK TABLES `department_user` WRITE;
/*!40000 ALTER TABLE `department_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `department_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_client_id_foreign` (`client_id`),
  CONSTRAINT `documents_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facebook_login`
--

DROP TABLE IF EXISTS `facebook_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facebook_login` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facebook_login`
--

LOCK TABLES `facebook_login` WRITE;
/*!40000 ALTER TABLE `facebook_login` DISABLE KEYS */;
INSERT INTO `facebook_login` VALUES (2,'1556099071134652','facebook','2018-03-05 02:42:40','2018-03-05 02:42:40'),(3,'1587072448078409','facebook','2018-03-12 17:54:31','2018-03-12 17:54:31'),(4,'10160385527635571','facebook','2018-03-12 18:03:02','2018-03-12 18:03:02'),(5,'10156358433350625','facebook','2018-03-12 18:08:32','2018-03-12 18:08:32'),(6,'1627731957263023','facebook','2018-03-13 03:29:55','2018-03-13 03:29:55'),(7,'10156233668815571','facebook','2018-04-11 10:20:50','2018-04-11 10:20:50');
/*!40000 ALTER TABLE `facebook_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industries`
--

DROP TABLE IF EXISTS `industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industries`
--

LOCK TABLES `industries` WRITE;
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrations`
--

DROP TABLE IF EXISTS `integrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_secret` int(11) DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrations`
--

LOCK TABLES `integrations` WRITE;
/*!40000 ALTER TABLE `integrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `integrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_lines`
--

DROP TABLE IF EXISTS `invoice_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice_lines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `invoice_id` int(10) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice_lines_invoice_id_foreign` (`invoice_id`),
  CONSTRAINT `invoice_lines_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_lines`
--

LOCK TABLES `invoice_lines` WRITE;
/*!40000 ALTER TABLE `invoice_lines` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `payment_received_at` datetime DEFAULT NULL,
  `due_at` datetime DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoices_client_id_foreign` (`client_id`),
  CONSTRAINT `invoices_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `user_assigned_id` int(10) unsigned NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `user_created_id` int(10) unsigned NOT NULL,
  `contact_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leads_user_assigned_id_foreign` (`user_assigned_id`),
  KEY `leads_client_id_foreign` (`client_id`),
  KEY `leads_user_created_id_foreign` (`user_created_id`),
  CONSTRAINT `leads_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `leads_user_assigned_id_foreign` FOREIGN KEY (`user_assigned_id`) REFERENCES `users` (`id`),
  CONSTRAINT `leads_user_created_id_foreign` FOREIGN KEY (`user_created_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2014_10_12_000000_create_users_table',1),(5,'2014_10_12_100000_create_password_resets_table',1),(6,'2017_12_20_110908_create_social_facebook_accounts_table',1),(7,'2018_02_27_083817_create_categories_table',2),(8,'2018_02_27_084929_create_quizzes_table',3),(9,'2018_03_01_084513_create_results_table',4),(10,'2018_03_01_092420_create_votesmarts_table',5),(11,'2018_03_01_094525_create_voteresults_table',5),(12,'2015_06_04_124835_create_industries_table',6),(13,'2015_12_28_163028_create_clients_table',6),(14,'2015_12_29_150049_create_invoice_table',6),(15,'2015_12_29_204031_tasks_table',6),(16,'2016_01_10_204413_create_comments_table',6),(17,'2016_01_18_113656_create_leads_table',6),(18,'2016_01_23_144854_settings',6),(19,'2016_01_26_003903_documents',6),(20,'2016_01_31_211926_invoice_lines_table',6),(21,'2016_03_21_171847_create_department_table',6),(22,'2016_03_21_172416_create_department_user_table',6),(23,'2016_04_06_230504_integrations',6),(24,'2016_05_21_205532_create_activity_log_table',6),(25,'2016_08_26_205017_entrust_setup_tables',6),(26,'2016_11_04_200855_create_notifications_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` int(10) unsigned NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quizzes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name_quiz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_status` int(11) NOT NULL DEFAULT '0',
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizzes`
--

LOCK TABLES `quizzes` WRITE;
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT INTO `quizzes` VALUES (1,1,1,'งานก็ไม่มี หนี้ก็ท่วม',0,'งานก็ไม่มี หนี้ก็ท่วม','2018-02-27 05:25:31','2018-03-16 07:12:39'),(2,1,1,'ค่าเเรงขั้นตํ่าก็ต่ำเกิ๊น... ค่าครองชีพในเมืองก็สูงมาก',0,'ค่าเเรงขั้นตํ่าก็ต่ำเกิ๊น... ค่าครองชีพในเมืองก็สูงมาก','2018-02-27 06:22:01','2018-03-16 07:12:40'),(3,1,2,'ขี้เกียจคุยนะเอาจริง ก้มหน้าเล่นไอจีดีกว่า',0,'ขี้เกียจคุยนะเอาจริง ก้มหน้าเล่นไอจีดีกว่า','2018-03-01 03:54:36','2018-03-16 07:12:41'),(4,1,12,'ข้อเสียของสื่อยังมีเยอะ ต้อง ปรับปรุง',1,'ข้อเสียของสื่อยังมีเยอะ ต้อง ปรับปรุง','2018-03-01 03:54:46','2018-03-01 03:54:46'),(5,1,11,'ประเทศไทยต้องสนับสนุนให้ชาวนามีรายได้เพิ่มช่วงหน้าแล้ง',1,'ประเทศไทยต้องสนับสนุนให้ชาวนามีรายได้เพิ่มช่วงหน้าแล้ง','2018-03-01 03:54:56','2018-03-01 03:54:56'),(6,1,11,'คนไทยตายผ่อนส่ง ... อนาคต ต้อง เกษตรอินทรีเท่านั้น !!',1,'คนไทยตายผ่อนส่ง ... อนาคต ต้อง เกษตรอินทรีเท่านั้น !!','2018-03-01 03:55:08','2018-03-01 03:55:08'),(7,1,10,'นักการเมืองต้องโปร่งใสมากกว่านี้',1,'นักการเมืองต้องโปร่งใสมากกว่านี้','2018-03-01 03:55:21','2018-03-01 03:55:21'),(8,1,10,'องค์กรอิสระยังแข็งแรงไม่พอ',1,'องค์กรอิสระยังแข็งแรงไม่พอ','2018-03-01 03:55:29','2018-03-01 03:55:29'),(9,1,10,'การปราบทุจริตคอรัปชั่น .. คือฝันที่ต้องเป็นจริง !!',1,'การปราบทุจริตคอรัปชั่น .. คือฝันที่ต้องเป็นจริง !!','2018-03-01 03:55:40','2018-03-01 03:55:40'),(10,1,5,'ยังสนับสนุนศิลปวัฒนธรรมไทยไม่เท่าที่ควร',1,'ยังสนับสนุนศิลปวัฒนธรรมไทยไม่เท่าที่ควร','2018-03-01 03:56:02','2018-03-01 03:56:02'),(11,1,5,'การขายของริมถนนเป็นเอกลักษณ์ของประเทศไทย ปล่อยให้เค้าอยู่ต่อ',1,'การขายของริมถนนเป็นเอกลักษณ์ของประเทศไทย ปล่อยให้เค้าอยู่ต่อ','2018-03-01 03:56:12','2018-03-01 03:56:12'),(12,1,6,'E-Commerce คือสิ่งสําคัญมากสําหรับเศรษฐกิจวันนี้',1,'E-Commerce คือสิ่งสําคัญมากสําหรับเศรษฐกิจวันนี้','2018-03-01 03:56:22','2018-03-01 03:56:22'),(13,1,6,'พรบ คอมพิวเตอร์โหดเกินไปหน่อยนะ !!',1,'พรบ คอมพิวเตอร์โหดเกินไปหน่อยนะ !!','2018-03-01 03:56:32','2018-03-01 03:56:32'),(14,1,6,'ใน กทม ไปที่ไหนต้องมีWIFIฟรี',1,'ใน กทม ไปที่ไหนต้องมีWIFIฟรี','2018-03-01 03:56:41','2018-03-01 03:56:41'),(15,1,6,'E-Commerce คือสิ่งสําคัญมากสําหรับเศรษฐกิจวันนี้',1,'E-Commerce คือสิ่งสําคัญมากสําหรับเศรษฐกิจวันนี้','2018-03-01 03:56:50','2018-03-01 03:56:50'),(16,1,7,'ตํารวจ โกงกินเช้า ยัน เย็น !! ทนไม่ไหว ๆ แก้ด่วน',1,'ตํารวจ โกงกินเช้า ยัน เย็น !! ทนไม่ไหว ๆ แก้ด่วน','2018-03-01 03:57:04','2018-03-01 03:57:04'),(17,1,7,'ยกเลิกเหอะการเกณฑ์ทหาร ใครอยากเป็นก็ให้เค้าสมัครเองสิ ไม่ต้องบังคับ',1,'ยกเลิกเหอะการเกณฑ์ทหาร ใครอยากเป็นก็ให้เค้าสมัครเองสิ ไม่ต้องบังคับ','2018-03-01 03:57:14','2018-03-01 03:57:14'),(18,1,7,'ซื้ออุปกรณ์ทหารแพงๆเช่นเรือดํานํ้าเพื่อ ? เอางบไปใช้เรื่องอื่นดีกว่ามั้ย คนจนจะอดตายแล้ว !!',1,'ซื้ออุปกรณ์ทหารแพงๆเช่นเรือดํานํ้าเพื่อ ? เอางบไปใช้เรื่องอื่นดีกว่ามั้ย คนจนจะอดตายแล้ว !!','2018-03-01 03:57:23','2018-03-01 03:57:23'),(19,1,8,'รถยนต์ไฟฟ้าคืออนาคต ต้องสนับสนุนอย่างจริงจัง',1,'รถยนต์ไฟฟ้าคืออนาคต ต้องสนับสนุนอย่างจริงจัง','2018-03-01 03:57:36','2018-03-01 03:57:36'),(20,1,8,'จะมาจับผิด uber/grab ทําไม ดีกว่าtaxi เยอะไม่มีการปฎิเสธลูกค้า',1,'จะมาจับผิด uber/grab ทําไม ดีกว่าtaxi เยอะไม่มีการปฎิเสธลูกค้า','2018-03-01 03:57:48','2018-03-01 03:57:48'),(21,1,9,'เศรษฐกิจ 4.0 จะเป็นไปได้ถ้าโรงเรียนมีสอนวิชาไอซีทีมากขึ้น',1,'เศรษฐกิจ 4.0 จะเป็นไปได้ถ้าโรงเรียนมีสอนวิชาไอซีทีมากขึ้น','2018-03-01 03:58:07','2018-03-01 03:58:07'),(22,1,5,'aaa',1,'bbb','2018-03-02 06:43:43','2018-03-02 06:43:43'),(23,1,4,'สังคมมันแย่ \\n แต่มีดีที่',1,'สังคมมันแย่ แต่มีดีที่','2018-03-06 07:30:13','2018-03-06 07:30:58');
/*!40000 ALTER TABLE `quizzes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `result_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,1,2,'ต้องมีพี่ตูน ออกมาวิ่งอีกกี่สิบคน โรงบาลของรัฐ ถึงจะมีอุปกรณ์การแพทย์อย่างเพียงพอ!','2018-03-01 02:08:27','2018-03-02 06:28:59'),(2,1,2,'รอคิวกันตั้งแต่ตี 4 กว่าเจ้าหน้าที่จะมาเรียกพบหมอ...','2018-03-01 02:14:49','2018-03-01 02:14:49'),(3,1,3,'จะร้อนกันไปถึงไหน ... พอหนาวก็หนาวจะตาย อะไรคือสาเหตุ ?','2018-03-01 02:15:05','2018-03-01 02:15:05'),(4,1,3,'กทม มีที่ให้ปลูกต้นไม่จริงๆหรือ?.','2018-03-01 02:15:16','2018-03-01 02:15:23'),(5,1,3,'ปริมาณขวดพลาสติคจะควบคุมได้อย่างไร ? หรือ ต้องมี ถังขยะหลายใบหลายสีเพื่อรีไซเคิล ?.','2018-03-01 02:15:37','2018-03-02 06:31:26'),(6,1,3,'จะสร้างโรงไฟฟ้าถ่านหินไปเพื่อ ?','2018-03-01 02:15:52','2018-03-01 02:15:52'),(7,1,3,'จะสร้างโรงไฟฟ้าถ่านหินไปเพื่อ ?','2018-03-01 02:16:03','2018-03-01 02:16:03'),(8,1,1,'งานก็ไม่มี หนี้ก็ท่วม','2018-03-01 02:16:14','2018-03-01 02:16:14'),(9,1,1,'ค่าเเรงขั้นตํ่าก็ต่ำเกิ๊น... ค่าครองชีพในเมืองก็สูงมาก','2018-03-01 02:16:23','2018-03-01 02:16:23'),(10,1,1,'ค่าเเรงขั้นตํ่าก็ต่ำเกิ๊น... ค่าครองชีพในเมืองก็สูงมาก','2018-03-01 02:16:31','2018-03-01 02:16:31'),(11,1,1,'SME คือหัวใจของเศรษฐกิจชาติ รัฐยังสนับสนุนไม่พอ','2018-03-01 02:16:57','2018-03-01 02:16:57'),(12,1,1,'หรือ เกมส์ปลดหนี้ในทีวีจะเป็นทางออกสุดท้ายของคนจนจนจริง... แจกจริง !!','2018-03-01 02:17:11','2018-03-01 02:17:11'),(13,1,10,'เข้าสู่ยุคสตรีขี่ม้าขาว .. เราควรให้โอกาสผู้หญิงได้เข้ามาเป็นผู้นําในหลายองค์กร','2018-03-02 06:01:27','2018-03-02 06:01:27'),(14,1,6,'พรบ คอมพิวเตอร์โหดเกินไปหน่อยนะ !!','2018-03-02 06:12:43','2018-03-02 06:12:43');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_complete_allowed` int(11) NOT NULL,
  `task_assign_allowed` int(11) NOT NULL,
  `lead_complete_allowed` int(11) NOT NULL,
  `lead_assign_allowed` int(11) NOT NULL,
  `time_change_allowed` int(11) NOT NULL,
  `comment_allowed` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `user_assigned_id` int(10) unsigned NOT NULL,
  `user_created_id` int(10) unsigned NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `invoice_id` int(10) unsigned DEFAULT NULL,
  `deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_assigned_id_foreign` (`user_assigned_id`),
  KEY `tasks_user_created_id_foreign` (`user_created_id`),
  KEY `tasks_client_id_foreign` (`client_id`),
  KEY `tasks_invoice_id_foreign` (`invoice_id`),
  CONSTRAINT `tasks_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `tasks_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  CONSTRAINT `tasks_user_assigned_id_foreign` FOREIGN KEY (`user_assigned_id`) REFERENCES `users` (`id`),
  CONSTRAINT `tasks_user_created_id_foreign` FOREIGN KEY (`user_created_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `user_lock` int(11) DEFAULT '0',
  `vote_status` int(11) DEFAULT '0',
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_shared` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_password_unique` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'Thananon Korr Ngoenthaworn',NULL,NULL,'i.am.not.korr@gmail.com',NULL,0,'facebook','graph.facebook.com/10156233668815571/picture?width=300&height=300',NULL,NULL,0,1,'10156233668815571.jpg',NULL,'ryri5IpIrC6I5UQtEtkHIC1takHDMytHUcdsFwgQz9J81OwrXWIvGr3ADsj2','2018-04-11 10:20:50','2018-04-11 17:25:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voteresults`
--

DROP TABLE IF EXISTS `voteresults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voteresults` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `sort_result` int(11) DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=339 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voteresults`
--

LOCK TABLES `voteresults` WRITE;
/*!40000 ALTER TABLE `voteresults` DISABLE KEYS */;
INSERT INTO `voteresults` VALUES (51,5,10,7,NULL,NULL,NULL),(52,5,6,7,NULL,NULL,NULL),(53,5,7,4,NULL,NULL,NULL),(54,5,1,4,NULL,NULL,NULL),(55,5,12,3,NULL,NULL,NULL),(56,5,11,5,NULL,NULL,NULL),(62,6,11,6,NULL,NULL,NULL),(63,6,5,6,NULL,NULL,NULL),(64,6,6,8,NULL,NULL,NULL),(65,6,1,5,NULL,NULL,NULL),(66,6,2,2,NULL,NULL,NULL),(67,6,12,3,NULL,NULL,NULL),(68,6,10,9,NULL,NULL,NULL),(69,6,4,1,NULL,NULL,NULL),(225,1,5,7,NULL,NULL,NULL),(226,1,10,8,NULL,NULL,NULL),(227,1,6,7,NULL,NULL,NULL),(228,1,8,3,NULL,NULL,NULL),(292,4,6,13,NULL,NULL,NULL),(293,4,10,11,NULL,NULL,NULL),(294,4,5,10,NULL,NULL,NULL),(295,4,7,8,NULL,NULL,NULL),(296,4,1,5,NULL,NULL,NULL),(297,4,11,6,NULL,NULL,NULL),(298,4,8,5,NULL,NULL,NULL),(299,4,2,2,NULL,NULL,NULL),(300,4,12,3,NULL,NULL,NULL),(301,4,9,2,NULL,NULL,NULL),(302,4,4,2,NULL,NULL,NULL),(306,3,1,6,NULL,NULL,NULL),(309,2,7,8,NULL,NULL,NULL),(310,2,10,9,NULL,NULL,NULL),(311,2,11,6,NULL,NULL,NULL),(312,2,6,10,NULL,NULL,NULL),(334,7,1,7,NULL,NULL,NULL),(335,7,12,4,NULL,NULL,NULL),(336,7,11,7,NULL,NULL,NULL),(337,7,5,8,NULL,NULL,NULL),(338,7,6,11,NULL,NULL,NULL);
/*!40000 ALTER TABLE `voteresults` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votesmarts`
--

DROP TABLE IF EXISTS `votesmarts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votesmarts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=484 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votesmarts`
--

LOCK TABLES `votesmarts` WRITE;
/*!40000 ALTER TABLE `votesmarts` DISABLE KEYS */;
INSERT INTO `votesmarts` VALUES (85,5,1,1,'2018-03-13 01:10:51',NULL),(86,5,4,12,'2018-03-13 01:10:51',NULL),(87,5,6,11,'2018-03-13 01:10:51',NULL),(88,5,7,10,'2018-03-13 01:10:51',NULL),(89,5,8,10,'2018-03-13 01:10:51',NULL),(90,5,12,6,'2018-03-13 01:10:51',NULL),(91,5,13,6,'2018-03-13 01:10:51',NULL),(92,5,17,7,'2018-03-13 01:10:51',NULL),(93,5,18,7,'2018-03-13 01:10:51',NULL),(100,6,2,1,'2018-03-13 10:30:16',NULL),(101,6,3,2,'2018-03-13 10:30:16',NULL),(102,6,4,12,'2018-03-13 10:30:16',NULL),(103,6,5,11,'2018-03-13 10:30:16',NULL),(104,6,6,11,'2018-03-13 10:30:16',NULL),(105,6,8,10,'2018-03-13 10:30:16',NULL),(106,6,10,5,'2018-03-13 10:30:16',NULL),(107,6,11,5,'2018-03-13 10:30:16',NULL),(108,6,14,6,'2018-03-13 10:30:16',NULL),(109,6,15,6,'2018-03-13 10:30:16',NULL),(110,6,23,4,'2018-03-13 10:30:16',NULL),(318,1,9,10,'2018-03-15 06:18:51',NULL),(319,1,10,5,'2018-03-15 06:18:51',NULL),(320,1,11,5,'2018-03-15 06:18:51',NULL),(321,1,13,6,'2018-03-15 06:18:51',NULL),(322,1,19,8,'2018-03-15 06:18:51',NULL),(414,4,1,1,'2018-03-16 14:22:12',NULL),(415,4,2,1,'2018-03-16 14:22:12',NULL),(416,4,3,2,'2018-03-16 14:22:12',NULL),(417,4,4,12,'2018-03-16 14:22:12',NULL),(418,4,5,11,'2018-03-16 14:22:12',NULL),(419,4,6,11,'2018-03-16 14:22:12',NULL),(420,4,7,10,'2018-03-16 14:22:12',NULL),(421,4,8,10,'2018-03-16 14:22:12',NULL),(422,4,9,10,'2018-03-16 14:22:12',NULL),(423,4,10,5,'2018-03-16 14:22:12',NULL),(424,4,11,5,'2018-03-16 14:22:12',NULL),(425,4,12,6,'2018-03-16 14:22:12',NULL),(426,4,13,6,'2018-03-16 14:22:12',NULL),(427,4,14,6,'2018-03-16 14:22:12',NULL),(428,4,15,6,'2018-03-16 14:22:12',NULL),(429,4,16,7,'2018-03-16 14:22:12',NULL),(430,4,17,7,'2018-03-16 14:22:12',NULL),(431,4,18,7,'2018-03-16 14:22:12',NULL),(432,4,19,8,'2018-03-16 14:22:12',NULL),(433,4,20,8,'2018-03-16 14:22:12',NULL),(434,4,21,9,'2018-03-16 14:22:12',NULL),(435,4,22,5,'2018-03-16 14:22:12',NULL),(436,4,23,4,'2018-03-16 14:22:12',NULL),(441,3,1,1,'2018-03-23 15:17:54',NULL),(442,3,2,1,'2018-03-23 15:17:54',NULL),(447,2,6,11,'2018-03-23 19:04:08',NULL),(448,2,7,10,'2018-03-23 19:04:08',NULL),(449,2,8,10,'2018-03-23 19:04:08',NULL),(450,2,14,6,'2018-03-23 19:04:08',NULL),(451,2,16,7,'2018-03-23 19:04:08',NULL),(452,2,17,7,'2018-03-23 19:04:08',NULL),(453,2,18,7,'2018-03-23 19:04:08',NULL),(479,7,2,1,'2018-04-11 17:25:26',NULL),(480,7,4,12,'2018-04-11 17:25:26',NULL),(481,7,5,11,'2018-04-11 17:25:26',NULL),(482,7,11,5,'2018-04-11 17:25:26',NULL),(483,7,12,6,'2018-04-11 17:25:26',NULL);
/*!40000 ALTER TABLE `votesmarts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-11 11:31:54
