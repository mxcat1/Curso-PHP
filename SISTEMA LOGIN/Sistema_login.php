<?php
require("login.php");
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 08/09/2018
 * Time: 15:45
 */
$usuario=$_POST["txtUsuario"];
$pass=$_POST["passUsuario"];
if ($usuario=="" || $pass==""){
    echo "Nombres de ususario o contraseña incorrectos";
}else{
    $logeo = new login($usuario,$pass);
    echo $logeo->verificar_datos();
}