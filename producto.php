<?php
    
    class Producto {
        public $nombre;
        public $cantidad;
    
    public function __construct($producto,$cantidad) {
        $this->nombre = $producto;
        $this->cantidad = $cantidad;
        echo "se creo el producto {$producto}, y su cantidad es {$cantidad}.";
        echo '<br>';
    }
    
    public function __get($property) {
        if(property_exists($this, $property)) {
            echo $this->$property;
            return $this->$property;
        }
    }
    
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    }