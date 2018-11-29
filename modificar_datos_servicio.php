<?php
	include 'conexion.php';

	$id_servicio = $_POST['id'];
	$sql = "SELECT * FROM servicio WHERE id_servicio= '".$id_servicio."';";
	$resultado = pg_query($conexion,$sql);		
    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $nombre=$row['nombre'];
      $categoria_s=$row['categoria_s'];
      $descripcion=$row['descripcion'];


    }
      
	

    if(isset($_POST['submit_s'])){
      
      $id_servicio_mod = $_POST['id'];
      $nombre=$_POST['nombre'];
      $categoria_s=$_POST['categoria_s'];
      $descripcion=$_POST['descripcion'];

      $sql = "UPDATE servicio SET nombre='".$nombre."',
                                  categoria_s='".$categoria_s."' ,
                                  descripcion='".$descripcion."'
                                  WHERE id_servicio = ".$id_servicio.";";  
      
      
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="hidden" name="id" value="<?php echo $id_servicio;?>" > <?php echo $id_servicio;?></p>
	<p>NOMBRE: <input type="text" name="nombre" value="<?php echo $nombre;?>"></p>
	<p>CATEGORIA: <input type="text" name="categoria_s" value="<?php echo $categoria_s;?>"></p>
	<p>DESCRIPCION: <input type="text" name="descripcion" value="<?php echo $descripcion;?>"></p>
	<input type="submit" name="submit_s" value="Modificar ">
</form>

<br>
<a href='../index.php'><h>Inicio</h></a> 


</body>
</html>