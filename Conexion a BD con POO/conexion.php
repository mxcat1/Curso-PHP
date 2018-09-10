<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 08/09/2018
 * Time: 13:01
 */
require ("config.php");
class Conexion{

    protected $conexion_db;
    /**
     * Conexion constructor.
     * @param mysqli $conexion_db
     */
    public function __construct()
    {
        $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBREDB);
        if ($this->conexion_db->connect_errno){
            echo "Fallo al conectar MYSQL". $this->conexion_db->error;
            return;
        }
        $this->conexion_db->set_charset(DB_CHARSET);

    }
}