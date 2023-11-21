<?php
    $titulo = $_POST['nombre'];
    $provincia = $_POST['provincia'];
    $estrellas = $_POST['estrellas'];
    if(empty($titulo) || empty($titulo) || empty($titulo)){
        header("Location: error.php");
    }
    else{
        $nuevoHotel = $titulo . ';' . $provincia . ';' . $estrellas;
        $host = "localhost";
        $nombreBD = "hoteles";
        $usuario = "root";
        $password = "";

        $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
            $usuario, $password);
            $insercion = $pdo->prepare("INSERT INTO hoteles(nombre, provincia, estrellas)" .
            " VALUES(:nombre, :provincia, :estrellas)");
            $insercion->bindParam(':nombre', $_REQUEST['nombre']);
            $insercion->bindParam(':provincia', $_REQUEST['provincia']);
            $insercion->bindParam(':estrellas', $_REQUEST['estrellas']);

        if ($insercion->execute()) {
            header("Location: index.php");
            $pdo = NULL;
            exit();
        } else {
            header("Location: error.php");
            $pdo = NULL;
            exit();
        }
    }

    
?>