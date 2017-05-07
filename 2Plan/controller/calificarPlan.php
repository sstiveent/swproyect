<?php
session_start();
require_once("../dao/PlanDAO.php");
$plan = validarPlan($_POST['idPlan']);
$calificacion = validarCalificacion($_POST['calificacion']);
if(isset($_SESSION['idUsuario']) && $plan && $calificacion){
    $dao = new PlanDAO();
    echo $dao->calificarPlan($plan, $_SESSION['idUsuario'], $calificacion);
}else{
    echo "0";
}

function validarCalificacion($calificacion){
    if(isset($calificacion) && is_numeric($calificacion)){
        return $calificacion;
    }else{
        return null;
    }
}
function validarPlan($idPlan){
    if(isset($idPlan) && is_numeric($idPlan)){
        return $idPlan;
    } else{
        return null;
    }
}
?>