<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>01_tabla_multiplicar</h1>
    <?php
   $tablaMultiplicar = array();

   for ($i = 0; $i <= 9; $i++) {
       $fila = array();
       for ($j = 1; $j <= 10; $j++) {
           $fila[] = $i * $j;
       }
       $tablaMultiplicar[] = $fila;
   }
   
   for ($i = 0; $i <= 9; $i++) {
       for ($j = 1; $j <= 10; $j++) {
           echo "$i x $j = " . $tablaMultiplicar[$i][$j - 1];
       }
       echo "\n";
   }
  
    ?>