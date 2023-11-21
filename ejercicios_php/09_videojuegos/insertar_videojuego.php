
<?php
$host = "localhost";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
    $usuario, $password);
    $insercion = $pdo->prepare("INSERT INTO videojuegos(titulo, genero, precio)" .
    " VALUES(:titulo, :genero, :precio)");
    $insercion->bindParam(':titulo', $_REQUEST['titulo']);
    $insercion->bindParam(':genero', $_REQUEST['genero']);
    $insercion->bindParam(':precio', $_REQUEST['precio']);
    $insercion->execute();

if ($insercion->execute()) { // esto hace que se inserte 2 veces
    header("Location: index.php");
    $pdo = NULL;
    exit();
} else {
    header("Location: error.php?mensaje=Error+insertando+videojuego");
    $pdo = NULL;
    exit();
}
?>
