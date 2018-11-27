<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Proyecto Historico</h2>
<form method="post" action="ingresar_proyecto_historico.php">
	<table>
	<tr> <td>Identificador: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>Codigo: </td><td> <input type="text" name="codigo"> </td> </tr>
	<tr> <td>Nombre: </td><td> <input type="text" name="nombre"> </td> </tr>
	<tr> <td>Objetivo General: </td><td> <input type="text" name="obj_gral"> </td> </tr>
	<tr> <td>Fecha Inicio: </td><td> <input type="text" name="fecha_ini"> </td> </tr>
	<tr> <td>Fecha Termino: </td><td> <input type="text" name="fecha_ter"> </td> </tr>
	<tr> <td>Financiamiento: </td><td> <input type="text" name="financiamiento"> </td> </tr>
	<tr> <td>Localización: </td><td> <input type="text" name="localizacion"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$obj_gral = $_POST['obj_gral'];
	$fecha_ini = $_POST['fecha_ini'];
	$fecha_ter = $_POST['fecha_ter'];
	$financiamiento = $_POST['financiamiento'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO proyecto_historico VALUES(".$identificador.", '".$codigo."', '".$nombre."', '".$obj_gral."', '".$fecha_ini."', '".$fecha_ter."', '".$financiamiento."');" ;
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
