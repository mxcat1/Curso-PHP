<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 14/10/2018
 * Time: 15:25
 */

$s=0;
for ($a=1;$a<=100;$a++){
    if ($a%2==0){
        echo "Es Un numero par ".$a.'<br>';
        $s++;
    }else{
        echo "No es par".$a.'<br>';
    }

}
echo "Hay ".$s." numeros pares";