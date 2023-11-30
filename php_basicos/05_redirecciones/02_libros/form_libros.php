<?php include('cabecera.inc'); ?>
    <form action="result_libros.php" method="post">
        <label for="titulo">Título del libro:</label>
        <input type="text" id="titulo" name="titulo" ><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" ><br><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero">
            <option value="Narrativa">Narrativa</option>
            <option value="Libros de texto">Libros de texto</option>
            <option value="Guías y mapas">Guías y mapas</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>