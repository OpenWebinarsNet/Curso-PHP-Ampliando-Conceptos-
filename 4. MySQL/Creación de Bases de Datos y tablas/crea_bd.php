<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//MySQL
	
	$servidor = 'localhost:3306';
    $usuario = 'root';
    $password = '';
    $conexion = mysqli_connect($servidor, $usuario, $password);
	
	
    if(!$conexion ){
         echo 'Conexión fallida<br>';
     }
	else{
		
		//Crear BD
		//Crear también desde phpmyadmin
		$sql = "CREATE DATABASE IF NOT EXISTS usuarios";
		if (mysqli_query($conexion, $sql)) {
            echo "Base de datos creada con éxito";
		} else {
            echo "Error: " . mysqli_error($conexion);
		}
		
		//Seleccionar base de datos usuarios
		mysqli_select_db($conexion,"usuarios");
		
		//Crear tabla
		$sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";  
         
         if(mysqli_query($conexion, $sql2)){  
         echo "Table created successfully";  
         } else {  
            echo "Table is not created successfully ";  
         }  
	}
	

?>
</body>
</html>