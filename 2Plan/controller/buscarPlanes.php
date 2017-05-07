<?php
session_start();
require_once("../dao/PlanDAO.php");
$idUsuario = $_SESSION['idUsuario']?$_SESSION['idUsuario'] : null ;
if(isset($idUsuario)){
    $dao = new PlanDAO();
    $buscar = validarBuscar(isset($_POST['buscar'])?$_POST['buscar']:null);
    if($buscar){
        $response = $dao->buscarPlanesRecomendados($idUsuario, trim($buscar));
        if(sizeof($response)>0){
            echo json_encode($response);
        }
    }else{
        $response = $dao->listarPlanesRecomendados($idUsuario);
        if(sizeof($response)>0){
            echo json_encode($response);
        }
    }
}else{
    echo -2;
}

function validarBuscar($buscar){
    if(isset($buscar) && trim($buscar) !=""){
        return $buscar;
    } 
    else 
    {
        return null; 
    }
}
?>