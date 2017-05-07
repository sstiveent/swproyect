<?php
session_start();
require_once("../dao/PlanDAO.php");
$idPlan = validarPlan($_POST['idPlan']);

if(isset($_SESSION['idUsuario'])){
    if($idPlan){
        $dao = new PlanDAO();
        $response1= $dao->obtenerPlan($_POST['idPlan']);
        if(is_array($response1)){
            $response2= $dao->obtenerCalificacionPlan($_POST['idPlan']);
            echo json_encode(array('plan' => $response1, 'calificacion'=>$response2));
        }
        else{
            echo "-3";
        }
    }else{
        echo 0;
    }

}else{
    echo -2;
}

function validarPlan($idPlan){
    if(isset($idPlan) && is_numeric($idPlan)){
        return $idPlan;
    }else
    {
        return null;
    }
}
?>