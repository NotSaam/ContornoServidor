<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Titulo da página</title>
    </head>
    <body>        

            <h2>Numeros del 1 al 10</h2>
        <select name="numeros" id="numeros">


        <?php
            for ($i=1; $i <=10; $i++) {

                echo  "<option value=".$i.">$i</option>";
            }
        ?>