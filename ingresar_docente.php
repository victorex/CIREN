<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>
<body>

<h2>Ingresar Docente</h2>
<form method="post" action="ingresar_docente.php">
	<p>RUT: <input type="text" name="rut"></p>
	<p>Nombre: <input type="text" name="nombre"></p>
	<p>Email: <input type="text" name="email"></p>
	<p>Cargo: <input type="text" name="cargo"></p>
	<p>Profesion: <input type="text" name="profesion"></p>
	<p>Descripcion: <input type="text" name="descripcion"></p>
	<p>Universidad de Egreso: <input type="text" name="u_egreso"></p>
	<p>Telefono: <input type="text" name="telefono"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$cargo = $_POST['cargo'];
	$profesion = $_POST['profesion'];
	$descripcion = $_POST['descripcion'];
	$u_egreso = $_POST['u_egreso'];
	$telefono = $_POST['telefono'];

	$sql = "INSERT INTO personal VALUES('".$rut."', '".$nombre."', '".$email."', '".$cargo."', '".$profesion."', '".$descripcion."', '".$u_egreso."', ".$telefono.");" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO docente VALUES('".$rut."');" ;
	$insercion = pg_query($con,$sql);		

	//}
	?>
</form>
</body>
</html>