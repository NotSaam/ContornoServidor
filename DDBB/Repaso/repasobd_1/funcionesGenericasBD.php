<?php

	//Funcion para crear unha base de datos e duas taboas dentro
	function crearBaseDatosConTablas(){
		$hostname="localhost";
		$username="root";
		$password="";
		$bd="repasBD";
		
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
	}
	
	function conexionBD(){
		$hostname="localhost";
		$username="root";
		$password="";
		$bd="repasoBD";
		
		$conn=new mysqli($hostname,$username,$password,$bd);
		if ($conn->connect_error == TRUE){
			die("error creando DB");
		}
		
		return $conn;
	}

	function limpiar($datos){
		$datos=trim($datos);
		$datos=stripslashes($datos);
		$datos=htmlspecialchars($datos);
		return $datos;
	}
	
	function recuperarUsuarioPorNombre($nombre){
		$conn=conexionBD();
	
		$consulta="select id,nombre, edad, salario from mitabla where nombre=?";
		$stmt=$conn->prepare($consulta);
		$stmt->bind_param("s",$nombre);
		$stmt->execute();
		
		$result=$stmt->get_result();
		
		$arrayDatos = NULL;
		$i=0;
		if ($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$id=$row['id'];
				$nombre=$row['nombre'];
				$edad=$row['edad'];
				$salario=$row['salario'];
					
				$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
				$arrayDatos[$i]=$array;
				$i=$i+1;
			}
		}
		
		return $arrayDatos;
		
		$stmt->free_result();
		$conn->close();
	}
	
	function recuperarUsuarioPorId($id){
		$conn=conexionBD();
	
		$consulta="select id,nombre, edad, salario from mitabla where id=?";
		$stmt=$conn->prepare($consulta);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		
		$result=$stmt->get_result();
		
		$array=NULL;
		if ($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$id=$row['id'];
				$nombre=$row['nombre'];
				$edad=$row['edad'];
				$salario=$row['salario'];
					
				$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
			}
		}
		
		return $array;
		
		$stmt->free_result();
		$conn->close();
	}
	
	function insertarUsuario($nombre,$edad,$salario){
		$conn=conexionBD();
		
		$consulta="INSERT INTO mitabla (nombre, edad, salario) VALUES (?,?,?)";
		$stmt=$conn->prepare($consulta);
		$stmt->bind_param("sii",$nombre,$edad,$salario);
		$stmt->execute();
		
		$stmt->free_result();
		$conn->close();
	}
	
	function modificarEdadUsuario($id,$edad){
		$conn=conexionBD();
		
		$consulta="UPDATE mitabla set edad = ? where id = ?";
		$stmt=$conn->prepare($consulta);
		$stmt->bind_param("ii",$edad,$id);
		$stmt->execute();
		
		$stmt->free_result();
		$conn->close();
	}
	
	function eliminarUsuarioPorNombre($nombre){
		$conn=conexionBD();
		
		$consulta="DELETE from mitabla where nombre= ?";
		$stmt=$conn->prepare($consulta);
		$stmt->bind_param("s",$nombre);
		$stmt->execute();
		
		$stmt->free_result();
		$conn->close();
	}
	
	function listarUsuarios(){
		$conn=conexionBD();
	
		$consulta="select id,nombre, edad, salario from mitabla";
		$result=$conn->query($consulta);
		
		$arrayDatos = NULL;
		$i=0;
		if ($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$id=$row['id'];
				$nombre=$row['nombre'];
				$edad=$row['edad'];
				$salario=$row['salario'];
					
				$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
				$arrayDatos[$i]=$array;
				$i=$i+1;
			}
		}
		
		return $arrayDatos;
		
		$conn->close();
	}
	
	//Creamos la base de datos
	//crearBaseDatosConTablas();
	
	
	
?>

<html>
<head>
	<title>Pagina de prueba</title>
</head>
<body>
	<p>Los datos del usuario Pedro son</p>
	<table>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>edad</th>
			<th>salario</th>
		</tr>
	<?php
		$arrayUsuarios=recuperarUsuarioPorNombre('Pedro');
		for($i=0;$i<count($arrayUsuarios);$i++){
			$usuario=$arrayUsuarios[$i];
			$id=$usuario['id'];
			$nombre=$usuario['nombre'];
			$edad=$usuario['edad'];
			$salario=$usuario['salario'];
	?>	
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $nombre ?></td>
				<td><?php echo $edad ?></td>
				<td><?php echo $salario ?></td>
			</tr>
	<?php
		}
	?>
	</table>
	
	<p>Los datos del usuario con id 2 son</p>
	<?php
		$datosUsuario=recuperarUsuarioPorId(2);
		
		$id=$datosUsuario['id'];
		$nombre=$datosUsuario['nombre'];
		$edad=$datosUsuario['edad'];
		$salario=$datosUsuario['salario'];
	?>	
	<p>Id: <?php echo $id ?> </p>
	<p>Nombre: <?php echo $nombre ?></p>
	<p>Edad: <?php echo $edad ?></p>
	<p>Salario: <?php echo $salario ?></p>
			
	<p>Listando todos los usuarios de la base de datos</p>
	<table>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>edad</th>
			<th>salario</th>
		</tr>
	<?php
		$arrayUsuarios=listarUsuarios();
		for($i=0;$i<count($arrayUsuarios);$i++){
			$usuario=$arrayUsuarios[$i];
			$id=$usuario['id'];
			$nombre=$usuario['nombre'];
			$edad=$usuario['edad'];
			$salario=$usuario['salario'];
	?>	
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $nombre ?></td>
				<td><?php echo $edad ?></td>
				<td><?php echo $salario ?></td>
			</tr>
	<?php
		}
	?>
	</table>
    <p> probamos a insertar un usuario </p>
	<?php
	 	   insertarUsuario("Antonia",25,2500);
    ?>
	<br>
	<p> imos modificar a idade dun usuario </p>
	<?php
        modificarEdadUsuario(8,37);
	?>

	<p> eliminamos un usaurio </p>
	<?php
        eliminarUsuarioPorNombre("antonio");
	?>

	
</body>
