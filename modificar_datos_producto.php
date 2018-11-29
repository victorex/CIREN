<?php
	include 'conexion.php';


	$id_producto = $_POST['id'];
	$sql = "SELECT * FROM producto WHERE id_producto= '".$id_producto."';";
	$resultado = pg_query($conexion,$sql);		
    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $nombre=$row['nombre'];
      $categoria_p=$row['categoria_p'];
      $descripcion=$row['descripcion'];


    }
      
	

    if(isset($_POST['submit_p'])){
      
      $id_producto_mod = $_POST['id'];
      $nombre=$_POST['nombre'];
      $categoria_p=$_POST['categoria_p'];
      $descripcion=$_POST['descripcion'];

      $sql = "UPDATE producto SET nombre='".$nombre."',
                                  categoria_p='".$categoria_p."' ,
                                  descripcion='".$descripcion."'
                                  WHERE id_producto = ".$id_producto_mod.";";  
      
//      $sql = "UPDATE producto SET nombre='".$nombre_mod."',
// 																  categoria_p='".$categoria_p_mod."',
//                                  descripcion='".$descripcion_mod."',
//	                                WHERE id_producto = ".$id_producto_mod." ; ";
      
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

<h2>Modificar datos Producto</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>ID: <input type="hidden" name="id" value="<?php echo $id_producto;?>" > <?php echo $id_producto;?></p>
	<p>NOMBRE: <input type="text" name="nombre" value="<?php echo $nombre;?>"></p>
	<p>CATEGORIA: <input type="text" name="categoria_p" value="<?php echo $categoria_p;?>"></p>
	<p>DESCRIPCION: <input type="text" name="descripcion" value="<?php echo $descripcion;?>"></p>
	<input type="submit" name="submit_p" value="Modificar ">
</form>

<br>
<a href='../index.php'><h>Inicio</h></a> 


</body>
</html>