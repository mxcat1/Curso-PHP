<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 08/09/2018
 * Time: 15:43
 */
require ("config.php");
class conexion_bd{

    protected $conexion;

    /**
     * conexion_bd constructor.
     */
    public function __construct()
    {
        $this->conexion = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAMEBD);
        if ($this->conexion->connect_errno){
            echo "FALLO AL CONECTAR A MYSQL ".$this->conexion->connect_error;
            return;
        }
        $this->conexion->set_charset(DB_CHARSET);
    }


}