<?php
function cuenta($a, $b) {
    $result = '';
    for ($i = $a; $i <= $b; $i++) {
        $result .= $i;
        if ($i < $b) {
            $result .= ', ';
        }
    }
    echo $result;
}

cuenta(10, 20);
?>