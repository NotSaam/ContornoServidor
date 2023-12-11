<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Título de la página</title>
    </head>
    <body>

    <img src
        <?php
            $numrand = rand(0, 1);
            $img1 = "flor1.jpg";
            $img2 = "flor2.jpg";

            if ($numrand == 0) {
                echo "<img src='$img1' alt='Flor 1'>";
            } else {
                echo "<img src='$img2' alt='Flor 2'>";
            }
        ?>

    </body>
</html>
