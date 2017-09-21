-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: pre_enrollment
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `updated_checklist`
--

DROP TABLE IF EXISTS `updated_checklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `updated_checklist` (
  `updCheckID` int(11) NOT NULL AUTO_INCREMENT,
  `curriculumID` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `id_number` int(7) NOT NULL,
  `checklistID` int(11) NOT NULL,
  PRIMARY KEY (`updCheckID`),
  KEY `curriculumID_idx` (`curriculumID`),
  KEY `checkID_idx` (`checklistID`),
  CONSTRAINT `checkID` FOREIGN KEY (`checklistID`) REFERENCES `checklist` (`checklistID`) ON UPDATE CASCADE,
  CONSTRAINT `curriculumID` FOREIGN KEY (`curriculumID`) REFERENCES `curriculum_checklist` (`curriculumID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `updated_checklist`
--

LOCK TABLES `updated_checklist` WRITE;
/*!40000 ALTER TABLE `updated_checklist` DISABLE KEYS */;
INSERT INTO `updated_checklist` VALUES (1,1,'Done',2154375,1),(2,2,'Done',2154375,2),(3,3,'Done',2154375,4),(4,5,'Done',2154375,6),(5,6,'Done',2154375,7),(6,7,'Done',2154375,8),(7,8,'Done',2154375,9),(8,9,'Done',2154375,10),(9,10,'Done',2154375,11),(10,11,'Done',2154375,12),(11,12,'Done',2154375,13),(12,13,'Done',2154375,14),(13,14,'Done',2154375,15),(14,15,'Done',2154375,16),(15,16,'Done',2154375,17),(16,17,'Done',2154375,18),(17,18,'Done',2154375,19),(18,19,'Done',2154375,20),(19,20,'Done',2154375,21),(20,21,'Done',2154375,22),(21,22,'Done',2154375,23),(22,23,'Done',2154375,24),(23,24,'Done',2154375,25),(24,25,'Done',2154375,26),(25,26,'Done',2154375,27),(26,27,'Done',2154375,28),(27,28,'Done',2154375,29),(28,29,'Done',2154375,30),(29,30,'Done',2154375,31),(30,31,'Done',2154375,32),(31,32,'Done',2154375,33),(32,33,'Done',2154375,34),(33,34,'Done',2154375,35),(34,35,'Done',2154375,36),(35,36,'Done',2154375,37),(36,37,'Done',2154375,38),(37,38,'Done',2154375,39),(38,39,'Done',2154375,40),(39,40,'Done',2154375,41),(40,41,'Done',2154375,42),(41,42,'Done',2154375,43),(42,43,'Done',2154375,44),(43,44,'Done',2154375,45),(44,45,'Currently Enrolled',2154375,46),(45,46,'Done',2154375,47),(46,47,'Done',2154375,48),(47,48,'Done',2154375,49),(48,49,'Done',2154375,50),(49,50,'Done',2154375,51),(50,51,'Done',2154375,52),(51,52,'Done',2154375,53),(52,53,'Done',2154375,54),(53,54,'Done',2154375,55),(54,55,'Done',2154375,56),(55,56,'Done',2154375,57),(56,57,'Done',2154375,58),(57,58,'Done',2154375,59),(58,59,'Done',2154375,60),(59,60,'Currently Enrolled',2154375,61),(60,61,'Not Done',2154375,62),(61,62,'Not Done',2154375,63),(62,63,'Not Done',2154375,64),(63,64,'Not Done',2154375,65),(64,65,'Not Done',2154375,66),(65,66,'Not Done',2154375,67),(71,67,'Not Done',2154375,68),(72,68,'Not Done',2154375,69),(73,69,'Not Done',2154375,70),(74,70,'Not Done',2154375,71),(75,71,'Not Done',2154375,72),(76,72,'Not Done',2154375,73),(77,73,'Not Done',2154375,74),(78,74,'Not Done',2154375,75),(79,75,'Not Done',2154375,76),(80,76,'Not Done',2154375,77),(81,77,'Not Done',2154375,78),(82,78,'Not Done',2154375,79),(83,79,'Not Done',2154375,80),(84,80,'Done',2154375,81),(85,81,'Done',2154375,82),(86,82,'Done',2154375,83),(87,83,'Not Done',2154375,84),(88,84,'Not Done',2154375,85),(89,274,'Done',2154375,236),(90,284,'Done',2154375,247);
/*!40000 ALTER TABLE `updated_checklist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-03 17:31:50
