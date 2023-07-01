<?php

    class Motor {
    private $marca;
    private $numero;

    public function __construct($marca, $numero) {
        $this->marca = $marca;
        $this->numero = $numero;
    }

    public function __get($property) {
        if(property_exists($this, $property)) {
            echo $this->$property;
        }
    }
}
?>