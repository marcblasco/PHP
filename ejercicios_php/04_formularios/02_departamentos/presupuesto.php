<!DOCTYPE html>
<html>
<head>
    <title>Presupuesto por Departamento</title>
</head>
<body>
    <h1>Presupuesto por Departamento</h1>
    <?php
    $departamentos = $_POST["departamentos"];

    $presupuestos = array(
        "INFORMATICA" => 500,
        "LENGUA" => 300,
        "MATEMATICAS" => 300,
        "INGLES" => 400
    );

        if (count($departamentos) >= 1) {
            echo "<p>Departamentos seleccionados:</p>";
            $totalPresupuesto = 0;
            foreach ($departamentos as $departamentoSeleccionado) {
                $presupuesto = $presupuestos[$departamentoSeleccionado];
                echo "<p>$departamentoSeleccionado: $presupuesto €</p>";
                $totalPresupuesto += $presupuesto;
            }
            echo "<p>Total del presupuesto : $totalPresupuesto €</p>";
        } else {
            echo "<p>No se ha seleccionado ningún departamento.</p>";
        }
    ?>
    <p><a href="form_dep.php">Volver al formulario</a></p>
</body>
</html>