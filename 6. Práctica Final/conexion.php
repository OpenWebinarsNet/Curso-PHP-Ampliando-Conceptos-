<?php
//Creo las variables de conexión a MySQL
	$servidor = "localhost";
	$usuario = "root";
	$pass = "";
	$basedatos = "objetivos";
	
	//Establecer la conexión con MySQL
	$conexion = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexión");
	
	//Seleccionamos la Base de Datos
	mysqli_select_db($conexion,$basedatos);

?>
