<?php
session_start();
if(isset($_SESSION['register'])){
	if($_SESSION['register']==0 && $page != "home"){
		header("Location:home.php");
	}
	if($_SESSION['register'] ==1 && $page!= "register"){
		header("Location:register.php#!/1");
	}
	if($_SESSION['register'] ==2 && $page!= "register"){
		header("Location:register.php#!/2");
	}
}else{
	if(!$page="index")
		header("Location:index.php");
}

?>