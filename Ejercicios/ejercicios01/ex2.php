<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>

<body>

    <?php

    //Variables
    $nombre = $_POST["nombre"];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $salario = $_POST['salario'];

    //Apartado a
    if ($salario > 2000) {
        echo "$salario";
    }
    //Apartado b
    else if ($salario >= 1000 && $salario <= 2000) {
        if ($edad > 45) {
            $salario = $salario + ($salario * 3) / 100;
        } else {
            $salario = $salario + ($salario * 10) / 100;
        }
    }
    //Apartado c
    else {
        if ($edad < 30) {
            $salario = 1100;
        } else if ($edad >= 30 && $edad <= 40) {
            $salario = $salario + ($salario * 3) / 100;
        } else {
            $salario = $salario + ($salario * 15) / 100;
        }
    }
    echo "<h3>$nombre $apellidos, o teu salario é de  $salario</h3>";
    echo "<br><a href='ex2form.php'>Volver al formulario</a>";

    ?>

</body>

</html>