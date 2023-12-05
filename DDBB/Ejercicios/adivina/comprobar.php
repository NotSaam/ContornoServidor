<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geografia";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

//añadir if (!isset)
$localidad =$_SESSION["localidad"];
$provincia =$_SESSION["provincia"];
$id_localidad=$_SESSION["id_localidad"];

//Cargar aciertos 


//provincia respuesta == provincia acierto

//intentos con if  mas ++

//HTML con resultado y con los fallos






?>