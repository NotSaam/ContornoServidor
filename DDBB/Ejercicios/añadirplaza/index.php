<?php
    $conexion=mysqli_connect("localhost","root","","cursos");
    
    $sqlCursos="SELECT id_curso,curso,plazas_totales,plazas_ocupadas,plazas_totales-plazas_ocupadas AS plazas_disponibles FROM cursos";
    $result = $conexion->query($sqlCursos);
?>

<html>
<head>
<title>Exercicio6-index</title>

<style>
    .completo{
    background-color: red;
    }

    .vacio{
        background-color: lightgreen;
    }

    .mitad{
        background-color: orange;
    }

    .inicio{
        background-color: lightslategray;
    }
    
    table{
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border: 1px solid #ddd;
        background-color: #fff;    
    }
    

</style>

</head>
<body>
    <h1>Lista de cursos</h1>


    <?php
if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr class='inicio'><th>Cursos dispoñibles</th><th>Plazas totales</th><th>Plazas disponibles</th><th>Inscripción</th></tr>";
while ($row = $result->fetch_assoc()) {

    if ($row["plazas_disponibles"] > 5) {
        echo " <tr class='vacio'><td>" . $row["curso"] . "</td><td>" . $row["plazas_totales"] . "</td><td>" . $row["plazas_disponibles"] . "</td><td><a href='añadir.php?id=" . $row["id_curso"] . "'>Añadir plaza</a></td></tr>";
        
    } else if ($row["plazas_disponibles"] >= 1 && $row["plazas_disponibles"] <=5) {
        echo " <tr class='mitad'><td>" . $row["curso"] . "</td><td>" . $row["plazas_totales"] . "</td><td>" . $row["plazas_disponibles"] ."</td><td><a href='añadir.php?id=" . $row["id_curso"] . "'>Añadir plaza</a></td></tr>";

    }else {
        echo "<tr class='completo'><td>" . $row["curso"] . "</td><td>" . $row["plazas_totales"] . "</td><td>" . $row["plazas_disponibles"] . "</td><td>Aforo completo </td></tr>";
    }
}
    echo "</table>";
}
?>


<p>Resumen de ocupación</p>

<p>·Plazas totales ofertadas:</p>
<p>·Plazas ocupadas:</p>
<p>·Porcentaje de la ocupacion:</p>



</body>
</html>