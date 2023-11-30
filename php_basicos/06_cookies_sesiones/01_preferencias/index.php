<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>

<?php
if (isset($_COOKIE['nombreusu']) && isset($_COOKIE['colorusu'])) {
    $nombreUsuario = $_COOKIE['nombreusu'];
    $colorUsuario = $_COOKIE['colorusu'];

    echo '<style>';
    echo 'body { background-color: ' . $colorUsuario . '; }';
    echo '</style>';
    echo '<h1>Bienvenido, ' . $nombreUsuario . '</h1>';
    echo '<p><a href="preferencias.php">Ir al formulario de preferencias</a></p>';
    echo '</div>';
    echo '<p><a href="borrar_prefs.php">Borrar preferencias</a></p>';
    echo '</div>';
}else {
    echo '<style>';
    echo '<body style="background-color:white;">';
    echo '</style>';
    echo '<h1>Página de inicio</h1>';
    echo '<p><a href="preferencias.php">Ir al formulario de preferencias</a></p>';
    echo '</div>';
}
?>

</body>
</html>
