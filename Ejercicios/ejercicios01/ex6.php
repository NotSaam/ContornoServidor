<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>



<body>

    <form method="post" action="ex6.php">
        <br>
        <label for="numero">Escribe el número de columnas: </label><br>
        <input type="numero" id="columnas" name="columnas"><br>
        <label for="numero">Escribe el número de filas: </label><br>
        <input type="numero" id="filas" name="filas"><br>
        <br>
        <input type="submit" value="Enviar">


        <?php
$columnas = $_POST["columnas"];
$filas = $_POST["filas"];

if ($columnas < 1 || $filas < 1) {
    echo "<h2>Introduce enteros positivos mayores o iguales a 1 para filas y columnas.</h2>";
} else {
    echo "<table border='1'>";

    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>" . $j . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>