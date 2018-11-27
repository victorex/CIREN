<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Información Clima</h2>
<form method="post" action="ingresar_clima.php">
	<table>
	<tr> <td>Identificador: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>Condición Termica Verano: </td><td> <input type="text" name="cond_term_v"> </td> </tr>
	<tr> <td>Condición Termica Invierno: </td><td> <input type="text" name="cond_term_i"> </td> </tr>
	<tr> <td>Condición Hidrica Verano: </td><td> <input type="text" name="cond_hidr_v"> </td> </tr>
	<tr> <td>Condición Hidrica Invierno: </td><td> <input type="text" name="cond_hidr_i"> </td> </tr>
	<tr> <td>Limite Distrito: </td><td> <input type="text" name="limit_distrito"> </td> </tr>
	<tr> <td>Localización: </td><td> <input type="text" name="localizacion"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$cond_term_v = $_POST['cond_term_v'];
	$cond_term_i = $_POST['cond_term_i'];
	$cond_hidr_v = $_POST['cond_hidr_v'];
	$cond_hidr_i = $_POST['cond_hidr_i'];
	$limit_distrito = $_POST['limit_distrito'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO clima VALUES(".$identificador.", '".$cond_term_v."', '".$cond_term_i."', '".$cond_hidr_v."', '".$cond_hidr_i."', '".$limit_distrito."');" ;
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
