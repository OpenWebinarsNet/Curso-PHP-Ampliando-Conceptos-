<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="objetivos.css" />
    <title>Seguimiento de objetivos</title>
  </head>
  <body>
    <div id="contenedor">
      <h1>Nuevo Objetivo</h1>
      <form action="insertar_objetivo.php" method="post">
          <label for="categoria">Categoria</label>
          <select name="categoria" id="categoria">
              <option value="0">Personal</option>
              <option value="1">Profesional</option>
              <option value="2">Otra</option>
          </select>
		  
          <label for="texto">Objetivo</label>
          <textarea name="texto" id="texto"></textarea>
		  
          <label for="fecha">Fecha</label>
          <input type="date" id="fecha" name="fecha" />
		  
          <label for="completo">Objetivo completado</label>
          <input type="checkbox" id="completo" name="completo" value="1" />
		  <br/>
		  
          <button type="submit">Insertar Objetivo</button>
      </form>
      <?php
	 
	  
      require_once "conexion.php";
	  
      $sql = "SELECT * FROM objetivos";
      $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
	  
      print("<h2>Objetivos incompletos</h2>");

      //Objetivos incompletos
      while($fila = mysqli_fetch_array($resultado)){
        if($fila['completo_objetivo'] == 0){
            if($fila['categoria_objetivo'] == 0){
              $categoria = "Personal";
            } elseif ($fila['categoria_objetivo' == 1]) {
              $categoria = "Profesional";
            } else {
              $categoria = "Otro";
            }
			
            echo "<div class='objetivo'>";
            echo "<a href='actualizar.php?id=" . $fila['id_objetivo'] . "'><button class='botonCompletar'>Actualizar</button></a><strong>";
            echo  $categoria . "</strong><p>" . $fila['texto_objetivo'] . "</p>Fecha del Objetivo: " . $fila['fecha_objetivo'];
            echo "</div>";
          }
      }
      //Objetivos completos
      print("<h2>Objetivos completos</h2>");
      $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
      while($fila = mysqli_fetch_array($resultado)){
        if($fila['completo_objetivo'] != 0){
            if($fila['categoria_objetivo'] == 0){
              $categoria = "Personal";
            } elseif ($fila['categoria_objetivo' == 1]) {
              $categoria = "Profesional";
            } else {
              $categoria = "Otro";
            }
            echo "<div class='objetivo'>";
            echo "<a href='borrar.php?id=" . $fila['id_objetivo'] . "'><button class='botonBorrar'>Borrar</button></a><strong>";
            echo  $categoria . "</strong><p>" . $fila['texto_objetivo'] . "</p>Fecha del Objetivo: " . $fila['fecha_objetivo'];
            echo "</div>";
          }
      }
     ?>
    </div>
  </body>
</html>
