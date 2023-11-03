<!DOCTYPE html>
<html>
<head>
    <title>Numero secreto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <h1>Adivina o numero secreto</h1>

    <form method="POST" action="numsecret.php">
        <label for="numero">Numero:</label>
        <input type="number" name="numero" id="numero" required>
        <?php
        $aleatorio = isset($_REQUEST["aleatorio"]) ? $_REQUEST["aleatorio"] : rand(1, 100);
        $intentos = isset($_REQUEST["intentos"]) ? $_REQUEST["intentos"] : 0;
        ?>
        <input type="hidden" name="aleatorio" value="<?php echo $aleatorio; ?>">
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
