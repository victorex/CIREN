<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Información Agricola</h2>
<form method="post" action="ingresar_agricola.php">
	<table>
	<tr> <td>Identificador: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>Superficie: </td><td> <input type="text" name="superficie"> </td> </tr>
	<tr> <td>Destino: </td><td> <input type="text" name="destino"> </td> </tr>
	<tr> <td>Riego: </td><td> <input type="text" name="riego"> </td> </tr>
	<tr> <td>Producción: </td><td> <input type="text" name="produccion"> </td> </tr>
	<tr> <td>Especie: </td><td> <input type="text" name="especie"> </td> </tr>
	<tr> <td>Localización: </td><td> <input type="text" name="localizacion"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$superficie = $_POST['superficie'];
	$destino = $_POST['destino'];
	$riego = $_POST['riego'];
	$produccion = $_POST['produccion'];
	$especie = $_POST['especie'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO agricola VALUES(".$identificador.", ".$superficie.", '".$destino."', '".$riego."', '".$produccion."', '".$especie."');" ;
	$insercion = pg_query($conexion,$sql);

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
