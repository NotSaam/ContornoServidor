CREATE DATABASE if NOT EXISTS 'laboratorio'
USE 'laboratorio';

-- Tabla "categorias"
CREATE TABLE categorias (
    Cod_Categoria INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Descripcion VARCHAR(255),
    Activa BOOLEAN
    FOREIGN KEY (Cod_Estado) REFERENCES estado (Cod_Estado)
  );

  INSERT INTO `categorias` (`Cod_Categoria`, `Nombre`, `Descripcion`,`Cod_Estado`) VALUES
  (1,'ProtImpl', 'Protesis sobre implantes',1),
  (2,'ProtFija', 'Prótesis fija ',1),
  (3,'Compost', 'Composturas' , 1), 
  (4,'ProtRemov', 'Prótesis Removibles',1),
  (5,'FerMichi', 'Férulas tipo Michigan' ,1);

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
    FOREIGN KEY (Cod_Categoria) REFERENCES categorias(Cod_Categoria)
  );

  INSERT INTO `productos` (`Cod_Producto`, `Nombre`, `Peso`, `Stock`, `Cod_Categoria`, `Precio`) VALUES
	(1, 'Corona individual', 8, 100, 1,15.4)
	(2, 'Restauracion multiple atronillada y cementada',10 ,200 ,1,30),
	(3, 'Hibridas en resina sobre estructura colada y fresada',25,100 ,1,27),
	(4, 'Restauraciones totales atornilladas de ceramica sobre metal',12 ,100 ,1,40),
	(5, 'Restauraciones totales sobre base de oxido de zirconio fresado',48, 100,1,35),
	(6, 'Protesis provisionales ',4 ,100 ,2 ,50.4);
	(7, 'Coronas individuales definitivas en: gradia(composite ultima generacion)', 14,100 ,2 ,12);
	(8, 'Coronas con base de óxido de zicornio y recubrimiento cerámico',9.23 ,100 ,2 ,24.15);
	(9, 'Coronas ceramo-metálicas', 7.26,100 ,2 ,25);
	(10, 'Coronas individuales en cerámica inyectada, de gran efecto estético', 5.67,100 ,2 ,20.5);
	(11, 'Restauraciones múltiples: desde puentes de 2 piezas hasta rehabilitaciones de 14,tanto sobre estructuras de óxido de zirconio como cerámica sobre metal', 6,100 ,2 ,55);
  (12,'Reparaciones de protesis acrilicas', 40.5, 200 ,3 ,60.4 ),
  (13,'Soldaduras de estructuras de cromo cobalto', 80.2,200 ,3 ,100 ),
  (14,'Reposicion de piezas en protesis de resina y esqueleticas', 35.6,150 ,3 ,30 ),
  (15,'Agregado de piezas y ganchos en todo tipo de protesis',15.5 ,100 ,3 ,16 ),
  (16,'Rebase de todo tipo de protesis', 25.6,320 ,3 ,25),
  (17,'En resina (completa y parciales)',32.5 ,125 ,4 ,45),
  (18,'Con base metalica (esqueléticos con base de cromo-cobalto) ',47.5 ,130,4,35),
  (19,'Combinada: con ataches en combinacion con elementos fijos',35.5 ,125 ,5,25)
  (20,'En resina acrilica',27.5 ,35 ,5 ,17.5)

-- Tabla "rol"
CREATE TABLE rol (
    Cod_Rol INT PRIMARY KEY,
    Descrip VARCHAR(255)
  );

  INSERT INTO `rol` (`Cod_Rol`, `Descripcion`,) VALUES
	(1,  'admin'),
	(2, 'cliente');

-- Tabla "estado"
CREATE TABLE estado (
    Cod_Estado INT PRIMARY KEY,
    Tipo VARCHAR(255)
  ); 
    INSERT INTO `estado` (`Cod_Estado`, `Descripcion`,) VALUES
	(1,  'activa'),
	(2, 'desactivada');

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