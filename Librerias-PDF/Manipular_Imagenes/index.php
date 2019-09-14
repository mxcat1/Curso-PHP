<?php

require_once "../vendor/autoload.php";

$foto_original='ballena.jpg';
$guardar_en='fotomod.jpg';

$thumb=new PHPThumb\GD($foto_original);

$thumb->resize(250,250);

$thumb->crop(50,50,120,120);


$thumb->save($guardar_en);

$thumb->show();