<?php
function intercambia($a, $b) {
    $result = $a;
    echo $a=$b;
    echo "<br>";echo "<br>";
    echo $b=$result;
}

intercambia(30, 20);
?>