<?php
require_once('vehiculo.php');

class Utilitario extends Vehiculo {

    public function __construct($chasis,$motor,$carroceria) {
        $this->chasis = new Chasis($chasis);
        $this->motor = new Motor($motor);
        $this->carroceria = new Carroceria($carroceria);
        $this->cargaMaxima = 5000;
    } 

}
?>