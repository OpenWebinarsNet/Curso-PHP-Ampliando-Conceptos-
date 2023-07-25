<?php
require_once 'conexion.php';

//Obtenerle con GET o REQUEST
$id = $_GET['id'];


$sql = "DELETE FROM objetivos WHERE id_objetivo = '" . $id . "'";
if(mysqli_query($conexion, $sql)){
  print ("Borrado");
} else {
  print("Fallido");
}

echo "<script>location.href='index.php'</script>";


?>
