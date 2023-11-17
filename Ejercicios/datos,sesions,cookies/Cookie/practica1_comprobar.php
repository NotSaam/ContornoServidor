<?php
function haiCookie(){
    return isset($_COOKIE["nombre"]) && isset($_COOKIE["apelidos"])
    && isset($_COOKIE["fondo"]) && isset($_COOKIE["letra"]);
}

function haiGet(){
    return isset($_GET["nombre"]) && isset($_GET["apelidos"])
    && isset($_GET["fondo"]) && isset($_GET["letra"]);
}
?>

