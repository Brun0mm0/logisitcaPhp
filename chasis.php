<?php

    class Chasis {
    public $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }
    public function __get($property) {
        echo $this->numero;
        return $this->numero;
    }
}
?>