<?php
    $insertar = "INSERT INTO inmuebles(codigo, titulo, categoria, precio, habitaciones, localidad, descripcion)" .
        " VALUES (:codigo, :titulo, :categoria, :precio, :habitaciones, :localidad, :descripcion)";
    
    $todos = "SELECT * FROM inmuebles";
    $uno = "SELECT * FROM inmuebles WHERE codigo = :codigo";
?>