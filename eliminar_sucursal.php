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
	require_once 'conexion.php';

	if(isset($_POST['submit'])) {

	$id = $_POST['id'];

	$sql = "DELETE FROM sucursal WHERE id = ".$id.";";
	$insercion = pg_query($con,$sql);		

	}
	?>

</body>
</html>