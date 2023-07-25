<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Objetos y clases
	
	class PrimeraClase
	{
		// Declaración de una propiedad
		public $nombre = 'Luisja';

		// Declaración de un método
		public function mostrarNombre() {
			echo $this->nombre;
		}
	}
	
	$instancia = new PrimeraClase();

	//Mostrar una propiedad del objeto
	echo $instancia->nombre;
	
	//Llamar a la función del objeto
	$instancia->mostrarNombre();
	
	

?>
</body>
</html>