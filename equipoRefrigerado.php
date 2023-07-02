<?php

    class EquipoRefrigeracion {
    private $marca;
    private $frigorias;


    public function __construct($marca, $frigorias) {
        $this->marca = $marca;
        $this->frigorias = $frigorias;
    }

    public function __get($property) {
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }
    }
?>