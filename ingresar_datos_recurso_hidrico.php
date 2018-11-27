<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>
<h2>Ingresar Recurso Hidrico</h2>
<form method="post" action="ingresar_datos_recurso_hidrico.php">
  <table>
	<tr> <td>Identificador: </td><td> <input type="text" name="identificador"> </td> </tr>
	<tr> <td>Localización: </td><td> <input type="text" name="localizacion"> </td> </tr>
  <td><br></br><br></br></td>
	<td><input type="submit" name="Enviar"></td>
</table>
<hr>

	<?php
  include 'conexion.php';
	if($_POST['identificador']!=""){

	$identificador = $_POST['identificador'];
	$localizacion = $_POST['localizacion'];

	$sql = "INSERT INTO recurso_hidrico VALUES(".$identificador." );";
	$insercion = pg_query($conexion,$sql);

	$sql = "INSERT INTO informacion VALUES(".$identificador.", '".$localizacion."');";
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
