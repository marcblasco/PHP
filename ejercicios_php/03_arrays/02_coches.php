
<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>01_tabla_multiplicar</h1>
    <?php
$coches = array(
    "111BCD" => array("Ford", "Focus", 5),
    "222XYZ" => array("Toyota", "Corolla", 4),
    "333ABC" => array("Honda", "Civic", 4),
    "444DEF" => array("Chevrolet", "Cruze", 4)
);

foreach ($coches as $matricula => $infoCoche) {
    $marca = $infoCoche[0];
    $modelo = $infoCoche[1];
    $puertas = $infoCoche[2];

    echo "La matrícula $matricula pertenece al coche $marca $modelo de $puertas puertas. \n";
}

    ?>