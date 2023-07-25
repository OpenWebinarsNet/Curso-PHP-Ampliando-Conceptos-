<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Ficheros
	
	//Abrimos para lectura_escritura
	$miarchivo = fopen("archivo.txt", "r+");
	if( $miarchivo == false ) {
      echo "Error al abrir el archivo";
    }
    else
    {
			//Lectura con fread
         $contenido = fread($miarchivo, filesize("archivo.txt"));  
		 echo "<p>El contenido es: <br/> ".$contenido."</p>";
        
    }
	
	echo "<p> </p>";
	
	//Abrimos en modo w un archivo que no existe y se crea
	$miarchivo2 = fopen("archivo3.txt", "w");
	
	//Abrimos en modo w un archivo que existe y se sobreescribe
	$miarchivo3 = fopen("archivo4.txt", "w");
	
	//Lectura con file_get_contents
	$todo = file_get_contents("archivo.txt");
    echo "<p>Todo el archivo: <br/> ".$todo."</p>";
	
	echo "<p> </p>";
	
	//Lectura con file
	$arrayarchivo = file("archivo.txt");
    var_dump($arrayarchivo);
	
	//Lectura con fgets
	rewind($miarchivo);
	while( feof($miarchivo) == false )
     {
       echo fgets($miarchivo). "<br />";
     }

?>
</body>
</html>