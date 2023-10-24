<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Ejercicio 9</title>
</head>

<body>
<style>
th{
    background-color: black;
    color: white;
}
table{
    margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      border-collapse: collapse; 
    }

    td {
      border: 1px solid #000;
      padding: 10px; 
    }
</style>


<?php
    $columnas = 16;
    $fin=127;

    echo"<table border=1>";
    echo"<tr>";

    for($i=1;$i<=8;$i++){
        echo"<th>Codigo</th>";
        echo"<th>Valor</th>";
    }
    echo "</tr>";
    
    $contador=0;
    echo"<tr>";
    for ($j=1;$j<=127;$j++){
 
        if($contador == 8){
            echo "</tr><tr>";
            $contador=0;
        }
        $contador++;
        echo "<td>" . $j . "</td><td>". $j."</td>";
    }
echo "</table>"

    ?>

</body>

</html>