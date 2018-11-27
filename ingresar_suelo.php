<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Información Suelo</h2>
<form method="post" action="ingresar_suelo.php">
		<table>
	<tr> <td>Identificador: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>Tipo de Suelo: </td><td> <input type="text" name="tipo_suelo"> </td> </tr>
	<tr> <td>Descripción: </td><td> <input type="text" name="descripcion"> </td> </tr>
	<tr> <td>Serie: </td><td> <input type="text" name="serie"> </td> </tr>
	<tr> <td>Variación: </td><td> <input type="text" name="variacion"> </td> </tr>
	<tr> <td>Localización: </td><td> <input type="text" name="localizacion"> </td> </tr>
	<td><br></br><br></br></td>
	<td>
	<input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$tipo_suelo = $_POST['tipo_suelo'];
	$descripcion = $_POST['descripcion'];
	$serie = $_POST['serie'];
	$variacion = $_POST['variacion'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO suelo VALUES(".$identificador.", '".$tipo_suelo."', '".$descripcion."', ".$serie.", '".$variacion."');" ;
	$insercion = pg_query($con,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');" ;
	$insercion = pg_query($conexion,$sql);

if($insercion){
	echo "Guardado con exito.","<br></br>","<a href='ingresar.php'><h>Atrás</h></a>",
		"&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
			}
	else{
			echo "Se ha producido un error al guardar, revise los datos";
			}
	}
else{
	echo "Datos incompletos, complete adecuadamente";
	}
?>
</form>
</body>
</html>
