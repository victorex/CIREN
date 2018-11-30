<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Eliminar Producto</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="text" name="id_producto"></p>
	<input type="submit" name="submit" value="Eliminar Producto">
</form>

<?php
  include 'Conexion.php';

	if(isset($_POST['submit'])) {

	$id_producto = $_POST['id_producto'];

	$sql = "DELETE FROM producto WHERE id_producto = '".$id_producto."';";
	$insercion = pg_query($conexion,$sql);		

	if($insercion){
		echo '<b><<<<<  El producto de ID: </b>',$id_producto, '<b> se ELIMINÓ del Sistema</b> >>>>>', "<br></br>","<a href='eliminar.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";}
	else{
		echo '<b><<<<< ERROR, el producto de ID: </b>',$id_producto, '<b> NO Existe en el Sistema</b> >>>>>';}
		
	}
	
	
	?>

</body>
</html>