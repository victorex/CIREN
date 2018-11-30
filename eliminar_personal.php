<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Eliminar Personal</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>RUT: <input type="text" name="rut"></p>
	<input type="submit" name="submit" value="Eliminar">
</form>

<?php
  include 'Conexion.php';

	if(isset($_POST['submit'])) {

	$rut = $_POST['rut'];

	$sql = "DELETE FROM personal WHERE rut = '".$rut."';";
	$insercion = pg_query($conexion,$sql);		

	if($insercion){
		echo '<b><<<<<  La persona de RUT: </b>',$rut, '<b> se ELIMINÓ del Sistema</b> >>>>>', "<br></br>","<a href='eliminar.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";}
	else{
		echo '<b><<<<< ERROR, el RUT: </b>',$rut, '<b> NO Existe en el Sistema</b> >>>>>';}
		
	}
	
	
	?>

</body>
</html>