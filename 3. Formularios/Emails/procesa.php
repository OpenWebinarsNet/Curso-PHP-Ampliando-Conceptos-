<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	
	$to = "markutovich@gmail.com";

$subject = "email de confirmación";

$message ="Hola confirma haciendo click en el siguiente…...";

$from = "administrador@dominio.com";

$headers = "From: $from";

mail($to,$subject,$message,$headers);

echo "Mail enviado.";
	
	

	
	
?>
</body>
</html>