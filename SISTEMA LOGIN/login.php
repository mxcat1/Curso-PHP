<?php
require ("conexion.php");
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 08/09/2018
 * Time: 15:44
 */

class login extends conexion_bd {
    public $usuario;
    public $pass;

    /**
     * login constructor.
     * @param $usuario
     * @param $pass
     */
    public function __construct($usuario, $pass)
    {
        $this->usuario = $usuario;
        $this->pass = $pass;
        parent::__construct();
    }
    public function verificar_datos(){

        $sql="SELECT * FROM usuarios where cuenta_usuario= ? AND pass_usuario= ?";
        $sentencia_sql = $this->conexion->prepare($sql);
        $sentencia_sql->bind_param("ss",$this->usuario,$this->pass);
        $sentencia_sql->execute();
        $sentencia_sql->bind_result($r1,$r2,$r3);
        $sentencia_sql->store_result(); // para que num rows funciones se debe ejecutar esta linea
        $resultado = $sentencia_sql->num_rows;
        $sentencia_sql->fetch();//para q bind_result funcione se debe ejecutar esta linea por cada fila de datos q tenga tu consulta
        if ($resultado>0){
//            echo "Logueado Correctamente".$resultado.$r1.$r2.$r3;
            return $r2;
        }else{
//            echo "DATOS INCORRECTOS".$resultado;
            return '0';
        }
//        $sentencia_sql->close();

    }
}