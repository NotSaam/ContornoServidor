<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>



<body>


    <?php
    $filas = 5;
    $cont = 1000;
    $num = 1;

    echo "<table border='1'>";

    for ($i = 1; $i <= $cont / $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>" . $num++ . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>

</body>

</html>