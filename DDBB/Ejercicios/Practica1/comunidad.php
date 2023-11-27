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
    <label for='busqueda' id="busqueda"><b>Elija la comunidad deseada:</b></label>
    <select name="comunidad" id="comunidad">
        <option value=""></option>
        
        <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="geografia";
    
    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->connect_error){
        die("Erro ao conectar: " . $conn->connect_error);
    }
    
    $query = "SELECT nombre FROM comunidades";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
    }
    
    
    $conn->close();
    ?>
    </select>
    <button type='submit'>Buscar comunidad</button>
    </form>
        
    </body>
</html>