<?php
require_once 'conexion.php';


$categoria = $_POST['categoria'];
$texto = $_POST['texto'];
$fecha = $_POST['fecha'];

//Transformar el formato Año/Mes/Día
$fecha = date("Y/m/d", strtotime($fecha));

if (isset($_POST['completo'])){
		$completo = $_POST['completo'];
}
else{
	$completo = 0;
}

$sql = "INSERT INTO objetivos (categoria_objetivo, texto_objetivo, fecha_objetivo, completo_objetivo) VALUES ('$categoria','$texto','$fecha','$completo') ";


if(mysqli_query($conexion, $sql)){
  echo ("Almacenado");
} else {
  echo("Fallido");
}

echo "<script>location.href='index.php'</script>";
 ?>
