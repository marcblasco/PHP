<?php include('cabecera.inc'); ?>
<h2>Alta de Hotel</h2>

<form action="guardar_hotel.php" method="post">
    <label for="nombre">Nombre del hotel:</label>
    <input type="text" id="nombre" name="nombre" ><br>

    <label for="provincia">Provincia:</label>
    <select id="provincia" name="provincia">
        <option value="Alicante">Alicante</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Sevilla">Sevilla</option>
    </select><br>

    <label for="estrellas">Estrellas:</label>
    <select id="estrellas" name="estrellas">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>

    <input type="submit" value="Guardar">
</form>

</body>
</html>