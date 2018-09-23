<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 23/09/2018
 * Time: 14:13
 */
$servername=".,1736";
$cone_info=array("Database"=>"pruebas","UID"=>"sa","PWD"=>"XXmxcatXX");
$cone= sqlsrv_connect($servername,$cone_info);


if ($cone){
    echo "conecion establecida";
}else{
    echo "no coneccion".sqlsrv_errors();
}

