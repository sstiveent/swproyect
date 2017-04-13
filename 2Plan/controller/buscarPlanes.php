<?php
require_once("../dao/PlanDAO.php");
$dao = new PlanDAO();
if(isset($_POST['buscar']) && trim($_POST['buscar']) !=""){
echo json_encode($dao->buscarPlanesRecomendados($_POST['idUsuario'], trim($_POST['buscar'])));
}else{
echo json_encode($dao->listarPlanesRecomendados($_POST['idUsuario']));
}
?>