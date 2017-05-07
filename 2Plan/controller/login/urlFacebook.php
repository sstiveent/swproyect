<?php
require_once 'facebook/app/start.php';
if (!isset($_SESSION['facebook'])){
    $callback = 'https://2plan.grupodimo.co/controller/login/loginFacebook.php';
    $direccion =  $helper->getLoginUrl($callback, ['email','public_profile']);
    $dir = array('url' => $direccion);
    echo json_encode($dir);
}
?>