<!DOCTYPE html>
<html lang="en">
<head>
<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>
<body>

<h2>Ingresar Información Forestal</h2>
<form method="post" action="ingresar_datos_forestal.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Localización: <input type="text" name="localizacion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {

	$identificador = $_POST['identificador'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO forestal VALUES(".$identificador." );";
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');";
	$insercion = pg_query($con,$sql);		

	//}
	?>
</form>
</body>
</html>