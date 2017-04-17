<?php
require_once("../DAO/InteresDAO.php");
$dao = new InteresDAO;
$intereses = $dao->listarInteresesAll();
echo json_encode($intereses);
?>