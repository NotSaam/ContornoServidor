-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS laboratorio;
USE laboratorio;

-- Tabla "estado"
CREATE TABLE estado (
    Cod_Estado INT PRIMARY KEY,
    Tipo VARCHAR(255)
);

-- Datos iniciales para la tabla "estado"
INSERT INTO estado (Cod_Estado, Tipo) VALUES
    (1, 'activa'),
    (2, 'desactivada');

-- Tabla "rol"
CREATE TABLE rol (
    Cod_Rol INT PRIMARY KEY,
    Descripcion VARCHAR(255)
);

-- Datos iniciales para la tabla "rol"
INSERT INTO rol (Cod_Rol, Descripcion) VALUES
    (1, 'admin'),
    (2, 'cliente');

-- Tabla "usuarios"
CREATE TABLE usuarios (
    Cod_User INT PRIMARY KEY,
    Correo VARCHAR(255),
    Clave VARCHAR(255),
    Direccion VARCHAR(255),
    Cod_Rol INT,
    FOREIGN KEY (Cod_Rol) REFERENCES rol(Cod_Rol)
);

-- Datos iniciales para la tabla "usuarios"
INSERT INTO usuarios (Cod_User, Correo, Clave, Direccion, Cod_Rol) VALUES
    (1, 'sam', '1234', 'Bispo Romero', 1),
    (2, 'maria', 'abc123', 'Vilachan', 2);

-- Tabla "categorias"
CREATE TABLE categorias (
    Cod_Categoria INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Descripcion VARCHAR(255),
    Activa BOOLEAN,
    Cod_Estado INT,
    FOREIGN KEY (Cod_Estado) REFERENCES estado (Cod_Estado)
);

-- Datos iniciales para la tabla "categorias"
INSERT INTO categorias (Cod_Categoria, Nombre, Descripcion, Activa, Cod_Estado) VALUES
    (1, 'ProtImpl', 'Protesis sobre implantes', true, 1),
    (2, 'ProtFija', 'Prótesis fija', true, 1),
    (3, 'Compost', 'Composturas', true, 1),
    (4, 'ProtRemov', 'Prótesis Removibles', true, 1),
    (5, 'FerMichi', 'Férulas tipo Michigan', true, 1);

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

-- Datos iniciales para la tabla "productos"
INSERT INTO productos (Cod_Producto, Nombre, Info, Peso, Stock, Activo, Costo, Cod_Categoria) VALUES
    (1, 'Corona individual', NULL, 8, 100, true, 15.4, 1),
    (2, 'Restauracion multiple atronillada y cementada', NULL, 10, 200, true, 30, 1),
    (3, 'Hibridas en resina sobre estructura colada y fresada', NULL, 25, 100, true, 27, 1),
    (4, 'Restauraciones totales atornilladas de ceramica sobre metal', NULL, 12, 100, true, 40, 1),
    (5, 'Restauraciones totales sobre base de oxido de zirconio fresado', NULL, 48, 100, true, 35, 1),
    (6, 'Protesis provisionales', NULL, 4, 100, true, 50.4, 2),
    (7, 'Coronas individuales definitivas en: gradia(composite ultima generacion)', NULL, 14, 100, true, 12, 2),
    (8, 'Coronas con base de óxido de zirconio y recubrimiento cerámico', NULL, 9.23, 100, true, 24.15, 2),
    (9, 'Coronas ceramo-metálicas', NULL, 7.26, 100, true, 25, 2),
    (10, 'Coronas individuales en cerámica inyectada, de gran efecto estético', NULL, 5.67, 100, true, 20.5, 2),
    (11, 'Restauraciones múltiples: desde puentes de 2 piezas hasta rehabilitaciones de 14, tanto sobre estructuras de óxido de zirconio como cerámica sobre metal', NULL, 6, 100, true, 55, 2),
    (12, 'Reparaciones de protesis acrilicas', NULL, 40.5, 200, true, 60.4, 3),
    (13, 'Soldaduras de estructuras de cromo cobalto', NULL, 80.2, 200, true, 100, 3),
    (14, 'Reposicion de piezas en protesis de resina y esqueleticas', NULL, 35.6, 150, true, 30, 3),
    (15, 'Agregado de piezas y ganchos en todo tipo de protesis', NULL, 15.5, 100, true, 16, 3),
    (16, 'Rebase de todo tipo de protesis', NULL, 25.6, 320, true, 25, 3),
    (17, 'En resina (completa y parciales)', NULL, 32.5, 125, true, 45, 4),
    (18, 'Con base metalica (esqueléticos con base de cromo-cobalto)', NULL, 47.5, 130, true, 35, 4),
    (19, 'Combinada: con ataches en combinacion con elementos fijos', NULL, 35.5, 125, true, 25, 5),
    (20, 'En resina acrilica', NULL, 27.5, 35, true, 17.5, 5);

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

-- Datos iniciales para la tabla "pedidos"
INSERT INTO pedidos (Cod_Pedido, Fecha, Precio_total, Cod_User, Cod_Estado) VALUES
    (3, '2022-11-27', 0, 2, 1),
    (4, '2022-11-27', 0, 2, 1),
    (5, '2022-11-27', 0, 2, 1);

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

-- Datos iniciales para la tabla "productospedidos"
INSERT INTO productospedidos (Cod_ProdPed, Unidades, Precio, Cod_Pedido, Cod_Producto) VALUES
    (1, 2, 0, 3, 5),
    (2, 2, 0, 3, 4),
    (3, 2, 0, 4, 5),
    (4, 2, 0, 4, 4),
    (5, 2, 0, 5, 5),
    (6, 2, 0, 5, 4),
    (7, 1, 0, 5, 1);

-- Tabla "log"
CREATE TABLE log (
    Cod_Log INT PRIMARY KEY,
    Cod_User INT,
    Detalles VARCHAR(255),
    FOREIGN KEY (Cod_User) REFERENCES usuarios(Cod_User)
);
