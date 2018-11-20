<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	<meta charset="UTF-8">
</head>
<body>
<h2>Ingresar Información Agricola</h2>
<form method="post" action="ingresar_agricola.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Superficie: <input type="text" name="superficie"></p>
	<p>Destino: <input type="text" name="destino"></p>
	<p>Riego: <input type="text" name="riego"></p>
	<p>Producción: <input type="text" name="produccion"></p>
	<p>Especie: <input type="text" name="especie"></p>
	<p>Localización: <input type="text" name="localizacion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {
	$identificador = $_POST['identificador'];
	$superficie = $_POST['superficie'];
	$destino = $_POST['destino'];
	$riego = $_POST['riego'];
	$produccion = $_POST['produccion'];
	$especie = $_POST['especie'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO agricola VALUES(".$identificador.", ".$superficie.", '".$destino."', '".$riego."', '".$produccion."', '".$especie."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');" ;
	$insercion = pg_query($con,$sql);	
	//}
	?>
</form>
</body>
</html>