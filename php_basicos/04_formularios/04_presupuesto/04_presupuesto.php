<!DOCTYPE html>
<html>
<head>
    <title>Presupuesto por Departamento</title>
</head>
<body>
    <h1>Presupuesto por Departamento</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="departamento">Selecciona un Departamento:</label>
        <select id="departamento" name="departamento">
            <option value="INFORMATICA">INFORMÁTICA</option>
            <option value="LENGUA">LENGUA</option>
            <option value="MATEMATICAS">MATEMÁTICAS</option>
            <option value="INGLES">INGLÉS</option>
        </select>
        <input type="submit" value="Calcular Presupuesto">
    </form>

    <?php

    $departamento = $_POST["departamento"];

    $presupuestos = array(
        "INFORMATICA" => 500,
        "LENGUA" => 900,
        "MATEMATICAS" => 300,
        "INGLES" => 400
    );

        echo "<p>Departamento seleccionado: $departamento</p>";
        $presupuesto = $presupuestos[$departamento];
        echo "<p>Presupuesto asignado: $presupuesto euros</p>";
           
    ?>
</body>
</html>
