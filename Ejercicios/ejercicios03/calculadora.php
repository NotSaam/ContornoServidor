<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h2>Tabla de multiplicar del $numero:</h2>";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero</td><td>&times;</td><td>$i</td><td>=</td><td>$resultado</td></tr>";
    }
    echo "</table>";
}
?>

    </body>
</html>