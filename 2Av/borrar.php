<?php
$item = $_GET["item"];

$existenDatos = json_decode(file_get_contents('carrito.json'), true);

if (is_array($existenDatos)) {
    foreach ($existenDatos as $clave => $dato) {
        if ($dato[0] === $item) {
            unset($existenDatos[$clave]);
            break;
        }
    }
}

file_put_contents('carrito.json', json_encode($existenDatos));

header('Location: carrito.php');
