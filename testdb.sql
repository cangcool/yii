# MySQL-Front 5.1  (Build 2.7)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: testdb
# ------------------------------------------------------
# Server version 5.5.27

DROP DATABASE IF EXISTS `testdb`;
CREATE DATABASE `testdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testdb`;

#
# Source for table tb_point
#

DROP TABLE IF EXISTS `tb_point`;
CREATE TABLE `tb_point` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pointname` tinytext NOT NULL,
  `Location` text NOT NULL,
  `Information` text,
  `Active` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Dumping data for table tb_point
#
LOCK TABLES `tb_point` WRITE;
/*!40000 ALTER TABLE `tb_point` DISABLE KEYS */;

/*!40000 ALTER TABLE `tb_point` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_point1
#

DROP TABLE IF EXISTS `tb_point1`;
CREATE TABLE `tb_point` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL DEFAULT '0000-00-00',
  `Time` time NOT NULL DEFAULT '00:00:00',
  `Quantity` int(11) unsigned NOT NULL DEFAULT '0',
  `Rate` float(10,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Dumping data for table tb_point1
#
LOCK TABLES `tb_point1` WRITE;
/*!40000 ALTER TABLE `tb_point1` DISABLE KEYS */;

INSERT INTO `tb_point1` VALUES (1,'0000-00-00','33:44:55',345,34);
INSERT INTO `tb_point1` VALUES (2,'0000-00-00','33:44:55',345,34);
INSERT INTO `tb_point1` VALUES (3,'0000-00-00','33:44:55',345,34);
INSERT INTO `tb_point1` VALUES (4,'0000-00-00','33:44:55',345,34);
INSERT INTO `tb_point1` VALUES (5,'0000-00-00','33:44:55',345,34);
INSERT INTO `tb_point1` VALUES (6,'2013-07-10','21:41:00',5000,100);
INSERT INTO `tb_point1` VALUES (7,'2013-07-10','21:41:00',5000,100);
INSERT INTO `tb_point1` VALUES (8,'2013-07-10','21:41:01',5000,100);
INSERT INTO `tb_point1` VALUES (9,'2013-07-10','21:44:18',5000,100);
INSERT INTO `tb_point1` VALUES (10,'2013-07-10','21:44:18',5000,100);
INSERT INTO `tb_point1` VALUES (11,'2013-07-10','21:44:19',5000,100);
INSERT INTO `tb_point1` VALUES (12,'2013-07-10','21:44:19',5000,100);
INSERT INTO `tb_point1` VALUES (13,'2013-07-10','23:28:05',5000,100);
INSERT INTO `tb_point1` VALUES (14,'2013-07-10','23:28:06',5000,100);
INSERT INTO `tb_point1` VALUES (15,'2013-07-10','23:28:06',5000,100);
INSERT INTO `tb_point1` VALUES (16,'2013-07-10','23:28:06',5000,100);
INSERT INTO `tb_point1` VALUES (17,'2013-07-10','23:28:06',5000,100);
/*!40000 ALTER TABLE `tb_point1` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tb_user
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text,
  `Password` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Dumping data for table tb_user
#
LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;

/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
