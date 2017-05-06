<?php
require_once("../dao/InteresDAO.php");
$dao = new InteresDAO;
$intereses = $dao->listarInteresesAll();
echo json_encode($intereses);
?>