<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Producto</h2>
    <p>Ingrese los datos del nuevo producto</p>
	<form method="post" action="ingresar_producto.php">
	<table>
	<tr> <td>Tipo de Producto: </td><td> <select name="tipo_p">
			<option value="Agroclima" selected>Agroclima</option>
			<option value="Agua">Agua</option>
			<option value="App Móvil">App Móvil</option>
			<option value="Catastros">Catastros</option>
			<option value="Inf. Geoespacial y Cartografía">Inf. Geoespacial y Cartografía</option>
			<option value="Propiedades Topografía">Propiedades Topografía</option>
			<option value="Suelo">Suelo</option>	</td> </tr>
	<tr> <td>ID: </td><td> <input type="text" name="id_producto"> </td> </tr>
	<tr> <td>Nombre: </td><td> <input type="text" name="nombre"> </td> </tr>
	<tr> <td>Descripción: </td><td> <input type="text" name="descripcion"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>
<hr>

	<?php
	include 'conexion.php';
	if($_POST['id_producto']!=""){

	$tipo_p = $_POST['tipo_p'];
	$id_producto = $_POST['id_producto'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];

	$sql = "INSERT INTO producto VALUES('".$tipo_p."',".$id_producto.", '".$nombre."', '".$descripcion."');" ;
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