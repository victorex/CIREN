<?php
	include 'conexion.php';


	$rut = $_POST['rut'];
	$sql = "SELECT * FROM personal WHERE rut= '".$rut."';";
	$resultado = pg_query($conexion,$sql);		
    while($row=pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
      $nombre=$row['nombre'];
      $email=$row['email'];
      $cargo=$row['cargo'];
      $profesion=$row['profesion'];
      $descripcion=$row['descripcion'];
      $telefono=$row['telefono'];
      $u_egreso=$row['u_egreso'];

    }
      
	

    if(isset($_POST['submit_personal'])){
      
      $nombre=$_POST['nombre'];
      $email=$_POST['email'];
      $cargo=$_POST['cargo'];
      $profesion=$_POST['profesion'];
      $descripcion=$_POST['descripcion'];
      $telefono=$_POST['telefono'];
      $u_egreso=$_POST['u_egreso'];
     
    
      
      $sql = "UPDATE personal SET nombre='".$nombre."',
                                  email='".$email."' ,
                                  cargo='".$cargo."' ,
                                  profesion='".$profesion."' ,
                                  descripcion='".$descripcion."',
                                  u_egreso='".$u_egreso."' ,
                                  telefono=".$telefono." 
                                  WHERE rut = '".$rut."';";  
                                      
                                  // LINEA DE TELEFONO GENERA ERROR SEGUN CREO O LA RUT (INTEGER)
      
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

<h2>Modificar datos Personal</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<p>RUT: <input type="hidden" name="rut" value="<?php echo $rut;?>" > <?php echo $rut;?></p>
	<p>NOMBRE: <input type="text" name="nombre" value="<?php echo $nombre;?>"></p>
	<p>EMAIL: <input type="text" name="email" value="<?php echo $email;?>"></p>
	<p>CARGO: <input type="text" name="cargo" value="<?php echo $cargo;?>"></p>
	<p>PROFESION: <input type="text" name="profesion" value="<?php echo $profesion;?>"></p>
	<p>DESCRIPCION: <input type="text" name="descripcion" value="<?php echo $descripcion;?>"></p>
	<p>TELEFONO: <input type="text" name="telefono" value="<?php echo $telefono;?>"></p>
	<p>U EGERESO: <input type="text" name="u_egreso" value="<?php echo $u_egreso;?>"></p>
	<input type="submit" name="submit_personal" value="Modificar ">
</form>

<br>
<a href='../index.php'><h>Inicio</h></a> 

</body>
</html>