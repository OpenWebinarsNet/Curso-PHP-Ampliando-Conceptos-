<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Sesiones
	session_id("22");
	echo session_id(); 
	echo "<p> </p>";
	
	//Por defecto PHPSESSID
	echo session_name();
    session_start();
	
	
	
	//Variables de sesión
	$_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Luisja";
  
	var_dump($_SESSION);
  
	echo "Nombre: ".$_SESSION['nombre']."<br />";
	// Borrar las variables de sesión
    unset($_SESSION['nombre']); 

	if( isset($_SESSION['nombre']) == false ){
		echo "Nombre no definido.<br />";
    }
	
   // Destruir la sesión
    session_destroy();

	//La variable no se destruye
	echo   $_SESSION["iniciada"];
	
?>
</body>
</html>