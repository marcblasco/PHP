<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Libros</title>
</head>
<body>
    <h1>Formulario de Libros</h1>
    <form action="result_libros.php" method="post">
        <label for="titulo">Título del libro:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>

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