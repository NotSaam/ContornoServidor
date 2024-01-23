CREATE DATABASE if NOT EXISTS 'laboratorio'
USE 'laboratorio';

-- Tabla "categorias"
CREATE TABLE categorias (
    Cod_Cat INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Descripcion VARCHAR(255),
    Activa BOOLEAN
  );

  INSERT INTO `categorias` (`Cod_Cat`, `Nombre`, `Descripcion`,`Activa`) VALUES
  (1,'ProtImpl', 'Protesis sobre implantes',true),
  (2,'ProtFija', 'Prótesis fija ',true),
  (3,'Compost', 'Composturas' , true), 
  (4,'ProtRemov', 'Prótesis Removibles',true),
  (5,'FerMichi', 'Férulas tipo Michigan' ,true);

-- Tabla "productos"
CREATE TABLE productos (
    Cod_Producto INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Info VARCHAR(255),
    Peso DECIMAL(10, 2),
    Stock INT,
    Activo BOOLEAN,
    Costo DECIMAL(10, 2),
    Cod_Categoria INT,
    FOREIGN KEY (Cod_Categoria) REFERENCES categorias(Cod_Cat)
  );

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

-- Tabla "rol"
CREATE TABLE rol (
    Cod_Rol INT PRIMARY KEY,
    Descrip VARCHAR(255)
  );

  INSERT INTO `rol` (`CodRol`, `Descripcion`,) VALUES
	(1,  'admin'),
	(2, 'xefe');
	(3, 'cliente');

-- Tabla "estado"
CREATE TABLE estado (
    Cod_Estado INT PRIMARY KEY,
    Tipo VARCHAR(255)
  );  

-- Tabla "usuarios"
CREATE TABLE usuarios (
    Cod_User INT PRIMARY KEY,
    Correo VARCHAR(255),
    Clave VARCHAR(255),
    Direccion VARCHAR(255),
    Cod_Rol INT,
    FOREIGN KEY (Cod_Rol) REFERENCES rol(Cod_Rol)
  );

  INSERT INTO `usuarios` (`CodRes`, `Correo`, `Clave`, `Pais`, `CP`, `Ciudad`, `Direccion`, `Rol`) VALUES
	(1, 'sam', '1234', 'España', 15150, 'Baio', 'Bispo Romero', 1),
	(2, 'maria', 'abc123.', 'España',15129 , 'Zas', 'Vilachan ',2);

-- Tabla "pedidos"
CREATE TABLE pedidos (
    Cod_Pedido INT PRIMARY KEY,
    Fecha DATE,
    Precio_total DECIMAL(10, 2),
    Cod_User INT,
    Cod_Estado INT,
    FOREIGN KEY (Cod_User) REFERENCES usuarios(Cod_User),
    FOREIGN KEY (Cod_Estado) REFERENCES estado(Cod_Estado)
  );
  INSERT INTO `pedidos` (`CodPed`,`Cod_User`, `Fecha`,`Precio_total`, `Cod_Estado`) VALUES
	(3, '2022-11-27 19:23:14', 0, 2),
	(4, '2022-11-27 19:24:17', 0, 2),
	(5, '2022-11-27 19:25:39', 0, 2);  

-- Tabla "productospedidos"
CREATE TABLE productospedidos (
    Cod_ProdPed INT PRIMARY KEY,
    Unidades INT,
    Precio DECIMAL(10, 2),
    Cod_Pedido INT,
    Cod_Producto INT,
    FOREIGN KEY (Cod_Pedido) REFERENCES pedidos(Cod_Pedido),
    FOREIGN KEY (Cod_Producto) REFERENCES productos(Cod_Producto)
  );

  INSERT INTO `pedidosproductos` (`CodPredProd`, `CodPed`, `CodProd`, `Unidades`) VALUES
	(1, 3, 5, 2),
	(2, 3, 4, 2),
	(3, 4, 5, 2),
	(4, 4, 4, 2),
	(5, 5, 5, 2),
	(6, 5, 4, 2),
	(7, 5, 1, 1);

-- Tabla "log"
CREATE TABLE log (
    Cod_Log INT PRIMARY KEY,
    Cod_User INT,
    Detalles VARCHAR(255),
    FOREIGN KEY (Cod_User) REFERENCES usuarios(Cod_User)
  );