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

if (!isset($_SESSION['precio_total']) || !is_array($_SESSION['articulo_selecionado'])) {
    $_SESSION['precio_total'] = 0;
    $_SESSION['articulo_selecionado']=array();
}

$articulo_id = isset($_GET['id']) ? $_GET['id'] : null;

foreach ($articulos as $articulo) {
    echo '<a href="carro.php?id=' . $articulo["id"] . '">';
    echo $articulo["nombre"] . "--> " . $articulo["precio"];
    echo '</a><br>';
    if ($articulo_id && $articulo['id'] == $articulo_id) {
        $_SESSION['precio_total'] += $articulo['precio']; 
        array_push($_SESSION['articulo_selecionado'], $articulo);
    }
}

if (isset($_SESSION['articulo_selecionado'])) {  
    echo 'Artículos Seleccionados:<br>';
    foreach ($_SESSION['articulo_selecionado'] as $producto_seleccionado) {  
        echo $producto_seleccionado["nombre"] . "<br>";
    }
}



echo 'Total Comprado: ' . $_SESSION['precio_total'];
echo '<pre>';
echo '</pre>';

    ?>
    <p><a href="borrar.php">borrar memoria</a></p>

</body>
</html>