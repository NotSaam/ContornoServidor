<?php
// Configuración necesaria para acceder a la data base.
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "e_exportar";
	
// Generando la conexión con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
?>