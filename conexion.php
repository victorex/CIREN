<?php

$host="35.192.158.52";
$db="CIREN";
$port="5432";
$user="postgres";
$pass="999999";

$conexion = pg_connect("host=$host dbname=$db port=$port user=$user password=$pass");
if(!$conexion)
        echo "<p><i>No me conecté</i></p>";
    else
     //   echo "<p><i>Me conecte</i></p>";

    //pg_close($con);
?>