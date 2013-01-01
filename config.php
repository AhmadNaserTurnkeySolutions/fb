<?php
//require_once 'library/facebook.php';
require 'src/facebook.php';
$app_id = "217131831752880";
$app_secret = "1af24372ce5dc1018abcdc37acecf0af";

$facebook = new Facebook(array(
	'appId' => $app_id,
	'secret' => $app_secret,
	'cookie' => true
));
echo $facebook->getUser();

if(is_null($facebook->getUser()))
{
	header("Location:{$facebook->getLoginUrl(array('req_perms' => 'user_status,publish_stream,user_photos'))}");
	exit;
}
