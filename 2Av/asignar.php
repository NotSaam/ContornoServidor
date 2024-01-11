<?php
header("Location:carrito.php");
$item = $_POST["item"];
$cantidad = $_POST["cantidad"];


$listaCompra = array(
    $item,
    $cantidad
);


$existenDatos = json_decode(file_get_contents('carrito.json'), true);


if (!is_array($existenDatos)) {
    $existenDatos = array();
}

//Sumar datos do array


$productoEncontrado = false;
foreach ($existenDatos as &$dato) {
    if ($dato[0] == $item) {
        // Incremento
        $dato[1] += $cantidad;
        $productoEncontrado = true;
        break;
    }
}


if (!$productoEncontrado) {
    $listaCompra = array($item, $cantidad);
    array_push($existenDatos, $listaCompra);
}

file_put_contents('carrito.json', json_encode($existenDatos));
