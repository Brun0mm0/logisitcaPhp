<?php
require_once('vehiculo.php');

class Camion extends Vehiculo {

    private $equipoDeFrio;

    public function __construct($motorMarca,$motorNumero,$carroceriaMarca,$chasisNumero) {
        parent::__construct($motorMarca,$motorNumero,$carroceriaMarca,$chasisNumero,24000);
    } 

    public function setEquipoDeFrio($valor) {
        $this->equipoDeFrio = $valor;
    }
}
?>