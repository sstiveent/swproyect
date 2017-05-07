<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario'])){
    $plan = validarPlan()$_POST['idPlan'];
    if($plan){
        $dao = new PlanDAO;
        $calificacion = $dao->obtenerCalificacionUsuario($_POST['idPlan'], $_SESSION['idUsuario']);
        $estrellas = array();
        for ($i=0; $i <$calificacion ; $i++) { 
            $estrella = array('value' => $i+1,
                'class' => 'active-star');
            array_push($estrellas, $estrella);
        }
        for ($i=$calificacion; $i <5 ; $i++) { 
            $estrella = array('value' => $i+1,
                'class' => 'star');
            array_push($estrellas, $estrella);
        }
        echo json_encode($estrellas);
    }
}
validarPlan($idPlan){
    if(isset($idPlan) && is_numeric($idPlan)){
        return $idPlan;
    } else{
        return null;
    }
}
?>