<?php
include_once('carroceria.php');
include_once('motor.php');
include_once('chasis.php');

abstract class Vehiculo {

    private $chasis;
    private $motor;
    private $carroceria;
    private $cargaUtil;
    private $estado;
    
    public function __construct($motorMarca, $motorNumero, $carroceriaMarca, $chasisNumero, $cargaUtil) {
        $this->motor = new Motor($motorMarca, $motorNumero);
        $this->chasis = new Chasis($chasisNumero);
        $this->carroceria = new Carroceria($carroceriaMarca);
        $this->cargaUtil = $cargaUtil;
        $this->estado = 'DISPONIBLE';
        
    }

    private function setEstado($valor) {
        $this->estado = $valor;
    }

    public function getMotor() {
        echo $this->motor->numero;
        echo $this->motor->marca;

        return $this->motor;
    }

    public function getChasis() {
        echo $this->chasis->numero;

        return $this->chasis;
    }

    public function getCarroceria() {
        echo $this->carroceria->marca;

        return $this->carroceria;
    }

    public function entregarCarga() {
        $this->setEstado('DISPONIBLE');
    }

    public function cargarVehiculo() {
        $this->setEstado('ENTREGA EN CURSO');
    }
}

?>