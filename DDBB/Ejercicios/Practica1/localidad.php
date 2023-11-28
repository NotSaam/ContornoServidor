<?php   
    if (isset($_GET["provincia"])==false){
        header("location:comunidad.php");
    }else{
        $provincia =$_GET["provincia"];
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

    <form action="localidad.php">
    <label for='busqueda' id="busqueda"><b>Elija la localidad deseada:</b></label>
    <select name="localidad" id="localidad">

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="geografia";
    
    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }    
    
    $query = "SELECT l.nombre localidad , p.nombre provincia ". 
        "from localidades l " . 
        "join provincias p USING (n_provincia) ". 
        "where p.nombre= '$provincia'". 
        "order by l.nombre ";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['localidad'] . "'>" . $row['localidad'] . "</option>";
    }
    
    $conn->close();
    ?>

    </select>
    <?php
    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }   

    ?>
    <?= "<input type='hidden' name='provincia' value='$provincia'> "  ?>;
    <button type='submit'>Buscar provincia</button>
    </form>
    
    <?php
    $query2 = "SELECT poblacion from localidad";

    $result2 = $conn -> query($query2);
    while ($row= $result -> fetch_assoc()){
        echo $row['poblacion'];
    }
    ?>


    </body>
</html>