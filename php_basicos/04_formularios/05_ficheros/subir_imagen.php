<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir una Imagen</h1>

    <?php
            if(isset($_FILES)){
                $imagen = $_FILES["imagen"];

                $carpetaImagenes = "imgs/";
                $rutaImagen = $carpetaImagenes;         
                $idUnico = time();   
                $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name']; 
    
                if (is_uploaded_file ($_FILES['imagen']['tmp_name'])) {
                    move_uploaded_file ($_FILES['imagen']['tmp_name'], $rutaImagen . 
                    $nombreFichero); 
                    echo "<p>Imagen subida con éxito.</p>";
                    echo '<img src="' . $rutaImagen . $nombreFichero . '">';
                } else {
                    echo "<p>Error al subir la imagen.</p>";
                }
            }
            else{
                echo "selecciona una imagen";
            }
            

    ?>

    <p><a href="form_imagen.php">Volver al formulario</a></p>
</body>
</html>