<?php
$con = new mysqli('mysql.hostinger.es','u381013234_mxcat','XXmxcatXX');
$con->select_db('u381013234_con');
$con->set_charset('utf8');

if ($con->errno){
    die($con->error);
}else{
    echo "Conexxion exitosa";
}

$dato = $_GET['nc'];
$dato2 = $_GET['tc'];

$sql = "INSERT into contactos(nombre_contacto,telefono_contacto) VALUES(".$dato.",".$dato2.")";

$query = $con->query($sql);
if ($con->errno){
    die($con->error);
}else{
    echo "Conexxion exitosa";
}

$con->close();