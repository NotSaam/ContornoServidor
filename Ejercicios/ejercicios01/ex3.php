<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>

<body>

    <?php
    if (isset($_POST["num"])) {
        $n = $_POST["num"];
        if (is_numeric($n)) {
            $resto = $n - (int)$n;
            if ($resto == 0) {
                echo "<h1>El numero es entero</h1>";
            } else {
                echo "<h1>El numero es decimal</h1>";
            }
        } else {
            echo "<h1>No se ha recibido un numero</h1>";
        }
        echo "<a href='ex3form.php'>Volver</a>";
    } else {
        header("location:ex3form.php");
    }
    ?>
</body>

</html>