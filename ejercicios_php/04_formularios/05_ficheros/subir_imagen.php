<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir una Imagen</h1>

    <?php
            $imagen = $_FILES["imagen"];

            $carpetaImagenes = "C:/xampp/htdocs/04_formularios/05_ficheros/imgs/";
            $rutaImagen = $carpetaImagenes;         
            $idUnico = time();   
            $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name']; 

            if (is_uploaded_file ($_FILES['imagen']['tmp_name'])) {
                move_uploaded_file ($_FILES['imagen']['tmp_name'], $rutaImagen . 
                $nombreFichero); 
                echo "<p>Imagen subida con éxito.</p>";
            } else {
                echo "<p>Error al subir la imagen.</p>";
            }

    ?>

    <p><a href="form_imagen.php">Volver al formulario</a></p>
</body>
</html>