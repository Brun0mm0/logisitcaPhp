<?php
class Pregunta {

    private $nombre;
    private $apellido;

    public function __construct($nombre,$apellido) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    public function __get($property) {
        if(property_exists($this, $property)) {
            echo "La propiedad {$property} es = {$this->$property}";
        } else {
            echo "La propiedad {$property} no existe";

        }
    }
}

$pregunta = new Pregunta('Bruno', '');
echo "<br />";
$pregunta->nombre;
echo "<br />";
$pregunta->apellido;
echo "<br />";
$pregunta->edad;

