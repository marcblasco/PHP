<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preferencias</title>
</head>
<body>
    <h1>Preferencias</h1>

    <form action="guarda_prefs.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="color">Color Favorito:</label>
        <select name="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
