<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h2>Lista de Estudiantes</h2>

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

    // Consulta para obtener los datos de la tabla Estudiantes
    $sql = "SELECT id_estudiante, nombre, apellido, edad, carrera FROM Estudiantes";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<table border='1'>
                <tr>
                    <th>ID Estudiante</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                </tr>";

        // Iterar sobre los resultados y mostrar cada fila
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_estudiante"] . "</td>
                    <td>" . $row["nombre"] . "</td>
                    <td>" . $row["apellido"] . "</td>
                    <td>" . $row["edad"] . "</td>
                    <td>" . $row["carrera"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No hay estudiantes registrados.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
