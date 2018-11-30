<!DOCTYPE html>
<html lang="en">
<head>
	<title>CIREN</title>
   	 <meta charset="UTF-8">
</head>

<body>

<h2>Consultar Información</h2>
<form method="post" action="consultar_datos_informacion.php">
	<p>Identificador: <input type="text" name="identificador"></p>
	<p>Tipo: <select name="tipo_i">
			<option value="agricola">Agricola</option>
			<option value="clima">Clima</option>
			<option value="especie">Especie</option>
			<option value="forestal">Forestal</option>
			<option value="fuente_agua">Fuente de Agua</option>
			<option value="proyecto_historico">Proyecto Historico</option>			
			<option value="recurso_hidrico" selected>Recurso Hidrico</option>
			<option value="suelo">Suelo</option>
			</p>	
	<input type="submit" name="submit" value="Buscar ">
</form>


</body>
</html>