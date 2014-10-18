<?php
require_once 'src/Google_Client.php'; // include the required calss files for google login
require_once 'src/contrib/Google_PlusService.php';
require_once 'src/contrib/Google_Oauth2Service.php';
session_start();
$client = new Google_Client();
$client->setApplicationName("Asig 18 Sign in with GPlus"); // Set your applicatio name
$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/plus.me')); // set scope during user login
$client->setClientId('255577496440-gnb6290o8o1mc33ts0nc5g7k680cpef3.apps.googleusercontent.com'); // paste the client id which you get from google API Console
$client->setClientSecret('B2ICWCuyzWsmWzByvAoZozMP'); // set the client secret
$client->setRedirectUri('http://promo.aiesec.com.pl'); // paste the redirect URI where you given in APi Console. You will get the Access Token here during login success
$client->setDeveloperKey('AIzaSyCCF_DqoaXoij-nv2mD2Eb9CbLFCyzSRmc'); // Developer key
$plus 		= new Google_PlusService($client);
$oauth2 	= new Google_Oauth2Service($client); // Call the OAuth2 class for get email address
if(isset($_GET['code'])) {
	$client->authenticate(); // Authenticate
	$_SESSION['access_token'] = $client->getAccessToken(); // get the access token here
	header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if(isset($_SESSION['access_token'])) {
	$client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $user 		= $oauth2->userinfo->get();
  $me 			= $plus->people->get('me');
  $optParams 	= array('maxResults' => 100);
  $activities 	= $plus->activities->listActivities('me', 'public',$optParams);

  $_SESSION['access_token'] 		= $client->getAccessToken();
  $email 							= filter_var($user['email'], FILTER_SANITIZE_EMAIL); // get the USER EMAIL ADDRESS using OAuth2
} else {
	$authUrl = $client->createAuthUrl();
}

if(isset($me)){
	$_SESSION['gplusuer'] = $me; // start the session
}

if(isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
  unset($_SESSION['gplusuer']);
  session_destroy();                                                                                                                                    // it will simply destroy the current seesion which you started before
}
?>
<?php
if(isset($authUrl)) {
include("landing.php");
	} else {
}
if(isset($_SESSION['gplusuer'])) {}?>