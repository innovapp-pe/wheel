-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: 192.168.1.106    Database: camiper_2020
-- ------------------------------------------------------
-- Server version	10.2.24-MariaDB

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
-- Table structure for table `rul_audios`
--

DROP TABLE IF EXISTS `rul_audios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rul_audios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_ARCHIVO` longtext DEFAULT NULL,
  `RUTA` longtext DEFAULT NULL,
  `EXTENSION` longtext DEFAULT NULL,
  `SIZE` longtext DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rul_audios`
--

LOCK TABLES `rul_audios` WRITE;
/*!40000 ALTER TABLE `rul_audios` DISABLE KEYS */;
INSERT INTO `rul_audios` VALUES (1,'contest.mp3','./assets/audio/contest.mp3','mp3','6000'),(5,'Eye of the Tiger.mp3','./assets/audio/3_1612899676Eye of the Tiger.mp3','mp3','6910203'),(6,'Queen - We are the Champions.mp3','./assets/audio/3_1612899707Queen - We are the Champions.mp3','mp3','4819105');
/*!40000 ALTER TABLE `rul_audios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rul_opciones`
--

DROP TABLE IF EXISTS `rul_opciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rul_opciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_RULETA` varchar(45) DEFAULT NULL,
  `OPCION` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `COLOR_FONDO` varchar(45) DEFAULT NULL,
  `COLOR_LETRA` varchar(45) DEFAULT 'white',
  `ESTADO` varchar(45) DEFAULT '1',
  `CREATED_AT` datetime DEFAULT current_timestamp(),
  `UPDATED_AT` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rul_opciones`
--

LOCK TABLES `rul_opciones` WRITE;
/*!40000 ALTER TABLE `rul_opciones` DISABLE KEYS */;
INSERT INTO `rul_opciones` VALUES (1,'1','USD $5','USD $5','#FE8B4C','#FFFFFF','1','2021-02-05 12:53:45','2021-02-08 14:25:51'),(2,'1','HAMBURGUESA','HAMBURGUESA PERSONA BEMBOS','#F43944','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(3,'1','USD $10','USD $10','#AB3258','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(4,'1','KFC','VALDE PERSONAL KFC','#593068','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(5,'1','GIFT CARD S/50','GIFT CARD S/50','#22477C','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(6,'1','USD $15','USD $15','#8FA08B','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(7,'1','PIZZA','PIZZA PERSONAL','#59B844','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(8,'1','SIGUE INTENTANDO','SIGUE INTENTANDO','#9F8D3F','#FFFFFF','1','2021-02-05 12:57:37','2021-02-08 14:25:51'),(9,'2','PIZZA','PIZZA FAMILIAR','#FE8B4C','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(10,'2','GIFT CARD S/50','GIFT CARD S/50','#F43944','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(11,'2','USD $15','USD $15','#AB3258','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(12,'2','USD $5','USD $5','#593068','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(13,'2','USD $10','USD $10','#22477C','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(14,'2','USD $20','USD $20','#8FA08B','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(15,'2','POLLO A LA BRASA','1 POLLO A LA BRASA','#59B844','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(16,'2','KFC','1 BALDE KFC PERSONAL','#9F8D3F','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(17,'3','KFC','1 BALDE FAMILIAR KFC','#fe8b4c','#ffffff','1','2021-02-05 13:01:50','2021-02-09 09:25:20'),(18,'3','SIGUE INTENTANDO','SIGUEN INTENTANDO','#F43944','#FFFFFF','1','2021-02-05 13:05:26','2021-02-08 14:25:51'),(19,'3','USD $20','USD $20','#ab3258','#ffffff','1','2021-02-05 13:05:26','2021-02-08 16:01:47'),(20,'3','GIFT CARD S/70','GIFT CARD S/70','#593068','#FFFFFF','1','2021-02-05 13:05:26','2021-02-08 14:25:51'),(21,'3','POLLO A LA BRASA','1 POLLO A LA BRASA','#22477C','#FFFFFF','1','2021-02-05 13:05:26','2021-02-08 14:25:51'),(22,'3','USD $10','USD $10','#8FA08B','#FFFFFF','1','2021-02-05 13:05:26','2021-02-08 14:25:51'),(23,'3','PIZZA','PIZZA FAMILIAR','#59b844','#ffffff','1','2021-02-05 13:05:26','2021-02-08 18:32:24'),(24,'3','USD $30','USD $30','#9F8D3F','#FFFFFF','1','2021-02-05 13:05:26','2021-02-08 14:25:51'),(25,'3','HAMBURGUESA','COMBO HAMBURGUESA 4 PERSONAS','#D9C63C','#FFFFFF','1','2021-02-05 13:05:26','2021-02-09 10:07:14'),(26,'4','PIZZA','PIZZA FAMILIAR','#FE8B4C','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(27,'4','GIFT CARD S/50','GIFT CARD S/50','#F43944','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(28,'4','USD $15','USD $15','#AB3258','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(29,'4','USD $5','USD $5','#593068','#FFFFFF','1','2021-02-05 13:01:49','2021-02-08 14:25:51'),(30,'4','USD $10','USD $10','#22477C','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(31,'4','USD $20','USD $20','#8FA08B','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(32,'4','POLLO A LA BRASA','1 POLLO A LA BRASA','#59B844','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51'),(33,'4','KFC','1 BALDE KFC PERSONAL','#9F8D3F','#FFFFFF','1','2021-02-05 13:01:50','2021-02-08 14:25:51');
/*!40000 ALTER TABLE `rul_opciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rul_ruletas`
--

DROP TABLE IF EXISTS `rul_ruletas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rul_ruletas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(45) DEFAULT NULL,
  `DURACION` int(10) DEFAULT 20,
  `VELOCIDAD` int(10) DEFAULT 12,
  `ID_AUDIO` varchar(45) DEFAULT '1',
  `ESTADO` varchar(45) DEFAULT '1',
  `CREATED_AT` datetime DEFAULT current_timestamp(),
  `UPDATED_AT` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rul_ruletas`
--

LOCK TABLES `rul_ruletas` WRITE;
/*!40000 ALTER TABLE `rul_ruletas` DISABLE KEYS */;
INSERT INTO `rul_ruletas` VALUES (1,'EQUIPO DE DIPLOMADO',20,12,'1','1','2021-02-05 12:43:41','2021-02-09 12:23:34'),(2,'EQUIPO DE MAESTRÍAS',20,12,'1','1','2021-02-05 12:43:41','2021-02-09 16:23:07'),(3,'VENTAS TOP',20,12,'1','1','2021-02-05 12:43:41','2021-02-09 16:23:07'),(4,'VENTA DE VIAJES Y REFERIDOS',20,12,'1','1','2021-02-05 12:43:41','2021-02-09 12:23:34');
/*!40000 ALTER TABLE `rul_ruletas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-09 16:45:36
