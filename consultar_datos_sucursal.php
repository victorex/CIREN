
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

  if(isset($_POST['id'])) {

  $id = $_POST['id'];

  $sql = "SELECT * FROM sucursal WHERE id = ".$id.";";
  $resultado = pg_query($conexion,$sql) or die('error getting data');

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

  if($id){
    echo "<br></br>","<a href='consultar_sucursal.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
        }
    else{
        echo "Se ha producido un error al guardar, revise los datos";
        }


?>
</body>
</head>
</html>
