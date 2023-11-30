<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>02_area_circulo</h1>
    <?php
    define('PI', 3.1416);
    $radio = 3.5;
    $area= PI * ($radio ** 2);
    ?>
    <p>el area del circulo es <?php echo "PI * ($radio ** 2);"; ?> donde  <?php echo $area; ?> será el resultado de calcular el área.</p>