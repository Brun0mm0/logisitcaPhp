<?php

    class Chasis {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }
    public function __get($property) {
        if(property_exists($this, $property))
        return $this->$property;
    }
}
?>