<?php include('cabecera.inc'); ?>

<body>
    <h1>Inmuebles</h1>
    <?php
  session_start();

  if (isset($_SESSION['favoritos'])) {
      unset($_SESSION['favoritos']); 
  }

    ?>
      <p><a href="index.php">Volver al formulario</a></p>
</body>
</html>