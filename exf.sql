-- MySQL dump 10.14  Distrib 5.5.50-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: daw_1021514
-- ------------------------------------------------------
-- Server version	5.5.50-MariaDB

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
-- Table structure for table `Alumno`
--

DROP TABLE IF EXISTS `Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Npaterno` varchar(100) DEFAULT NULL,
  `amaterno` varchar(100) DEFAULT NULL,
  `matricula` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumno`
--

LOCK TABLES `Alumno` WRITE;
/*!40000 ALTER TABLE `Alumno` DISABLE KEYS */;
INSERT INTO `Alumno` VALUES (1,'Daniel','Monzalvo','Rodriguez','A01021514','danielmonr@gmail.com');
/*!40000 ALTER TABLE `Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vehiculos`
--

DROP TABLE IF EXISTS `Vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) NOT NULL,
  `placas` varchar(40) NOT NULL,
  `punto_entrada` varchar(100) NOT NULL,
  `hora_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vehiculos`
--

LOCK TABLES `Vehiculos` WRITE;
/*!40000 ALTER TABLE `Vehiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exf_Agencia`
--

DROP TABLE IF EXISTS `exf_Agencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exf_Agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exf_Agencia`
--

LOCK TABLES `exf_Agencia` WRITE;
/*!40000 ALTER TABLE `exf_Agencia` DISABLE KEYS */;
INSERT INTO `exf_Agencia` VALUES (1,'Tragencie','Algun lugar de la Mancha','agencia_1.jpeg','55408976');
/*!40000 ALTER TABLE `exf_Agencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exf_Clientes`
--

DROP TABLE IF EXISTS `exf_Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exf_Clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apaterno` varchar(25) DEFAULT NULL,
  `amaterno` varchar(25) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exf_Clientes`
--

LOCK TABLES `exf_Clientes` WRITE;
/*!40000 ALTER TABLE `exf_Clientes` DISABLE KEYS */;
INSERT INTO `exf_Clientes` VALUES (1,'Daniel','Monzalvo','Rodriguez','55407903','danielmonr@gmail.com','1111',NULL);
/*!40000 ALTER TABLE `exf_Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exf_Reservas`
--

DROP TABLE IF EXISTS `exf_Reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exf_Reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_viaje` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exf_Reservas`
--

LOCK TABLES `exf_Reservas` WRITE;
/*!40000 ALTER TABLE `exf_Reservas` DISABLE KEYS */;
INSERT INTO `exf_Reservas` VALUES (1,1,1);
/*!40000 ALTER TABLE `exf_Reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exf_Viajes`
--

DROP TABLE IF EXISTS `exf_Viajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exf_Viajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `partida` date DEFAULT NULL,
  `regreso` date DEFAULT NULL,
  `medio` varchar(25) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exf_Viajes`
--

LOCK TABLES `exf_Viajes` WRITE;
/*!40000 ALTER TABLE `exf_Viajes` DISABLE KEYS */;
INSERT INTO `exf_Viajes` VALUES (1,'Acapulco','Nacional','Viaja a la playa',1800,'2016-12-25','2016-12-28','Camion','http://www.visitmexico.com/work/models/VisitMexico30/WebPage/Acapulco/photoEscudo_Acapulco_acapulcomain2.jpg'),(4,'Miami','Internacional','VAmonos a Miami.',3000,'2016-12-07','2016-12-10','Avion',NULL),(5,'Paris','Internacional','Les lumieres, oh Paris.',4000,'2017-01-10','2017-01-20','Avion',NULL),(6,'Puebla','Nacional','OK.',800,'2017-01-10','2017-01-11','Camion',NULL),(7,'Canada','Internacional','Cold -.-',1000,'2017-02-01','2017-02-05','Barco',NULL);
/*!40000 ALTER TABLE `exf_Viajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `imagen` blob NOT NULL,
  `tipo` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-30 18:27:17
