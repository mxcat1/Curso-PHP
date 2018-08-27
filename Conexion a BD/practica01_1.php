<?php
function mostrar_tablas(){
    $conexion = new mysqli("localhost","root","XXmxcatXX","pruebas");

    if ($conexion->errno){
        echo ("Error de coneccion de base de datos". $conexion->error);
    }
    $sql = 'select * from usuario';
    $consulta = $conexion->query($sql);
    if ($conexion->errno){
        die($conexion->error);
    }

    echo "<table>";
    echo "<tr><td>Codigo Usuario</td><td>Nombre usuario</td><td>Contraseña Usuario</td></tr>";
    while ($fila_array = $consulta->fetch_assoc()){
        echo ("<tr><td>" .$fila_array["id_usuario"]. "</td>");
        echo ("<td>" .$fila_array["nom_usuario"]. "</td>");
        echo ("<td>" .$fila_array["contra_usuario"]. "</td></tr>");
    }
    echo "</table>";
    $conexion->close();
}