<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Titulo da página</title>
    </head>
    <body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $mensajeCompleto = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje\n\n";

    $archivo = fopen("mensajes.txt", "a");

    if ($archivo) {
        fwrite($archivo, $mensajeCompleto);
        fclose($archivo);
        echo "Mensaje enviado correctamente. Gracias por tu comentario.";
    } else {
        echo "No se pudo almacenar el mensaje.";
    }
}
?>

</body>
</html>
