<?php
require_once 'google/app/start.php';
if (!isset($_SESSION['google'])){
    $direccion = $authUrl;
    $dir = array('url' => $direccion);
    echo json_encode($dir);
}
?>