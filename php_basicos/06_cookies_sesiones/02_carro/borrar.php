<!DOCTYPE html>
<html>
<head>
    <title>Sesiones</title>
</head>
<body>
    <h1>Sesiones</h1>
    <?php
  session_start();

  if (isset($_SESSION['precio_total'])) {
      unset($_SESSION['precio_total']); // Borra la sesión 'precio_total'
  }

    ?>
      <p><a href="carro.php">Volver al formulario</a></p>
</body>
</html>