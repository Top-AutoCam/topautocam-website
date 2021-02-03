-- MySQL dump 10.13  Distrib 8.0.23, for osx10.15 (x86_64)
--
-- Host: localhost    Database: topautocam
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `action_events`
--

DROP TABLE IF EXISTS `action_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `action_events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint unsigned NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` text COLLATE utf8mb4_unicode_ci,
  `changes` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  KEY `action_events_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_events`
--

LOCK TABLES `action_events` WRITE;
/*!40000 ALTER TABLE `action_events` DISABLE KEYS */;
INSERT INTO `action_events` VALUES (1,'926f7860-eb9a-4b7d-9be2-5585b578dec5',1,'Update','App\\Models\\Car',1,'App\\Models\\Car',1,'App\\Models\\Car',1,'','finished','','2021-01-07 19:56:26','2021-01-07 19:56:26','{\"image\":\"a1.jpg\"}','{\"image\":\"mSHxeFRrdtYvVS9m1rbHf2g3GoHlv2anHUJV3tD5.png\"}'),(2,'92722ab2-b84a-44da-a4aa-b6c59ccb42bb',1,'Update','App\\Models\\Announcement',3,'App\\Models\\Announcement',3,'App\\Models\\Announcement',3,'','finished','','2021-01-09 04:06:42','2021-01-09 04:06:42','{\"image\":\"d3.jpg\"}','{\"image\":\"afTlb1qnxVtymCproRSRiDFcfo0KhxXdgYaD1rxU.jpeg\"}'),(3,'92a3df45-4086-40e0-ad0d-78e2644bff6d',1,'Delete','App\\Models\\Car',1,'App\\Models\\Car',1,'App\\Models\\Car',1,'','finished','','2021-02-02 21:07:11','2021-02-02 21:07:11',NULL,NULL),(4,'92a417d3-220f-483a-88dc-e3a7cc984dbe',1,'Create','App\\Models\\Car',106,'App\\Models\\Car',106,'App\\Models\\Car',106,'','finished','','2021-02-02 23:45:20','2021-02-02 23:45:20',NULL,'{\"title\":\"title1\",\"detail\":\"detail1\",\"image\":\"g0UHJx10nvcPtCirKXR757A526kHvlDCzibtGbua.png\",\"vin\":\"wersadff\",\"price\":\"23123123\",\"make\":\"BMW\",\"model\":\"ALPHARD\",\"color\":\"BLACK\",\"drive\":\"FWD\",\"fuel\":\"DIESEL\",\"grade\":\"B\",\"order_id\":1,\"updated_at\":\"2021-02-03T06:45:20.000000Z\",\"created_at\":\"2021-02-03T06:45:20.000000Z\",\"id\":106}'),(5,'92a418c1-be27-44f9-a843-e080724c8663',1,'Create','App\\Models\\Motorbike',101,'App\\Models\\Motorbike',101,'App\\Models\\Motorbike',101,'','finished','','2021-02-02 23:47:56','2021-02-02 23:47:56',NULL,'{\"image\":\"irRiVm4lCIxVJYWGVfJNX3c4N31EPrvt6gimkLF1.png\",\"title\":\"title1\",\"detail\":\"detail1\",\"price\":\"123123\",\"make\":\"HONDA\",\"model\":\"NIGHT_HAWK\",\"color\":\"BLACK\",\"order_id\":1,\"updated_at\":\"2021-02-03T06:47:56.000000Z\",\"created_at\":\"2021-02-03T06:47:56.000000Z\",\"id\":101}'),(6,'92a42f81-b119-41d5-aaf0-d319c011d260',1,'Create','OptimistDigital\\NovaBlog\\Models\\Category',1,'OptimistDigital\\NovaBlog\\Models\\Category',1,'OptimistDigital\\NovaBlog\\Models\\Category',1,'','finished','','2021-02-03 00:51:33','2021-02-03 00:51:33',NULL,'{\"title\":\"Import Car\",\"slug\":\"import-car\",\"updated_at\":\"2021-02-03T07:51:33.000000Z\",\"created_at\":\"2021-02-03T07:51:33.000000Z\",\"id\":1}'),(7,'92a43014-d057-4941-af86-081ba4175d2a',1,'Create','OptimistDigital\\NovaBlog\\Models\\Post',1,'OptimistDigital\\NovaBlog\\Models\\Post',1,'OptimistDigital\\NovaBlog\\Models\\Post',1,'','finished','','2021-02-03 00:53:09','2021-02-03 00:53:09',NULL,'{\"title\":\"hello title1\",\"is_pinned\":false,\"slug\":\"hello-title1\",\"published_at\":\"2021-02-09T05:00:00.000000Z\",\"post_introduction\":\"hello this is intro\",\"category_id\":1,\"post_content\":[{\"layout\":\"text\",\"key\":\"cFvbIYVkMvJz95Ux\",\"attributes\":{\"text_content\":\"asfsdfsdfsfsfsdf\"}}],\"locale\":\"en\",\"published\":false,\"preview_token\":\"N4Otgi94dlQ6vLBol0Vs\",\"updated_at\":\"2021-02-03T07:53:09.000000Z\",\"created_at\":\"2021-02-03T07:53:09.000000Z\",\"id\":1,\"seo_title\":null,\"seo_description\":null}');
/*!40000 ALTER TABLE `action_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `announcement` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `top_title_en` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_title_kh` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_kh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottom_title_en` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottom_title_kh` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `announcement_top_title_en_unique` (`top_title_en`),
  UNIQUE KEY `announcement_top_title_kh_unique` (`top_title_kh`),
  UNIQUE KEY `announcement_title_en_unique` (`title_en`),
  UNIQUE KEY `announcement_title_kh_unique` (`title_kh`),
  UNIQUE KEY `announcement_bottom_title_en_unique` (`bottom_title_en`),
  UNIQUE KEY `announcement_bottom_title_kh_unique` (`bottom_title_kh`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (1,'quality first','គុណភាពជាចំបង','TOP AUTO is one of the best car sellers','TOP AUTO ជាហ្គារាស់លក់ឡានល្អបំផុត','quality forever','គុណភាពជានិរន្ត','d1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(2,'acceptable price','តម្លៃសមរម្យ','TOP AUTO is awesome','TOP AUTO លក់យកចំនេញតិចបំផុត','price for everyone','តម្លៃសម្រាប់គ្រប់គ្នា','d2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(3,'trustability','កសាងទំនុកចិត្ត','customers are being taken care of','បំរើអតិថិជនដោយភាពស្មោះត្រង់','trustability','មានទំនុកចិត្ត','afTlb1qnxVtymCproRSRiDFcfo0KhxXdgYaD1rxU.jpeg',NULL,'2021-01-07 19:55:38','2021-01-09 04:06:42');
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned DEFAULT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) unsigned DEFAULT NULL,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('IN STOCK','SOLD') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN STOCK',
  `selected` enum('Featured','Normal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `view_count` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `car_code_unique` (`code`),
  UNIQUE KEY `car_vin_unique` (`vin`),
  KEY `car_order_id_foreign` (`order_id`),
  CONSTRAINT `car_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (2,8,'best car ever','this is detail ......3WInbG2s7K','a3.jpg',443079.00,'lUUh2H93rH','ad1b41ca-d12b-4088-b1f5-cfbbe5a7b717','Audi','Q7','White','FWD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,18,'best car ever','this is detail ......Rzgqx1jAOl','a3.jpg',563982.00,'Bw5ZToDBA8','4ae66c7b-6b92-4420-8c66-63561c9a4578','BMW','Alphard','Silver','AWD','Grade B','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(4,15,'best car ever','this is detail ......K9yIzJ6kIP','a2.jpg',997774.00,'YwNCdcG83t','9be3f81c-0ded-4454-a3e5-cf2d9b73b36a','Toyota','Alphard','Silver','FWD','Grade A','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(5,17,'best car ever','this is detail ......kiA98hCceW','a4.jpg',112926.00,'KFQP0Eixck','45143534-833b-4410-8b65-3b152b9651ee','Audi','E90','Black','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(6,1,'best car ever','this is detail ......F22msUupIU','a3.jpg',844333.00,'hHhQavp7Ul','0cde64c0-0caa-4700-9f56-ac59c7b78399','Toyota','E90','White','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(7,10,'best car ever','this is detail ......Hnuperik2u','a5.jpg',298104.00,'c0wyr9kgv0','aef0a35f-708a-4480-a0b9-96f6831ca339','Toyota','E90','Silver','4WD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(8,17,'best car ever','this is detail ......9pthRvi0EN','a4.jpg',109314.00,'5R1kgS1B2h','2932e869-4727-4553-a767-8e2d7c74ba14','Audi','Alphard','Black','FWD','Grade C','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(9,4,'best car ever','this is detail ......u0w6hQsnui','a3.jpg',571676.00,'nBa5sHd7Cd','11b9eae6-e3b7-45ff-82d0-16e500218070','Audi','E90','Silver','FWD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(10,13,'best car ever','this is detail ......cFuO7h61zG','a3.jpg',337055.00,'NbTpU8UgGJ','be00790f-40a7-4ed7-ba0c-266fe71cff3a','Audi','E90','Silver','FWD','Grade B','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(11,1,'title2','detail2','a1.jpg',770230.00,'iwET9jQfuY','4320a940-5a98-43cd-98bd-621d253bd604','Audi','Q7','Black','4WD','Grade C','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(12,1,'title2','detail2','a3.jpg',908372.00,'LL0Yvabrcg','699671a3-8c0e-4e81-9a25-7bbaebfd358b','BMW','Alphard','Black','4WD','Grade A','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(13,15,'title2','detail2','a1.jpg',924640.00,'PYrgBJtpGS','ff5d0007-beb9-448d-a2fe-1649f9d8b40f','Toyota','Alphard','White','4WD','Grade B','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(14,6,'title2','detail2','a1.jpg',730131.00,'87EBwwj4FA','b03a16e3-4c27-4b14-b3ab-2cfa572cfc31','Toyota','Q7','White','FWD','Grade A','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(15,17,'title2','detail2','a5.jpg',729170.00,'jygNde4XDV','6e397ee6-4818-4145-9eae-8a556e62f72a','Toyota','Alphard','Black','FWD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(16,10,'title2','detail2','a4.jpg',735659.00,'FSslEyLS1U','a63f302a-29ab-4be2-938b-c80f936a648a','Audi','Alphard','White','4WD','Grade C','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(17,4,'title2','detail2','a5.jpg',357143.00,'i5qw2u95Zg','b43f5ad0-93a9-4b52-a0c9-5dc48b10aad4','Toyota','Alphard','Silver','AWD','Grade A','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(18,8,'title2','detail2','a2.jpg',305623.00,'Td7jRTjQhe','8240c097-3b43-46c4-a644-4646f2a8f2d7','Audi','E90','White','AWD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(19,1,'title2','detail2','a4.jpg',236855.00,'OobBLOWSgK','81ecf83d-ec74-490d-98ac-63d7106eb7d5','Audi','Alphard','Black','AWD','Grade A','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(20,1,'best car ever','this is detail ......w8Au3K6ySR','a1.jpg',758945.00,'kVJ4RJ71oC','4b819a3f-dd17-4efa-bdb5-0f7868788b1a','BMW','E90','White','FWD','Grade C','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(21,13,'best car ever','this is detail ......yrvDNs9pZ7','a4.jpg',689246.00,'Rrk5lapYBR','4be3b96c-154e-41f1-ad98-f531702f5bdc','Audi','Alphard','Black','FWD','Grade A','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(22,10,'best car ever','this is detail ......yeYrQfu6UE','a1.jpg',473781.00,'mnSQL1UiWK','7a2847f1-0267-4c18-9633-bd0e0899e884','Toyota','Q7','Black','FWD','Grade C','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(23,15,'best car ever','this is detail ......3RiridIWpW','a4.jpg',589591.00,'2yBoIaF2Pd','3cac3840-d733-4399-8884-57b352f65b7f','Audi','Alphard','White','4WD','Grade A','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(24,9,'best car ever','this is detail ......VwNRcjx1vi','a4.jpg',503698.00,'shlly8gfaa','b705c985-040e-456c-88fc-99358f439c17','Toyota','E90','Silver','AWD','Grade C','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(25,6,'best car ever','this is detail ......axQ6MtJpzk','a4.jpg',295642.00,'BHDrAVWzWV','797b3324-bccf-417d-b3e9-af56ed4a9cad','BMW','Alphard','Black','AWD','Grade B','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(26,1,'best car ever','this is detail ......Q4qdlV2FVP','a3.jpg',80758.00,'0SYuYjE6kD','e2cc459f-7082-4dc1-a70b-e8d0be396a6b','Toyota','E90','Silver','AWD','Grade C','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(27,12,'best car ever','this is detail ......19rADIZSpj','a1.jpg',830892.00,'CIeEThhHZy','2c496b9b-fce3-4e77-ae86-6c558e37a27e','Toyota','Q7','Black','AWD','Grade C','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(28,8,'best car ever','this is detail ......FUJr3GlUiP','a5.jpg',987214.00,'2oYu1bp4fE','29a75e71-cfb9-402f-a604-9a1310d60e88','BMW','E90','Silver','FWD','Grade B','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(29,10,'best car ever','this is detail ......I91b3twl29','a4.jpg',863952.00,'AJNZRQmnZQ','93fd1121-e121-4260-9849-4fb1976db717','Audi','Q7','White','4WD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(30,11,'best car ever','this is detail ......AYEVWx8P41','a5.jpg',390549.00,'DqghV9qy5D','66a4575f-6953-4111-aa62-e6c47c0b2066','Audi','E90','Silver','4WD','Grade B','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(31,17,'best car ever','this is detail ......MdpLpHnb1i','a1.jpg',2620.00,'sCI8IGlfmj','c8835b44-61a0-4af5-af6a-bb6403283bd0','Toyota','Alphard','White','FWD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(32,19,'best car ever','this is detail ......PaBXTwsKwo','a4.jpg',858888.00,'qlwEIm3nUD','9ba30bc6-3884-4985-98eb-6ab73046035d','Toyota','Q7','White','FWD','Grade B','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(33,2,'best car ever','this is detail ......yUy0Fz1oIO','a5.jpg',936996.00,'X2TaFaW9wY','cfb068a0-56b4-4038-a0a0-b8978f649989','Toyota','Alphard','Silver','FWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(34,1,'best car ever','this is detail ......mcHAdM6Py8','a3.jpg',564487.00,'VSLTf0da3D','e0ab4e6d-89ff-4856-9ef5-e8f10ac5a355','Toyota','E90','White','FWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(35,6,'best car ever','this is detail ......8LaM7iMMh2','a1.jpg',911786.00,'ru9sJz8kCI','67350299-7f79-4cdf-9550-445cd8fdf608','BMW','E90','Silver','FWD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(36,14,'best car ever','this is detail ......aJYECbC0MS','a5.jpg',234175.00,'q3bUWfqhhI','09cf66a7-c566-4ad9-a542-bd50c0f207bd','BMW','Alphard','Silver','4WD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(37,13,'best car ever','this is detail ......0VfEUbnMci','a1.jpg',190003.00,'AO3yfDY0WI','b44d40ab-f804-4c0e-8c19-24237cdba265','Audi','Alphard','Silver','AWD','Grade B','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(38,5,'best car ever','this is detail ......esN1YboDzF','a5.jpg',516009.00,'QzOt6jjC6m','fe255bc3-bcbc-4988-9c81-057959858d4d','Toyota','E90','White','FWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(39,10,'best car ever','this is detail ......sGLiirgRl3','a2.jpg',281006.00,'kOuEZzryi8','431bf10c-b709-431f-b260-532d0a801c13','Toyota','Q7','Black','FWD','Grade B','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(40,3,'best car ever','this is detail ......UjC6KVeZm9','a5.jpg',680033.00,'krVRlyg4z0','ffffd266-3456-4b76-9c68-b34d21b8995e','BMW','Alphard','Black','AWD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(41,20,'best car ever','this is detail ......7Jt54RIVem','a3.jpg',522309.00,'IkYeYSDHId','9aabf296-92d8-4516-bf47-5424ce246d4d','BMW','Alphard','Black','FWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(42,10,'best car ever','this is detail ......IEYHup0y4p','a5.jpg',305506.00,'roiURuParh','6d6b1df8-4482-4458-b994-e74a12924d93','Audi','E90','Silver','4WD','Grade C','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(43,12,'best car ever','this is detail ......d0FUtxeGsW','a4.jpg',518107.00,'IKNq4rLfpU','0e669827-d8f0-4a11-a16a-4098b82ba657','Audi','Q7','Black','FWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(44,4,'best car ever','this is detail ......voX5BzsFm5','a3.jpg',471485.00,'zFXrYvvoQP','192d6176-5f53-4588-9bc5-154b8c821043','Toyota','E90','White','FWD','Grade B','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(45,11,'best car ever','this is detail ......GLiaGpG0Er','a3.jpg',982112.00,'lgq2VGBAKQ','2d06a374-34a6-44c6-b36e-20a5650c75e9','Audi','Q7','White','AWD','Grade B','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(46,20,'best car ever','this is detail ......kzBDaO0V3f','a4.jpg',99927.00,'zx9ZgKl5Jl','ae2adfe8-494b-47ba-bf5e-94d677198004','BMW','E90','Silver','AWD','Grade C','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(47,1,'best car ever','this is detail ......1JgfYx5mQ4','a4.jpg',605919.00,'BvsTWkoNiT','756f8591-fb4b-4970-beec-4b042f949b20','BMW','E90','Black','AWD','Grade C','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(48,20,'best car ever','this is detail ......uWAXORUxh8','a5.jpg',243833.00,'azo5xazQC8','3d24fe33-3af7-47cd-99ed-e64a71568a6a','Audi','E90','Black','AWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(49,13,'best car ever','this is detail ......KmkyQSSJLQ','a4.jpg',420955.00,'V42v3sCe1J','8563cff9-03d0-4d8f-8223-dc5ca3da3dc0','Audi','Q7','Silver','AWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(50,16,'best car ever','this is detail ......Fd0MwIvtoP','a4.jpg',291297.00,'l8bajPtDN8','6ed18147-985f-4d1d-9335-816eb97ac134','BMW','Q7','White','AWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(51,16,'best car ever','this is detail ......6D4iornIeQ','a1.jpg',985009.00,'FkU648leLq','74386655-cdf2-4d87-b790-e000a622546b','BMW','Q7','Black','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(52,7,'best car ever','this is detail ......2QmtvpHL86','a3.jpg',618794.00,'NzBTIy5znp','33161ef8-798c-4b59-946f-083eafd9d71b','Audi','E90','Silver','FWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(53,18,'best car ever','this is detail ......9RnENNIuag','a2.jpg',247234.00,'VaCk36eOIK','bc9ee0d8-bb81-4231-9f43-5080cddba8d5','Toyota','Alphard','Silver','AWD','Grade A','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(54,2,'best car ever','this is detail ......oGemFvPOF1','a1.jpg',27680.00,'RqG8DPhOAm','d79e5cc8-1941-4489-ae54-2f8824aedb32','Toyota','Q7','Silver','AWD','Grade B','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(55,13,'best car ever','this is detail ......8W06T9ir8o','a3.jpg',557345.00,'92zrJ660PW','67b8097b-3176-4049-ba45-b2a0b2b2e442','BMW','Q7','White','AWD','Grade A','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(56,13,'best car ever','this is detail ......MpkerFs5br','a2.jpg',827706.00,'xCf5jqlHZE','df51234b-c62a-4d98-876c-eb189b5da84f','Toyota','Q7','White','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(57,6,'best car ever','this is detail ......PnGXIsGUdH','a1.jpg',614136.00,'zkogXZ4w4p','80cf117c-e99e-4706-b373-a9d26cbf51f4','BMW','Alphard','Silver','AWD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(58,19,'best car ever','this is detail ......FHyerTAlIc','a3.jpg',305137.00,'NXnQdzmlTo','1edabc5d-f181-412b-8f81-8726ae2b2871','Audi','Alphard','Black','FWD','Grade B','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(59,19,'best car ever','this is detail ......HjB4c0t6Eq','a5.jpg',32634.00,'7HSawWZY1J','de58d63e-f120-4c08-8b89-f3139b5b77a5','Audi','Q7','Silver','FWD','Grade B','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(60,20,'best car ever','this is detail ......j44ozgV4nc','a4.jpg',643198.00,'aD6ZRT4B74','4fe331d5-7ac8-4779-883d-7af245f04eff','Toyota','Q7','Black','AWD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(61,12,'best car ever','this is detail ......GJT9tb0ubi','a1.jpg',431297.00,'c9zWNDsvju','e7997974-e602-4472-87c5-67b375f21320','Toyota','Q7','Black','AWD','Grade B','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(62,10,'best car ever','this is detail ......65N1oFUVWc','a4.jpg',889222.00,'kOHLIWHtef','ecec2075-1ef9-40bd-9226-a2f6e2950cb7','BMW','E90','Black','4WD','Grade B','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(63,6,'best car ever','this is detail ......2cPu6yiulI','a2.jpg',566568.00,'ytoxtAU4zO','d520cc02-69df-4c75-bf3d-bce2668abc7e','Audi','Alphard','White','FWD','Grade C','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(64,20,'best car ever','this is detail ......BYd4N4W374','a3.jpg',713463.00,'KirvCXhp2L','64f1965d-53e3-41a8-a2d0-7241d1c4ec9c','BMW','Alphard','Silver','4WD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(65,4,'best car ever','this is detail ......VEVLCWZ9nj','a5.jpg',932094.00,'xQM4EkCiuF','b486c357-3dc8-47e8-a293-b2d3cfe9c3a4','Audi','Alphard','Silver','FWD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(66,20,'best car ever','this is detail ......hlQS22hL28','a1.jpg',952617.00,'5cIlA2zafh','2fd4ae41-69da-42c8-9cd7-230fe3352b94','BMW','Alphard','White','FWD','Grade A','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(67,8,'best car ever','this is detail ......M66Bv1g2wy','a1.jpg',947681.00,'qAFCQ8En1W','6f220f84-ddbb-4a04-aa86-86917c64bbbc','Audi','Alphard','Silver','FWD','Grade C','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(68,6,'best car ever','this is detail ......V7rHqwLL2S','a5.jpg',641559.00,'jMUJgmknRH','646a9151-dac0-4cab-8ec8-9a52efdde44e','BMW','E90','White','FWD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(69,15,'best car ever','this is detail ......hrJ5IX8bMu','a4.jpg',712216.00,'Uf1B9zTzJU','424e4145-db3d-4f06-bd3c-8fca38294bce','Audi','Alphard','Black','AWD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(70,7,'best car ever','this is detail ......s2ULfkFC2t','a2.jpg',531778.00,'r8LrQFGVry','b61b564f-5461-43ae-b4bb-e0ac717b3492','BMW','Q7','Black','FWD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(71,13,'best car ever','this is detail ......3P3Nu1Sm6k','a3.jpg',84070.00,'UqsZOPojfs','67b1e017-6113-458f-9dcf-8c0ad263a490','Audi','E90','White','FWD','Grade C','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(72,16,'best car ever','this is detail ......JfdwU6JnO4','a1.jpg',760610.00,'T9S5XAlyJm','bf442bc8-b5a0-407d-acb9-6f7fdf87727f','Toyota','Q7','White','FWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(73,1,'best car ever','this is detail ......jDW5BY7D20','a3.jpg',815426.00,'TNIrDuUBPK','aae24049-87f7-4173-b1a2-caf9fad16d17','Toyota','Q7','Black','FWD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(74,8,'best car ever','this is detail ......3nz7pXxTMN','a2.jpg',698344.00,'PTdsKQuOeD','83430b6a-85b6-42bf-8f92-888271699020','BMW','Q7','Silver','FWD','Grade B','Diesel','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(75,4,'best car ever','this is detail ......7I5GaYcDCE','a3.jpg',115739.00,'2GNN5CJUht','1b51972a-7859-4da9-a64c-7f143dc8aa11','Toyota','Alphard','Silver','4WD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(76,20,'best car ever','this is detail ......6FLj73RMSO','a1.jpg',471139.00,'yykyvu4oKD','4149160d-0e2f-458d-9a35-c836fd294852','Toyota','Alphard','Silver','4WD','Grade A','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(77,5,'best car ever','this is detail ......ZwmDwQRXeK','a2.jpg',401666.00,'zHA2uDIcun','fbdefe85-46a0-49bd-8fab-ec9c301b551e','BMW','Q7','Black','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(78,13,'best car ever','this is detail ......v39MfYtloK','a3.jpg',53909.00,'f7J77H2OQF','fa288f78-9010-4d39-b97e-ed75cc475243','Toyota','E90','Silver','AWD','Grade B','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(79,4,'best car ever','this is detail ......9g644YzrpX','a5.jpg',647077.00,'WEX3gxhfvE','8d0cf05d-8f67-4529-9023-61817755055c','BMW','Alphard','White','4WD','Grade A','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(80,20,'best car ever','this is detail ......XAVo22epxB','a1.jpg',98806.00,'j8pMTdWrBa','ba7dd66e-c0ab-412f-9b96-51aa98951220','Toyota','E90','Silver','4WD','Grade A','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(81,8,'best car ever','this is detail ......EJnafoJVYA','a5.jpg',690857.00,'LQyq66mTza','62a77e7d-1bad-4f87-8047-e4286e7d6f88','BMW','E90','Black','AWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(82,9,'best car ever','this is detail ......zz8pViy76n','a4.jpg',149539.00,'P6CsXUJ7o0','e34bb63e-7d59-4354-a640-5b0952da7012','Audi','Alphard','Black','4WD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(83,4,'best car ever','this is detail ......LAz7XNicK2','a3.jpg',581360.00,'kzJ75cevQl','9ba7ad08-add7-4d5c-b2a4-cbfba0dabd15','Toyota','E90','Black','AWD','Grade C','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(84,7,'best car ever','this is detail ......Ffw7wo9CxF','a1.jpg',897122.00,'zBGC9oNayg','9b0117e7-9d7c-461e-aabb-c01552bead0b','BMW','E90','Black','AWD','Grade C','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(85,16,'best car ever','this is detail ......s0c3SIz5qi','a3.jpg',62732.00,'f05t9yALpj','ae291b91-25c3-4fe9-8bc0-70c32b936c89','Toyota','E90','Black','FWD','Grade C','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(86,4,'best car ever','this is detail ......CdH2jrr7vb','a4.jpg',891599.00,'jIfcug4hVO','d4a93e01-08d4-4388-842d-1aacbb302264','BMW','E90','Silver','AWD','Grade B','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(87,6,'best car ever','this is detail ......XUlBsL471U','a3.jpg',355671.00,'4CCyGW6suz','23636215-968b-43e3-aafc-7596eeb75d44','Audi','Alphard','Silver','4WD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(88,3,'best car ever','this is detail ......TpnWAKbVCS','a2.jpg',597584.00,'OJpqK4zj2j','179aec59-4050-42f4-8fbd-f269cb34a9fb','Toyota','E90','White','AWD','Grade A','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(89,18,'best car ever','this is detail ......BEoBWclM6A','a5.jpg',692842.00,'uGLYzdadrw','ba4dbaef-cd3e-4b85-bb8c-4bb1bd677377','Audi','E90','White','AWD','Grade B','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(90,18,'best car ever','this is detail ......wZfE8TZgsQ','a1.jpg',990233.00,'CwUcyqLGZU','aeaa7443-0191-4986-9122-05162fb52b0f','BMW','Alphard','Silver','AWD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(91,12,'best car ever','this is detail ......6HwjiSjipX','a5.jpg',934616.00,'7okoNp0N9E','1787251f-fb3c-41de-abe7-13657c7f6a44','Audi','Alphard','Silver','4WD','Grade C','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(92,12,'best car ever','this is detail ......CoFh1x4PdK','a3.jpg',930208.00,'JAgqnTGd0S','3be0429c-bb97-4cad-afd2-ab8a329cd4f5','BMW','E90','Silver','4WD','Grade C','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(93,5,'best car ever','this is detail ......iSXURfoGIp','a4.jpg',740182.00,'ZfGPdQIEe8','6fe6b834-48fe-47ef-9952-6b15a20506c6','Toyota','Q7','White','AWD','Grade B','Gasoline','SOLD','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(94,10,'best car ever','this is detail ......W5R93XtWJ1','a2.jpg',383284.00,'lHdFz1TQXL','fadef462-6a8b-40c5-96b0-11f770a27617','Audi','Q7','Silver','AWD','Grade B','Gasoline','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(95,20,'best car ever','this is detail ......HytSrMOisK','a3.jpg',242490.00,'RIOppzXmw4','0fcec078-8bfd-4952-9990-59f60532104a','Toyota','Q7','Silver','AWD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(96,11,'best car ever','this is detail ......ySRN4bBuDE','a5.jpg',313588.00,'CyJnW3TUJU','e2412991-14bd-4db2-ad56-cd686f0bac59','Toyota','Alphard','Black','AWD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(97,19,'best car ever','this is detail ......ECnRGX1IdI','a3.jpg',568249.00,'LJ0isibSCF','aa2eb0b9-b428-4aba-939e-e6f01f5a91f7','Toyota','E90','Black','FWD','Grade B','Diesel','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(98,13,'best car ever','this is detail ......YdGEugDclI','a5.jpg',80754.00,'hMIvhd2EQM','c18c2a26-8f7f-49e3-8509-f5eaf0bf1494','BMW','E90','White','FWD','Grade B','Diesel','SOLD','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(99,10,'best car ever','this is detail ......i5Vz5Tpe5r','a4.jpg',608115.00,'XtwyCYpFwc','d0c56af6-ee30-49d2-9d3b-da7a558e070e','Toyota','Q7','White','AWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(100,16,'best car ever','this is detail ......jlH0uyF1fU','a4.jpg',509265.00,'vTRoybskOO','d0829603-1789-4ee1-b7c1-0d38169fe229','BMW','Q7','Black','AWD','Grade C','Gasoline','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(101,12,'most reliable car 0','This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking','a9.jpg',133218.00,'B0f6VrRmcm','a36cc500-27f7-4745-b1e9-c064a0cfac2f','BMW','Alphard','Black','FWD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(102,12,'most reliable car 1','This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking','a8.jpg',172054.00,'3tDWUyQAsd','5283e8ac-149c-4fdd-a4bf-168e051efed3','Audi','Q7','Silver','4WD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(103,13,'most reliable car 2','This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking','a8.jpg',691653.00,'zBpGzG5znU','b146a514-1153-4dfc-a900-5c401a83cca6','Toyota','E90','Silver','AWD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(104,20,'most reliable car 3','This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking','a9.jpg',438628.00,'PTXrA6WGVj','5cb8a703-aff5-47b0-a4f8-d00fb081c953','BMW','Alphard','Silver','4WD','Grade C','Diesel','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(105,2,'most reliable car 4','This car is amazing, even though it runs for 10 thousand miles; it\'s still kicking','a6.jpg',409456.00,'Wb1xOlllIS','714973c9-e06d-45eb-9efa-058740f953a8','Toyota','Q7','Silver','AWD','Grade B','Gasoline','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(106,1,'title1','detail1','g0UHJx10nvcPtCirKXR757A526kHvlDCzibtGbua.png',23123123.00,NULL,'wersadff','BMW','ALPHARD','BLACK','FWD','B','DIESEL','IN STOCK','Normal',0,NULL,'2021-02-02 23:45:20','2021-02-02 23:45:20');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_image`
--

DROP TABLE IF EXISTS `car_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_image` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `car_id` int unsigned DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_image_car_id_foreign` (`car_id`),
  CONSTRAINT `car_image_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_image`
--

LOCK TABLES `car_image` WRITE;
/*!40000 ALTER TABLE `car_image` DISABLE KEYS */;
INSERT INTO `car_image` VALUES (1,63,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(2,7,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(3,22,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(4,63,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(5,61,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(6,41,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(7,80,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(8,47,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(9,22,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(10,26,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(11,45,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(12,99,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(13,85,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(14,39,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(15,27,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(16,12,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(17,95,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(18,31,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(19,86,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(20,105,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(21,6,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(22,65,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(23,32,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(24,73,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(25,51,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(26,69,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(27,24,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(28,82,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(29,93,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(30,51,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(31,66,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(32,56,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(33,88,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(34,9,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(35,68,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(36,7,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(37,11,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(38,47,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(39,81,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(40,48,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(41,28,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(42,93,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(43,104,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(44,63,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(45,24,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(46,27,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(47,52,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(48,46,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(49,9,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(50,15,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(51,41,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(52,31,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(53,37,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(54,50,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(55,84,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(56,77,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(57,NULL,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(58,11,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(59,76,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(60,90,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(61,29,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(62,37,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(63,60,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(64,2,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(65,21,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(66,24,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(67,38,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(68,45,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(69,23,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(70,80,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(71,24,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(72,8,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(73,21,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(74,4,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(75,65,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(76,45,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(77,22,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(78,10,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(79,81,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(80,29,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(81,27,'a43.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(82,2,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(83,62,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(84,9,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(85,101,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(86,33,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(87,34,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(88,6,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(89,29,'a44.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(90,71,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(91,3,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(92,77,'a42.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(93,94,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(94,19,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(95,62,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(96,46,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(97,80,'a45.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(98,51,'a41.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(99,77,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(100,34,'a40.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38');
/*!40000 ALTER TABLE `car_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_service`
--

DROP TABLE IF EXISTS `car_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_service` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `car_service_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_service`
--

LOCK TABLES `car_service` WRITE;
/*!40000 ALTER TABLE `car_service` DISABLE KEYS */;
INSERT INTO `car_service` VALUES (1,'Car Dealership','service_dealership.png','cars are imported from Japan','2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,'Sell Car','service_car_sale.png','cars on sale here','2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,'Sell Part','service_part.png','parts on sale here','2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `car_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_name_unique` (`name`),
  UNIQUE KEY `category_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Car','car','car.jpg',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,'Motorbike','motorbike','motorbike.jpg',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,'Part','part','part.jpg',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_job`
--

DROP TABLE IF EXISTS `failed_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_job` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_job_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_job`
--

LOCK TABLES `failed_job` WRITE;
/*!40000 ALTER TABLE `failed_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_job` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_01_01_000000_create_action_events_table',1),(2,'2019_05_10_000000_add_fields_to_action_events_table',1),(3,'2020_10_01_000000_create_user_table',1),(4,'2020_10_01_000001_create_password_reset_table',1),(5,'2020_10_01_000002_create_failed_job_table',1),(6,'2020_10_01_000003_create_category_table',1),(7,'2020_10_01_000004_create_product_table',1),(8,'2020_10_01_000005_create_order_table',1),(9,'2020_10_01_000006_create_order_product_table',1),(10,'2020_10_01_000007_create_car_table',1),(11,'2020_10_01_000008_create_car_image_table',1),(12,'2020_10_01_000009_create_motorbike_table',1),(13,'2020_10_01_000010_create_motorbike_image_table',1),(14,'2020_10_01_000011_create_part_table',1),(15,'2020_10_01_000012_create_part_image_table',1),(16,'2020_10_16_181706_create_announcement_table',1),(17,'2020_12_28_035100_create_car_service_table',1),(18,'2020_12_28_040342_create_promotion_table',1),(19,'2020_12_28_074838_create_testimonial_table',1),(20,'2021_02_03_063811_add_title_detail_to_motorbike_table',2),(21,'2021_02_03_065838_add_title_detail_to_part_table',3),(22,'2019_06_18_000000_create_blog_posts_table',4),(23,'2019_08_07_000000_add_post_introduction_to_posts_table',4),(24,'2019_08_08_000000_add_pinned_to_posts_table',4),(25,'2019_08_13_073119_change_post_content_datatype',4),(26,'2019_08_14_121846_create_categories_table',4),(27,'2019_08_14_130350_add_category_to_nova_blog_posts',4),(28,'2019_09_12_161000_add_slug_to_category',4),(29,'2019_09_19_073119_change_post_introduction_datatype',4),(30,'2019_11_11_000000_add_locale_to_posts_table',4),(31,'2019_11_12_000000_add_drafts_to_posts_table',4),(32,'2020_01_03_000000_rename_categories_table',4),(33,'2020_02_18_084641_add_featured_image_to_posts_table',4),(34,'2020_02_28_104240_add_include_in_bloglist_to_posts_table',4),(35,'2020_03_23_120630_create_related_posts_table',4),(36,'2020_04_13_093941_add_locale_parent_id_column_to_posts',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motorbike`
--

DROP TABLE IF EXISTS `motorbike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motorbike` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned DEFAULT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) unsigned DEFAULT NULL,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('IN STOCK','SOLD') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN STOCK',
  `selected` enum('Featured','Normal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `view_count` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `motorbike_code_unique` (`code`),
  UNIQUE KEY `motorbike_vin_unique` (`vin`),
  KEY `motorbike_order_id_foreign` (`order_id`),
  CONSTRAINT `motorbike_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motorbike`
--

LOCK TABLES `motorbike` WRITE;
/*!40000 ALTER TABLE `motorbike` DISABLE KEYS */;
INSERT INTO `motorbike` VALUES (1,8,'b5.jpg',777674.00,'BbvdGRgUTe',NULL,'Honda','SL','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(2,10,'b5.jpg',197112.00,'3OhrW8QFhB',NULL,'Suzuki','Night Hawk','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(3,2,'b5.jpg',817635.00,'ZjYIurthle',NULL,'Honda','Night Hawk','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(4,8,'b1.jpg',761633.00,'UN1de361hs',NULL,'Honda','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(5,5,'b2.jpg',557831.00,'afjI36vit2',NULL,'Honda','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(6,5,'b1.jpg',228275.00,'rxWhx0ZHq1',NULL,'Suzuki','SL','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(7,5,'b3.jpg',114814.00,'V4VIxsiGOt',NULL,'Suzuki','Night Hawk','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(8,7,'b2.jpg',513160.00,'iUB7fAlO0b',NULL,'Honda','SL','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(9,8,'b6.jpg',993113.00,'XF9ImSsw5J',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(10,8,'b3.jpg',201549.00,'QTvvAtq0XF',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(11,16,'b1.jpg',318054.00,'70wJshzCBL',NULL,'Honda','SL','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(12,8,'b4.jpg',923406.00,'VveR2DLWGX',NULL,'Suzuki','SL','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(13,1,'b5.jpg',74096.00,'MGBbsvOMY5',NULL,'Suzuki','SL','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(14,14,'b5.jpg',892542.00,'kGsDgwDmRJ',NULL,'Honda','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(15,2,'b4.jpg',629987.00,'hj7qIdxYyo',NULL,'Honda','SL','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(16,18,'b4.jpg',755591.00,'SHAbDi4LEO',NULL,'Suzuki','Night Hawk','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(17,14,'b1.jpg',529821.00,'qg2uaNjzkq',NULL,'Honda','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(18,13,'b4.jpg',206071.00,'foPDansC1f',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(19,18,'b4.jpg',379371.00,'hO8jE5HHGX',NULL,'Honda','SL','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(20,14,'b4.jpg',287893.00,'ABIWsQDkgk',NULL,'Honda','Night Hawk','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(21,5,'b5.jpg',77961.00,'i3RHYf7Ax4',NULL,'Suzuki','Night Hawk','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(22,13,'b3.jpg',949112.00,'g0B3sC6a99',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(23,14,'b6.jpg',301207.00,'pro52x003N',NULL,'Suzuki','Night Hawk','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(24,5,'b6.jpg',434126.00,'2x2WXh0T9l',NULL,'Suzuki','SL','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(25,13,'b2.jpg',44245.00,'6ckqQM2aW4',NULL,'Suzuki','SL','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(26,3,'b3.jpg',948689.00,'un9hTXIzPV',NULL,'Honda','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(27,13,'b3.jpg',164736.00,'G6d0maFWRm',NULL,'Honda','Night Hawk','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(28,10,'b6.jpg',391639.00,'b80t1HS4tv',NULL,'Honda','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(29,5,'b6.jpg',235108.00,'NqpGyemRtu',NULL,'Suzuki','Night Hawk','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(30,14,'b6.jpg',627248.00,'bGxVgYQG3z',NULL,'Honda','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(31,13,'b3.jpg',411035.00,'1e82a5w64l',NULL,'Honda','SL','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(32,18,'b5.jpg',11458.00,'zuxVOQ6BgB',NULL,'Suzuki','SL','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(33,6,'b3.jpg',410685.00,'KdBW0DBwYR',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(34,16,'b3.jpg',659901.00,'vmwmEbB6J4',NULL,'Honda','Night Hawk','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(35,7,'b6.jpg',772894.00,'G2jsrpvV3b',NULL,'Honda','SL','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(36,8,'b4.jpg',997688.00,'o7fpUEGxDj',NULL,'Honda','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(37,9,'b2.jpg',6329.00,'VRtoAf5nju',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(38,18,'b3.jpg',187008.00,'Z2U2hM1e30',NULL,'Suzuki','Night Hawk','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(39,11,'b5.jpg',467997.00,'0yG9Qx6xzb',NULL,'Honda','Night Hawk','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(40,6,'b5.jpg',295334.00,'xNhQtJIHAH',NULL,'Suzuki','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(41,12,'b2.jpg',19077.00,'R8MlDDe3In',NULL,'Suzuki','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(42,9,'b5.jpg',807699.00,'TBaISrD1hp',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(43,2,'b6.jpg',330089.00,'kmmWEqlro0',NULL,'Honda','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(44,15,'b6.jpg',962399.00,'mD0IAw7hXz',NULL,'Suzuki','SL','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(45,3,'b3.jpg',727346.00,'NnHJOiQwWv',NULL,'Suzuki','SL','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(46,15,'b1.jpg',240335.00,'1z8MOhThPf',NULL,'Honda','SL','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(47,14,'b1.jpg',874238.00,'lazB9EYre3',NULL,'Suzuki','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(48,4,'b1.jpg',570215.00,'DeumKAlfaB',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(49,14,'b1.jpg',977505.00,'4x9CnMXCHq',NULL,'Suzuki','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(50,15,'b3.jpg',339794.00,'jlbb6QikaC',NULL,'Honda','SL','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(51,20,'b4.jpg',293359.00,'wpFLEW3hGD',NULL,'Suzuki','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(52,10,'b5.jpg',81497.00,'hMHFJygPzH',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(53,12,'b4.jpg',985246.00,'0WoDlXc17A',NULL,'Honda','SL','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(54,7,'b3.jpg',320279.00,'hmD2KfSYCf',NULL,'Honda','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(55,3,'b5.jpg',50117.00,'G61GmqC2oB',NULL,'Suzuki','SL','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(56,8,'b5.jpg',251259.00,'7Qyw6KTW5R',NULL,'Suzuki','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(57,15,'b6.jpg',109774.00,'UPsuZMm2ss',NULL,'Suzuki','Night Hawk','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(58,3,'b6.jpg',703638.00,'IKuDPO3Qvj',NULL,'Suzuki','SL','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(59,6,'b5.jpg',123008.00,'oj8HIrtIh6',NULL,'Suzuki','SL','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(60,12,'b2.jpg',637439.00,'m9xNfuFasm',NULL,'Suzuki','Night Hawk','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(61,17,'b2.jpg',332230.00,'iuGn8Y2O4Z',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(62,5,'b1.jpg',419511.00,'ALyNCArPfz',NULL,'Suzuki','Night Hawk','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(63,15,'b2.jpg',372088.00,'RKyZHgHXwd',NULL,'Suzuki','SL','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(64,9,'b4.jpg',963370.00,'u7Q09Ye8kj',NULL,'Honda','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(65,11,'b6.jpg',837243.00,'URTdzJZ1LR',NULL,'Suzuki','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(66,10,'b2.jpg',132901.00,'D8g6YTB6ss',NULL,'Suzuki','SL','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(67,12,'b4.jpg',844879.00,'BrGB1YSqAM',NULL,'Suzuki','Night Hawk','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(68,14,'b2.jpg',284498.00,'aqjFARcp5J',NULL,'Honda','Night Hawk','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(69,10,'b2.jpg',928554.00,'pOewDMtKfh',NULL,'Suzuki','SL','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(70,17,'b3.jpg',628959.00,'Yye05uggjd',NULL,'Honda','SL','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(71,10,'b4.jpg',533535.00,'Zo6dtXi3z3',NULL,'Honda','SL','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(72,5,'b4.jpg',867163.00,'FfW3nbvm0e',NULL,'Suzuki','Night Hawk','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(73,3,'b4.jpg',661506.00,'PmFfzHJxoS',NULL,'Suzuki','Night Hawk','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(74,7,'b5.jpg',586272.00,'SaxEz2wgD7',NULL,'Suzuki','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(75,4,'b6.jpg',912139.00,'y6hKFSXGjH',NULL,'Suzuki','Night Hawk','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(76,11,'b4.jpg',650806.00,'ybsuCE8O09',NULL,'Honda','Night Hawk','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(77,5,'b6.jpg',975026.00,'km1On6u6iW',NULL,'Honda','SL','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(78,12,'b4.jpg',709333.00,'VJyH1QO6pc',NULL,'Honda','SL','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(79,20,'b4.jpg',743808.00,'EAlzOHZjgP',NULL,'Honda','SL','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(80,4,'b2.jpg',652856.00,'t4uDDZrs2V',NULL,'Honda','SL','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(81,5,'b6.jpg',501798.00,'jceDC0UyWq',NULL,'Honda','SL','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(82,7,'b5.jpg',637143.00,'QouJGBjwXk',NULL,'Honda','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(83,3,'b6.jpg',147491.00,'OuUT35dVdU',NULL,'Suzuki','Night Hawk','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(84,11,'b4.jpg',229505.00,'k0FhIhiiIT',NULL,'Honda','Night Hawk','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(85,5,'b1.jpg',194981.00,'UTOt3SaFFd',NULL,'Suzuki','SL','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(86,10,'b3.jpg',803208.00,'atiF1jjSdb',NULL,'Suzuki','SL','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(87,20,'b2.jpg',860697.00,'U3wYZ0HShY',NULL,'Suzuki','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(88,18,'b1.jpg',10985.00,'NyOUJYEFwW',NULL,'Suzuki','SL','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(89,13,'b4.jpg',971589.00,'Ov8sn6gIP2',NULL,'Honda','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(90,6,'b6.jpg',456307.00,'wr2DWMWQzR',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(91,17,'b3.jpg',808203.00,'K3MUhVrkPA',NULL,'Honda','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(92,15,'b4.jpg',733783.00,'rG5hZvuuAo',NULL,'Honda','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(93,2,'b5.jpg',340322.00,'0kRjhLaEFJ',NULL,'Honda','Night Hawk','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(94,3,'b2.jpg',735069.00,'K8BJKz2PaQ',NULL,'Honda','SL','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(95,10,'b3.jpg',828377.00,'JzR3MTj3rT',NULL,'Suzuki','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(96,12,'b5.jpg',516773.00,'SB8Hp6XWcb',NULL,'Honda','Night Hawk','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(97,17,'b2.jpg',6145.00,'GB1vSvNxbf',NULL,'Honda','Night Hawk','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(98,3,'b1.jpg',746769.00,'90dv8rhuzG',NULL,'Suzuki','Night Hawk','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(99,1,'b6.jpg',672193.00,'MDkfquQOFH',NULL,'Suzuki','SL','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(100,16,'b3.jpg',776095.00,'XEgkVrbgnj',NULL,'Honda','Night Hawk','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(101,1,'irRiVm4lCIxVJYWGVfJNX3c4N31EPrvt6gimkLF1.png',123123.00,NULL,NULL,'HONDA','NIGHT_HAWK','BLACK','IN STOCK','Normal',0,NULL,'2021-02-02 23:47:56','2021-02-02 23:47:56','title1','detail1');
/*!40000 ALTER TABLE `motorbike` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motorbike_image`
--

DROP TABLE IF EXISTS `motorbike_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motorbike_image` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `motorbike_id` int unsigned DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `motorbike_image_motorbike_id_foreign` (`motorbike_id`),
  CONSTRAINT `motorbike_image_motorbike_id_foreign` FOREIGN KEY (`motorbike_id`) REFERENCES `motorbike` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motorbike_image`
--

LOCK TABLES `motorbike_image` WRITE;
/*!40000 ALTER TABLE `motorbike_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `motorbike_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nova_blog_categories`
--

DROP TABLE IF EXISTS `nova_blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nova_blog_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nova_blog_categories`
--

LOCK TABLES `nova_blog_categories` WRITE;
/*!40000 ALTER TABLE `nova_blog_categories` DISABLE KEYS */;
INSERT INTO `nova_blog_categories` VALUES (1,'2021-02-03 00:51:33','2021-02-03 00:51:33','Import Car','import-car');
/*!40000 ALTER TABLE `nova_blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nova_blog_posts`
--

DROP TABLE IF EXISTS `nova_blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nova_blog_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json DEFAULT NULL,
  `post_introduction` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_pinned` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` bigint unsigned DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'undefined',
  `preview_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `draft_parent_id` bigint unsigned DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_in_bloglist` tinyint(1) NOT NULL DEFAULT '1',
  `locale_parent_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nova_blog_posts_locale_slug_published_unique` (`slug`,`published`),
  KEY `nova_blog_posts_category_id_foreign` (`category_id`),
  KEY `nova_blog_posts_draft_parent_id_foreign` (`draft_parent_id`),
  KEY `nova_blog_posts_locale_parent_id_foreign` (`locale_parent_id`),
  CONSTRAINT `nova_blog_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `nova_blog_categories` (`id`),
  CONSTRAINT `nova_blog_posts_draft_parent_id_foreign` FOREIGN KEY (`draft_parent_id`) REFERENCES `nova_blog_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nova_blog_posts_locale_parent_id_foreign` FOREIGN KEY (`locale_parent_id`) REFERENCES `nova_blog_posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nova_blog_posts`
--

LOCK TABLES `nova_blog_posts` WRITE;
/*!40000 ALTER TABLE `nova_blog_posts` DISABLE KEYS */;
INSERT INTO `nova_blog_posts` VALUES (1,'2021-02-03 00:53:09','2021-02-03 00:53:12','hello title1','hello-title1','[{\"layout\":\"text\",\"key\":\"cFvbIYVkMvJz95Ux\",\"attributes\":{\"text_content\":\"asfsdfsdfsfsfsdf\"}}]','2021-02-08 22:00:00',NULL,NULL,NULL,NULL,'hello this is intro',0,1,'en',NULL,1,NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `nova_blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nova_blog_related_posts`
--

DROP TABLE IF EXISTS `nova_blog_related_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nova_blog_related_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` bigint unsigned DEFAULT NULL,
  `related_post_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nova_blog_related_posts_post_id_foreign` (`post_id`),
  KEY `nova_blog_related_posts_related_post_id_foreign` (`related_post_id`),
  CONSTRAINT `nova_blog_related_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `nova_blog_posts` (`id`),
  CONSTRAINT `nova_blog_related_posts_related_post_id_foreign` FOREIGN KEY (`related_post_id`) REFERENCES `nova_blog_posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nova_blog_related_posts`
--

LOCK TABLES `nova_blog_related_posts` WRITE;
/*!40000 ALTER TABLE `nova_blog_related_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `nova_blog_related_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `seller` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(13,2) DEFAULT NULL,
  `deposited_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'Chet Beahan I',155079.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,'Roxane Jast',862377.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,'Ewell Farrell',628304.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(4,'Dereck Trantow',91360.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(5,'Melissa Trantow',232511.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(6,'Dewayne Smitham V',7584.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(7,'Dr. Rory Weber Jr.',563022.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(8,'Emerson Carter',735695.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(9,'Johathan Stracke Jr.',752720.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(10,'Mr. Stephan Considine PhD',123819.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(11,'Ole Gerlach MD',362093.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(12,'Trey Shields',594200.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(13,'Dangelo Dickens',811795.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(14,'Dr. Kenny Blanda',662680.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(15,'Hilbert Kunze',533356.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(16,'Shea Ward',954681.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(17,'Miss Ellie Altenwerth',579124.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(18,'Seamus Gleichner',410439.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(19,'Brody McKenzie MD',450180.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(20,'Rosanna Daniel PhD',263871.00,'2021-01-07 19:55:37',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_product` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned DEFAULT NULL,
  `product_id` int unsigned DEFAULT NULL,
  `quantity` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_product_order_id_foreign` (`order_id`),
  KEY `order_product_product_id_foreign` (`product_id`),
  CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `part` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned DEFAULT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) unsigned DEFAULT NULL,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('IN STOCK','SOLD') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IN STOCK',
  `selected` enum('Featured','Normal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `view_count` int NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `part_code_unique` (`code`),
  KEY `part_order_id_foreign` (`order_id`),
  CONSTRAINT `part_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part`
--

LOCK TABLES `part` WRITE;
/*!40000 ALTER TABLE `part` DISABLE KEYS */;
INSERT INTO `part` VALUES (1,5,'Brake','c3.jpg',5968.00,'jaDSyqOCE2','Audi','Q7','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(2,18,'Brake Fluid','c2.jpg',137601.00,'uDaaRQvbre','BMW','E90','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(3,2,'Air Filter','c3.jpg',866865.00,'qKYoHxk74X','Toyota','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(4,17,'Brake Fluid','c1.jpg',817928.00,'yZD82Y9Qws','Audi','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(5,16,'Air Filter','c2.jpg',222883.00,'VnAFzbaExO','BMW','Q7','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(6,10,'Belt','c5.jpg',67999.00,'oLFqbWm0XP','Toyota','Q7','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(7,11,'Brake','c1.jpg',297365.00,'S9WNtaJ8Uf','Audi','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(8,10,'Air Filter','c3.jpg',392876.00,'BBPA2RkjqJ','Toyota','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(9,5,'Air Filter','c5.jpg',484206.00,'SfryciapF7','Toyota','E90','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(10,17,'Compressor','c4.jpg',452278.00,'Hf5MkZYn6E','Toyota','Alphard','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(11,7,'Compressor','c1.jpg',661775.00,'fx3M6droTW','BMW','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(12,17,'Brake','c3.jpg',21598.00,'L1a31cgT5H','Toyota','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(13,3,'Brake Fluid','c3.jpg',449821.00,'bwVJjinnuy','Toyota','E90','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(14,11,'Brake','c2.jpg',331666.00,'eYa4PIYBfu','BMW','E90','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(15,10,'Compressor','c4.jpg',596579.00,'bhtvK7Oh93','Audi','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(16,19,'Air Filter','c2.jpg',416704.00,'ddKA0LJZP1','Audi','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(17,15,'Belt','c5.jpg',807089.00,'DUayMoNhea','BMW','Q7','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(18,5,'Brake Fluid','c6.jpg',757660.00,'4MSERBBtw5','Toyota','E90','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(19,4,'Brake','c4.jpg',233027.00,'sSFLLEDIVs','Audi','E90','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title2','detail2'),(20,14,'Air Filter','c4.jpg',707382.00,'80WAVx1hSO','Audi','E90','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(21,4,'Belt','c1.jpg',389707.00,'2m5D40kPr1','BMW','Q7','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(22,10,'Brake','c5.jpg',98226.00,'y69Go3UTkJ','Toyota','Alphard','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(23,19,'Brake','c6.jpg',882636.00,'BsYdiOKL6k','Toyota','E90','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(24,9,'Brake Fluid','c2.jpg',599594.00,'LNCNSf97Jh','Toyota','Q7','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(25,14,'Compressor','c6.jpg',820837.00,'Ye84tg0u3q','Toyota','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(26,8,'Brake Fluid','c4.jpg',377218.00,'Q05YZeuuHe','Audi','Alphard','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(27,8,'Brake','c3.jpg',226100.00,'rUHipWGtcN','BMW','Alphard','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(28,10,'Air Filter','c3.jpg',16273.00,'KDCz6gQCSb','Toyota','Q7','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(29,1,'Compressor','c1.jpg',951760.00,'bKQ0FTRYjD','Toyota','Q7','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(30,8,'Brake Fluid','c5.jpg',324828.00,'teTXdYyoaY','Audi','E90','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(31,7,'Air Filter','c3.jpg',592634.00,'HY5IPUHJds','Audi','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(32,20,'Belt','c5.jpg',510939.00,'rvGFo5HMb6','BMW','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(33,2,'Belt','c3.jpg',205866.00,'zN0TmGsrNz','BMW','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(34,3,'Belt','c2.jpg',583836.00,'5q699vUorS','Toyota','Alphard','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(35,9,'Compressor','c4.jpg',522473.00,'e5xz95140r','Toyota','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(36,5,'Brake Fluid','c4.jpg',235886.00,'ems9LFN2He','BMW','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(37,8,'Brake Fluid','c1.jpg',688377.00,'YCupcLSb3n','Toyota','E90','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(38,12,'Air Filter','c1.jpg',862899.00,'25EpCRlQAy','Toyota','Q7','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(39,7,'Brake Fluid','c3.jpg',843200.00,'uRsGLdbENe','Audi','E90','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(40,8,'Compressor','c4.jpg',321949.00,'mSfGigUJjq','Toyota','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(41,18,'Belt','c6.jpg',603364.00,'ach5bvN7OO','Toyota','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(42,13,'Brake Fluid','c2.jpg',263348.00,'LnaFHK2TBN','Toyota','Alphard','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(43,17,'Brake Fluid','c5.jpg',723272.00,'XwQ4pQkzVf','BMW','Q7','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(44,7,'Brake Fluid','c3.jpg',940390.00,'M6SjJ0HbIT','Toyota','Alphard','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(45,14,'Brake','c4.jpg',606405.00,'PW6kdUfu3t','BMW','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(46,6,'Air Filter','c4.jpg',808601.00,'Hbs5gJQ3JQ','BMW','E90','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(47,12,'Brake','c4.jpg',691979.00,'pYEUhbrv54','Toyota','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(48,17,'Belt','c5.jpg',2614.00,'rghDt0VMOQ','Toyota','Q7','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(49,14,'Belt','c5.jpg',795873.00,'4EUzRzUspR','BMW','E90','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(50,4,'Air Filter','c5.jpg',997719.00,'uxnz37j6VB','Toyota','Q7','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(51,15,'Brake','c3.jpg',806445.00,'fG2g5Iy7qv','BMW','Alphard','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(52,2,'Belt','c6.jpg',859171.00,'rnBMTfdciQ','Toyota','E90','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(53,11,'Belt','c5.jpg',542049.00,'tdcOclD09o','BMW','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(54,12,'Air Filter','c3.jpg',242721.00,'mZ37aI3Zu8','BMW','E90','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(55,2,'Compressor','c6.jpg',5735.00,'RC7CWvBUqP','BMW','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(56,9,'Compressor','c6.jpg',135425.00,'mWsTbKLcMs','Audi','Q7','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(57,20,'Air Filter','c1.jpg',228855.00,'N56I5bK9aV','BMW','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(58,3,'Compressor','c3.jpg',144382.00,'3updBFYTFR','Toyota','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(59,20,'Compressor','c2.jpg',180379.00,'GRlo10srnj','BMW','Q7','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(60,4,'Brake Fluid','c6.jpg',262912.00,'8uC0ksEl0z','BMW','Q7','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(61,2,'Compressor','c1.jpg',495413.00,'BoWqNsaUec','Audi','Alphard','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(62,17,'Brake','c5.jpg',211299.00,'IYCGgixoLt','Toyota','E90','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(63,16,'Belt','c2.jpg',459516.00,'0UBWGkYsV4','Audi','Q7','Silver','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(64,5,'Compressor','c6.jpg',720020.00,'nHOXEFG3OV','BMW','Q7','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(65,17,'Compressor','c5.jpg',889918.00,'LfNDoZJf4K','Audi','Q7','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(66,5,'Belt','c6.jpg',394383.00,'Z3sbrHRotj','Toyota','Alphard','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(67,13,'Brake','c1.jpg',71790.00,'fgCxlOboYw','Toyota','E90','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(68,9,'Brake','c6.jpg',302119.00,'v0luV3hcIA','Audi','Alphard','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(69,16,'Brake','c6.jpg',189096.00,'gJ9IoqBQEp','BMW','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(70,12,'Belt','c2.jpg',11799.00,'tSjUixgaE1','Toyota','Alphard','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(71,3,'Belt','c6.jpg',866563.00,'IhnH5CLzKj','Audi','E90','Black','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(72,15,'Compressor','c2.jpg',152051.00,'aEs6P4a6fQ','Audi','Alphard','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(73,13,'Air Filter','c1.jpg',251667.00,'9KB8o7Sqnc','BMW','Alphard','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(74,10,'Brake','c4.jpg',530493.00,'RxptQZ68wJ','Toyota','Alphard','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(75,16,'Air Filter','c1.jpg',932524.00,'yYtTZWeKTS','Toyota','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(76,1,'Air Filter','c4.jpg',394418.00,'uiJRGuMn4E','Audi','E90','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(77,12,'Belt','c4.jpg',642545.00,'ymMznOlAqd','Toyota','Alphard','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(78,1,'Compressor','c3.jpg',378193.00,'nFeUtQ2gRh','BMW','Q7','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(79,4,'Brake','c3.jpg',489568.00,'CJeQHwhfiI','BMW','Q7','White','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(80,10,'Compressor','c1.jpg',882921.00,'n3bLSb7iCt','Audi','Alphard','Silver','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(81,1,'Brake Fluid','c6.jpg',494613.00,'1rMJCpdkmh','Audi','E90','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(82,12,'Air Filter','c5.jpg',896341.00,'YqypxsxEsK','BMW','Alphard','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(83,16,'Air Filter','c4.jpg',889462.00,'dcFvODLs0Z','BMW','E90','White','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(84,5,'Belt','c4.jpg',435240.00,'pu3CPELmYu','Toyota','E90','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(85,1,'Compressor','c5.jpg',101659.00,'bNHBpNCzxk','Toyota','Alphard','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(86,10,'Brake','c3.jpg',884783.00,'plyzdL6Tlg','Toyota','Alphard','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(87,15,'Brake','c4.jpg',454343.00,'Dc5u2YYWde','Audi','Q7','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(88,10,'Compressor','c2.jpg',935066.00,'ChpSQq3f65','Toyota','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(89,9,'Belt','c2.jpg',691753.00,'iL2KC2H6d3','Toyota','Q7','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(90,20,'Air Filter','c4.jpg',396630.00,'ZL4j1OT5oY','Toyota','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(91,3,'Compressor','c4.jpg',428974.00,'Q6RGc4XxIr','Toyota','E90','White','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(92,15,'Air Filter','c6.jpg',948283.00,'5d3CFyTmj5','Audi','Q7','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(93,7,'Brake','c1.jpg',370684.00,'3Sc26AlAK1','BMW','Alphard','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(94,9,'Air Filter','c5.jpg',912950.00,'myRi61qAVV','Audi','E90','White','IN STOCK','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(95,13,'Air Filter','c1.jpg',532159.00,'cBuGOkJsR9','BMW','Q7','Black','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(96,8,'Belt','c5.jpg',328202.00,'dirOF5vEn6','Audi','E90','Black','IN STOCK','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(97,17,'Compressor','c4.jpg',80815.00,'Gd3Hta8T4S','Audi','E90','Silver','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(98,16,'Air Filter','c3.jpg',940271.00,'VSWeKAWMEi','BMW','Q7','Black','SOLD','Featured',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(99,20,'Belt','c6.jpg',276913.00,'qfuZ9u4r0c','Audi','E90','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1'),(100,1,'Brake Fluid','c6.jpg',724871.00,'3LYlCx3e6w','BMW','Alphard','Silver','SOLD','Normal',0,NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38','title1','detail1');
/*!40000 ALTER TABLE `part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part_image`
--

DROP TABLE IF EXISTS `part_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `part_image` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `part_id` int unsigned DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `part_image_part_id_foreign` (`part_id`),
  CONSTRAINT `part_image_part_id_foreign` FOREIGN KEY (`part_id`) REFERENCES `part` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part_image`
--

LOCK TABLES `part_image` WRITE;
/*!40000 ALTER TABLE `part_image` DISABLE KEYS */;
INSERT INTO `part_image` VALUES (1,94,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(2,43,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(3,43,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(4,60,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(5,8,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(6,59,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(7,39,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(8,57,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(9,3,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(10,63,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(11,24,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(12,44,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(13,74,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(14,5,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(15,48,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(16,11,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(17,95,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(18,100,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(19,27,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(20,43,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(21,53,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(22,18,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(23,83,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(24,23,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(25,41,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(26,66,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(27,5,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(28,83,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(29,56,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(30,83,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(31,59,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(32,69,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(33,99,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(34,78,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(35,95,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(36,48,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(37,69,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(38,20,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(39,18,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(40,54,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(41,18,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(42,41,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(43,11,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(44,24,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(45,5,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(46,51,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(47,34,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(48,53,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(49,52,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(50,95,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(51,31,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(52,40,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(53,24,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(54,41,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(55,39,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(56,56,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(57,63,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(58,14,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(59,81,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(60,15,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(61,84,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(62,58,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(63,36,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(64,92,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(65,85,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(66,3,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(67,76,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(68,42,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(69,95,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(70,65,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(71,87,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(72,12,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(73,73,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(74,23,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(75,26,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(76,42,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(77,92,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(78,23,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(79,67,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(80,59,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(81,29,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(82,11,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(83,51,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(84,26,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(85,2,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(86,16,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(87,11,'c4.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(88,10,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(89,32,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(90,92,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(91,53,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(92,80,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(93,67,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(94,3,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(95,11,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(96,62,'c2.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(97,56,'c5.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(98,87,'c6.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(99,82,'c3.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38'),(100,31,'c1.jpg',NULL,'2021-01-07 19:55:38','2021-01-07 19:55:38');
/*!40000 ALTER TABLE `part_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_reset_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset`
--

LOCK TABLES `password_reset` WRITE;
/*!40000 ALTER TABLE `password_reset` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned DEFAULT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_name_unique` (`name`),
  UNIQUE KEY `product_slug_unique` (`slug`),
  KEY `product_category_id_foreign` (`category_id`),
  CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Alphard','alphard','alphard.jpg','alphard is a wagon',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,1,'Q7','q7','q7.jpg','audi is a handsome',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,1,'E90','e90','e90.jpg','e90 is a fast',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(4,2,'SL','sl','sl.jpg','big bike handsome',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(5,2,'Night Hawk','night_hawk','night_hawk.jpg','night hawk is great',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37'),(6,3,'Compressor','compressor','compressor.jpg','something',NULL,'2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotion` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `promotion_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (1,'Chrismas Promotion','promotion_christmas.png','Discount 10%','2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,'New Year Promotion','promotion_new_year.png','Discount 10%','2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonial` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testimonial_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial`
--

LOCK TABLES `testimonial` WRITE;
/*!40000 ALTER TABLE `testimonial` DISABLE KEYS */;
INSERT INTO `testimonial` VALUES (1,'Mr. X','I bought a car from TOP AUTO; I am happy until now.','mr.x.jpg','2021-01-07 19:55:37','2021-01-07 19:55:37'),(2,'Mr. Y','I bought a car from TOP AUTO; I am happy until now.','mr.y.jpg','2021-01-07 19:55:37','2021-01-07 19:55:37'),(3,'Mr. Z','I bought a car from TOP AUTO; I am happy until now.','mr.z.jpg','2021-01-07 19:55:37','2021-01-07 19:55:37');
/*!40000 ALTER TABLE `testimonial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'malinka','malinkaphann@gmail.com',NULL,'$2y$10$Jn7/n9z8a0OwuGXTOUCwxeIzRm7yjL0EkkJEZp8NI2qCMbb36lbWS','RW9DSSRFx6YhfTTIKqLAY1KXoWaXDXkZjWjRrqdZ8lbmd4IUvSSM8BGt4N6y','2021-01-07 19:55:46','2021-01-07 19:55:46');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-03 16:23:44
