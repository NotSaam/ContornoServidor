<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>España</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <form action="localidad.php">
    <label for='busqueda' id="busqueda"><b>Elija la provincia deseada:</b></label>
    <select name="provincia" id="provincia">

    <?php

    if(isset($_GET["comunidad"])==false){
        header("Location:comunidad.php");
    }
    $comunidad=$_GET["comunidad"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="geografia";
    
    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }    
    
    $query = "SELECT p.nombre provincia , c.nombre comunidad ". 
        "from provincias p " . 
        "join comunidades c USING (id_comunidad) ". 
        "where c.nombre= '$comunidad'". 
        "order by p.nombre ";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['provincia'] . "'>" . $row['provincia'] . "</option>";
    }
    
    $conn->close();
    ?>

    </select>
    <button type='submit'>Buscar provincia</button>
    </form>
        
    </body>
</html>