<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Estudiantes</title>
</head>
<body>
    <h2>Consulta de Estudiantes</h2>

    <?php
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "universidade";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Consulta para obtener los datos de la tabla Estudiantes
    $sql = "SELECT id_estudiante, nombre, apellido, edad, carrera FROM Estudiantes";
    $result = mysqli_query($conn, $sql);

    // Verificar si hay resultados
    if (mysqli_num_rows($result) > 0) {
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
        while ($row = mysqli_fetch_assoc($result)) {
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
    mysqli_close($conn);
    ?>
</body>
</html>
