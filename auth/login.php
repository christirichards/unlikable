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

$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost:8000/auth/auth_callback.php', $permissions);

echo '<a href="'.htmlspecialchars($loginUrl).'">Log in with Facebook!</a>';
