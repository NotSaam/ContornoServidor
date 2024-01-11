<?php
// Lee datofd
$existenDatos = json_decode(file_get_contents('carrito.json'), true);
// Se non hai datos inicimos
if (!is_array($existenDatos)) {
    $existenDatos = array();
}
?>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class='container'>
        <h1 class='text-center'></h1>
        <div class="row">
            <table class='table table-bordered table-striped'>
                <tr>
                    <th>Artículo</th>
                    <th>Cantidad</th>
                    <th colspan='2' class='text-center'>
                    </th>
                    <th colspan='2' class='text-center'>
                    </th>
                </tr>
                <?php
                // Fila
                foreach ($existenDatos as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato[0] . "</td>";
                    echo "<td>" . $dato[1] . "</td>";
                    echo "<td><a href='asignar.php?item=" . $dato[0] . "&cantidad=1' class='glyphicon glyphicon-plus'></td>";
                    echo "<td><a href='asignar.php?item=" . $dato[0] . "&cantidad=-1' class='glyphicon glyphicon-minus'></td>";
                    echo "<td><a href='asignar.php?item=" . $dato[0] . "&cantidad=0' class='glyphicon glyphicon-remove-circle'></td>";
                    echo "<td><a href='borrar.php?item=" . $dato[0] . "' class='glyphicon glyphicon-trash'></td>";
                    echo "</tr>";
                }
                ?>
                <tr>
                    <td>
                        <form class='form-inline' action='asignar.php' method="post">
                            <input type='text' name='item' class='form-control' style='width:300px'>
                            <input type='hidden' name='verTodo' value=''>
                    </td>
                    <td>
                        <div class='col-xs-6'><input type='number' name='cantidad' value='1' class='form-control'></div>
                    </td>
                    <td colspan='4'>
                        <div class='text-center'><input type='submit' value='+' class='btn btn-primary btn-sm'></div>
                    </td>
                    </form>
            </table>
        </div>
    </div>
</body>



</html>