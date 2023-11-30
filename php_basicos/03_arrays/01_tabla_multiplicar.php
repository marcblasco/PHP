<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>01_tabla_multiplicar</h1>
    <?php
   $fila = array();

   for ($i = 0; $i <= 9; $i++) {
    echo "tabla del ". $i. "-> ";
    for ($j = 0; $j <= 10; $j++) {
      echo  $fila[$i][$j] = $i * $j;
    }
    echo "<br>";echo "<br>";
}
   
   for ($i = 0; $i <= 9; $i++) {
    echo "tabla del ". $i . "<br>" ."<br>";
       for ($j = 0; $j <= 10; $j++) {
           echo "$i x $j = " . $fila[$i][$j];
           echo "<br>";echo "<br>";
       }
   }
  
    ?>