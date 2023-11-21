<!DOCTYPE html>
<html>
    <head>
        <title>Sesiones</title>
    </head>
    <body>
        <h1>Sesiones</h1>
       <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['loginusu']) && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    header("Location: login.php");
    exit;
}
        ?>
        <div id="menu">
            <ul>
                <li><a href="pag1.php">Pagina 1</a></li>
                <li><a href="pag2.php">Pagina 2</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
            </ul>
        </div>
    </body>
</html>