<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<style>
    td{
        border: green dashed 2px;
    }
</style>
<body>
<table>
    <tr>
        <th>ID DEL ARTICULO</th>
        <th>NOMBRE DEL ARTICULO</th>
    </tr>

<?php

    foreach ($matrizproductos as $resultado){
        echo "<tr><td>".$resultado["idproductos"]."</td>";
        echo "<td>".$resultado["nom_productos"]."</td></tr>";
    }

?>
</table>
</body>
</html>