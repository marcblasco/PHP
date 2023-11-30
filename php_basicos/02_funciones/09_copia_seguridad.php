<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>09_copia_seguridad</h1>
    <?php
 $archivoOriginal = 'datos.txt';

 $archivoCopia = 'copia_datos.txt';
 
 if (file_exists($archivoOriginal)) {
     $contenido = file_get_contents($archivoOriginal);
 
     if (file_put_contents($archivoCopia, $contenido)) {
         echo "Los datos se han copiado correctamente en copia_datos.txt.";
     } else {
         echo "Ha ocurrido un error al copiar los datos.";
     }
 } else {
     echo "El archivo datos.txt no existe en la carpeta.";
 }
    ?>