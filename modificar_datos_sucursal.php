<?php
	include 'conexion.php';



	$id = $_POST['id'];

	$sql = "SELECT * FROM sucursal WHERE id = ".$id.";";
	$resultado = pg_query($conexion,$sql);		

    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $direccion=$row['direccion'];
      $ciudad=$row['ciudad'];
    }
      

    if(isset($_POST['submit_sucursal'])){
      
      $id = $_POST['id'];
      $ciudad = $_POST['ciudad'];
      $direccion = $_POST['direccion'];
      $sql = "UPDATE sucursal SET direccion='".$direccion."',ciudad='".$ciudad."' WHERE id = ".$id.";";
      $resultado = pg_query($conexion,$sql);		     
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
	<p>ID: <input type="hidden" name="id" value="<?php echo $id;?>"><?php echo $id;?></p>
	<p>CIUDAD: <input type="text" name="ciudad" value="<?php echo $ciudad;?>"></p>
	<p>DIRECCION: <input type="text" name="direccion" value="<?php echo $direccion;?>"></p>
	<input type="submit" name="submit_sucursal" value="Modificar ">
</form>
<br>
<a href='../index.php'><h>Inicio</h></a> 


</body>
</html>