<?php

if (isset($_GET['item'])) {
    $item = $_GET['item'];
    $cantidad = $_GET["cantidad"];
}
if (isset($_POST['item'])) {
    $item = $_POST['item'];
    $cantidad = $_POST["cantidad"];
}


$existenDatos = json_decode(file_get_contents('carrito.json'), true);


if (!is_array($existenDatos)) {
    $existenDatos = array();
}


if (array_key_exists($item, $existenDatos)) {
    $existenDatos[$item] += $cantidad;
} else {
    $existenDatos[$item] = $cantidad;
    print $item;
    print $cantidad;
}

file_put_contents('carrito.json', json_encode($existenDatos));
header("Location:carrito.php");
