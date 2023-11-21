<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>05_prueba_if</h1>
    <?php
$nota1 = 9.5;
$nota2 = 10;
$nota3=11;

if ($nota1 < $nota2 && $nota2 >$nota3)
{
    echo "La nota2 es mayor que la nota1 y la nota 3";
}
else if ($nota2 < $nota3 && $nota3 > $nota1)
{
    echo "La nota3 es mayor que la nota2 y la nota1";
}
else
{
    echo "La nota1 es mayor que la nota2 y la nota3";
}
?>
