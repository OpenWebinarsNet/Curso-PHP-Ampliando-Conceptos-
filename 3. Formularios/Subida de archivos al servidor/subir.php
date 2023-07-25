<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//Subida de archivos al servidor
	var_dump($_FILES);
	
	//Configuración de php.ini
	$directorio = ini_get("upload_tmp_dir");
	echo $directorio;
	
	$directorioTemp = $_FILES['imagen']['tmp_name'];
	move_uploaded_file($directorioTemp, $_FILES['imagen']['name']);
	
?>
	
</body>
</html>