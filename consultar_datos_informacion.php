
<html>
<head>
<title>Consultar Sucursal</title>
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
  
  $sql = "SELECT * FROM ".$tipo_i." WHERE identificador = ".$identificador.";";
  $resultado = pg_query($conexion,$sql) or die('error getting data');

  echo "<table>";
  //echo "<tr><th>Nombre</th><th>ID</th><th>Categoria</th><th>Descripcion</th></tr>";

  while($row = pg_fetch_row($resultado)){
/////Tabla	  
    echo "<tr>";
		foreach($row as $resultado) {
			echo "<th>  . </th>";
		}		
	echo "</tr>";	  
///////DATOS	  
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
        echo "Se ha producido un error al guardar, revise los datos";
        }


?>
</body>
</head>
</html>
