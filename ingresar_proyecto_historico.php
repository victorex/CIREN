<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	<meta charset="UTF-8">
</head>
<body>
<h2>Ingresar Proyecto Historico</h2>
<form method="post" action="ingresar_proyecto_historico.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Codigo: <input type="text" name="codigo"></p>
	<p>Nombre: <input type="text" name="nombre"></p>
	<p>Objetivo General: <input type="text" name="obj_gral"></p>
	<p>Fecha Inicio: <input type="text" name="fecha_ini"></p>
	<p>Fecha Termino: <input type="text" name="fecha_ter"></p>
	<p>Financiamiento: <input type="text" name="financiamiento"></p>
	<p>Localización: <input type="text" name="localizacion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {
	$identificador = $_POST['identificador'];
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$obj_gral = $_POST['obj_gral'];
	$fecha_ini = $_POST['fecha_ini'];
	$fecha_ter = $_POST['fecha_ter'];
	$financiamiento = $_POST['financiamiento'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO proyecto_historico VALUES(".$identificador.", '".$codigo."', '".$nombre."', '".$obj_gral."', '".$fecha_ini."', '".$fecha_ter."', '".$financiamiento."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');" ;
	$insercion = pg_query($con,$sql);	
	//}
	?>
</form>
</body>
</html>