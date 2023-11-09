<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Rexistro Notas</title>
</head>

<body>
    <h1>Rexistro Notas</h1>

    <form method="$_POST" action="datosNotas.php">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required><br>

        <br>
        <label for="nota">Nota:</label>
        <select id="nota" name="nota">
            <option value="">Escolla unha nota</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
        
        <br>
        <input type="submit" value="Rexistrar">
    </form>


    <p><a href="datosNotas.txt">Abrir rexistro de datos</a></p>
    <p><a href="">Buscar nota por DNI</a></p>

    <?php

    ?>
</body>

</html>