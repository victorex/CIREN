
<html>
<head>
<title>Consultar Información</title>
<style type="text/css">
table{
  border: 1px solid black;
  background-color: #FFC;
}

th{
  border-bottom: 5px solid #000;
}

td{
  border-bottom: 2px solid #666;
}
</style>
</head>
<body>
  <?php
  include 'Conexion.php';
  
  if(isset($_POST['identificador'])) {

  $identificador = $_POST['identificador'];
  $tipo_i = $_POST['tipo_i'];
  
  echo "<table>";
/////Tabla	    
  $sql2 = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tipo_i."';";
  $resultado2 = pg_query($conexion,$sql2) or die('error getting data');
  
  while($row = pg_fetch_array($resultado2)){
	  $num_rows = pg_num_rows($result);
    echo "<tr>";
		for($i=0;$i<$num_rows;$i++) {
			echo "<th>"$row[$i]"</th>";
			//echo "<th>" . htmlspecialchars($resultado2) . "</th>";
		}		
	echo "</tr>";	  
  }
///////DATOS  
  $sql = "SELECT * FROM ".$tipo_i." WHERE identificador = ".$identificador.";";
  $resultado = pg_query($conexion,$sql) or die('error getting data');  
  while($row = pg_fetch_row($resultado)){  	  
    echo "<tr>";
		foreach($row as $resultado) {
			echo "<td>" . htmlspecialchars($resultado) . "</td>";
		}		
	echo "</tr>";
  } 


 
  echo "</table>";
  }

  if($identificador){
    echo "<br></br>","<a href='consultar_informacion.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
        }
    else{
        echo "Se ha producido un error, revise los datos";
        }


?>
</body>
</head>
</html>
