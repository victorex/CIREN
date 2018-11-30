
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
  
  if(isset($_POST['codigo_curso'])) {

  $codigo_curso = $_POST['codigo_curso'];

  $sql = "SELECT * FROM producto WHERE codigo_curso = '".$codigo_curso."';";
  $resultado = pg_query($conexion,$sql) or die('error getting data');

  echo "<table>";
  echo "<tr><th>Codigo</th><th>ID</th><th>Categoria</th><th>Descripcion</th></tr>";

  while($row = pg_fetch_array($resultado, NULL, PGSQL_ASSOC)){
    echo "<tr><td>";
    echo $row['codigo_curso'];
    echo "</td><td>";
    echo $row['nombre'];
    echo "</td><td>";
    echo $row['duracion'];
    echo "</td><td>";
    echo $row['lugar'];
    echo "</td><td>";
    echo $row['valor'];
    echo "</td><td>";
    echo $row['fecha'];
    echo "</td><td>";
    echo $row['bibliografia'];
    echo "</td><td>";
    echo $row['requisitos'];
    echo "</td></tr>";
  }
  echo "</table>";
  }

  if($codigo_curso){
    echo "<br></br>","<a href='consultar_curso.php'><h>Atrás</h></a>",
      "&nbsp;&emsp; <a href='index.php'><h>Inicio</h></a>";
        }
    else{
        echo "Se ha producido un error al guardar, revise los datos";
        }


?>
</body>
</head>
</html>

