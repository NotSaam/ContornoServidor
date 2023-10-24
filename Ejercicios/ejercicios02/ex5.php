<!DOCTYPE html>

<head>
    <title>Exercicio 5</title>
</head>



<body>

    <?php

    print "<pre>";
    print_r($_POST);
    print "</pre>";

    $nom = $_POST["nome"];
    $ap1 = $_POST["apellido1"];
    $ap2 = $_POST["apellido2"];
    $usr = $_POST["user"];
    $dni = $_POST["dni"];
    $tlf = $_POST["tlf"];

    $comprobarName = "A-Za-záéíóúüÁÉÍÓÚÜñÑÇç";
    $todoBien = true;

    if (
        isset($_POST["nome"]) &&  isset($_POST["apellido1"]) && isset($_POST["apellido2"]) && isset($_POST["user"])
        && isset($_POST["dni"]) && isset($_POST["tlf"])
    ) {
        
        if (preg_match("/^[$comprobarName\- ]+$/" , $nom) == false) {
            echo "<p> class='error'>Nombre no válido</p>";
            $todoBien = false;
        }

        if (preg_match("/^[$comprobarName\- ]+$/" , $ap1) == false) {
            echo "<p> class='error'>Primer apellido no válido</p>";
            $todoBien = false;
        }

        if (preg_match("/^[$comprobarName\- ]+$/" , $ap2) == false) {
            echo "<p> class='error'>Segundo apellido no válido</p>";
            $todoBien = false;
        }
        
        

    }

    ?>

</body>

</html>