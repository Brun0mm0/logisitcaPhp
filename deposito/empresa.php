<?php

include_once('almacen.php');
include_once('gerente.php');
include_once('producto.php');
include_once('taller.php');

class Empresa {

    public $nombre;
    private $gerenteDeLogistica;
    private $almacen= array();
    private $flota = array();
    private $departamentoMantenimiento = array();    

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Se creo la empresa {$nombre}";
    }

    public function setGerente(Gerente $gerente) {
        $this->gerenteDeLogistica = $gerente;
        echo "Se asigno a {$this->gerenteDeLogistica->nombre} como gerente de logistica";
    }
    public function agregarAlmacen(Almacen $almacen) {
        $this->almacen[] = $almacen;
        echo "Se agrego a la empresa el almacen {$almacen->nombre}";
    }
    public function agregarVehiculo(Vehiculo $vehiculo) {
        $this->flota[] = $vehiculo;
    }
    public function setDepartamentoMantenimiento(Taller $taller) {
        $this->departamentoMantenimiento = $taller;
    }
}



?>