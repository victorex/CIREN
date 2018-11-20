<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Ingresar Producto</h2>
<form method="post" action="ingresar_producto.php">
	<p>Tipo de Producto: <input type="text" name="tipo_p"></p>
	<p>ID: <input type="text" name="id_producto"></p>
	<p>Nombre: <input type="text" name="nombre"></p>
	<p>Descripción: <input type="text" name="descripcion"></p>

	<input type="submit" name="Enviar">

	<?php
	require_once 'conexion.php';
	//if(isset($_POST['funcion'])) {

	$tipo_p = $_POST['tipo_p'];
	$id_producto = $_POST['id_producto'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];

	$sql = "INSERT INTO producto VALUES('".$tipo_p."',".$id_producto.", '".$nombre."', '".$descripcion."');" ;
	$insercion = pg_query($con,$sql);		

	//}
	?>
</form>

</body>
</html>