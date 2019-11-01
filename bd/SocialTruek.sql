CREATE DATABASE  IF NOT EXISTS `socialtruek` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `socialtruek`;
-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: socialtruek
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'autos'),(2,'inmuebles'),(3,'hogar'),(4,'herramientas'),(5,'libros'),(6,'juguetes'),(7,'rodados'),(8,'celulares'),(9,'otros');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `val_product` decimal(1,1) DEFAULT NULL,
  `fecha_posteo` datetime NOT NULL,
  `foto1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_id_idx` (`usuario_id`),
  KEY `fk_categoria_id_idx` (`categoria_id`),
  CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Peugeot Partner 1.4 Furgon Confort','Peugeot Partner 1.4 Furgon Confort',4300,NULL,'2019-10-29 11:25:03','5db8137fc84a8.jpg','5db8137fc8513.jpg','5db8137fc8568.jpg',1,1),(2,'Kia Sportage 2.0 Ex At 154cv 4x2','Kia Sportage 2.0 Ex At 154cv 4x2',9860,NULL,'2019-10-29 13:20:24','5db82e885b577.jpg','5db82e885b5c0.jpg','5db82e885b603.jpg',1,2),(3,'Chevrolet Spin 1.8 Ltz 7as 105cv','Chevrolet Spin 1.8 Ltz 7as 105cv',5750,NULL,'2019-10-29 13:25:30','5db82fba81201.jpg','5db82fba81281.jpg','5db82fba812f6.jpg',1,3),(4,'Chevrolet Onix 1.4LS JOY+ 98cv','Impecable de mecánica. Todos los service al día.\nKilometraje 100% real y comprobable\nNunca tuvo un choque. Todo original. Muy buen estado interior y exterior',4150,NULL,'2019-11-01 13:06:11','5dbc1fb390bb4.jpg','5dbc1fb390c62.jpg','5dbc1fb390cd3.jpg',1,4),(5,'Toyota Corolla 1.8 Xli Mt 136cv ','Vehículo inmaculado. 50.000 km. Cubiertas nuevas. Asientos de cuero. Levanta vidrios eléctricos en las 4 puertas. Cierre centralizado. Alarma. Vtv y verificación policial recién hecha. Todo al día. Listo para transferir. Excelente estado general y del motor. Vale cada centavo.',4300,NULL,'2019-11-01 13:08:15','5dbc202f74712.jpg','5dbc202f747e4.jpg','5dbc202f74872.jpg',1,5),(6,'Honda HR-V 1.8 Lx 2wd Cvt','Vehículo listo para transferir. Papeles al día. Cuero original Honda. Primera mano. Todos los service oficiales hechos',8750,0.0,'2019-11-01 13:10:26','5dbc20b29e776.jpg','5dbc20b29e868.jpg','5dbc20b29e907.jpg',1,6),(7,'Peugeot 208 1.6 5P ALLURE','Impecable de mecánica. Todos los service al día. Kilometraje 100% real y comprobable. Nunca tuvo un choque. Todo original. Muy buen estado interior y exterior ',6590,0.0,'2019-11-01 13:12:06','5dbc2116cedc3.jpg','5dbc2116ceeae.jpg','5dbc2116cef44.jpg',1,7),(8,'Fiat Palio Essence 1.6 MT 16v. 5Ptas.','Un vehículo totalmente renovado, con una linea exterior más atractiva, mayor espacio interior tanto para pasajeros como equipaje y con mayor equipamiento tanto de confort como de seguridad. ',2900,NULL,'2019-11-01 13:15:10','5dbc21ce10c93.jpg','5dbc21ce10d2c.jpg','5dbc21ce10db1.jpg',1,8),(9,'Salon de Eventos','Amplio salón para usos múltiples',5900,NULL,'2019-11-01 17:15:34','5dbc5a2649e3d.jpg','5dbc5a2649eaa.jpg','5dbc5a2649efb.jpg',2,1),(10,'Casa de Lujo','Mansión de estilo academicista frances de principios de siglo XVIII',7000,NULL,'2019-11-01 17:21:57','5dbc5ba5334bd.jpg','5dbc5ba53352d.jpg','5dbc5ba53357d.jpg',2,2);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `truekes`
--

