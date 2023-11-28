<?php
if (isset($_GET["provincia"]) == false) {
    header("location:comunidad.php");
} else {
    $provincia = $_GET["provincia"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>España</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <form action="localidad.php" method="$_GET">
        <label for='busqueda' id="busqueda"><b>Elija la localidad deseada:</b></label>
        <select name="localidad" id="localidad">

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "geografia";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT l.nombre localidad, p.nombre provincia " .
                "FROM localidades l " .
                "JOIN provincias p USING (n_provincia) " .
                "WHERE p.nombre= '$provincia'" .
                "ORDER BY l.nombre ";
            $result = $conn->query($query);

            if ($result === false) {
                echo "Error en la consulta: " . $conn->error;
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['localidad'] . "'>" . $row['localidad'] . "</option>";
                }
            }
            ?>
        </select>

        <?= "<input type='hidden' name='provincia' value='$provincia'> "  ?>
        <button type='submit'>Buscar provincia</button>
        
        <?php
    if(isset($_GET["localidad"])){
        $localidades=$_GET["localidad"];
        
        $query2 = "SELECT l.nombre localidad, l.poblacion poblacion, p.nombre provincia ".
        "FROM localidades l ".
        "JOIN provincias p USING(n_provincia)".
        "WHERE l.nombre='$localidades' ".
        "ORDER BY l.nombre ";
        
        $res = $conn->query($query2);
        if ($res -> num_rows == 0)
        echo "<p class='error'> Non existe a localidad ". "$localidades </p>";
    else{
        $row = $res->fetch_assoc();
        echo "<p class='resultado'>Localidad = "."<b>".$localidades."</b>"."<br>Población = "."<b>".$row['poblacion']."</b>";
    }
}        
$conn->close();
?>

</form>
</body>

</html>
