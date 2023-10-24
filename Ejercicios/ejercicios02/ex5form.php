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
        cursor: pointer ;
    }

    input[type="submit"]:hover {
        background-color: gainsboro;
    }

    .error{
        background-color: red;
        color: white;
        font-size: 60px;
        text-align: center;
    }

    .correcto {
        background-color: green;
        color: white;
        font-size: 60px;
        text-align: center;
    }


</style>

<body>
<form action="ex5.php" method="POST">
    <h2>Rellena el siguiente formulario</h2>

    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nome" class="input-field">
    <br>

    <label for="apellido1">Primer apellido: </label>
    <input type="text" id="apellido1" name="apellido1" class="input-field">
    <br>

    <label for="apellido2">Segundo apellido: </label>
    <input type="text" id="apellido2" name="apellido2" class="input-field">
    <br>

    <label for="user">Nombre de usuario: </label>
    <input type="text" id="user" name="user" class="input-field">
    <br>

    <label for="dni">Nombre de identificación (DNI o NIE): </label>
    <input type="text" id="dni" name="dni" class="input-field">
    <br>

    <label for="tlf">Teléfono: </label>
    <input type="text" id="tlf" name="tlf" class="input-field">
    <br>

    <br>
    <input type="submit" value="Validar">
</form>

</body>

</html>