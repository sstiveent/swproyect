<?php
session_start();
$estadoRegistro = isset($_SESSION['register'])?$_SESSION['register'] : null ;
if(isset($estadoRegistro)){
    if($estadoRegistro == 0 && $page != "home"){
        header("Location:home.php");
    }
    if($estadoRegistro == 1 && $page != "register"){
        header("Location:register.php#!/1");
    }
    if($estadoRegistro == 2 && $page != "register"){
        header("Location:register.php#!/2");
    }
}else{
    if(!$page="index"){
        header("Location:index.php");
    }
}

?>