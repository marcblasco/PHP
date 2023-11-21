<?php

function calculaDescuento($precio, $descuento=0) {
    $descuentoAplicado = ($precio * $descuento) / 100;
    $precioTotal=$precio - $descuentoAplicado;
    return $precioTotal;
}
?>