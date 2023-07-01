<?php
require_once('vehiculo.php');

class Camion extends Vehiculo {

    public function __construct($chasis,$motor,$carroceria) {
        $this->chasis = new Chasis($chasis);
        $this->motor = new Motor($motor);
        $this->carroceria = new Carroceria($carroceria);
        $this->cargaUtil = 24000;
    } 
}
?>