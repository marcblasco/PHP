<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Videojuegos</title>
</head>
<body>
    <h2>Listado de Videojuegos</h2>

    <?php
    $host = "localhost";
    $nombreBD = "videojuegos";
    $usuario = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
    $usuario, $password);
    $sql = "SELECT * FROM videojuegos";
    $result = $pdo->query($sql);

    foreach ($result as $videojuego) {
        echo "<li>{$videojuego['titulo']} - Género: {$videojuego['genero']} - Precio: {$videojuego['precio']}</li>";
    }

    echo "</ul>";

    ?>

    <br>
    <a href="form_videojuego.php">Agregar videojuego</a>
</body>
</html>
