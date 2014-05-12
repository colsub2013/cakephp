-- MySQL dump 10.13  Distrib 5.6.14, for Win32 (x86)
--
-- Host: localhost    Database: cakephp
-- ------------------------------------------------------
-- Server version	5.6.14

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
-- Current Database: `cakephp`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `cakephp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cakephp`;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (10,'Title strikes back 2','This is really exciting! Not.2','2014-04-29 21:07:58','2014-05-11 20:58:34'),(11,'Cuarto post','InsersiÃ³n del cuarto post.','2014-05-02 20:30:22','2014-05-02 20:30:22'),(15,'sssss','gfgfgf','2014-05-11 21:33:10','2014-05-11 21:33:10');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_material`
--

DROP TABLE IF EXISTS `t_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_material` (
  `id_material` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `descripcion` text,
  `id_tipomaterial` int(10) unsigned NOT NULL DEFAULT '0',
  `creado` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modificado` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_material`),
  KEY `FK_t_material_1` (`id_tipomaterial`),
  CONSTRAINT `FK_t_material_1` FOREIGN KEY (`id_tipomaterial`) REFERENCES `t_tipomaterial` (`id_tipomaterial`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_material`
--

LOCK TABLES `t_material` WRITE;
/*!40000 ALTER TABLE `t_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipomaterial`
--

DROP TABLE IF EXISTS `t_tipomaterial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipomaterial` (
  `id_tipomaterial` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipomaterial` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tipomaterial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipomaterial`
--

LOCK TABLES `t_tipomaterial` WRITE;
/*!40000 ALTER TABLE `t_tipomaterial` DISABLE KEYS */;
INSERT INTO `t_tipomaterial` VALUES (1,'Electronica'),(2,'Electricidad'),(3,'Ferreteria');
/*!40000 ALTER TABLE `t_tipomaterial` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-12 20:20:40
