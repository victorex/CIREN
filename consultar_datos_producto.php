
<html>
<head>
<title>Consultar Personal</title>
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
  

  if(isset($_POST['nombre'])) {

  $nombre = $_POST['nombre'];

  $sql = "SELECT * FROM producto WHERE nombre = '".$nombre."';";
  $resultado = pg_query($conexion,$sql) or die('error getting data');

  echo "<table>";
  echo "<tr><th>Nombre</th><th>Nombre</th><th>Email</th><th>Cargo</th><th>Profesion</th>
        <th>Descripcion</th><th>Universidad de Egreso</th><th>Telefono</th></tr>";

  while($row = pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
    echo "<tr><td>";
    echo $row['nombre'];
    echo "</td><td>";
    echo $row['categoria_p'];
    echo "</td><td>";
    echo $row['id_producto'];
    echo "</td><td>";
    echo $row['descripcion'];
    echo "</td></tr>";
  }
  echo "</table>";
  }

  if($nombre){
    echo "<br></br>","<a href='consultar_producto.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
        }
    else{
        echo "Se ha producido un error al guardar, revise los datos";
        }


?>
</body>
</head>
</html>
