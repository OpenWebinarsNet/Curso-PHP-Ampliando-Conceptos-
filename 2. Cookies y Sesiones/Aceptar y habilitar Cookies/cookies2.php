<?php

// Comprobar si se ha aceptado
if(isset($_GET['aceptar'])) {
    // Definimos la caducid por un año
    $caducidad = time() + (60 * 60 * 24 * 365);
    // Crea una cookie llamada micookie
    setcookie('micookie', '1', $caducidad);
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    <div>
        <?php if (!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])): ?>
            <!-- Mensaje de cookies -->
            <div class="cookies">
                <h2>Cookies</h2>
                <p>Debes aceptar las cookies para poder seguir navegando</p>
                <a href="?aceptar=1">Aceptar</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>