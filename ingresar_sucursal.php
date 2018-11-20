<?php
	include 'conexion.php';

if($_POST['id']!=""){ 	
	$id = $_POST['id'];
	$direccion = $_POST['direccion'];
	$ciudad = $_POST['ciudad'];

	$sql = "INSERT INTO sucursal VALUES(".$id.", '".$direccion."', '".$ciudad."');";
	$insercion = pg_query($conexion,$sql);		
	//}
	
	if($insercion){
        echo "Guardado con exito, vuelva a atras para continuar.","<br></br>","<a href='ingresar_sucursal.html'><h>Atrás</h></a>",
			"&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
		//echo "<a href='index.php'>back</a>";
        }
    else{
        echo "Se ha producido un error al guardar";
        }
    }
else{
    echo "Datos incompletos, vuelva atras y complete adecuadamente";
    }		
?>
