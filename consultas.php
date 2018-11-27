<?php
include 'Conexion.php';

//Declaración de funcion

fuction consulta($cone,$consulta){

$result=mysql_query($consulta,$cone) or die ("Error en la Consulta");
return $result;

}

##ejemplo de consulta

$query=consulta($conexion,"select.....");









?>
