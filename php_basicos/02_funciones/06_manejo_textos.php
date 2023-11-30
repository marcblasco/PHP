<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>02_area_circulo</h1>
    <?php
    define('PI', 3.1416);
    $radio = 3.9;
    $area= PI * ($radio ** 2);
    $textoResultado="El area calculada del circulo es: " .  number_format($area, 2);
    echo $textoResultado; 
    $textoResultadoMayus= strtoupper($textoResultado);
    echo "<br>";echo "<br>";
    echo $textoResultadoMayus;
    $textoResultadoModificado=str_replace("calculada", "obtenida", $textoResultado);
    echo "<br>";echo "<br>";
    echo $textoResultadoModificado;
    echo "<br>";echo "<br>";
    $caracteres = "La longitud de la cadena es de " .  strlen($textoResultadoModificado). " caracteres";
    echo $caracteres;
    echo "<br>";echo "<br>";
    $posicion= "La palabra circulo se encuentra en la posición: ". strpos($textoResultadoModificado, "circulo");
    echo $posicion;
    echo "<br>";echo "<br>";
    $numeros="1,2,3,4,5";
    $partes = explode(',', $numeros);
    $result =0;
    foreach ($partes as $index => $parte) {
        echo $parte;
        $result += $parte;
        if ($index < count($partes)-1) {
            echo "+";
        } else{
             echo " = ". $result;
        }
    }

    ?>