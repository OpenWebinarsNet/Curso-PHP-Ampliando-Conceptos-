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
        echo "Identificador de la sesión: [".session_id()."]<br/>";
        echo "Nombre de la sesión: [".session_name()."]<p/>";
		
		// Borrar las variables de sesión
         session_unset();                                        
         
         session_destroy();    
		 
        // Comprobar la variable de sesión 'nombre':
         if( isset($_SESSION['nombre']) ){
            echo "Ahora el nombre es: ".$_SESSION['nombre']."<br />";
		 }
        else
		{
            echo "La variable de sesión 'nombre' no está definida.<br />";
		}
		
        // Comprobar la variable de sesión 'edad':
         if( isset($_SESSION['edad']) ){
            echo "Ahora la edad es: ".$_SESSION['edad']."<br />";
		 }
        else
		{
            echo "La variable de sesión 'edad' no está definida.<br />";
		}
      
	  
        echo "<p>SESIÓN FINALIZADA CORRECTAMENTE</p>";
    }
    else
    {
         echo "<p>No se ha definido la sesión</p>";
    }
    echo "<a href='sesion2.php'>Volver a la página principal</a>";
	
?>
</body>
</html>