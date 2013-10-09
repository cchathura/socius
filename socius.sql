-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: hackthon
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.1

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
-- Table structure for table `on_fly_credit`
--

DROP TABLE IF EXISTS `on_fly_credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `on_fly_credit` (
  `user_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `on_fly_credit`
--

LOCK TABLES `on_fly_credit` WRITE;
/*!40000 ALTER TABLE `on_fly_credit` DISABLE KEYS */;
INSERT INTO `on_fly_credit` VALUES (11,50,134),(10,20,135),(12,20,136),(9,30,137),(9,50,138),(10,10,139),(10,30,140);
/*!40000 ALTER TABLE `on_fly_credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_comment`
--

DROP TABLE IF EXISTS `q_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_comment` (
  `q_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_comment`
--

LOCK TABLES `q_comment` WRITE;
/*!40000 ALTER TABLE `q_comment` DISABLE KEYS */;
INSERT INTO `q_comment` VALUES (135,'I don\'t know how to solve this',9,'2013-10-05 02:24:11'),(134,'You have to add an anchor tag to the web page. Just google and find W3Schools.',10,'2013-10-05 02:40:36'),(136,'Developing a knowledge sharing application would be a great idea which can substitute K-Request !',10,'2013-10-05 02:46:54'),(136,'Hi this.is good\n',12,'2013-10-05 03:35:19');
/*!40000 ALTER TABLE `q_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_index`
--

DROP TABLE IF EXISTS `q_index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_index` (
  `last_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_index`
--

LOCK TABLES `q_index` WRITE;
/*!40000 ALTER TABLE `q_index` DISABLE KEYS */;
INSERT INTO `q_index` VALUES (141);
/*!40000 ALTER TABLE `q_index` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_tag`
--

DROP TABLE IF EXISTS `q_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_tag` (
  `q_id` int(11) NOT NULL,
  `tag` varchar(30) NOT NULL,
  KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_tag`
--

LOCK TABLES `q_tag` WRITE;
/*!40000 ALTER TABLE `q_tag` DISABLE KEYS */;
INSERT INTO `q_tag` VALUES (136,'VOS,'),(136,'Ubuntu,'),(136,'Apache'),(137,'Mobility,'),(137,'Hackathon'),(138,'Wifi,'),(138,'Hotspot'),(139,'Microsoft,'),(139,'License'),(140,'Launcher,'),(140,'VOS'),(141,'BigData,'),(141,'MongoDB');
/*!40000 ALTER TABLE `q_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_to_like`
--

DROP TABLE IF EXISTS `q_to_like`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_to_like` (
  `q_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`q_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_to_like`
--

LOCK TABLES `q_to_like` WRITE;
/*!40000 ALTER TABLE `q_to_like` DISABLE KEYS */;
INSERT INTO `q_to_like` VALUES (134,10),(135,9),(135,10),(136,12),(139,12),(140,12);
/*!40000 ALTER TABLE `q_to_like` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_vote`
--

DROP TABLE IF EXISTS `q_vote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_vote` (
  `q_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`q_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_vote`
--

LOCK TABLES `q_vote` WRITE;
/*!40000 ALTER TABLE `q_vote` DISABLE KEYS */;
/*!40000 ALTER TABLE `q_vote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `u_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `offer_amount` int(11) NOT NULL,
  `solved` tinyint(1) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (134,'Hi I am developing a simple web application.\nCan some one teach me how to add a hyper link to new page?  ',11,'2013-10-05 01:53:23',50,0,'How to add a link in HTML?'),(135,'Need to change the default port 80 to a different port number. How to do it on VOS ?',10,'2013-10-05 02:17:39',20,0,'How to configure Apache on VOS ?'),(136,'We have the Mobility Hackathon which was a great success last year. So please give me a good idea to compete this time.',12,'2013-10-05 02:28:56',20,0,'Help me to find a good idea for Mobility Hackathon 2013 please.'),(137,'My Laptop model is HP ProBook 4420S. How to configure a wifi hotspot on that ?',9,'2013-10-05 02:30:29',30,0,'How to create a wifi hotspot to share internet on Windows 7 ? '),(138,'Need information of Operating System cost and Microsoft Office package cost per year and per user.',9,'2013-10-05 02:32:00',50,0,'How does Microsoft charge enterprises for licenses ?'),(139,'I need to make the VOS 2.0 Launcher auto hide. Please Help. ',10,'2013-10-05 02:37:38',10,0,'How to auto hide Launcher on VOS ?'),(140,'I need some good references on MongoDB. I already referred the 10gen website. Please share the learning material if you have.',10,'2013-10-05 02:39:10',30,0,'Good Learning Material for Big Data');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registered_users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `credit` int(11) NOT NULL,
  `last_update_date` date NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registered_users`
--

LOCK TABLES `registered_users` WRITE;
/*!40000 ALTER TABLE `registered_users` DISABLE KEYS */;
INSERT INTO `registered_users` VALUES ('ishanaba@gmail.com','1234',9,20,'2013-10-05','Ishan Ambanwela'),('thariyarox@gmail.com','1234',10,40,'2013-10-05','Tharindu Edirisinghe'),('cchathura@gmail.com','1234',11,50,'2013-10-05','Chathura Amarathunga'),('prasad@gmail.com','123',12,80,'2013-10-05','Prasad Amarathunga');
/*!40000 ALTER TABLE `registered_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-09 15:20:53
