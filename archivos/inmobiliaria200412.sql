CREATE DATABASE  IF NOT EXISTS `inmobiliaria` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `inmobiliaria`;
-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: inmobiliaria
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

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
-- Table structure for table `barrio`
--

DROP TABLE IF EXISTS `barrio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barrio` (
  `idBarrio` int(11) NOT NULL AUTO_INCREMENT,
  `valorBarrio` varchar(30) NOT NULL,
  PRIMARY KEY (`idBarrio`),
  UNIQUE KEY `valorBarrio` (`valorBarrio`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrio`
--

LOCK TABLES `barrio` WRITE;
/*!40000 ALTER TABLE `barrio` DISABLE KEYS */;
INSERT INTO `barrio` VALUES (5,'Bulogne'),(7,'Don Torcuato'),(8,'El Talar'),(12,'General Pacheco'),(9,'Los Troncos del Talar'),(10,'Ricardo Rojas'),(11,'Rincón de Milberg'),(2,'San Fernando'),(6,'San Isidro'),(1,'Tigre'),(3,'Victoria'),(4,'Virreyes');
/*!40000 ALTER TABLE `barrio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `valorEstado` varchar(30) NOT NULL,
  PRIMARY KEY (`idEstado`),
  UNIQUE KEY `valorEstado` (`valorEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (2,'alquiler'),(1,'venta');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `idImagen` int(20) NOT NULL AUTO_INCREMENT,
  `idPropiedad` int(20) NOT NULL,
  `imgNombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idImagen`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,0,'noDisponible.jpg'),(30,1,'01.jpg'),(31,1,'02.jpg'),(32,1,'03.jpg'),(33,1,'04.jpg'),(34,2,'02.jpg');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propiedades` (
  `idPropiedad` int(11) NOT NULL AUTO_INCREMENT,
  `idEstado` int(10) NOT NULL,
  `idTipo` int(10) NOT NULL,
  `idBarrio` int(10) NOT NULL,
  `ambientes` int(2) NOT NULL,
  `proTitulo` varchar(150) NOT NULL,
  `proDireccion` varchar(60) NOT NULL,
  `proPrecio` int(11) NOT NULL,
  `proDescripcion` text DEFAULT NULL,
  `proDormitorios` int(2) DEFAULT NULL,
  `proBaños` int(2) NOT NULL,
  `proSupTotal` int(5) NOT NULL,
  `proSupCubierta` int(5) DEFAULT NULL,
  `proSupSemi` int(5) DEFAULT NULL,
  `proAntiguedad` int(3) DEFAULT NULL,
  `proCocheras` int(2) DEFAULT NULL,
  `proPileta` tinyint(1) DEFAULT 0,
  `proQuincho` tinyint(1) DEFAULT 0,
  `proParrilla` tinyint(1) DEFAULT 0,
  `proJardin` tinyint(1) DEFAULT 0,
  `proLuzEle` tinyint(1) DEFAULT 0,
  `proAguaCorriente` tinyint(1) DEFAULT 0,
  `proAguaPozo` tinyint(1) DEFAULT 0,
  `proGasNatural` tinyint(1) DEFAULT 0,
  `proGasEmbasado` tinyint(1) DEFAULT 0,
  `proCloacas` tinyint(1) DEFAULT 0,
  `idImagenPrincipal` int(20) DEFAULT NULL,
  PRIMARY KEY (`idPropiedad`),
  KEY `fk_estado` (`idEstado`),
  KEY `fk_tipo` (`idTipo`),
  KEY `fk_barrio` (`idBarrio`),
  CONSTRAINT `fk_barrio` FOREIGN KEY (`idBarrio`) REFERENCES `barrio` (`idBarrio`),
  CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  CONSTRAINT `fk_tipo` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (1,1,1,1,3,'Casa en Venta en Tigre','Alberti N° 1156',150000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,300,200,100,10,1,1,0,1,1,1,1,0,1,0,1,30),(2,1,1,1,2,'Casa en Venta en Tigre','Guido N° 569',90000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,150,0,0,20,2,1,1,1,1,1,1,0,1,0,1,34),(3,1,1,1,4,'Casa en Venta en Tigre','Aguado N° 6700',250000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,420,320,100,30,2,1,1,1,1,1,1,0,0,0,1,1),(4,1,1,2,3,'Casa en Venta en San Fernando','Belgrano N° 390',160000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,350,0,0,15,1,1,0,1,1,1,1,0,1,0,1,1),(5,1,1,2,2,'Casa en Venta en San Fernando','Gral. Lavalle N° 2300',97000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,110,0,0,25,2,1,1,1,1,1,1,0,1,0,1,1),(6,1,1,3,3,'Casa en Venta en Victoria','Guido Espano N° 3300',105000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,95,0,0,35,2,1,1,1,1,1,1,0,0,0,1,1),(7,1,1,4,4,'Casa en Venta en Virreyes','Suipacha N° 280',170000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,1,410,320,90,26,2,1,1,1,1,1,1,0,1,0,1,1),(8,1,1,6,2,'Casa en Venta en San Isidro','Jacinto Diaz N° 926',87000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,105,0,0,18,1,1,0,1,1,1,1,0,1,0,1,1),(9,1,2,1,3,'Departamento en Venta en Tigre','Av. Cazon N° 800',155000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,97,0,0,0,0,0,0,0,0,1,1,0,1,0,1,1),(10,1,2,1,2,'Departamento en Venta en Tigre','Zuviria N° 380',125000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,60,0,0,0,0,0,0,0,0,1,1,0,1,0,1,1),(11,1,2,1,4,'Departamento en Venta en Tigre','Av. Italia N° 899',220000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,410,310,100,10,1,1,0,0,0,1,1,0,1,0,1,1),(12,1,2,2,3,'Departamento en Venta en San Fernando','Sobremonte N° 1528',163000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,98,0,0,10,1,1,0,0,0,1,1,0,1,0,1,1),(13,1,2,2,2,'Departamento en Venta en San Fernando','Sarmiento N° 1803',102000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,89,0,0,10,1,1,0,0,0,1,1,0,1,0,1,1),(14,1,2,3,3,'Departamento en Venta en Victoria','Ing. White N° 1153',107000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,115,0,0,15,1,1,1,0,0,1,1,0,0,0,1,1),(15,1,2,4,4,'Departamento en Venta en Virreyes','Av. Avellaneda N° 3056',195000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,1,130,0,0,20,1,1,1,0,0,1,1,0,0,0,1,1),(16,1,2,6,2,'Departamento en Venta en San Isidro','Diego Palma N° 1411',116000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,106,0,0,20,1,1,1,1,1,1,1,0,0,0,1,1),(17,2,1,1,2,'Casa en Alquiler en Tigre','Primera Junta N° 276',14000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,55,0,0,10,1,1,0,1,1,1,1,0,1,0,1,1),(18,2,1,1,2,'Casa en Alquiler en Tigre','Peron N° 4400',18500,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,136,75,0,20,2,1,1,1,1,1,1,0,1,0,1,1),(19,2,1,1,2,'Casa en Alquiler en Tigre','Buschiazo N° 1700',25000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,110,80,0,30,2,1,1,1,1,1,1,0,0,0,1,1),(20,2,1,1,3,'Casa en Alquiler en Tigre','Solis N° 100',28000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,120,90,0,15,1,1,0,1,1,1,1,0,1,0,1,1),(21,2,1,1,3,'Casa en Alquiler en Tigre','Reinoso N° 2417',32000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,165,100,0,25,2,1,1,1,1,1,1,0,1,0,1,1),(22,2,1,1,3,'Casa en Alquiler en Tigre','italia N° 1600',35000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,2,180,110,0,35,2,1,1,1,1,1,1,0,0,0,1,1),(23,2,2,1,1,'Departamento en Alquiler en Tigre','Montevideo N° 1300',15000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,44,0,0,0,0,0,0,0,0,1,1,0,1,0,1,1),(24,2,2,1,1,'Departamento en Alquiler en Tigre','Lavalle N° 50',18000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,65,55,5,0,0,0,0,0,0,1,1,0,1,0,1,1),(25,2,2,1,1,'Departamento en Alquiler en Tigre','Luis Garcia N° 1730',19000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',0,1,70,0,0,10,1,1,0,0,0,1,1,0,1,0,1,1),(26,2,2,1,2,'Departamento en Alquiler en Tigre','Montes de oca N° 339',23000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,80,75,5,10,1,1,0,0,0,1,1,0,1,0,1,1),(28,2,2,1,2,'Departamento en Alquiler en Tigre','España N° 1100',24000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',1,1,85,0,0,15,1,1,1,0,0,1,1,0,0,0,1,1),(29,2,2,1,3,'Departamento en Alquiler en Tigre','Boyero N° 1600',28000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,90,0,0,20,1,1,1,0,0,1,1,0,0,0,1,1),(30,2,2,1,4,'Departamento en Alquiler en Tigre','Bartome Mitre N° 380',32000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',3,2,110,0,0,20,1,1,1,0,0,1,1,0,0,0,1,1),(31,2,2,1,2,'Departamento en Alquiler en Tigre','Mexi 1485',40000,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu efficitur ipsum. Vivamus at dui ac nibh elementum ultricies sit amet vel sem. Suspendisse non mauris ut metus consectetur venenatis. Vestibulum commodo risus a eros aliquet, in sodales erat euismod. Duis aliquet efficitur ex nec suscipit. In congue congue ultrices. Pellentesque eget erat mollis, volutpat augue quis, ultricies tortor. Morbi in magna commodo, tristique enim at, ultricies purus. Curabitur eget ullamcorper tortor, ac vulputate ante.',2,1,150,0,0,20,0,0,0,0,0,0,0,0,0,0,0,1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `valorTipo` varchar(30) NOT NULL,
  PRIMARY KEY (`idTipo`),
  UNIQUE KEY `valorTipo` (`valorTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'casa'),(2,'departamento'),(4,'duplex'),(6,'local'),(3,'ph'),(5,'terreno');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuNombre` varchar(30) NOT NULL,
  `usuApellido` varchar(30) NOT NULL,
  `usuEmail` varchar(30) NOT NULL,
  `usuPass` varchar(30) NOT NULL,
  `usuEstado` tinyint(1) NOT NULL DEFAULT 0,
  `usutipo` varchar(45) NOT NULL DEFAULT 'invitado',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuEmail` (`usuEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'fernando','pereyra','ferfit16@gmail.com','nohayclave',1,'admin'),(2,'gustavo','magliano','gustmag@yahoo.com','1234',1,'invitado'),(3,'diego','chiapa','diegochiapa@gmail.com','abcd',1,'admin');
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

-- Dump completed on 2020-04-12 19:52:13
