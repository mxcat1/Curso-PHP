<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 14/10/2018
 * Time: 15:36
 */

if (isset($_GET['n1']) && isset($_GET['n1'])){
    $a=$_GET['n1'];
    $s=$_GET['n2'];
    echo "Primer Operacion SUMA".($a+$s)."<br>";
    echo "Primer Operacion RESTA".($a-$s)."<br>";
    echo "Primer Operacion MULTIPLICACION".($a*$s)."<br>";
    echo "Primer Operacion DIVISION".($a/$s)."<br>";
}else{
    echo "Introduce correctamente valores en la URL";
}


