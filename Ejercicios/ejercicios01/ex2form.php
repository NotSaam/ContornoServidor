<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo da página</title>
</head>

<style>
    label {
        font-size: 20 px;
    }
</style>


<body>

    <form action="ex2.php" method="post">

        <h2>Rellena este formulario</h2>
        <br>
        <label for="nombre">Nombre : </label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <br>
        <label for="apellidos">Apellidos : </label><br>
        <input type="text" id="apellidos" name="apellidos"><br>

        <br>
        <label for="edad">Edad: </label><br>
        <input type="number" id="edad" name="edad"><br>

        <br>
        <label for="salario">Salario: </label><br>
        <input type="number" id="salario" name="salario"><br>

        <br>
        <input type="submit" value="Enviar">



    </form>
</body>

</html>