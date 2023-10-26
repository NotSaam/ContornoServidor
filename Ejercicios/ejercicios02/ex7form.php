<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>

<style>
    .input-field {
        width: 25%;
        padding: 5px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: grey;
        color: white;
        padding: 5px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: gainsboro;
    }
</style>

<body>
    <form action="ex7.php" method="POST">
        <h2>Escribe los numeros de la combinada</h2>

        <br>
        <label for="num1">Numero 1: </label><br>
        <input type="number" id="num1" name="num1">

        <br>
        <label for="num2">Numero 2: </label><br>
        <input type="number" id="num2" name="num2">
        <br>
        <label for="num3">Numero 3: </label><br>
        <input type="number" id="num3" name="num3">

        <br>
        <label for="num4">Numero 4: </label><br>
        <input type="number" id="num4" name="num4">

        <br>
        <label for="num5">Numero 5: </label><br>
        <input type="number" id="num5" name="num5">

        <br>
        <label for="num6">Numero 6: </label><br>
        <input type="number" id="num6" name="num6"><br>
        
        <br>
        <label for="intentos">Cantidad de intentos: </label><br>
        <input type="number" id="intentos" name="intentos"><br>


        <br>
        <p>Pulsa en probar suerte para realizar la combinada</p>
        <input type="submit" value="Probar suerte">
    </form>

</body>

</html>