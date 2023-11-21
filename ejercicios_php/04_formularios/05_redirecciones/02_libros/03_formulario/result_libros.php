<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formulario de Libros</title>
</head>
<body>
    <h1>Resultado del Formulario de Libros</h1>
    <?php
    if (empty($_POST["titulo"]) || empty($_POST["autor"]) || empty($_FILES["imagen"]))
    {
        header("Refresh:3; url=formulario.php");
        echo '<p style="color:red">En breve le redirigiremos a la página principal.</p>';
        die();   
    }
    else{
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $imagen = $_FILES["imagen"];

        echo "<p>Título del libro: $titulo</p>";
        echo "<p>Autor: $autor</p>";
        

        $carpetaImagenes = "C:/xampp/htdocs/04_formularios/05_redirecciones/02_libros/03_formulario/fotos/";
        $rutaImagen = $carpetaImagenes;         
        $idUnico = time();   
        $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name']; 

        if (is_uploaded_file ($_FILES['imagen']['tmp_name'])) {
            move_uploaded_file ($_FILES['imagen']['tmp_name'], $rutaImagen . 
            $nombreFichero); 
            echo "<img class=\"\" src=\"$rutaImagen$nombreFichero\" />";
        } else {
            echo "<p>Error al subir la imagen.</p>";
        }
    }
    ?>
    <p><a href="formulario.php">Volver al formulario</a></p>
</body>
</html>