<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia inmobiliaria</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nuevo.php">Nuevo inmueble</a></li>
                <li><a href="buscar.php">Buscador</a></li>
            </ul>
        </nav>
    </header>
    <section id="favoritos">
        <h1>Ficha de inmueble</h1>
    </section>
</body>
<?php
include 'conexion.inc';
if (isset($_GET['codigo']) && !empty($_GET['codigo'])) {
    $codigo_inmueble = $_GET['codigo'];


    $inmueble = obtenerFicha($codigo_inmueble,$pdo);

    if ($inmueble) {
        echo '<h2>' . $inmueble['titulo'] . '</h2>';
        echo '<img src="' . $inmueble['imagen'] . '">';
        echo '<p>Categoría: ' . $inmueble['categoria'] . '</p>';
        echo '<p>Habitaciones: ' . $inmueble['habitaciones'] . '</p>';
        echo '<p>Precio: ' . $inmueble['precio'] . ' EUR</p>';
    } else {
        echo '<p>El inmueble no pudo ser encontrado.</p>';
    }
} else {
    echo '<p>Código de inmueble no encontrado.</p>';
}

function obtenerFicha($codigo, $pdo) {
    try {
        if (!$pdo) {
            die('Error: La conexión a la base de datos es nula.');
        }
        $sql = "SELECT * FROM inmuebles WHERE codigo = :codigo";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(':codigo', $codigo);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      
        echo 'Error de base de datos: ' . $e->getMessage();
        return false;
    }
}
?>

</html>