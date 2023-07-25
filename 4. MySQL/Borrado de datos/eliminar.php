<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprobar</title>
</head>

<body>
<?php 

	$encontrado = FALSE;
	
	//capturo el valor del campo de formulario
	$minombre = $_GET["nombre"];
	
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
	
	while($registro=mysqli_fetch_row($registros)){
		echo "Nombre: ".$registro[0];
		echo "<p> </p>";
		if($registro[0] == $minombre){
			$encontrado = TRUE;
		}
	}
	if($encontrado){
			$sql = "DELETE FROM clientes WHERE nombre = '$minombre'";
			mysqli_query($conexion, $sql);
			echo $minombre . " ha sido borrado de la base de datos";
	}
	else{
			echo $minombre . " no se encuentra en la base de datos";
	}
	
?>

</body>
</html>