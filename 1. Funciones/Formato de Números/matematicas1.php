<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$edad = 22;
	$nota = 7.34;

	//Funciones Matemáticas 

	if(is_int($edad)){
			echo "Edad es un entero";
	}
	echo "<p> </p>";
	
	
	if(is_int($nota)){
			echo "Nota es un entero";
	}
	elseif(is_float($nota)){
			echo "Nota es un decimal";
	}
	echo "<p> </p>";
	
	//Por defecto notación inglesa
	echo number_format("1000000")."<br/>";
	
	//Dos decimales
	echo number_format("1000000",2)."<br/>";
	
	//Definir la , para decimales y el . para los millares
	echo number_format("1000000",2,",",".");
	
	
?>
</body>
</html>