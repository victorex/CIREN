<?php

$host="localhost";
$db="CIREN";
$port="5432";
$user="postgres";
$pass="nuez2009";

$con = pg_connect("host=$host dbname=$db port=$port user=$user password=$pass");
if(!$con)
        echo "<p><i>No me conecte</i></p>";
    else
     //   echo "<p><i>Me conecte</i></p>";

    //pg_close($con);
?>