<!DOCTYPE html>
<html>
    <head>
        <title>Numero secreto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
    <h1>Adivina o numero secreto</h1>

<form method="post" action="numsecret.php">
    <label for="numero">Numero:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="hidden" name="numero" id="numero" required>
    <input type="submit" value="Adivinar">
</form>


    </body>
</html>