<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Sesiones
	
	// Continuar la sesión
	 session_start();  
	 
     if( isset($_SESSION['iniciada']) == true )
    {
        var_dump( $_SESSION );
        echo "<p> </p>";
		
        echo "Identificador de la sesión: [".session_id()."]<br/>";
        echo "Nombre de la sesión: [".session_name()."]<p/>";
        echo "<p> </p>";
		
        echo "Nombre: ".$_SESSION['nombre']."<br/>";
        echo "Edad: ".$_SESSION['edad']."<p/>";
       
    }
    else
    {
         echo "<p>No se ha definido la sesión</p>";
    }
    echo "<a href='sesion2.php'>Volver a la página principal</a>";
	
?>
</body>
</html>