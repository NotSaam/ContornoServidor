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
    <form action="ex6.php" method="POST">
        <h2>Encriptado y desencriptado tipo César</h2>

        <p>Escriba el texto a encriptar o desencriptar</p>
        <textarea id="textarea" name="texto" rows="5" cols="50"></textarea>
        <br>

        <fieldset>
            <legend>Elija lo que desea</legend>
            <input type="radio" name="criptado" id="encriptar" value="encriptar">
            <label for="encriptar">Encriptar</label>
            <input type="radio" name="criptado" id="desenencriptar" value="desencriptar">
            <label for="desencriptar">Desencriptar</label>
        </fieldset>

        <p>Escriba la clave</p>
         <input type="text" name="clave" id="clave">
        <input type="submit" value="Validar">
    </form>

</body>

</html>