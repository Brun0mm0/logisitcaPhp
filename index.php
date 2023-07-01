<?php
include_once('almacen.php');

$almacenCentral = new Almacen('Central', 'Saade');
$almacenCentral->agregarProducto('ojotas',600,0.5);
$almacenCentral->mostrar('producto');

?>