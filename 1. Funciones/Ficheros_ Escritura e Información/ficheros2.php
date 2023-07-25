<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Ficheros
	
	//Abrimos para lectura_escritura y situamos el puntero al final del archivo
	$miarchivo = fopen("archivo2.txt", "a+");
	
	//Escritura con fwrite
	 fwrite($miarchivo, "Escribiendo en el archivo");
	 
	 //Forzar a escribir los datos pendientes
	 fflush($miarchivo);
	 
	 //Tamaño del archivo en bytes
	  echo filesize("archivo2.txt");
	  echo "<br>";
	 
	 //Información del archivo
	 $arrayinfo = stat("archivo2.txt");
	 var_dump($arrayinfo);
	

	
	
?>
</body>
</html>