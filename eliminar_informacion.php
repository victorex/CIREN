<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Eliminar Información</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="text" name="identificador"></p>
	<input type="submit" name="submit" value="Eliminar Informacion">
</form>

<?php
  include 'Conexion.php';

	if(isset($_POST['submit'])) {

	$identificador = $_POST['identificador'];

	$sql = "DELETE FROM servicio WHERE identificador = '".$identificador."';";
	$insercion = pg_query($conexion,$sql);		

	if($insercion){
		echo '<b><<<<<  La información de Identificador: </b>',$identificador, '<b> se ELIMINÓ del Sistema</b> >>>>>', "<br></br>","<a href='eliminar.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";}
	else{
		echo '<b><<<<< ERROR, la información de Identificador: </b>',$identificador, '<b> NO Existe en el Sistema</b> >>>>>';}
		
	}
	
	
	?>

</body>
</html>