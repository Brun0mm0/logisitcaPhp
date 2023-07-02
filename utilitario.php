<?php
require_once('vehiculo.php');

class Utilitario extends Vehiculo {

    public function __construct($motorMarca,$motorNumero,$carroceriaMarca,$chasisNumero) {
        parent::__construct($motorMarca,$motorNumero,$carroceriaMarca,$chasisNumero,10000);
    } 

}
?>