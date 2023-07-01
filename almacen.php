<?php

include_once('producto.php');

    class Almacen {

        public $nombre;
        private $productos = array();
    
        public function __construct($nombre) {
            $this->nombre = $nombre;
            echo "se creo el almacen {$nombre}";
            echo '<br>';
        }

        public function agregarProducto(Producto $producto) {
            $encontrado = false;
    
            foreach ($this->productos as $prod) {
                if ($prod->nombre === $producto->nombre) {
                    $this->sumar($producto);
                    $encontrado = true;
                    break;
                }
            }
    
            if (!$encontrado) {
                $this->productos[] = $producto;
                echo "Se agregó {$producto->cantidad} unidades de {$producto->nombre}";
                echo '<br>';
            }
        }

        private function sumar(Producto $producto) {
           foreach($this->productos as $prod) {
            if($prod->nombre === $producto->nombre)
                echo "{$producto->cantidad}";
                echo '<br>';
                $cantidad = $prod->cantidad + $producto->cantidad;
                $prod->setCantidad($cantidad);
                break;
           }
        }

        private function restar(Producto $producto) {
            foreach($this->productos as $prod) {
                if($prod->nombre === $producto->nombre) {
                    $diferencia = $prod->cantidad - $producto->cantidad;
                    if($diferencia <= 0) {
                        $pendiente = $producto->cantidad - $prod->cantidad;
                        echo "No hay suficiente stock para completar el pedido, se separan {$prod->cantidad} y quedan pendientes {$pendiente}";
                        echo '<br>';
                        $prod->setCantidad(0);
                        return $prod->cantidad;
                    }else if($prod->cantidad <= 0) {
                        echo "No hay stock de este producto";
                        echo '<br>';
                        return $producto;
                    } else {
                        $cantidad = $prod->cantidad - $producto->cantidad;
                        $prod->setCantidad($cantidad);
                        echo 'Pedido separado';
                        echo '<br>';
                        return true;
                    }
                }
               }
        }

        public function prepararPedido(Producto $producto) {
            foreach($this->productos as $prod) {
                if($prod->nombre === $producto->nombre) {
                    $this->restar($producto);
                    return;
                }
            }
        }

        public function mostrarStock() {
            foreach($this->productos as $prod) {
                echo "<br>";
                echo "Producto = {$prod->nombre}, cantidad = {$prod->cantidad}";
                echo "<br>";
            }
        }
    }

$almacen = new Almacen('Central');
$celulares = new Producto('Celular', 500);
$celulares2 = new Producto('Celular', 500);
$carcasa = new Producto('Carcasa', 500);
$pedido = new Producto('Celular', 1500);
$almacen->agregarProducto($celulares);
$almacen->mostrarStock();
$almacen->agregarProducto($celulares2);
$almacen->mostrarStock();
$almacen->agregarProducto($carcasa);
$almacen->mostrarStock();
$almacen->prepararPedido($pedido);
$almacen->mostrarStock();

?>