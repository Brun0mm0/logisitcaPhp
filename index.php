<?php
include_once('deposito/empresa.php');

$empresa = new Empresa('Logistica Shipping');
$almacen = new Almacen('Central');
echo '<br/>';
$empresa->agregarAlmacen($almacen);
$gerente = new Gerente('Saade, Leonel');
echo '<br/>';
$empresa->setGerente($gerente);

?>