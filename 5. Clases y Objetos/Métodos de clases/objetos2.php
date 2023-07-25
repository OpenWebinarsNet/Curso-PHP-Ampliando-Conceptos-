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
		
		function calcularLetras ( $nombre ){
				return strlen($this->nombre);
		}
		
    }
	
	$alumno1 = new Alumno();
	
	$alumno1->setNombre("Luisja");
	$alumno1->setApellidos("Marquina García");
	
	$nombrealumno1 = $alumno1->getNombre();
	echo $nombrealumno1 . " ";
	
	$apellidosalumno1 = $alumno1->getApellidos();
	echo $apellidosalumno1 . "<br/>";

	$letras = $alumno1->calcularLetras($nombrealumno1);
	echo $letras;
?>
</body>
</html>