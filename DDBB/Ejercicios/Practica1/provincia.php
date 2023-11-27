<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Lista de tarefas</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            margin: 0;
            background-color: #2d2b2b;
            color: white; 
        }

        .engadir{
            color: black;
        }

        h1 {
            text-align: center;
            color: #fca84f;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #fca84f;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fca84f;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: black;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: gainsboro;
            color: black;
        }
    </style>
</head>

<body>
    <h1></h1>

    <form action="#">
    <label for='busqueda' id="busqueda"><b>Elija la provincia deseada:</b></label>
    <select name="provincias" id="provincias">
        <option value=""></option>
    </select>
    <button type='submit'>Buscar provincia</button>
</form>

    <?php

    ?>
</body>
</html>