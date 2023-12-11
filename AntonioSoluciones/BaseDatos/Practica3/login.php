<?php
session_start(); 
include "practica3-errores.php";
if(isset($_POST["usuario"]) && isset($_POST["password"]))
{

  
    $usuario=substr($_POST["usuario"],0,30);
    $password=substr($_POST["password"],0,30);
    if(preg_match("/(*UTF8)^[\p{L}\p{N}]{1,30}$/",$usuario)) {
        if(strlen($password)>=6) {
            $mysqli = new mysqli("127.0.0.1", "root", "", "mensajes");
            if ($mysqli) {
                $sql = "SELECT usuario,pass FROM usuarios ".
                        "WHERE usuario='$usuario'";  
                $res=$mysqli->query($sql);
                if ($res == false)
                    $error = ERROR_CONEXION;
                else{
                    $fila=$res->fetch_assoc();
                    if($fila){
                   
                        if(password_verify($password,$fila["pass"])){ 
                          
                            $_SESSION["usuario"]=$fila["usuario"]; 
                            $res->close();
                        }
                        else $error=ERROR_USUARIO_PASSWORD;
                    }
                    else $error=ERROR_USUARIO_NO_EXISTE;
                }

            } else $error = ERROR_CONEXION;
        }
        else $error=ERROR_PASSWORD_CORTA;
    }
    else $error=ERROR_USUARIO_INVALIDO;
}
else{
    header("Location:practica3-index.php");
}

    header("Location:practica3-buzon.php");
?>

