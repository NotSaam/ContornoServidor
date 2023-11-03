<!DOCTYPE html>
<html>
<head>
    <title>Adivina el número secreto</title>
</head>
<body>
    <h1>Adivina el número secreto</h1>
    <?php

    $aleatorio = 0;
    $intentos = 0;

    if (isset($_POST["aleatorio"])) {
        $aleatorio = $_POST["aleatorio"];
    }

    if (isset($_POST["intentos"])) {
        $intentos = $_POST["intentos"];
    }

    if (isset($_POST["numero"])) {
        $n = $_POST["numero"];
        $intentos++;
        echo "Tu número es: $n<br>";

        if ($n > $aleatorio) {
            echo "Tu número es menor.";
        } elseif ($n < $aleatorio) {
            echo "Tu número es mayor.";
        } else {
            echo "¡Enhorabuena, adivinaste! Solo te tomó $intentos intentos.";
        }
        // En lugar de generar un nuevo número aleatorio, mantenemos el mismo valor
        echo "<br><a href=numsecretform.php?aleatorio=$aleatorio&intentos=$intentos>Volver</a>";
    }
    ?>
</body>
</html>
