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

// Localidad aleatoria de la base de datos
$sql = "SELECT nombre, id_localidad FROM localidades ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

//Nombre de provincias
$sql_provincias = "SELECT nombre FROM provincias";
$result_provincias = $conn->query($sql_provincias);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $localidad = $row["nombre"];
    $id_localidad = $row["id_localidad"];
} else {
    die("No se encontraron localidades en la base de datos.");
}
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Juego de acertar localidades</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Adivina la provincia</h1>
    <p>Localidad:  <strong><?php  echo $localidad ?> </p></strong>

    <?php 
    if ($result_provincias->num_rows > 0) {
        echo "<br><select id='provincias' name='provincias'>";
        while($row = $result_provincias->fetch_assoc()) {
            echo "<option value=" .  $row["nombre"] .">" . $row["nombre"] . "</option>";
        }
        echo "</select>";
    }
    ?>

    <input type="submit" value="Comprobar" >

    <!-- Añadir varible de aciertos y fallos -->

</body>
</html>