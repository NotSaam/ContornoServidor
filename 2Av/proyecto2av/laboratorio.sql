CREATE DATABASE if NOT EXISTS 'laboratorio'
USE 'laboratorio';

CREATE TABLE if NOT exists `categorias` (
	`Cod_Cat` INT(11) NOT NULL AUTO_INCREMENT,
	`Nombre` VARCHAR(50) NOT NULL,
	`Descripcion` VARCHAR(200) NOT NULL,
	`Activa` boolean NOT NULL,
	PRIMARY KEY (`Cod_Cat`) 
	)
INSERT INTO `categorias` (`Cod_Cat`, `Nombre`, `Descripcion`,`Activa`) VALUES
(1,'ProtImpl', 'Protesis sobre implantes',true),
(2,'ProtFija', 'Prótesis fija ',true),
(3,'Compost', 'Composturas' , true), 
(4,'ProtRemov', 'Prótesis Removibles',true),
(5,'FerMichi', 'Férulas tipo Michigan' ,true);



CREATE TABLE IF NOT EXISTS `pedidos` (
  `Cod_Pedido` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_User` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Precio_total` float NOT NULL,
  `Cod_Estado` int(11) NOT NULL,
  PRIMARY KEY (`CodPed`),
  KEY `CodUser` (`Cod_User`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Cod_User`) REFERENCES `usuarios` (`Cod_User`)
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

  INSERT INTO `pedidos` (`CodPed`,`Cod_User`, `Fecha`,`Precio_total`, `Cod_Estado`) VALUES
	(3, '2022-11-27 19:23:14', 0, 2),
	(4, '2022-11-27 19:24:17', 0, 2),
	(5, '2022-11-27 19:25:39', 0, 2);

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

INSERT INTO `pedidosproductos` (`CodPredProd`, `CodPed`, `CodProd`, `Unidades`) VALUES
	(1, 3, 5, 2),
	(2, 3, 4, 2),
	(3, 4, 5, 2),
	(4, 4, 4, 2),
	(5, 5, 5, 2),
	(6, 5, 4, 2),
	(7, 5, 1, 1);

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

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cod_User` int(11) NOT NULL,
  `Correo` varchar(90) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL,
  `Localidad` varchar(45) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Cod_Rol`
  PRIMARY KEY (`CodUser`),
  UNIQUE KEY `UN_RES_COR` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `usuarios` (`CodRes`, `Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES
	(1, 'sam', '1234', 'España', 15150, 'Baio', 'Bispo Romero', 'admin'),
	(2, '', '', '', , '', ' ');

CREATE TABLE IF NOT EXISTS `rol` (
  `CodRol` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`CodRol`),
  UNIQUE KEY `UN_RES_COR` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `rol` (`CodRol`, `Tipo`,) VALUES
	(1, 'sam', 'admin'),
	(2, '', '', '', , '', ' ');


CREATE TABLE IF NOT EXISTS `estado` (
  `Cod_Estado` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Cod_Estado`),
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



  CREATE TABLE IF NOT EXISTS `log` (
  `Cod_User` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`Cod_User`),
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;