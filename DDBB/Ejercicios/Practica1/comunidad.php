<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>España</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <h1></h1>

    <form action="provincia.php" method="$_GET">
    <label for='busqueda' id="busqueda"><b>Elija la comunidad deseada:</b></label>
    <select name="comunidad" id="comunidad">

        <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="geografia";
    
    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT nombre FROM comunidades";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
    }
    
    $conn->close();
    ?>
    </select>
    <button type='submit'>Buscar comunidad</button>
    </form>
        
    </body>
</html>