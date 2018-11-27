<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Docente</h2>
    <p>Ingrese los datos del nuevo Docente</p>
	<form method="post" action="ingresar_docente.php">
	<table>
	<tr> <td>RUT: </td><td> <input type="text" name="rut"> </td> </tr>
	<tr> <td>Nombre: </td><td> <input type="text" name="nombre"> </td> </tr>
	<tr> <td>Email: </td><td> <input type="text" name="email"> </td> </tr>
	<tr> <td>Cargo: </td><td> <input type="text" name="cargo"> </td> </tr>
	<tr> <td>Profesion: </td><td> <input type="text" name="profesion"> </td> </tr>
	<tr> <td>Descripcion: </td><td> <input type="text" name="descripcion"> </td> </tr>
	<tr> <td>Universidad de Egreso: </td><td> <input type="text" name="u_egreso"> </td> </tr>
	<tr> <td>Telefono: </td><td> <input type="text" name="telefono"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
	</table>

	<?php
	include 'conexion.php';
	if($_POST['rut']!=""){

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$cargo = $_POST['cargo'];
	$profesion = $_POST['profesion'];
	$descripcion = $_POST['descripcion'];
	$u_egreso = $_POST['u_egreso'];
	$telefono = $_POST['telefono'];

	$sql = "INSERT INTO personal VALUES('".$rut."', '".$nombre."', '".$email."', '".$cargo."', '".$profesion."', '".$descripcion."', '".$u_egreso."', ".$telefono.");" ;
	$insercion = pg_query($conexion,$sql);
	
	$sql = "INSERT INTO docente VALUES('".$rut."');" ;
	$insercion = pg_query($conexion,$sql);	
		
	if($insercion){
		echo "Guardado con exito.","<br></br>","<a href='ingresar_personal.php'><h>Atrás</h></a>",
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
<hr>
</body>
</html>