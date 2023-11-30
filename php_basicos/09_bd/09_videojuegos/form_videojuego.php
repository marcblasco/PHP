<!-- form_videojuego.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Videojuego</title>
</head>
<body>

    <h2>Alta de Videojuego</h2>

    <form action="insertar_videojuego.php" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="genero">Genero:</label>
        <select id="genero" name="genero">
            <option value="accion">Acción</option>
            <option value="aventura">Aventura</option>
            <option value="estrategia">Estrategia</option>
        </select><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br>

        <input type="submit" value="Guardar">
    </form>

</body>
</html>
