<?php
    require ("devuelve_carac.php");
    $caracteristicas = new DevuelveCarac();
    //CON DATO
    $array_carac = $caracteristicas->getDet_Equipo("PC001");

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th,tr,td{
            border: black 1px solid;
        }
    </style>
</head>
<body>

<?php
    echo "<table><tr><th>Nº</th><th>CODIGO EQUIPO</th><th>MARCA</th><th>TIPO</th><th>MODELO</th><th>OTROS</th></tr>";
    $contador = 0;
    foreach ($array_carac as $elemento){
        echo "<tr><td>".$contador."</td>";
        echo "<td>".$array_carac[$contador]['codEqp']."</td>";
        echo "<td>".$array_carac[$contador]['marCom']."</td>";
        echo "<td>".$array_carac[$contador]['tipCom']."</td>";
        echo "<td>".$array_carac[$contador]['modCom']."</td>";
        echo "<td>".$array_carac[$contador]['otrCom']."</td></tr>";
        $contador++;
    }
    echo "</table>";
//var_dump($array_carac);

?>

</body>
</html>