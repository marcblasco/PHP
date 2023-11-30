<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>08_comprueba_hora</h1>
    <?php
  $fecha = "07-02-2022";

  if (preg_match("/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/", $fecha, $partes) == 1) {
      $dia = $partes[1];
      $mes = $partes[2];
      $anio = $partes[3];
  
      if (checkdate($mes, $dia, $anio)) {
          echo "La fecha " . $fecha . " es valida.";
      } else {
          echo "La fecha " . $fecha . " es invalida.";
      }
  } else {
      echo "La fecha no coincide con el formato correcto.";
  }
    ?>
    