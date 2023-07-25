<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Sesiones
	
	 // Iniciar la sesión
     session_start();
	 
    // Variables de sesión:
     $_SESSION['iniciada'] = true;
     $_SESSION['nombre'] = "Luisja";
     $_SESSION['edad'] = 39;
	 
    // Mostrar información de la sesión:
    echo "Identificador de la sesión: [".session_id()."]<br/>";
    echo "Nombre de la sesión: [".session_name()."]<p/>";
	
    // Mostrar valores de las variables de sesión creadas:
    echo "Nombre: ".$_SESSION['nombre']."<br />";
    echo "Edad: ".$_SESSION['edad']."<p />";
	
    echo "<a href='sesion3.php'>Comprobar los valores en otra página</a><br/>";
    echo "<a href='sesion4.php'>Finalizar la sesión</a>";  
	
?>
</body>
</html>