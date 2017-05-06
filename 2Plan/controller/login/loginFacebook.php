<?php
require_once 'facebook/app/start.php';
try {
	$accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

if (! isset($accessToken)) {
	if ($helper->getError()) {
		header('HTTP/1.0 401 Unauthorized');
		echo "Error: " . $helper->getError() . "\n";
		echo "Error Code: " . $helper->getErrorCode() . "\n";
		echo "Error Reason: " . $helper->getErrorReason() . "\n";
		echo "Error Description: " . $helper->getErrorDescription() . "\n";
	} else {
		header('HTTP/1.0 400 Bad Request');
		echo 'Bad request';
	}
	exit;
}

// The OAuth 2.0 client handler helps us manage access tokens
//$oAuth2Client = $fb->getOAuth2Client();


$response = $fb->get('/me?fields=id,email,picture.width(400).height(400),first_name,last_name', $accessToken);
$me = $response->getGraphUser();

//var_dump($me);
//$_SESSION['google'] = $accessToken->getValue();

$_SESSION['facebook'] = (string) $accessToken;
$_SESSION['nombre'] = $me->getFirstName();
$_SESSION['apellido'] = $me->getLastName();
$_SESSION['idFacebook'] = $me->getId();
$_SESSION['email'] = $me->getEmail();
$_SESSION['foto'] = $me->getPicture()->getUrl();
header("Location:../isRegistered.php");
?>