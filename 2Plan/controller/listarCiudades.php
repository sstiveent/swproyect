<?php
require_once("../DAO/CiudadDAO.php");
$dao = new CiudadDAO;
$ciudades = $dao->listarCiudades();
echo json_encode($ciudades);
?>