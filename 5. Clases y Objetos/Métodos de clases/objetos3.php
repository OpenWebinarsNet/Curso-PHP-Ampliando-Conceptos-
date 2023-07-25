<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Objetos y clases
	
	 class Alumno
    {
        // Propiedades
         private $nombre    = null;
         private $apellidos = null;
		 
		 // Métodos:
        function getNombre() {
            return $this->nombre;
        }
        function setNombre( $nombre ) {
            $this->nombre = $nombre;
        }
        function getApellidos() {
            return $this->apellidos;
        }
        function setApellidos( $apellidos ) {
            $this->apellidos = $apellidos;
        }
		
    }
	
	$alumno1 = new Alumno();
	
	$alumno1->setNombre("Luisja");
	$alumno1->setApellidos("Marquina García");
	
	if(class_exists("Alumno")){
		echo "Clase ". get_class($alumno1)." definida";
	}
	
	$metodosalumno  = get_class_methods("Alumno");
	var_dump($metodosalumno);
	
	$propiedadesalumno  = get_class_methods("Alumno");
	var_dump($propiedadesalumno);
?>
</body>
</html>