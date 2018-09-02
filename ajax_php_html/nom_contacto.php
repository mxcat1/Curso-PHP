<?php
$con = new mysqli('mysql.hostinger.es','u381013234_mxcat','XXmxcatXX');
$con->select_db('u381013234_con');
$con->set_charset('utf8');

if ($con->errno){
    die($con->error);
}

$dato2 = $_GET['tc'];
$sql = "select nombre_contacto from contactos where telefono_contacto='".$dato2."'";
$consulta = $con->query($sql);
$resultado = $consulta->fetch_assoc();
$datos = $resultado['nombre_contacto'];
print $datos;
$con->close();