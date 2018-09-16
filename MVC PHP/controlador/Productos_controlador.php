<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/09/2018
 * Time: 14:03
 */
require_once "modelo/Productos_modelo.php";

$productos = new Productos_modelo();
$matrizproductos = $productos->getProductos();

require_once "vista/Productos_view.php";



