<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>06_contador</h1>
    <?php

$lista = range(1, 100);
$lista2 = range(1, 10);
for ($i = 0; $i < count($lista); $i++) {

 echo $lista[$i]. ", ";
}
echo "<br>";echo "<br>";

for ($i = count($lista2) - 1; $i >= 0; $i--) {
    if($i == 0)
        echo $lista2[$i];
    else
        echo $lista2[$i] . "- ";
}
?>