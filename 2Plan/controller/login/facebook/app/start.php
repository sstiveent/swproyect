<?php
session_start();

require ("config/facebook.php");
require ("facebook/lib/vendor/autoload.php");

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\GraphUser;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;

FacebookSession::setDefaultApplication($configFacebook['app_id'], $configFacebook['app_secret']);
$helper = new FacebookRedirectLoginHelper('http://2plan.grupodimo.co/controller/login/loginFacebook.php');

try {
	$session = $helper->getSessionFromRedirect();

	if ($session):
		$_SESSION['facebook'] = $session->getToken();
		header('Location: http://2plan.grupodimo.co');
	endif;

	if (isset($_SESSION['facebook'])):
		$session = new FacebookSession($_SESSION['facebook']);

		$request = new FacebookRequest($session, 'GET', '/me');
		$response = $request->execute();
		$graphObjectClass = $response->getGraphObject(GraphUser::className());
		$facebook_user = $graphObjectClass;
		$nombre = $facebook_user->getName();
		
	endif;
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(\Exception $ex) {
  // When validation fails or other local issues
}