DROP TABLE IF EXISTS `truekes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `truekes` (
  `id` int(11) NOT NULL,
  `id_producto_1` int(11) NOT NULL,
  `id_producto_2` int(11) NOT NULL,
  `fecha_trueke` datetime NOT NULL,
  `trueke` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_producto_1_UNIQUE` (`id_producto_1`),
  UNIQUE KEY `id_producto_2_UNIQUE` (`id_producto_2`),
  CONSTRAINT `fk_producto_1` FOREIGN KEY (`id_producto_1`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_2` FOREIGN KEY (`id_producto_2`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `truekes`
--

LOCK TABLES `truekes` WRITE;
/*!40000 ALTER TABLE `truekes` DISABLE KEYS */;
/*!40000 ALTER TABLE `truekes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(512) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `avatar` varchar(512) DEFAULT NULL,
  `perfil` varchar(512) DEFAULT NULL,
  `val_user` decimal(1,1) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Eric','Mena','menaericdaniel@gmail.com','$2y$10$VRKeOkfsuinefaFkA2t7..cW8SDDN3wXO8Ak4MR3t66ilFu2.Ssmm','1976-03-03','h','perfilHombre.png ','5dbab0e8251ee.jpg',NULL,'General Pico #10631, barrio El Libertador, Loma Hermosa, Buenos Aires',1147394347,1134016800),(2,'Alexis','Veiga','veigalexis16@gmail.com','$2y$10$3gtsuupd4fz1DCXayxRPS.mEtGKiwdytD8cUq1TNAkPiUzDjhRUfO','1994-04-28','h','avatar01.png ','5db84bd775d88.jpg',NULL,NULL,NULL,NULL),(3,'Marcos','Palladini','marcospalladini3@gmail.com','$2y$10$Kk9ydNTYHoDj4FhclFKSuOEgIyzJl84wy.PML2ELouCaZm5mnmTzi','1988-03-14','h','avatar19.png ','5db21e80871cb.jpg',NULL,NULL,NULL,NULL),(4,'Brenda','Ruiz','brendaruiz@gmail.com','$2y$10$.PWAolL1hKNF/jerOkan..m5zqc9UfI1YVuHytZCc2u6.UnzTXD6a','1993-12-21','m','avatar10.png ','5db23d7ac2a3f.jpg',NULL,NULL,NULL,NULL),(5,'Micaela','Padilla','micaela@gmail.com','$2y$10$imD8p62zM6FXlmMU7yuEWeYjE9Vfx7/ndpTTDpB92WCAfxy0z8sLW','1989-10-21','m','perfilMujer.png ','5db244e788819.jpg',NULL,NULL,NULL,NULL),(6,'Sabrina','Molina','sabrina@gmail.com','$2y$10$5JK7XOIwF0vIyIsvxomM/ef1w6iqFdNuUStYjNGVk9Zax8JV88o.i','1959-04-14','m','avatar02.png ','5db84be28e3fc.jpg',NULL,NULL,NULL,NULL),(7,'Osvaldo','Medina','osvaldo@gmail.com','$2y$10$l6jvEKjL2OrhAGQ0iGp9yel8UJ9/TF7KN.oA3fz.bYb9TOdom0J1C','1987-05-23','h','avatar03.png ',NULL,NULL,NULL,NULL,NULL),(8,'Diego','Fuentes','diego@gmail.com','$2y$10$DqQhygDaDUvZovhzsRWpbuISW9tcV5lZZpP/VwsA4MeP4rejkG.dy','1986-12-12','h','avatar13.png ',NULL,NULL,NULL,NULL,NULL),(9,'Mariano','Toledo','mariano@gmail.com','$2y$10$GihWS/gm.Du2/P0TYpLpPu6kOIKcU3MAB.mlRp8SuVTaQ/xwWX8Ly','1990-08-15','h','avatar14.png ',NULL,NULL,NULL,NULL,NULL),(10,'Sandra','Perez','sandra@gmail.com','$2y$10$2Gi3ouFohMkMgv339g4BEuEbmLJbH.2VJiUwuQl1D/XLp9KnmlCBK','1967-05-04','m','avatar15.png ',NULL,NULL,NULL,NULL,NULL),(11,'Gloria','Sanchez','gloria@gmail.com','$2y$10$i9ZIRMwpiDIJaJV7c49.eO5zFo8RjyDAy7xURYN8CINjWVobL8JvS','1983-07-31','m','avatar17.png ',NULL,NULL,NULL,NULL,NULL),(12,'Rosa','Garcia','rosa@gmail.com','$2y$10$WJEYoUEN9hYKKmqUS9JVtOxQAYLJ8w3IpJU7vxD6fZldS9ZlynJ8O','1946-04-13','m','avatar04.png ',NULL,NULL,NULL,NULL,NULL),(13,'Ana','Guzman','ana@gmail.com','$2y$10$84lvinyTlmpweVWgFaiCceeoRL2Yxx7CK6wczY85Yu1ylB2mF9hX6','1968-10-26','m','avatar16.png ',NULL,NULL,NULL,NULL,NULL),(14,'Franco','Devita','franco@gmail.com','$2y$10$eb9rtcFdj39l3GtyFN3vAeBV.CiL2Uyf9UKeKMdfOTGCkfOcbA1HW','1967-12-03','h','avatar22.png ',NULL,NULL,NULL,NULL,NULL),(15,'Santiago','Zambrano','santiago@gmail.com','$2y$10$WbCmjCicOseTe.NCO1Ujlexo0pxgb8l6E/E6buDG3tCBmP4k5W1Tu','1999-03-02','h',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Nicolas','Gonzalez','nicolas@gmail.com','$2y$10$p8.Jzmvd6JytqS.b5meav.EgIyGiadBVuDVGkmpDRx7BhR3cf7TUO','1978-04-26','h',NULL,NULL,NULL,NULL,NULL,NULL),(17,'Julio','Lopez','julio@gmail.com','$2y$10$QYV9Gy8IA0tqsSUSLma2mOdIHqD/nFAz0A2xM/0CZ/L0WdL2cE6DC','1978-08-15','h',NULL,NULL,NULL,NULL,NULL,NULL),(18,'Eric','Mena','menaeric@hotmail.com','$2y$10$r9g.MlXqvP3o7RH.g2nzgepasUEubcuEylNepVFdR6woCGn7ZHLAK','1976-03-03','h','perfilDesconocido.png ',NULL,NULL,NULL,NULL,NULL),(19,'Micaela','Gomez','mica@gmail.com','$2y$10$3hkqvmIDx8EGXbCs90gmyObSySFY4LAACv/f72byGKhjZ1WOf4nmG','1978-10-12','i',NULL,NULL,NULL,NULL,NULL,NULL),(20,'Jose','Retamal','jose@gmail.com','$2y$10$TWjQlikyERr1Iq4WMdhRkutYPIdASpn9ld2gMa0ZYIKkm4nU6r/bm','1968-10-14','i','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(21,'Manuel','Rodriguez','manuel@gmail.com','$2y$10$SpxSNpQ5TU4eF4OJGHDDI.gp2rE26/wGtwY3uIkNti2UCtsjWD5zO','1978-11-20','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(22,'Claudio','Cáceres','claudio@gmail.com','$2y$10$Sji9paHBTsUekp41ubTIL.6DdYSObJQTVV3Mxe3jjfeq7le.lhNz6','1978-11-20','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(23,'Eduardo','Zelada','eduardo@gmail.com','$2y$10$p8OqYrUNZ.HeDb1YR0612O.TZOqTVsDZAzkzI.QTTfdhzp8CXvE1O','1962-11-28','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(24,'German','Ojeda','german@gmail.com','$2y$10$SlTOwZB4bLjG2ZQ5PKX4Y.mAUSWcExBlzMJABTt8WSZISKvOTCdua','1956-12-15','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(25,'Nicanor','Garcia','nicanor@gmail.com','$2y$10$mvcNb.RwhQgn55zu0mKNv.gFDPuJxrquQiNspzjpzQtgG0ym03eqG','1987-06-15','h','perfilDesconocido.png',NULL,NULL,NULL,NULL,NULL),(26,'Magdalena','Fuentes','magdalena@gmail.com','$2y$10$Zv1omQjCZPQ8I12wcnFpZu1yZs6An.Drhm19ueHccfjV3NgSKgy52','1976-12-30','m','perfilDesconocido.png','5dba0a7137d48.jpg',NULL,NULL,NULL,NULL),(27,'Gerardo','Morales','gerardo@gmail.com','$2y$10$qBnBdcxpz.8YLWGrCVRHe.vECGeFIQ4QFDYwWM2LvYWoBlEPHI.Fy','1979-08-15','h','avatar01.png ',NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2019-11-01 17:49:39
