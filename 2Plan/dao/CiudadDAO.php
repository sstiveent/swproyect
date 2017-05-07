<?php
require_once("../model/Ciudad.php");
require_once("config.php");

class CiudadDAO{

    public function __construct()
    {
    }

    function listarCiudades(){
        global $db;
        $sql1="SELECT  `idCiudad`,`nombre` FROM `Ciudad`;";
        $result1=  $db->ejecutarConsulta($sql1);
        $ciudades = array();
        while ($fila = $db->obtenerFila($result1)){
            $ciudad = array('id' => $fila['idCiudad'],
                'name' => $fila['nombre']);
            array_push($ciudades, $ciudad);	
        }
        return $ciudades;
    }
}
?>