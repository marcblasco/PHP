<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>03_echo</h1>
    <?php
    $num1 = 3;
    $num2 = 5;
    $num3 = 8;
    $num1 *= 4;

    echo $num1; 
    echo $num1 <= $num2;
    echo $num3 > $num1 and $num3 > $num2;
    echo $num3 > $num1 or $num3 > $num2;
    echo $num1 > $num2 xor $num1 > $num3;
    $num3--;
    echo $num3;
    $num3 += $num1;
    echo $num3;
?>
    <p></p>
