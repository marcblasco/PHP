<?php
$compras = file_get_contents('compras.txt');
$arrayCompra= explode("\n", $compras);
foreach ($arrayCompra as $compra) {
$lista .= "<li>$compra</li>"."\n";
}

echo $lista;
?>