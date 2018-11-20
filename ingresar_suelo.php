<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	<meta charset="UTF-8">
</head>
<body>
<h2>Ingresar Información Suelo</h2>
<form method="post" action="ingresar_suelo.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Tipo de Suelo: <input type="text" name="tipo_suelo"></p>
	<p>Descripción: <input type="text" name="descripcion"></p>
	<p>Serie: <input type="text" name="serie"></p>
	<p>Variación: <input type="text" name="variacion"></p>
	<p>Localización: <input type="text" name="localizacion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {
	$identificador = $_POST['identificador'];
	$tipo_suelo = $_POST['tipo_suelo'];
	$descripcion = $_POST['descripcion'];
	$serie = $_POST['serie'];
	$variacion = $_POST['variacion'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO suelo VALUES(".$identificador.", '".$tipo_suelo."', '".$descripcion."', ".$serie.", '".$variacion."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');" ;
	$insercion = pg_query($con,$sql);	
	//}
	?>
</form>
</body>
</html>