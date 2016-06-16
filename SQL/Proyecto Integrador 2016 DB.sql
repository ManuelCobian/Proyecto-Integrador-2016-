-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: pi
-- ------------------------------------------------------
-- Server version	5.6.28-log

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
-- Table structure for table `datoscapturados`
--

DROP TABLE IF EXISTS `datoscapturados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datoscapturados` (
  `dat_id` int(255) NOT NULL AUTO_INCREMENT,
  `dat_id_Dispositivo` int(255) NOT NULL,
  `dat_id_sensor` int(255) NOT NULL,
  `dat_dc_dato` double(255,0) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dat_id`),
  KEY `fk_datos_divices` (`dat_id_Dispositivo`),
  KEY `fk_dat_senso` (`dat_id_sensor`),
  CONSTRAINT `fk_dat_senso` FOREIGN KEY (`dat_id_sensor`) REFERENCES `sensores` (`sen_idSensores`) ON DELETE CASCADE,
  CONSTRAINT `fk_datos_divices` FOREIGN KEY (`dat_id_Dispositivo`) REFERENCES `dispositivos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datoscapturados`
--

LOCK TABLES `datoscapturados` WRITE;
/*!40000 ALTER TABLE `datoscapturados` DISABLE KEYS */;
INSERT INTO `datoscapturados` VALUES (1,2,2,32,'2016-06-13 00:47:26'),(2,3,1,43,'2016-06-14 02:14:13');
/*!40000 ALTER TABLE `datoscapturados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dispositivos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `NombreDispositivo` varchar(255) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dis_loc` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_divices_sta` (`Status`),
  KEY `fk_divices_ubi` (`dis_loc`),
  CONSTRAINT `fk_divices_sta` FOREIGN KEY (`Status`) REFERENCES `status` (`st_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_divices_ubi` FOREIGN KEY (`dis_loc`) REFERENCES `ubicacion` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivos`
--

LOCK TABLES `dispositivos` WRITE;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
INSERT INTO `dispositivos` VALUES (2,'Galileo',5,'2016-06-13 00:46:09',1),(3,'Pic',5,'2016-06-09 13:34:25',1),(4,'Pit',5,'2016-06-09 13:34:27',1);
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('lcobian_@ucol.mx','15813f9020c22770937a19b1de58a1f9eee06372585e16ffd5902445273c8f15','2016-06-13 19:56:42'),('ventanadeesperanza@hotmail.com','0c7900e31efd03fb0c86d545a429092d8577dd251e98493eb9db4a076b420430','2016-06-13 20:08:35');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `per_idPermisos` int(255) NOT NULL AUTO_INCREMENT,
  `per_NombrePermiso` varchar(255) DEFAULT NULL,
  `per_id_Status` int(11) NOT NULL,
  `per_fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`per_idPermisos`),
  KEY `fk_permi_sta` (`per_id_Status`),
  CONSTRAINT `fk_permi_sta` FOREIGN KEY (`per_id_Status`) REFERENCES `status` (`st_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` VALUES (1,'visualizar datos',1,'2016-05-11 06:09:05');
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisoverdispositivo`
--

DROP TABLE IF EXISTS `permisoverdispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisoverdispositivo` (
  `Per_idVisPermiso` int(255) NOT NULL AUTO_INCREMENT,
  `Per_id_Permisos` int(255) NOT NULL,
  `Per_id_Usuario` int(255) NOT NULL,
  `Per_id_Dispositivo` mediumint(8) unsigned DEFAULT NULL,
  `Status` enum('') DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Per_idVisPermiso`),
  KEY `fk_user_perm` (`Per_id_Usuario`),
  KEY `fk_permiso` (`Per_id_Permisos`),
  CONSTRAINT `fk_permiso` FOREIGN KEY (`Per_id_Permisos`) REFERENCES `permisos` (`per_idPermisos`) ON DELETE CASCADE,
  CONSTRAINT `fk_user_perm` FOREIGN KEY (`Per_id_Usuario`) REFERENCES `usuarios` (`us_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisoverdispositivo`
--

LOCK TABLES `permisoverdispositivo` WRITE;
/*!40000 ALTER TABLE `permisoverdispositivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisoverdispositivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensores`
--

DROP TABLE IF EXISTS `sensores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensores` (
  `sen_idSensores` int(255) NOT NULL AUTO_INCREMENT,
  `sen_NombreSensor` varchar(255) DEFAULT NULL,
  `sen_Status` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sen_idSensores`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensores`
--

LOCK TABLES `sensores` WRITE;
/*!40000 ALTER TABLE `sensores` DISABLE KEYS */;
INSERT INTO `sensores` VALUES (1,'temperatura',1,'2016-05-11 06:02:45'),(2,'humedad',1,'2016-05-11 06:35:44'),(3,'Calidad de aire',1,'2016-06-13 00:41:22'),(4,'detección de gases',1,'2016-05-11 06:35:44');
/*!40000 ALTER TABLE `sensores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `st_id` int(255) NOT NULL AUTO_INCREMENT,
  `st_nombre` varchar(10) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Permitido'),(2,'Deganado'),(3,'Admin'),(4,'Usuario'),(5,'Activo'),(6,'INACTIVO');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicacion` (
  `id` int(255) NOT NULL DEFAULT '0',
  `Municipio` varchar(255) DEFAULT NULL,
  `Calle` varchar(255) DEFAULT NULL,
  `Colonia` varchar(255) DEFAULT NULL,
  `Num_Ex` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacion`
--

LOCK TABLES `ubicacion` WRITE;
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
INSERT INTO `ubicacion` VALUES (1,'Colima','Minatitlan','Lopez Mateos',26);
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('usuarios','admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Luis cobian','lcobian_@ucol.mx','$2y$10$YFrRxCTa5G46ihybxLtIx.S7ONrupRo9F4YdrOd6wOjrhj0A4UHnm','usuarios','D4MvEKfvlezMubW90iYyieK6emzsLqlISUk2ZIAasvxzotrmuCVczCUmq7jB','2016-06-13 09:56:04','2016-06-14 23:53:28'),(7,'OSITO','ventanadeesperanza@hotmail.com','$2y$10$VKsxhfU9yUJYGiYDeYl2weOmD4cfr/qoJfwggxugArUBupAwKJpDm','usuarios','oavs5FVago8r4pOolGVCvWuwcyJSR0NwMYkgCsHTejHfopwMlzQDJ0ey2Boy','2016-06-13 20:08:20','2016-06-13 20:08:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `us_id` int(255) NOT NULL AUTO_INCREMENT,
  `us_Usuario` varchar(255) DEFAULT NULL,
  `us_Password` varchar(255) DEFAULT NULL,
  `us_id_Status` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`us_id`),
  KEY `fk_user_sta` (`us_id_Status`),
  CONSTRAINT `fk_user_sta` FOREIGN KEY (`us_id_Status`) REFERENCES `status` (`st_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'DirectorPassword','Director',6,'2016-05-11 06:14:37');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-14 16:11:39
