<html>
<head>
    <title>Presupuesto por Departamento</title>
</head>
<body>
    <h1>Presupuesto por Departamento</h1>
    <?php
        $departamento = $_GET["departamento"];

        $presupuestos = array(
            "INFORMATICA" => 500,
            "LENGUA" => 300,
            "MATEMATICAS" => 300,
            "INGLES" => 400
        );

        echo "<p>Departamento seleccionado: $departamento</p>";
        $presupuesto = $presupuestos[$departamento];
        echo "<p>Presupuesto asignado: $presupuesto euros</p>";
        
    ?>
    <p><a href="form_dep2.php">Volver a la selección de departamento</a></p>
</body>
</html>