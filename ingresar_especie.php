<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Ingresar Información de Especie</h2>
<form method="post" action="ingresar_especie.php">
	<p>Identificador Forestal: <input type="text" name="identificador"></p>
	<p>ID: <input type="text" name="id_especie"></p>
	<p>Especie: <input type="text" name="especie"></p>
	<p>Cantidad: <input type="text" name="cantidad"></p>
	<p>Nombre: <input type="text" name="nombre"></p>
	<p>Consumo de Agua: <input type="text" name="consumo_agua"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {

	$identificador = $_POST['identificador'];	
	$id_especie = $_POST['id_especie'];
	$especie = $_POST['especie'];
	$cantidad = $_POST['cantidad'];
	$nombre = $_POST['nombre'];
	$consumo_agua = $_POST['consumo_agua'];

	$sql = "INSERT INTO especie VALUES('".$especie."', ".$id_especie.", '".$nombre."', ".$cantidad.", ".$consumo_agua.");" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO registra VALUES(".$identificador.", ".$id_especie.");" ;
	$insercion = pg_query($con,$sql);			

	//}
	?>
</form>

</body>
</html>