<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Servicio</h2>
    <p>Ingrese los datos del nuevo servicio</p>
	<form method="post" action="ingresar_servicio.php">
	<table>	
	<tr> <td>Tipo de Servicio: </td><td> <select name="tipo_s">
			<option value="Agroclima" selected>Agroclima</option>
			<option value="Estudios y Proyectos">Estudios y Proyectos</option>
			<option value="Forestal">Forestal</option>
			<option value="Inf. Geoespacial y Cartografía">Inf. Geoespacial y Cartografía</option>
			<option value="Propiedades y Recursos Naturales">Propiedades y Recursos Naturales</option>	</td> </tr>
	<tr> <td>ID: </td><td> <input type="text" name="id_servicio"> </td> </tr>
	<tr> <td>Nombre: </td><td> <input type="text" name="nombre"> </td> </tr>
	<tr> <td>Descripción: </td><td> <input type="text" name="descripcion"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['id_servicio']!=""){

	$tipo_s = $_POST['tipo_s'];
	$id_producto = $_POST['id_servicio'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];

	$sql = "INSERT INTO servicio VALUES('".$tipo_s."',".$id_producto.", '".$nombre."', '".$descripcion."');" ;
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