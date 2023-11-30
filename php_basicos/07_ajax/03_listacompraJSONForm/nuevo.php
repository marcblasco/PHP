<?php
    $nuevoTitulo = $_POST['nuevo_titulo'];
  
    error_log("Nuevo artículo: " . $nuevoTitulo);
    if (!empty($nuevoTitulo)) {
        $archivo = fopen('compras.txt', 'a');
        fwrite($archivo, "\n". $nuevoTitulo);
        fclose($archivo);
    }

    header("Location: listado.php");
    exit();
?>