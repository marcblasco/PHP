<?php
if (isset($_POST)) {
    $nombre = $_POST["nombre"];
    $color = $_POST["color"];

    setcookie("nombreusu", $nombre, time() + 3600);
    setcookie("colorusu", $color, time()+3600); 

    header("Location: index.php");
    exit();
}
?>
