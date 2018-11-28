<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Consultar Sucursal</h2>
<form> 
Nombre: <input type=text name="nombre"> 
<br> 
País: 
<select name=id_pais> 
   <option value=1>España 
   <option value=2>México 
   <option value=3>Argentina 
   <option value=4>Colombia 
   <option value=5>Chile ... 
</select>


 <?php
  include 'Conexion.php';
  
  	$sql = "SELECT nombre FROM producto;";

 function saca_m($sql,$nombre){ 
  	echo "<select name='$nombre'>"; 
  	$resultado=pg_query($sql); 
  	while ($fila=pg_fetch_row($resultado)){ 
    	if ($fila[0]==$nombre){ 
      	echo "<option selected value='$fila[0]'>$fila[1]";	
    	} 
    	else{ 
      	echo "<option value='$fila[0]'>$fila[1]";	
    	} 
  } 
  	echo "</select>";	
} 
  

  
?>

</body>
</html>
