<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 15/09/2018
 * Time: 14:02
 */
require_once ("config/ConeccionBD.php");
class Productos_modelo extends ConexionBD {

    private $productos;

    /**
     * Productos_modelo constructor.
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getProductos(){
        try{
            $sql="SELECT * FROM pruebas.productos";
            $consulta = $this->conexionbd->prepare($sql);
            $consulta->bind_result($idproductos,$nom_productos);
            $consulta->execute();
            while ($consulta->fetch()){
                $this->productos[]=array('idproductos'=>$idproductos,'nom_productos'=>$nom_productos );
            }
        }catch (Exception $e){
            $this->productos="ERROR".$e->getMessage()." EN LINEA ".$e->getLine();
        }
        $this->desconectar();
        return $this->productos;
    }

    /**
     * Productos_modelo constructor.
     */


}