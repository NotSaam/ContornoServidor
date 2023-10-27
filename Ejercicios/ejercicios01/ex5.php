<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>



<body>

    <form method="post">
        <br>
        <label for="numero">Escribe el número de asceriscos: </label><br>
        <input type="numerp" id="numero" name="numero"><br>
        <br>
        <input type="submit" value="Enviar">


        <?php
        $numero = $_POST["numero"];

        if (is_numeric($numero) && $numero > 0 && intval($numero) == $numero) {
            echo "<p>Asteriscos generados:</p>";
            for ($i = 0; $i < $numero; $i++) {
                echo "*";
            }
        } else {
            echo "<p>Introduce entero positivo.</p>";
        }
        ?>
</body>

=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>



<body>

    <form method="post">
        <br>
        <label for="numero">Escribe el número de asceriscos: </label><br>
        <input type="numerp" id="numero" name="numero"><br>
        <br>
        <input type="submit" value="Enviar">


        <?php
        $numero = $_POST["numero"];

        if (is_numeric($numero) && $numero > 0 && intval($numero) == $numero) {
            echo "<p>Asteriscos generados:</p>";
            for ($i = 0; $i < $numero; $i++) {
                echo "*";
            }
        } else {
            echo "<p>Introduce entero positivo.</p>";
        }
        ?>
</body>

>>>>>>> 8bc20870ef4836ed5156d2f09023c91a34ae6a8a
</html>