-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: agiliway
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(250) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Hello hello hello','Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello '),(2,'post 2','post  2 post 2 post 2 post  2 post 2 post 2post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 '),(3,'Hello hello hello','Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello Hello hello hello '),(4,'post 2','post  2 post 2 post 2 post  2 post 2 post 2post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 post  2 post 2 post 2 ');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responses`
--

DROP TABLE IF EXISTS `responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` int(5) DEFAULT NULL,
  `body` text,
  `post_id` int(11) NOT NULL,
  `img` char(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `responses_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responses`
--

LOCK TABLES `responses` WRITE;
/*!40000 ALTER TABLE `responses` DISABLE KEYS */;
INSERT INTO `responses` VALUES (3,4,'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz',1,'src/img/0554647532564485c4c9f547e6ed9f41.jpg'),(4,3,'helo hello ',1,'src/img/1fd1f962f0dc9c9293cdb7e6076c3d4b.jpg'),(5,5,'by bem sdaxzc',1,'src/img/024d86f88fcfce49d7a21143ca9cf170.jpg'),(6,3,'asdddddddddddddddddddddddddddddddddddddddddddddddddddd',1,'src/img/cca72622ac8a8c558ad8e50663a9593d.jpg'),(7,3,'sadfasd',1,NULL),(8,1,'asdsadsadasd',1,NULL);
/*!40000 ALTER TABLE `responses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-05 20:40:06
