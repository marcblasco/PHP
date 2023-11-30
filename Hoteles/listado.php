<?php
$host = "localhost";
$nombreBD = "hoteles";
$usuario = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8", $usuario, $password);
    $consulta = $pdo->query("SELECT nombre, provincia, estrellas FROM hoteles");
    $hotelesArray = [];

    foreach ($consulta as $fila) {
        $hotelesArray[] = [
            'nombre' => trim($fila['nombre']),
            'provincia' => trim($fila['provincia']),
            'estrellas' => (int)trim($fila['estrellas'])
        ];
    }

    $provinciaFiltro = isset($_POST['provincia']) ? $_POST['provincia'] : null;
    $estrellasFiltro = isset($_POST['estrellas']) ? (int)$_POST['estrellas'] : null;

    $hotelesFiltrados = array_filter($hotelesArray, function($hotel) use ($provinciaFiltro, $estrellasFiltro) {
        return ((empty($provinciaFiltro) || $hotel['provincia'] === $provinciaFiltro) &&
            (empty($estrellasFiltro) || $hotel['estrellas'] >= $estrellasFiltro));
    });

    header('Content-Type: application/json');
    echo json_encode(array_values($hotelesFiltrados));
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
    $pdo = null;
?>
