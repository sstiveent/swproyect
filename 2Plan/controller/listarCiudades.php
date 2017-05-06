<?php
require_once("../dao/CiudadDAO.php");
$dao = new CiudadDAO;
$ciudades = $dao->listarCiudades();
echo json_encode($ciudades);
?>