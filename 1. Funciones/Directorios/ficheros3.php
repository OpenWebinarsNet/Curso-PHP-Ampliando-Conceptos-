<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Directorios
	
	//Mostrar directorio actual
	echo getcwd();
	
	//Mostrar el contenido de un directorio
	$directorio = scandir(getcwd());
	var_dump($directorio);
	
	//Cambiar de directorio
	chdir('../');
	echo getcwd();
	
	
	
	

	
	
?>
</body>
</html>