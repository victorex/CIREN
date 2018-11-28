  	<?php
	include 'conexion.php';
	
	
	//buscar cliente 
function buscar_producto_existente(){
	$conn= pg_query($conexion);
   	$SQL= "SELECT nombre FROM producto";
   	$result = pg_query($conn,$SQL);
	
	
	while ($resultado = pg_fetch_assoc($result))
	{
		echo '<option value="'.$resultado['nombre'].'"> '.$resultado['nombre'].'</option>';
	}
 pg_close($conn);
}
	
	

	
	
?>

