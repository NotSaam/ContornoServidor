<?php


$item = $_GET["item"];


$existenDatos = json_decode(file_get_contents('carrito.json'), true);


if (array_key_exists($item, $existenDatos)) {
    unset($existenDatos[$item]);
}


file_put_contents('carrito.json', json_encode($existenDatos));


header("Location:carrito.php");
