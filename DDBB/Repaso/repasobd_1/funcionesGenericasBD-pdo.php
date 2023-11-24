<?php
	
	//Funcion para crear una base de datos y tabla dentro
	function crearBaseDatosConTablas(){
		$hostname="localhost";
		$username="root";
		$password="";
		$bd="repasoBD_PDO";
		
		try{
			//nos conectamos a mysql
			$conn = new PDO("mysql:host=$hostname",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//creamos la base de datos
			$crearBD="CREATE OR REPLACE DATABASE $bd";
			$stmt=$conn->prepare($crearBD);
			$stmt->execute();
			
			//nos conectamos a ella
			$conn = new PDO("mysql:host=$hostname;dbname=$bd",$username,$password);
			
			//creamos la tablas
			$creartabla="CREATE TABLE mitabla(
			 id MEDIUMINT NOT NULL AUTO_INCREMENT,
			 nombre CHAR(30) NOT NULL,
			 edad INTEGER(30),
			 salario INTEGER(30),
			 PRIMARY KEY (id) )";
			 
			$stmt=$conn->prepare($creartabla);
			$stmt->execute();
			
			//insertamos datos
			$datos="INSERT INTO mitabla (nombre, edad, salario) VALUES
			('Pedro', 24, 21000),
			('Maria', 26, 24000),
			('Juan', 28, 25000),
			('Luis', 35, 28000),
			('Monica', 42, 30000),
			('Rosa', 43, 25000),
			('Susana', 45, 39000)";
			
			$stmt=$conn->prepare($datos);
			$stmt->execute();
			
			//$stmt->free_result();
			//$conn->close();
			
		}catch(PDOException $e){
			die("Error creando la conexion ".$e->getMessage());
		}
	}
	
	function conexionBD(){
		$hostname="localhost";
		$username="root";
		$password="";
		$bd="repasoBD_PDO";
		
		try{
			//nos conectamos a mysql
			$conn = new PDO("mysql:host=$hostname;dbname=$bd",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			return $conn;
			
		}catch(PDOException $e){
			die("Error creando la conexion ".$e->getMessage());
		}
	}
	
	function recuperarUsuarioPorNombre($nombre){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="select id,nombre, edad, salario from mitabla where nombre=:name";
		$stmt=$conn->prepare($consulta);
		$stmt->bindParam(':name',$nombre);
		$stmt->execute();
		
		$arrayUsuarios=NULL;
		$i=0;
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			$id=$result['id'];
			$nombre=$result['nombre'];
			$edad=$result['edad'];
			$salario=$result['salario'];
			
			$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
			$arrayUsuarios[$i]=$array;
			$i=$i+1;
		}
		
		return $arrayUsuarios;
		
		$stmt->free_result();
		$conn->close();
	}
	
	function recuperarUsuarioPorId($id){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="select id,nombre, edad, salario from mitabla where id=:id";
		$stmt=$conn->prepare($consulta);
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		
		$array=NULL;
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			$id=$result['id'];
			$nombre=$result['nombre'];
			$edad=$result['edad'];
			$salario=$result['salario'];
			
			$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
		}

		return $array;
		
		$stmt->free_result();
		$conn->close();
	}
	
	function insertarUsuario($nombre,$edad,$salario){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="INSERT INTO mitabla(nombre,edad, salario) VALUES(:nombre,:edad,:salario)";
		$stmt=$conn->prepare($consulta);
		$stmt->bindParam(':nombre',$nombre);
		$stmt->bindParam(':edad',$edad);
		$stmt->bindParam(':salario',$salario);
		$stmt->execute();
		
		//$stmt->free_result();
		//$conn->close();
	}
	
	function modificarEdadUsuario($id,$edad){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="UPDATE mitabla set edad=:edad where id=:id";
		$stmt=$conn->prepare($consulta);
		$stmt->bindParam(':id',$id);
		$stmt->bindParam(':edad',$edad);
		$stmt->execute();
		
		//$stmt->free_result();
		//$conn->close();
	}
	
	function eliminarUsuarioPorNombre($nombre){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="delete from mitabla where nombre=:nombre";
		$stmt=$conn->prepare($consulta);
		$stmt->bindParam(':nombre',$nombre);
		$stmt->execute();
		
		//$stmt->free_result();
		//$conn->close();
	}
	
	function listarUsuarios(){
		//recuperamos la conexion
		$conn=conexionBD();
		
		$consulta="select id,nombre, edad, salario from mitabla";
		$stmt=$conn->prepare($consulta);
		$stmt->execute();
		
		$arrayUsuarios=NULL;
		$i=0;
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			$id=$result['id'];
			$nombre=$result['nombre'];
			$edad=$result['edad'];
			$salario=$result['salario'];
			
			$array=array("id"=>$id,"nombre"=>$nombre,"edad"=>$edad,"salario"=>$salario);
			$arrayUsuarios[$i]=$array;
			$i=$i+1;
		}
		
		return $arrayUsuarios;
		
		$stmt->free_result();
		$conn->close();
	}
	
	//no me fue el crear la base de datos así que lo hice a mano y partí de ella
	
	
	//insertamos el nuevo usuario 
	//insertarUsuario("leticia",25,2500);
	
	//modificarEdadUsuario(8,37);
	
	//eliminarUsuarioPorNombre("leticia");
?>

<html>
<head>
	<title>Pagina de prueba PDO</title>
</head>
<body>
	 <P> CREAMOS A BASE DE DATOS </P>
	 <?php
	 crearBaseDatosConTablas();
	 ?>
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
</body>
