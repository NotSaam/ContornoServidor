<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nome"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensagem"];
    $hora_envio = date("Y-m-d H:i:s");
    $separador = "<hr>";

    $mensajeCompleto = "Nome: $nombre\nMail: $email\nMensaxe: $mensaje\nHora: $hora_envio\n$separador\n";

    $archivo = fopen("datosBar.txt", "a");

    if ($archivo) {
        if (fwrite($archivo, $mensajeCompleto)) {
            fclose($archivo);
            echo "Mensaxe enviado correctamente. Grazas polo teu comentario.<br>";
            echo "<a href='barbaio.php'>Volver</a>";
        } else {
            echo "Non se puido gardar o mensaxe.";
        }
    } else {
        echo "Non se puido abrir o arquivo.";
    }
}
?>
