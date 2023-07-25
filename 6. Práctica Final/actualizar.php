<?php
require_once 'conexion.php';
$id = $_GET['id'];

$sql = "UPDATE objetivos SET completo_objetivo = '1' WHERE id_objetivo = '" . $id . "'";
if(mysqli_query($conexion, $sql)){
  print ("Actualizado");
} else {
  print("Fallido");
}

echo "<script>location.href='index.php'</script>";


?>
