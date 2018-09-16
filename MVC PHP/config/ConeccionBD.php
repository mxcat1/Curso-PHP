<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/09/2018
 * Time: 14:02
 */

//LLAMADA AL ARCHIVO CONFIG  PARA LA CONECCION A ALOS DATOS
require_once("config/config.php");

class ConexionBD{

    protected $conexionbd;

    /**
     * ConexionBD constructor.
     */
    public function __construct(){
        try{
            $this->conexionbd= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_BDNAME);
            $this->conexionbd->set_charset(DB_CHARSET);
        }catch (Exception $e){
            die("ERROR ".$e->getMessage()." Linea del Error ".$e->getLine());
        }
    }

    public function desconectar(){
        $this->conexionbd->close();
    }


}