-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para laboratorio
CREATE DATABASE IF NOT EXISTS `laboratorio` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `laboratorio`;

-- Volcando estructura para tabla laboratorio.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `CodCat` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Activa`
  PRIMARY KEY (`CodCat`),
  UNIQUE KEY `UN_NOM_CAT` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla laboratorio.categorias: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`CodCat`, `Nombre`, `Descripcion`) VALUES
	(1,'ProtImpl', 'Protesis sobre implantes' ),
	(2, 'ProtFija', 'Prótesis fija ' ),
	(3, 'Compost', 'Composturas' );
	(4, 'ProtRemov', 'Prótesis Removibles' );
	(5, 'FerMichi', 'Férulas tipo Michigan' );
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla laboratorio.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `CodPed` int(11) NOT NULL AUTO_INCREMENT,
  `CodUser` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Precio_total` 
  `Cod_Estado` int(11) NOT NULL,
  PRIMARY KEY (`CodPed`),
  KEY `usuarios` (`usuarios`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`CodUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla pedidos.pedidos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`CodPed`, `Fecha`, `Enviado`, `CodUser`) VALUES
	(3, '2022-11-27 19:23:14', 0, 2),
	(4, '2022-11-27 19:24:17', 0, 2),
	(5, '2022-11-27 19:25:39', 0, 2);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Volcando estructura para tabla laboratorio.pedidosproductos
CREATE TABLE IF NOT EXISTS `pedidosproductos` (
  `CodPredProd` int(11) NOT NULL AUTO_INCREMENT,
  `CodPed` int(11) NOT NULL,
  `CodProd` int(11) NOT NULL,
  `Unidades` int(11) NOT NULL,
  `Precio` 
  PRIMARY KEY (`CodPredProd`),
  KEY `CodPed` (`CodPed`),
  KEY `CodProd` (`CodProd`),
  CONSTRAINT `pedidosproductos_ibfk_1` FOREIGN KEY (`CodPed`) REFERENCES `pedidos` (`CodPed`),
  CONSTRAINT `pedidosproductos_ibfk_2` FOREIGN KEY (`CodProd`) REFERENCES `productos` (`CodProd`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla laboratorio.pedidosproductos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidosproductos` DISABLE KEYS */;
INSERT INTO `pedidosproductos` (`CodPredProd`, `CodPed`, `CodProd`, `Unidades`) VALUES
	(1, 3, 5, 2),
	(2, 3, 4, 2),
	(3, 4, 5, 2),
	(4, 4, 4, 2),
	(5, 5, 5, 2),
	(6, 5, 4, 2),
	(7, 5, 1, 1);
/*!40000 ALTER TABLE `pedidosproductos` ENABLE KEYS */;

-- Volcando estructura para tabla laboratorio.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `CodProd` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(90) NOT NULL,
  `Peso` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `CodCat` int(11) NOT NULL,
  `Activo` boolean NOT NULL,
  `Precio` float NOT NULL,
  PRIMARY KEY (`CodProd`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla laboratorio.productos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`CodProd`, `Nombre`, `Peso`, `Stock`, `CodCat`,`Estado`, `Precio`) VALUES
	(1, 'Corona individual', 8, 100, 1,true,15.4)
	(2, 'Restauracion multiple atronillada y cementada',10 ,200 ,1 ,true,30),
	(3, 'Hibridas en resina sobre estructura colada y fresada',25,100 ,1,true ,27),
	(4, 'Restauraciones totales atornilladas de ceramica sobre metal',12 ,100 ,1,true,40),
	(5, 'Restauraciones totales sobre base de oxido de zirconio fresado',48, 100,1,true,35),
	(6, 'Protesis provisionales ',4 ,100 ,2 ,true,50.4);
	(7, 'Coronas individuales definitivas en: gradia(composite ultima generacion)', 14,100 ,2 ,true,12);
	(8, 'Coronas con base de óxido de zicornio y recubrimiento cerámico',9.23 ,100 ,2 ,true,24.15);
	(9, 'Coronas ceramo-metálicas', 7.26,100 ,2 ,true,25);
	(10, 'Coronas individuales en cerámica inyectada, de gran efecto estético', 5.67,100 ,2 ,true,20.5);
	(11, 'Restauraciones múltiples: desde puentes de 2 piezas hasta rehabilitaciones de 14,tanto sobre estructuras de óxido de zirconio como cerámica sobre metal', 6,100 ,2 ,true,55);
  (12,'Reparaciones de protesis acrilicas', , , , , ,)
  (13,'Soldaduras de estructuras de cromo cobalto', , , , , ,)
  (14,'Reposicion de piezas en protesis de resina y esqueleticas', , , , , ,)
  (15,'Agregado de piezas y ganchos en todo tipo de protesis', , , , , ,)
  (16,'Rebase de todo tipo de protesis', , , , , ,)
  (17,'En resina (completa y parciales)', , , , , ,)
  (18,'Con base metalica (esqueléticos con base de cromo-cobalto) ', , , , , ,)
  (19,'Combinada: con ataches en combinacion con elementos fijos', , , , , ,)
  (20,'En resina acrilica', , , , , ,)
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla laboratorio.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `CodUser` int(11) NOT NULL,
  `Correo` varchar(90) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `Localidad` varchar(45) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Cod_Rol`
  PRIMARY KEY (`CodUser`),
  UNIQUE KEY `UN_RES_COR` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla laboratorio.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarioss` DISABLE KEYS */;
INSERT INTO `usuarios` (`CodRes`, `Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES
	(1, 'sam', '1234', 'España', 15150, 'Baio', 'Bispo Romero', 'admin'),
	(2, '', '', '', , '', ' ');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- Volcando estructura para tabla laboratorio.usuarios
CREATE TABLE IF NOT EXISTS `rol` (
  `CodRol` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`CodRol`),
  UNIQUE KEY `UN_RES_COR` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `rol` (`CodRol`, `Tipo`,) VALUES
	(1, 'sam', 'admin'),
	(2, '', '', '', , '', ' ');

-- Volcando datos para la tabla laboratorio.usuarios: ~2 rows (aproximadamente)


/* Para saber el estado de un pedido */
CREATE TABLE IF NOT EXISTS `estado` (
  `Cod_Estado` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Cod_Estado`),
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



/* tener constancia de historial de movimientos de toda la base de datos */ 
  CREATE TABLE IF NOT EXISTS `log` (
  `Cod_User` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Cod_User`),
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;