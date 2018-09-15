<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/09/2018
 * Time: 14:00
 */

require_once "../modelo/Productos_modelo.php";
$productos = new Productos_modelo();

$lista = $productos->getProductos();

var_dump($lista);