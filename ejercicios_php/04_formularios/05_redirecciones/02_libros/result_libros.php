<?php include('cabecera.inc'); ?>
    <?php
    if (empty($_POST["titulo"]))
    {
        header("Refresh:3; url=form_libros.php");
        echo '<p style="color:red">En breve le redirigiremos a la página principal.</p>';
        die();   
    }
    else{
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        echo "<p>Título del libro: $titulo</p>";
        echo "<p>Autor: $autor</p>";
        echo "<p>Género: $genero</p>";
    }
    ?>
    <p><a href="form_libros.php">Volver al formulario</a></p>
</body>
</html>