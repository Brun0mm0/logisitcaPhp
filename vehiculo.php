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

    public function getMotor() {
        echo $this->motor->numero;
        echo $this->motor->marca;

        return $this->motor;
    }

    public function getChasis() {

    }

    public function getCarroceria() {

    }

    public function setEstado() {

    }


    public function realizarCarga($peso,$distancia) {
        if($this->disponible && $this->cargaMaxima >= $peso) {
            return true;
        } 
    }

    public function realizarMantenimiento() {
        $this->disponibilidad = true;
        $this-> cantidadDeKmDesdeUltimoMantenimiento = 0;
    }
}

?>