<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Información de Especie</h2>
<form method="post" action="ingresar_especie.php">
		<table>
	<tr> <td>Identificador Forestal: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>ID: </td><td> <input type="text" name="id_especie"> </td> </tr>
	<tr> <td>Especie: </td><td> <input type="text" name="especie"> </td> </tr>
	<tr> <td>Cantidad: </td><td> <input type="text" name="cantidad"> </td> </tr>
	<tr> <td>Nombre: </td><td> <input type="text" name="nombre"> </td> </tr>
	<tr> <td>Consumo de Agua: </td><td> <input type="text" name="consumo_agua"> </td> </tr>
	<td><br></br><br></br></td>
	<td>
	<input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$id_especie = $_POST['id_especie'];
	$especie = $_POST['especie'];
	$cantidad = $_POST['cantidad'];
	$nombre = $_POST['nombre'];
	$consumo_agua = $_POST['consumo_agua'];

	$sql = "INSERT INTO especie VALUES('".$especie."', ".$id_especie.", '".$nombre."', ".$cantidad.", ".$consumo_agua.");" ;
	$insercion = pg_query($conexion,$sql);

	$sql = "INSERT INTO registra VALUES(".$identificador.", ".$id_especie.");" ;
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
