<?php

require_once "clases/usuario.php";
//use Usuario_namespace as usu;
use Usuario_namespace\usuario;

$unusuar=new usuario(1,"Christian","Vilca");
echo $unusuar->getApellido();