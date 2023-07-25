<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprobar</title>
</head>

<body>
<?php 


	//capturo el valor del campo de formulario
	$minombre = $_GET["nombre"];
	
	//capturo el valor del desplegable
	$modificar = $_GET["seleccionar"];
	
	//Creo las variables de conexión a MySQL
	$host = "localhost";
	$usuario = "root";
	$pass = "";
	
	//Establecer la conexión con MySQL
	$conexion = mysqli_connect($host,$usuario,$pass) or die("Error de conexión");
	
	//Seleccionamos la Base de Datos
	mysqli_select_db($conexion,"usuarios");
	
	//creamos la sentencia SQL de consulta
	 $sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";
	
	//Ejecutar la sentencia SQL
	mysqli_query($conexion,$sql);
	
?>

</body>
</html>