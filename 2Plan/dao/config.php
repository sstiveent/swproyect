<?php
//Clase que conecta y  maneja la configuracion de la conexion con la base de datos
require_once("BaseDatos.php");
require_once("../config/database.php");
$db = new BaseDatos(HOST,PORT,USER,PASSWORD,BD); // inicializacion de la Clase BaseDatos para permitir la conexion y la interacion entre los datos y la aplicacion
?>