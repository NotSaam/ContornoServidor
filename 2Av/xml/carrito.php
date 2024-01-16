<?php
require('carrito.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['item'];
    $cantidad = $_POST['cantidad'];
    $datos = leerDatos();
    if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {
            case 'aumentar':
                $datos[$item] += $cantidad;
                break;
            case 'disminuir':
                $datos[$item] = max(0, $datos[$item] - $cantidad);
                break;
            case 'eliminar':
                unset($datos[$item]);  //eliminamos o dato, e posteriormente xa pasara ao xml
                break;
        }
    } else {
        if (isset($datos[$item])) {
            $datos[$item] += $cantidad;
        } else {
            $datos[$item] = $cantidad;
        }
    }

    guardarDatos($datos);

    header('Location: carrito.php');
    exit;
}

// Cargar datos existentes do archivo XML
$datos = leerDatos();
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $titulo ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 5px 10px;
            margin: 2px;
            cursor: pointer;
        }

        .sumar {
            background-color: #4CAF50;
            color: white;
        }

        .restar {
            background-color: #f44336;
            color: white;
        }

        .eliminar {
            background-color: #808080;
            color: white;
        }
    </style>
</head>

<body>
    <div class='container'>
        <h1 class='text-center'><?= $titulo ?></h1>

        <!-- Lista de productos -->

        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidade</th>
                <th>Accions</th>
            </tr>
            <?php
            foreach ($datos as $item => $cantidad) :
            ?>
                <tr>
                    <td><?= $item ?></td>
                    <td><?= $cantidad ?></td>
                    <td>
                        <form action="carrito.php" method="post" style="display: inline;">
                            <input type="hidden" name="item" value="<?= $item ?>">
                            <input type="hidden" name="cantidad" value="1">
                            <button class="sumar" type="submit" name="accion" value="aumentar">+</button>
                        </form>
                        <form action="carrito.php" method="post" style="display: inline;">
                            <input type="hidden" name="item" value="<?= $item ?>">
                            <input type="hidden" name="cantidad" value="1">
                            <button class="restar" type="submit" name="accion" value="disminuir">-</button>
                        </form>
                        <form action="carrito.php" method="post" style="display: inline;">
                            <input type="hidden" name="item" value="<?= $item ?>">
                            <input type="hidden" name="cantidad" value="0">
                            <button class="eliminar" type="submit" name="accion" value="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Formulario para agregar nuevo producto -->

        <form action="carrito.php" method="post">
            <label for="producto">Producto:</label>
            <input type="text" name="item" required>

            <label for="cantidad">Cantidade:</label>
            <input type="number" name="cantidad" value="1" required>

            <input type="submit" value="Engadir a Cesta">
        </form>
    </div>
</body>

</html>