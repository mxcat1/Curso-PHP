<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<?php

require_once '../vendor/autoload.php';


$conexion=new mysqli("localhost","root","","onexamdb");
$conexion->query("SET NAMES 'utf8'");

$consulta=$conexion->query("SELECT * FROM assesmenttbl");
$numero_ele=$consulta->num_rows;
$numero_ele_page=2;

var_dump($numero_ele);

$pagination=new Zebra_Pagination();

//numero total de ele a paginar
$pagination->records($numero_ele);

//numero de elementos por pagina
$pagination->records_per_page($numero_ele_page);
$page=$pagination->get_page();

$empieza_aqui=(($page-1)*$numero_ele_page);

$notas=$conexion->query("SELECT * FROM assesmenttbl LIMIT $empieza_aqui,$numero_ele_page");


while ($nota = $notas->fetch_object()){
    echo "<h1>{$nota->recordid}</h1>";
    echo "<h1>{$nota->studname}</h1>";
    echo "<h1>{$nota->status}</h1>";
}
$pagination->render();