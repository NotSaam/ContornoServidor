<?php
// URL para obtener los equipos de La Liga (temporada actual) desde BeSoccer
$url = 'http://apiclient.besoccerapps.com/scripts/api/api.php?key={{APIKEY}}&tz=Europe%2FMadrid&format=json&req=teams&league=1';

// Realizar la solicitud a la URL
$resultado = file_get_contents($url);

// Decodificar la respuesta JSON
$datos = json_decode($resultado, true);

// Mostrar los equipos
if (isset($datos['teams'])) {
    foreach ($datos['teams'] as $equipo) {
        echo "<li>" . $equipo['team']['name'] . "</li>";
    }
} else {
    echo "<li>No se encontraron equipos.</li>";
}
