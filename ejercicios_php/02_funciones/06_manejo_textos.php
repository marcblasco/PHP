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
    $textoResultado="El area calculada del circulo es:";
    $textoResultadoMayus= strtoupper($textoResultado);
    ?>
    <p><?php echo $textoResultadoMayus; ?> <?php echo number_format($area, 2); ?> será el resultado de calcular el área.</p>