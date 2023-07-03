<?php

    class Gerente {
        
        public $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function __get($property) {
            if(property_exists($this,$property)) {
                return $this->$property;
            }
        }
        }

?>