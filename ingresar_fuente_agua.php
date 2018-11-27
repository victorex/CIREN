<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Información de Fuente de Agua</h2>
<form method="post" action="ingresar_fuente_agua.php">
	<table>
	<tr> <td>Identificador Recurso Hidrico: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>ID: </td><td> <input type="text" name="id_fuente"> </td> </tr>
	<tr> <td>Antecedentes Tecnicos: </td><td> <input type="text" name="ante_tecnic"> </td> </tr>
	<tr> <td>Agua Subterranea: </td><td> <input type="text" name="agua_subter"> </td> </tr>
	<tr> <td>Dirección Imagen: </td><td> <input type="text" name="imagen"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$id_fuente = $_POST['id_fuente'];
	$ante_tecnic = $_POST['ante_tecnic'];
	$agua_subter = $_POST['agua_subter'];
	$imagen = $_POST['imagen'];

	$sql = "INSERT INTO fuente_agua VALUES(".$id_fuente.", '".$ante_tecnic."', '".$agua_subter."');" ;
	$insercion = pg_query($conexion,$sql);

	$sql = "INSERT INTO tiene VALUES(".$identificador.", ".$id_fuente.", '".$imagen."');" ;
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
