<?php
    class Pedido {
        public $producto;
        public $cantidad;
        public $lugarDeEntrega;
        public $estado;

        public function __construct($producto, $cantidad, $lugarDeEntrega) {
            $this->producto=$producto;
            $this->cantidad=$cantidad;
            $this->lugarDeEntrega=$lugarDeEntrega;
            $this->estado = false;
        }
        public function aprobar() {
            $this->estado = true;
        }
    }
?>