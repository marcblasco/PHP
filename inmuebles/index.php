<?php include('cabecera.inc'); ?>
<?php
$_SESSION = array();
session_start();
include('conexion.inc');

if (isset($_GET['codigo_inmueble'])) {
    $codigo_inmueble = $_GET['codigo_inmueble'];
}

$sql = "SELECT * FROM inmuebles WHERE codigo = :codigo";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(':codigo', $codigo_inmueble);
$consulta->execute();

$result = $consulta->fetchAll(PDO::FETCH_ASSOC);
if ($result) {
    if (!isset($_SESSION['favoritos'])) {
        $_SESSION['favoritos'] = [];
    }

    array_push($_SESSION['favoritos'], $result);


    echo '<p>Inmueble añadido a favoritos</p>';
} else {
    echo '<p>Inmueble no encontrado</p>';
}
echo '<section id="resultados">';
if (isset($_SESSION['favoritos']) && is_array($_SESSION['favoritos']) && !empty($_SESSION['favoritos'])) {
    foreach ($_SESSION['favoritos'] as $inmuebles) {
        foreach ($inmuebles as $inmueble) {
            echo '<section class="inmueble">';
            echo '<h4>' . $inmueble['titulo'] . '</h4>';
            echo '<p><img src="' . $inmueble['imagen'] . '"></p>';
            echo '<p>' . $inmueble['categoria'] . '</p>';
            echo '<p>' . $inmueble['habitaciones'] . ' habitaciones - ' . $inmueble['precio'] . ' eur</p>';
            echo '<p><a href="ficha.php?codigo=' . $inmueble['codigo'] . '">Ver ficha</a></p>';
            echo '</section>';
        }
    }
} else {
    echo '<p>No tienes inmuebles favoritos.</p>';
}
echo '</section>';


?>
    <p><a href="cerrar_sesion.php">Limpiar favoritos</a></p>

</body>
</html>