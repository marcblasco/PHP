<?php
function calculaDescuento($precio, $descuento=0) {
    $descuentoAplicado = ($precio * $descuento) / 100;
    $precioTotal=$precio - $descuentoAplicado;
    return $precioTotal;
}

 $precioFinal=calculaDescuento(85, 5);
 echo "Precio final con descuento: $precioFinal";

?>