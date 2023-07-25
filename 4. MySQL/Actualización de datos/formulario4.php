<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualización de valores</title>
</head>

<body>
<form id="miformu" name="miformu" method="get" action="actualizar.php">
  <p>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
  </p>
  
  <?php 
	
	//Creo las variables de conexión a MySQL
	$host = "localhost";
	$usuario = "root";
	$pass = "";
	
	//Establecer la conexión con MySQL
	$conexion = mysqli_connect($host,$usuario,$pass) or die("Error de conexión");
	
	//Seleccionamos la Base de Datos
	mysqli_select_db($conexion,"usuarios");
	
	//creamos la sentencia SQL de consulta
	 $consultar = "SELECT nombre FROM clientes";
	
	//Ejecutar la sentencia SQL
	$registros=mysqli_query($conexion,$consultar);
	
	echo "<label for='seleccionar'>Elige un nombre:</label>";
	echo "<select name='seleccionar' id='seleccionar'>";
	while($registro=mysqli_fetch_row($registros)){
		
		echo "<option value='$registro[0]'>".$registro[0] ."</option>";
		
	}
	echo "</select>";	
	
?>
  
  
  <p>
    <input name="submit" type="submit" id="submit" value="Actualizar">
  </p>
</form>
</body>
</html>