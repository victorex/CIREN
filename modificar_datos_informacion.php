<?php
	include 'conexion.php';

	$identificador = $_POST['id'];
	$sql = "SELECT * FROM informacion WHERE identificador= '".$identificador."';";
	$resultado = pg_query($conexion,$sql);		
    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $localizacion=$row['localizacion'];
    }
      


  if(isset($_POST['submit_informacion'])){
      
      $identificador_mod = $_POST['id'];
      $localizacion  = $_POST['localizacion'];

      $sql = "UPDATE informacion SET localizacion='".$localizacion."'
                                  WHERE identificador = ".$identificador_mod.";";  
      
      
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

<h2>Modificar datos servicio</h2>
<form method="post">
	<p>ID: <input type="hidden" name="id" value="<?php echo $identificador;?>" > <?php echo $identificador;?></p>
	<p>LOCALIZACION: <input type="text" name="localizacion" value="<?php echo $localizacion;?>"></p>
	<input type="submit" name="submit_informacion" value="Modificar ">
</form>

<br>
<a href='../index.php'><h>Inicio</h></a> 


</body>
</html>