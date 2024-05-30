-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: accounts_payable
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ap_files`
--

DROP TABLE IF EXISTS `ap_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ap_files` (
  `BUR` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IAR_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SRIDE_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RIS_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DR_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SI_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CRPO_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BUR_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cheque_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DV_File` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`BUR`),
  CONSTRAINT `files_bur_foreign` FOREIGN KEY (`BUR`) REFERENCES `payables` (`BUR`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ap_files`
--

LOCK TABLES `ap_files` WRITE;
/*!40000 ALTER TABLE `ap_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `ap_files` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

--
-- Table structure for table `disbursement`
--

DROP TABLE IF EXISTS `disbursement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disbursement` (
  `No` int NOT NULL,
  `Date` date NOT NULL,
  `ModePayment` enum('Check','Cash','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Payee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BUR` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RCOffice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RCCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Certified` enum('Supporting Documents Complete','Supporting Documents Incomplete','Missing Documents','Others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `CertifiedBy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CertifiedPosition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Approved` enum('Approved','Not Approved') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApprovedBy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApprovedPosition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CheckNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckDate` date NOT NULL,
  `BankName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JEVNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JEVDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ORNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`No`),
  KEY `disbursement_bur_foreign` (`BUR`),
  CONSTRAINT `disbursement_bur_foreign` FOREIGN KEY (`BUR`) REFERENCES `payables` (`BUR`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disbursement`
--

LOCK TABLES `disbursement` WRITE;
/*!40000 ALTER TABLE `disbursement` DISABLE KEYS */;
/*!40000 ALTER TABLE `disbursement` ENABLE KEYS */;
UNLOCK TABLES;


-- --------------------------------------------------------

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

-- --------------------------------------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_04_11_171308_create_payable_table',1),(6,'2024_04_30_095723_create_files_table',1),(7,'2024_05_19_021858_modify_disbursement_columns_nullable',2),(8,'2024_05_19_051741_modify_disbursement_columns_timestamps',3),(9,'2024_05_20_142609_update_current_location_enum_in_tracking_table',4),(10,'2024_05_29_110209_update_tables_files_disbursement',5),(11,'2024_05_29_161746_update_bur_length_in_payables',6),(12,'2024_05_29_161831_update_bur_length_in_related_tables',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

DROP TABLE IF EXISTS `particular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `particular` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `BUR` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParticularDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParticularAmount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `particular_bur_foreign` (`BUR`),
  CONSTRAINT `particular_bur_foreign` FOREIGN KEY (`BUR`) REFERENCES `payables` (`BUR`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `particular`
--

LOCK TABLES `particular` WRITE;
/*!40000 ALTER TABLE `particular` DISABLE KEYS */;
/*!40000 ALTER TABLE `particular` ENABLE KEYS */;
UNLOCK TABLES;


-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

--
-- Table structure for table `payables`
--

DROP TABLE IF EXISTS `payables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payables` (
  `BUR` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SupplierName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EndUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` double(8,2) NOT NULL,
  `TermsPayment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`BUR`),
  KEY `payables_suppliername_foreign` (`SupplierName`),
  CONSTRAINT `payables_suppliername_foreign` FOREIGN KEY (`SupplierName`) REFERENCES `suppliers` (`SupplierName`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payables`
--

LOCK TABLES `payables` WRITE;
/*!40000 ALTER TABLE `payables` DISABLE KEYS */;
/*!40000 ALTER TABLE `payables` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

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
  `expires_at` timestamp NULL DEFAULT NULL,
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


-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `suppliers` (
  `SupplierName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`SupplierName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES ('Acme Supplies','123 Main Street, Anytown, CA','555-1212','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Component Central','45 Rue de la Technologie, Paris, France','+33 1 44 55 66 77','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Eastern Imports','555 Asia Avenue, Shanghai, China','+86 21 5555 1234','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Global Gadgets','789 Elm Street, Smallville, USA','800-555-3333','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Innovative Solutions','100 Tech Drive, Silicon Valley, CA','415-555-2468','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Martinez Manufacturing','Calle de la Industria 12, Madrid, Spain','+34 91 555 1234','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Precision Parts GmbH','Industriestraße 10, Berlin, Germany','+49 30 5555 9876','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Speedy Delivery Co.','333 Fleet Street, London, UK','+44 20 7946 0123','2024-05-02 07:26:36','2024-05-02 07:26:36'),('The Parts Place','Unit 2B, 56 Industrial Way, Gotham','555-9090','2024-05-02 07:26:36','2024-05-02 07:26:36'),('Widgets Inc.','PO Box 456, Metropolis, NY','212-555-9876','2024-05-02 07:26:36','2024-05-02 07:26:36');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;


-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

DROP TABLE IF EXISTS `tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tracking` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `BUR` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrentLocation` enum('Accounting','Treasurer','Budgeting','OVPF','Property','COA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrentDate` date NOT NULL,
  `CurrentTime` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `tracking_bur_foreign` (`BUR`),
  CONSTRAINT `tracking_bur_foreign` FOREIGN KEY (`BUR`) REFERENCES `payables` (`BUR`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking`
--

LOCK TABLES `tracking` WRITE;
/*!40000 ALTER TABLE `tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracking` ENABLE KEYS */;
UNLOCK TABLES;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

-- --------------------------------------------------------

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-23 12:09:03
