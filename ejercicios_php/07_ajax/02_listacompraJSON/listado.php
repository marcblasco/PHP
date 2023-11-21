<?php
$compras = file_get_contents('compras.txt');

$comprasArray = explode("\n", $compras);

$comprasJsArray = [];
foreach ($comprasArray as $compra) {
    $comprasJsArray[] = ["titulo" => trim($compra)];
}

header('Content-Type: text/plain');
echo json_encode($comprasJsArray);
?>
