<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Eliminar Sucursal</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="text" name="id"></p>
	<input type="submit" name="submit" value="Eliminar Sucursal">
</form>

<?php
  include 'Conexion.php';

	if(isset($_POST['submit'])) {

	$id = $_POST['id'];

	$sql = "DELETE FROM sucursal WHERE id = ".$id.";";
	$insercion = pg_query($conexion,$sql);		

	if($insercion){
		echo '<b><<<<<  La sucursal de ID: </b>',$id, '<b> se ELIMINÓ del Sistema</b> >>>>>', "<br></br>","<a href='eliminar.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";}
	else{
		echo '<b><<<<< ERROR, la sucursal de ID: </b>',$id, '<b> NO Existe en el Sistema</b> >>>>>';}
		
	}
	
	
	?>

</body>
</html>