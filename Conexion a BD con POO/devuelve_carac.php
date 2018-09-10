<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 08/09/2018
 * Time: 13:08
 */
require ("conexion.php");

/**
 * Class DevuelveCarac
 */
class DevuelveCarac extends Conexion{

    /**
     * DevuelveCarac constructor.
     */
    public function __construct(){
        parent::__construct();

    }
    public function getDet_Equipo($dato){
        $sql = "SELECT codEqp,marCom,tipCom,modCom,otrCom FROM componente WHERE codEqp='".$dato."'";
        $resultado = $this->conexion_db->query($sql);
        $caracteristicas = $resultado->fetch_all(MYSQLI_ASSOC);
        return $caracteristicas;
    }
}