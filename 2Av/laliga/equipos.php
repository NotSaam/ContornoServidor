<?php
// URL para poder sacar os equipos qeu estan xogando ahora na Liga desde BeSoccer
$url = 'http://apiclient.besoccerapps.com/scripts/api/api.php?key={{APIKEY}}&tz=Europe%2FMadrid&format=json&req=teams&league=1';

// Mediante a URL pedimos a solicitud
$resultado = file_get_contents($url);

//Respuesta a JSON
$datos = json_decode($resultado, true);

// Enseñar los equipos por pantalla en teoria debería sacar la lista de los equipos pero sale que no se encontraron
if (isset($datos['teams'])) {
    foreach ($datos['teams'] as $equipo) {
        echo "<li>" . $equipo['team']['name'] . "</li>";
    }
} else {
    echo "<li>No se encontraron equipos.</li>";
}
