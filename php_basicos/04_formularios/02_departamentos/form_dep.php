<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Libros</title>
</head>
<body>
    <h1>Consultar Presupuesto</h1>
    <form action="presupuesto.php" method="post">
        <label for="departamentos">Departamentos:</label>
        <select id="departamentos" name="departamentos[]" multiple>
            <option value="INFORMATICA">INFORMATICA</option>
            <option value="LENGUA">LENGUA</option>
            <option value="MATEMATICAS">MATEMATICAS</option>
            <option value="INGLES">INGLES</option>
        </select><br><br>

        <input type="submit" value="Consultar Presupuesto">
    </form>
</body>
</html>