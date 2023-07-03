<?php

    class Carroceria {
    private $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }
    public function __get($property) {
        if(property_exists($this, $property))
        return $this->$property;
    }
}
?>