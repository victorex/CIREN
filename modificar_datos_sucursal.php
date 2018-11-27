<!DOCTYPE html>
<html lang="es">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>
<hr>

<h2>Modificar datos Sucursal</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
	<tr> <td>ID: </td><td> <input type="hidden" name="id" value="<?php echo $id;?>"> </td> </tr>
	<tr> <td>CIUDAD: </td><td> <input type="text" name="ciudad" value="<?php echo $ciudad;?>"> </td> </tr>
	<tr> <td>DIRECCION: </td><td> <input type="text" name="direccion" value="<?php echo $direccion;?>"> </td> </tr>
	<td><br></br><br></br></td>
	<td><input type="submit" name="submit" value="Modificar "></td>
</table>
<hr>

<?php
include 'conexion.php';
if($_POST['id']!=""){

	$id = $_POST['id'];
	$sql = "SELECT * FROM sucursal WHERE id = ".$id.";";
	$resultado = pg_query($conexion,$sql);

    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $direccion=$row['direccion'];
      $ciudad=$row['ciudad'];
    }

	}

    if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $ciudad = $_POST['ciudad'];
      $direccion = $_POST['direccion'];
      $sql = "UPDATE sucursal SET direccion='".$direccion."',ciudad='".$ciudad."' WHERE id = ".$id.";";
      $resultado = pg_query($conexion,$sql);
    }
?>

</form>
</body>
</html>
