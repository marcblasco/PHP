<?php
class Persona
{
    public $Dni;
    public $Nombre;
    public $Email;

    public function __construct($d, $n, $e)
    {
        $this->Dni = $d;
        $this->Nombre = $n;
        $this->Email = $e;
    }

    public function Mostrar() {
        echo "<p>DNI: " . $this->Dni . " - Nombre: " . $this->Nombre . " - Email: " . $this->Email . "</p>";
    }

    public function __get($nombre)
    {
        if ($nombre == 'Dn')
            return $this->Dni;
        else if ($nombre == 'Nom')
            return $this->Nombre;
        else if ($nombre == 'Em')
            return $this->Email;
    }

    public function __set($nombre, $valor)
    {
        if ($nombre == 'Dn' && $valor > 0)
            $this->Dni = $valor;
        else if ($nombre == 'Nom')
            $this->Nombre = $valor;
        else if ($nombre == 'Em')
            $this->Email = $valor;
    }
}

class Estudiante extends Persona
{
    private $numExpediente;

    public function __construct($d, $n, $e, $ne)
    {
        $this->Dni = $d;
        $this->Nombre = $n;
        $this->Email = $e;
        $this->numExpediente = $ne;
    }
    public function Mostrar() {
        parent::Mostrar();
        echo "<p>Número de Expediente: " . $this->numExpediente . "</p>";
    }

    public function __get($nombre)
    {
        if ($nombre == 'Dn')
            return $this->Dni;
        else if ($nombre == 'Nom')
            return $this->Nombre;
        else if ($nombre == 'Em')
            return $this->Email;
        else if ($nombre == 'numEx')
        return $this->numExpediente;
    }

    public function __set($nombre, $valor)
    {
        if ($nombre == 'Dn' && $valor > 0)
            $this->Dni = $valor;
        else if ($nombre == 'Nom')
            $this->Nombre = $valor;
        else if ($nombre == 'Em')
            $this->Email = $valor;
        else if ($nombre == 'numEx')
        $this->numExpediente = $valor;
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clases en PHP</title>
</head>
<body>
    <?php
require_once 'clases.php';

    $persona = new Persona("123456789", "Juan Perez", "juan@1.com");

    $estudiante = new Estudiante("987654321", "Maria Lopez", "maria@2.com", "E12345");

    echo "<h1>Informacion de la Persona</h1>";
    $persona->Mostrar();

    echo "<h1>Informacion del Estudiante</h1>";
    $estudiante->Mostrar();
    ?>
</body>
</html>

