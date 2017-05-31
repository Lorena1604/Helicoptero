CREATE DATABASE  IF NOT EXISTS `helirepbd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `helirepbd`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: helirepbd
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `detallesolicitudes`
--

DROP TABLE IF EXISTS `detallesolicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallesolicitudes` (
  `idDetalleSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `solicitud` int(11) NOT NULL,
  `suministro` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idDetalleSolicitud`),
  KEY `detalleSuministro_idx` (`suministro`),
  KEY `detalleSolicitud_idx` (`solicitud`),
  CONSTRAINT `detalleSolicitud` FOREIGN KEY (`solicitud`) REFERENCES `solicitudes` (`idSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalleSuministro` FOREIGN KEY (`suministro`) REFERENCES `suministros` (`idSuministro`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallesolicitudes`
--

LOCK TABLES `detallesolicitudes` WRITE;
/*!40000 ALTER TABLE `detallesolicitudes` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallesolicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entregas`
--

DROP TABLE IF EXISTS `entregas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entregas` (
  `idEntrega` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEntrega` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `jefeBodega` int(11) NOT NULL,
  `solicitud` int(11) NOT NULL,
  PRIMARY KEY (`idEntrega`),
  KEY `entregaSolicitud_idx` (`solicitud`),
  KEY `entregaJefeBodega_idx` (`jefeBodega`),
  CONSTRAINT `entregaJefeBodega` FOREIGN KEY (`jefeBodega`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entregaSolicitud` FOREIGN KEY (`solicitud`) REFERENCES `solicitudes` (`idSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entregas`
--

LOCK TABLES `entregas` WRITE;
/*!40000 ALTER TABLE `entregas` DISABLE KEYS */;
/*!40000 ALTER TABLE `entregas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `helicopteros`
--

DROP TABLE IF EXISTS `helicopteros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `helicopteros` (
  `idHelicoptero` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `carretaje` enum('Si','No') NOT NULL,
  PRIMARY KEY (`idHelicoptero`),
  KEY `helicopteroModelo_idx` (`modelo`),
  CONSTRAINT `helicopteroModelo` FOREIGN KEY (`modelo`) REFERENCES `modeloshelicoptero` (`idModeloHelicoptero`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `helicopteros`
--

LOCK TABLES `helicopteros` WRITE;
/*!40000 ALTER TABLE `helicopteros` DISABLE KEYS */;
/*!40000 ALTER TABLE `helicopteros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modeloshelicoptero`
--

DROP TABLE IF EXISTS `modeloshelicoptero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modeloshelicoptero` (
  `idModeloHelicoptero` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(45) NOT NULL,
  `tipoHelicoptero` int(11) NOT NULL,
  PRIMARY KEY (`idModeloHelicoptero`),
  KEY `modeloTipo_idx` (`tipoHelicoptero`),
  CONSTRAINT `modeloTipo` FOREIGN KEY (`tipoHelicoptero`) REFERENCES `tipohelicopteros` (`idTipoHelicoptero`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modeloshelicoptero`
--

LOCK TABLES `modeloshelicoptero` WRITE;
/*!40000 ALTER TABLE `modeloshelicoptero` DISABLE KEYS */;
/*!40000 ALTER TABLE `modeloshelicoptero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `idPermiso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `url` varchar(100) NOT NULL,
  `permisoPadre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPermiso`),
  KEY `permisosPadreMenu_idx` (`permisoPadre`),
  CONSTRAINT `permisosPadreMenu` FOREIGN KEY (`permisoPadre`) REFERENCES `permisos` (`idPermiso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nit` bigint(20) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rolespermisos`
--

DROP TABLE IF EXISTS `rolespermisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rolespermisos` (
  `rol` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  PRIMARY KEY (`rol`,`permiso`),
  KEY `rolPermisoPermiso_idx` (`permiso`),
  CONSTRAINT `rolPermisoPermiso` FOREIGN KEY (`permiso`) REFERENCES `permisos` (`idPermiso`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rolPermisoRol` FOREIGN KEY (`rol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rolespermisos`
--

LOCK TABLES `rolespermisos` WRITE;
/*!40000 ALTER TABLE `rolespermisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `rolespermisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes` (
  `idSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `helicoptero` int(11) NOT NULL,
  `tipoSolicitud` int(11) NOT NULL,
  `fechaSolicitud` date NOT NULL,
  `estadoSolicitud` enum('Aprobado','Rechazado','Pendiente','Entregado','Finalizado') NOT NULL,
  `fechaRevision` datetime DEFAULT NULL,
  PRIMARY KEY (`idSolicitud`),
  KEY `usuarioSolicitud_idx` (`usuario`),
  KEY `helicopteroSolicitud_idx` (`helicoptero`),
  KEY `tiposSolicitud_idx` (`tipoSolicitud`),
  CONSTRAINT `helicopteroSolicitud` FOREIGN KEY (`helicoptero`) REFERENCES `helicopteros` (`idHelicoptero`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tiposSolicitud` FOREIGN KEY (`tipoSolicitud`) REFERENCES `tipossolicitud` (`idTipoSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarioSolicitud` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suministros`
--

DROP TABLE IF EXISTS `suministros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suministros` (
  `idSuministro` int(11) NOT NULL,
  `material` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  PRIMARY KEY (`idSuministro`),
  KEY `proveedores/suministros_idx` (`proveedor`),
  CONSTRAINT `proveedorSuministro` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suministros`
--

LOCK TABLES `suministros` WRITE;
/*!40000 ALTER TABLE `suministros` DISABLE KEYS */;
/*!40000 ALTER TABLE `suministros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipohelicopteros`
--

DROP TABLE IF EXISTS `tipohelicopteros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipohelicopteros` (
  `idTipoHelicoptero` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoHelicoptero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipohelicopteros`
--

LOCK TABLES `tipohelicopteros` WRITE;
/*!40000 ALTER TABLE `tipohelicopteros` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipohelicopteros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipossolicitud`
--

DROP TABLE IF EXISTS `tipossolicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipossolicitud` (
  `idTipoSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoSolicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipossolicitud`
--

LOCK TABLES `tipossolicitud` WRITE;
/*!40000 ALTER TABLE `tipossolicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipossolicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `rol` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(55) NOT NULL,
  `apellidos` varchar(75) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `genero` enum('Femenino','Masculino') NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  KEY `usuarioRol_idx` (`rol`),
  CONSTRAINT `usuarioRol` FOREIGN KEY (`rol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'helirepbd'
--

--
-- Dumping routines for database 'helirepbd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-27  8:30:44
