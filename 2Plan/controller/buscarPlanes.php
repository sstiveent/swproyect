<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario'])){
    $dao = new PlanDAO();
    $buscar = validarBuscar($_POST['buscar']);
    if($buscar){
        $response = $dao->buscarPlanesRecomendados($_SESSION['idUsuario'], trim($buscar));
        if(sizeof($response)>0)
            echo json_encode($response);
    }else{
        $response = $dao->listarPlanesRecomendados($_SESSION['idUsuario']);
        if(sizeof($response)>0)
            echo json_encode($response);
    }
}else{
    echo -2;
}

validarBuscar($buscar)
{
    if(isset($buscar) && trim($buscar) !=""){
        return $buscar;
    } 
    else 
    {
        return null; 
    }
}
?>