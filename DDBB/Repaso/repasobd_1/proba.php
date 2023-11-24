<?php
	//include 'funcionesGenericasBD.php';
	
    $hostname="localhost";
    $username="root";
    $password="";
    $bd="repasoBD";
    
    $conn=new mysqli($hostname,$username,$password);
    if ($conn->connect_error == TRUE){
        die("error creando DB");
    }
    
    $crearBD="CREATE DATABASE repasoBD";
    if ($conn->query($crearBD) == TRUE){
        echo "Base de datos creada correctamente\n";
    }else{
        die("Error creando la base de datos".$conn->connect_error);
    }

    //nos conectamos a esta base
    $conn=new mysqli($hostname,$username,$password,$bd);
    if ($conn->connect_error == TRUE){
        die("error creando DB");
    }
    
    $creartabla="CREATE TABLE mitabla(
     id MEDIUMINT NOT NULL AUTO_INCREMENT,
     nombre CHAR(30) NOT NULL,
     edad INTEGER(30),
     salario INTEGER(30),
     PRIMARY KEY (id) )";
     
     //creamos la tabla
     if ($conn->query($creartabla) == TRUE){
        echo "Base de datos creada correctamente\n";
    }else{
        die("Error creando la base de datos".$conn->connect_error);
    }
    
    //insertamos datos
    $datos="INSERT INTO mitabla (nombre, edad, salario) VALUES
    ('Pedro', 24, 21000),
    ('Maria', 26, 24000),
    ('Juan', 28, 25000),
    ('Luis', 35, 28000),
    ('Monica', 42, 30000),
    ('Rosa', 43, 25000),
    ('Susana', 45, 39000)";
    
    if ($conn->query($datos) == TRUE){
        echo "Datos insertados correctamente\n";
    }else{
        die("Error insertando datos".$conn->connect_error);
    }
    
    $conn->close();
?>