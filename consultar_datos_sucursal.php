
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
  require_once 'conexion.php';

  if(isset($_POST['id'])) {

  $id = $_POST['id'];

  $sql = "SELECT * FROM sucursal WHERE id = ".$id.";"; 
  $resultado = pg_query($con,$sql) or die('error getting data');    

  echo "<table>";
  echo "<tr><th>ID</th><th>Dirección</th><th>Ciudad</th></tr>";

  while($row = pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['direccion'];
    echo "</td><td>";
    echo $row['ciudad'];
    echo "</td></tr>";
  }
  
  echo "</table>";
  }
?>
</body>
</head>
</html>