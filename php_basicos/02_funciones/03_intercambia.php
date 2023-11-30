<?php
function intercambia(&$a, &$b) {
    $result = $a;
    echo $a=$b;
    echo "<br>";echo "<br>";
    echo $b=$result;
}
$num1=7;
$num2=5;

intercambia($num1, $num2);
?>