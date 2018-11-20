<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	<meta charset="UTF-8">
</head>
<body>
<h2>Ingresar Información Clima</h2>
<form method="post" action="ingresar_clima.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Condición Termica Verano: <input type="text" name="cond_term_v"></p>
	<p>Condición Termica Invierno: <input type="text" name="cond_term_i"></p>
	<p>Condición Hidrica Verano: <input type="text" name="cond_hidr_v"></p>
	<p>Condición Hidrica Invierno: <input type="text" name="cond_hidr_i"></p>
	<p>Limite Distrito: <input type="text" name="limit_distrito"></p>
	<p>Localización: <input type="text" name="localizacion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {
	$identificador = $_POST['identificador'];
	$cond_term_v = $_POST['cond_term_v'];
	$cond_term_i = $_POST['cond_term_i'];
	$cond_hidr_v = $_POST['cond_hidr_v'];
	$cond_hidr_i = $_POST['cond_hidr_i'];
	$limit_distrito = $_POST['limit_distrito'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO clima VALUES(".$identificador.", '".$cond_term_v."', '".$cond_term_i."', '".$cond_hidr_v."', '".$cond_hidr_i."', '".$limit_distrito."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');" ;
	$insercion = pg_query($con,$sql);	
	//}
	?>
</form>
</body>
</html>