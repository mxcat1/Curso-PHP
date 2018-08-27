<?php
$nom_usuario = $_POST['txtNom_usuario'];
$contra_usuario = $_POST['txtContra_usuario'];
$conexion = new mysqli("localhost","root","XXmxcatXX","pruebas");
$sql = "insert into usuario(nom_usuario, contra_usuario) value ('".$nom_usuario."','".$contra_usuario."')";
$consulta = $conexion->query($sql);
if ($conexion->errno){
    die($conexion->error);
}
