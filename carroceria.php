<?php

    class Carroceria {
    public $marca;

    public function __construct($numero) {
        $this->numero = $numero;
    }
    public function get() {
        echo $this->numero;
    }
}
?>