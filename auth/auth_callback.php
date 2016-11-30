<?php

include_once '../config/credentials.php';
include_once '../config/ini_config.php';
require '../vendor/autoload.php';

if (!session_id()) {
    session_start();
}

$facebook = new Facebook\Facebook([
  'app_id' => APP_ID,
  'app_secret' => APP_SECRET,
  'default_graph_version' => DEFAULT_GRAPH_VERSION,
  ]);

$helper = $facebook->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $error) {
    echo 'Graph returned an error: '.$error->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $error) {
    echo 'Facebook SDK returned an error: '.$error->getMessage();
    exit;
}

if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo 'Error: '.$helper->getError()."\n";
        echo 'Error Code: '.$helper->getErrorCode()."\n";
        echo 'Error Reason: '.$helper->getErrorReason()."\n";
        echo 'Error Description: '.$helper->getErrorDescription()."\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
}

/*
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());
*/

$oAuth2Client = $facebook->getOAuth2Client();

$tokenMetadata = $oAuth2Client->debugToken($accessToken);

/*
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);
*/

$tokenMetadata->validateAppId(APP_ID);
$tokenMetadata->validateExpiration();

if (!$accessToken->isLongLived()) {
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $error) {
        echo '<p>Error getting long-lived access token: '.$helper->getMessage()."</p>\n\n";
        exit;
    }

    /*
    echo '<h3>Long-lived</h3>';
    var_dump($accessToken->getValue());
    */
}

$_SESSION['fb_access_token'] = (string) $accessToken;
