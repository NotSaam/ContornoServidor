<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
</head>
<body>
    <h2>Lista de Cursos</h2>

    <?php
    // Conectar a la base de datos
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "universidade";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para obtener los datos de la tabla Cursos
    $sql = "SELECT id_curso, nombre_curso, descripcion FROM Cursos";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<table border='1'>
                <tr>
                    <th>ID Curso</th>
                    <th>Nombre del Curso</th>
                    <th>Descripción</th>
                </tr>";

        // Iterar sobre los resultados y mostrar cada fila
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_curso"] . "</td>
                    <td>" . $row["nombre_curso"] . "</td>
                    <td>" . $row["descripcion"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No hay cursos registrados.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
