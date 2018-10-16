<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 14/10/2018
 * Time: 15:48
 */

if (isset($_GET["txtn1"]) && isset($_GET["txtn2"]) ){
    $a=$_GET["txtn1"];
    $s=$_GET["txtn2"];
    if ($a<$s){
        while ($a<$s){
            echo "Este numero ".$a." <br>";
            $a++;
        }
    }else{
        echo "El primer numero no es menor al segu8ndo numero";
    }
}else{
    echo "Envia datos";
}
