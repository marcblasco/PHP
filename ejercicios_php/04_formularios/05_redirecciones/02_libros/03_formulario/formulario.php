<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formulario de Libros</title>
</head>
<body>
    <h1>Formulario de Libros</h1>
    <form action="result_libros.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Nombre:</label>
        <input type="text" id="titulo" name="titulo" ><br><br>

        <label for="autor">Email:</label>
        <input type="text" id="autor" name="autor" ><br><br>

        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" id="imagen" name="imagen"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>