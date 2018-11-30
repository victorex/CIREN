<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Eliminar Servicio</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="text" name="id_servicio"></p>
	<input type="submit" name="submit" value="Eliminar Servicio">
</form>

<?php
  include 'Conexion.php';

	if(isset($_POST['submit'])) {

	$id_servicio = $_POST['id_servicio'];

	$sql = "DELETE FROM servicio WHERE id_servicio = '".$id_servicio."';";
	$insercion = pg_query($conexion,$sql);		

	if($insercion){
		echo '<b><<<<<  El servicio de ID: </b>',$id_servicio, '<b> se ELIMINÓ del Sistema</b> >>>>>', "<br></br>","<a href='eliminar.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";}
	else{
		echo '<b><<<<< ERROR, el servicio de ID: </b>',$id_servicio, '<b> NO Existe en el Sistema</b> >>>>>';}
		
	}
	
	
	?>

</body>
</html>