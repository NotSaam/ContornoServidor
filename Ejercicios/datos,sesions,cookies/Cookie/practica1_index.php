<?php
include "practica1_comprobar.php";
if(haiCookie()){
    header("location:practica1_saudo.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Titulo</title>
</head>
<body>
        <form action='practica1_saudo.php'method="GET">
            <label for='nombre'>Nombre:</label>
            <input type='text' class='form-control' id='nombre' placeholder='Introduce un nombre' name='nombre'>

            <br>
            <label for='apelidos'><br>Apelidos:</label>
            <input type='text' class='form-control' id='apelidos' placeholder='Introduce os apelidos' name='apelidos'>

            <br>
            <label for='fondo'><br>Color de fondo</label>
            <input type='color' id='fondo' name='fondo' value='#ff0000'>

            <br>
            <label for='letra'><br>Color de letra</label>
            <input type='color' id='letra' name='letra' value='#ff0000'> <br>

            <br>
            <label for='letra'>Tipo de letra</label>

            <select id="letra">
            <option value="arial">Arial</option>
            <option value="calibri">Calibri</option>
            <option value="verdana">Verdana</option>
            <option value="console">Console</option>
            </select>

            <br>

            <br>
            <button type='submit' class='btn btn-primary'>Aceptar</button>
        </form>

</body>
</html>