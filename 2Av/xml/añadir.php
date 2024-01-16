<?php

//Declaración de variables
$item = $_GET['item'];
$cantidad = $_GET['cantidad'];
$rutaDatosXML = 'carrito.xml';

//Cargar los datos mediante funcion
function leerDatos()
{
    global $rutaDatosXML;
    if (file_exists($rutaDatosXML) && filesize($rutaDatosXML) > 0) {
        $xml = simplexml_load_file('carrito.xml');

        if ($xml !== false) {
            $datos = [];

            foreach ($xml->producto as $producto) {
                $nombre = (string)$producto->nombre;
                $cantidad = (int)$producto->cantidad;

                $datos[$nombre = $cantidad];
            }
            return $datos;
        }
    }
    return [];
}




function guardarDatos($datos)
{
    global $rutaDatosXML;

    //Crear lista vacía
    $xml = new SimpleXMLElement('<cesta></cesta>');

    //Recorrer el array
    foreach ($datos as $nombre => $cantidad) {
        $producto = $xml->addChild('producto');
        $producto->addChild('nombre', $nombre);
        $producto->addChild('cantidad', $cantidad);
    }

    $xml->asXML('carrito.xml');
}
