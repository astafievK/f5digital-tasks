-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: f5digital
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
-- Current Database: `f5digital`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `f5digital` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `f5digital`;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `idCategory` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `avgRating` int DEFAULT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Выплата неустойки по ДДУ','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',3),(2,'Компенсация морального вреда','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',4),(3,'Штраф в размере 50%','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',2),(4,'Компенсация расходов по аренде жилья','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',4),(5,'Компенсация убытков по ипотеке','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',2),(6,'Возмещение иных расходов','Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_rating`
--

DROP TABLE IF EXISTS `category_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCategory` int NOT NULL,
  `rating` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idCategory` (`idCategory`),
  CONSTRAINT `category_rating_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`idCategory`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_rating`
--

LOCK TABLES `category_rating` WRITE;
/*!40000 ALTER TABLE `category_rating` DISABLE KEYS */;
INSERT INTO `category_rating` VALUES (1,2,3,'2023-04-01 08:34:03'),(2,2,2,'2023-04-01 08:34:24'),(3,2,2,'2023-04-01 08:34:50'),(4,3,2,'2023-04-04 10:44:13'),(6,3,1,'2023-04-04 10:44:14'),(16,2,5,'2023-04-04 10:48:10'),(17,2,5,'2023-04-04 10:48:14'),(18,2,5,'2023-04-04 10:48:15'),(19,4,5,'2023-04-04 11:10:05'),(20,1,1,'2023-04-04 11:10:23'),(21,1,5,'2023-04-04 11:10:27'),(22,4,3,'2023-04-05 17:23:17'),(23,2,2,'2023-04-25 14:21:47'),(24,2,2,'2023-04-25 14:21:48'),(25,2,3,'2023-04-25 14:21:48'),(26,2,3,'2023-04-25 14:21:48'),(27,2,3,'2023-04-25 14:21:49'),(28,2,3,'2023-04-25 14:21:49'),(29,2,3,'2023-04-25 14:21:50'),(30,2,3,'2023-04-25 14:21:50'),(31,2,3,'2023-04-25 14:21:50'),(32,2,3,'2023-04-25 14:21:50'),(33,2,4,'2023-04-25 14:21:51'),(34,2,4,'2023-04-25 14:21:51'),(35,2,5,'2023-04-25 14:21:52'),(36,2,5,'2023-04-25 14:21:52'),(37,2,5,'2023-04-25 14:21:52'),(38,2,5,'2023-04-25 14:21:53'),(39,2,3,'2023-04-25 14:21:53'),(40,2,3,'2023-04-25 14:21:54'),(41,2,2,'2023-04-25 14:21:54'),(42,4,4,'2023-04-25 14:21:55'),(43,4,3,'2023-04-25 14:21:55'),(44,4,3,'2023-04-25 14:21:56'),(45,4,5,'2023-04-25 14:21:56'),(46,4,5,'2023-04-25 14:21:57'),(47,4,5,'2023-04-25 14:21:57'),(48,2,5,'2023-04-25 14:21:59'),(49,2,5,'2023-04-29 14:48:16'),(50,2,5,'2023-05-12 06:57:05'),(51,2,5,'2023-05-12 06:57:06'),(52,2,5,'2023-05-12 06:57:06'),(53,2,5,'2023-05-12 06:57:07'),(54,2,5,'2023-05-12 06:57:07'),(55,2,5,'2023-05-12 06:57:07'),(56,2,4,'2023-05-12 06:57:08');
/*!40000 ALTER TABLE `category_rating` ENABLE KEYS */;
UNLOCK TABLES;
ALTER DATABASE `f5digital` CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`%`*/ /*!50003 TRIGGER `trg_update_category_rating` AFTER INSERT ON `category_rating` FOR EACH ROW UPDATE categories
    SET avgRating = (
        SELECT AVG(rating)
        FROM category_rating
        WHERE idCategory = NEW.idCategory
    )
    WHERE idCategory = NEW.idCategory */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
ALTER DATABASE `f5digital` CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci ;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `idProduct` int NOT NULL AUTO_INCREMENT,
  `category` varchar(90) NOT NULL,
  `title` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `code` varchar(45) NOT NULL,
  `count` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(45) NOT NULL,
  `idStatus` int DEFAULT NULL,
  `image` varchar(20) NOT NULL DEFAULT 'productEmpty',
  PRIMARY KEY (`idProduct`),
  KEY `products_ibfk_1` (`idStatus`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idStatus`) REFERENCES `statuses` (`idStatus`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'productEmpty'),(2,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',1,'product'),(3,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',1,'product'),(4,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'productEmpty'),(5,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',1,'product'),(6,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'productEmpty'),(7,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',1,'productEmpty'),(8,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'productEmpty'),(9,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',1,'product'),(10,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'productEmpty'),(11,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'productEmpty'),(12,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',1,'product'),(13,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'productEmpty'),(14,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'product'),(15,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',1,'product'),(16,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'product'),(17,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',2,'product'),(18,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',NULL,'product'),(19,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'product'),(20,'Кресла театральные','Театральное кресло Прайм','789-2341','0','6762',3,'productEmpty'),(21,'Кресла театральные','Театральное кресло Прайм','789-2341','1','6762',NULL,'productEmpty');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statuses` (
  `idStatus` int NOT NULL AUTO_INCREMENT,
  `title` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'ХИТ ПРОДАЖ'),(2,'АКЦИЯ'),(3,'НОВИНКА');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-20  0:05:02
