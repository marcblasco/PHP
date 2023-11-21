<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir una Imagen</h1>
    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" id="imagen" name="imagen"><br><br>

        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>
