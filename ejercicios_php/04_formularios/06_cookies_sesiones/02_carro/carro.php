<!DOCTYPE html>
<html>
<head>
    <title>Sesiones</title>
</head>
<body>
    <h1>Sesiones</h1>
    <?php
    $_SESSION = array();
    session_start();

  $articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
);

if (!isset($_SESSION['precio_total'])) {
    $_SESSION['precio_total'] = 0;
    
}
$articulo_id = isset($_GET['id']) ? $_GET['id'] : null;

foreach ($articulos as $articulo) {
    if($articulo['id'] == $articulo_id)
        $_SESSION['precio_total'] += $articulo['precio']; 
    echo '<a href="carro.php?id=' . $articulo["id"] . '">';
    echo $articulo["nombre"];
    echo '</a><br>';
}

echo 'Total Comprado: ' . $_SESSION['precio_total'];

    ?>
    <p><a href="borrar.php">borrar memoria</a></p>

</body>
</html>