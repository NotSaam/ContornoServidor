-- Volcando estructura de base de datos para e_exportar
CREATE DATABASE IF NOT EXISTS e_exportar /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE e_exportar;

-- Volcando estructura para tabla e_exportar.transacciones
CREATE TABLE IF NOT EXISTS transacciones (
  id int(11) NOT NULL AUTO_INCREMENT,
  transaccion_cod varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  nombres varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  tipo_pago varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  estado_transaccion varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  email varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO ransacciones (id, transaccion_cod, nombres, tipo_pago, estado_transaccion, email) 
VALUES 	(1, '10001', 'Jose Flores', 'Tarjeta', 'Activo', 'jose@gmail.com');

