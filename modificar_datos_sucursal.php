<?php
	require_once 'conexion.php';

	if(isset($_POST['id'])) {

	$id = $_POST['id'];

	$sql = "SELECT * FROM sucursal WHERE id = ".$id.";";
	$resultado = pg_query($con,$sql);		

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
      $resultado = pg_query($con,$sql);		     
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Modificar datos Sucursal</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="hidden" name="id" value="<?php echo $id;?>"></p>
	<p>CIUDAD: <input type="text" name="ciudad" value="<?php echo $ciudad;?>"></p>
	<p>DIRECCION: <input type="text" name="direccion" value="<?php echo $direccion;?>"></p>
	<input type="submit" name="submit" value="Modificar ">
</form>


</body>
</html>