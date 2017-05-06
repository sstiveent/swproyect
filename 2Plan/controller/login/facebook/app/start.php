<?php
session_start();
require ("config/facebook.php");
require ("facebook/lib/vendor/autoload.php");

$fb = new Facebook\Facebook([
	'app_id'     => $configFacebook['app_id'],
	'app_secret' => $configFacebook['app_secret'],
	'default_graph_version' => 'v2.4'
	]);
$helper = $fb->getRedirectLoginHelper();
