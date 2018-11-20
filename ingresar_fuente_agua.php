<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Ingresar Información de Fuente de Agua</h2>
<form method="post" action="ingresar_fuente_agua.php">
	<p>Identificador Recurso Hidrico: <input type="text" name="identificador"></p>
	<p>ID: <input type="text" name="id_fuente"></p>
	<p>Antecedentes Tecnicos: <input type="text" name="ante_tecnic"></p>
	<p>Agua Subterranea: <input type="text" name="agua_subter"></p>
	<p>Dirección Imagen: <input type="text" name="imagen"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {

	$identificador = $_POST['identificador'];	
	$id_fuente = $_POST['id_fuente'];
	$ante_tecnic = $_POST['ante_tecnic'];
	$agua_subter = $_POST['agua_subter'];
	$imagen = $_POST['imagen'];

	$sql = "INSERT INTO fuente_agua VALUES(".$id_fuente.", '".$ante_tecnic."', '".$agua_subter."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO tiene VALUES(".$identificador.", ".$id_fuente.", '".$imagen."');" ;
	$insercion = pg_query($con,$sql);			

	//}
	?>
</form>

</body>
</html>