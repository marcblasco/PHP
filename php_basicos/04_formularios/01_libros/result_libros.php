<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formulario de Libros</title>
</head>
<body>
    <h1>Resultado del Formulario de Libros</h1>
    <?php
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        
        echo "<p>Título del libro: $titulo</p>";
        echo "<p>Autor: $autor</p>";
        echo "<p>Género: $genero</p>";
    ?>
    <p><a href="form_libros.php">Volver al formulario</a></p>
</body>
</html>