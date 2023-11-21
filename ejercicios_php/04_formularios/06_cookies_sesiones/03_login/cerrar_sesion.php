<!DOCTYPE html>
<html>
<head>
    <title>Sesiones</title>
</head>
<body>
    <h1>Sesiones</h1>
    <?php
session_start();
session_unset(); 
session_destroy(); 
header("Location: cabecera.inc"); 
exit;

    ?>
      
</body>
</html>