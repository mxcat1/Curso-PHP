<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 14/10/2018
 * Time: 16:06
 */

for ($a=1;$a<11;$a++){
    echo "<h3>TABLA DEL ".$a."</h3>";
    echo "<table class='table table-hover'>
           <thead class='thead-dark'>
            <tr>
                <th>Multiplicacion</th>
                <th>Resultado</th>
            </tr>
           </thead>";
    for ($a1=0;$a1<13;$a1++){
        echo "<tr>
                <td>".$a." X ".$a1."</td>
                <td>".($a*$a1)."</td>
              </tr>";
    }
    echo "</table>";
}