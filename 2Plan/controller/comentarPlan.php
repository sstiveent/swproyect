<?php
session_start();
require_once("../dao/PlanDAO.php");
$plan = validarPlan($_POST['idPlan']);
$comentario = validarComentario($_POST['comentario']);
if(isset($_SESSION['idUsuario']) && $plan && $comentario){
    $dao = new PlanDAO();
    echo $dao->comentarPlan($_POST['idPlan'], $_SESSION['idUsuario'], $_POST['comentario']);
}else{
    echo "0";
}

function validarComentario($comentario){
    if(isset($comentario) && trim($comentario) != ""){
        return $comentario;
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