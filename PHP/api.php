<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'RSA');
include_once 'RSA/Crypt/RSA.php';
$rsa = new Crypt_RSA();
$rsa->setPassword('password');
$rsa->loadKey(file_get_contents('PATH_TO_PRIVATE_KEY_FOLDER/private.key'));
$rsa->setPassword();
$rsa->getPrivateKey();
$OAuthToken = $_POST['OAuthToken'];
$signature = $rsa->sign($OAuthToken);
$clent_id = $_POST['client_id'];
$redirect_uri = $_POST['redirect_uri']; // DOMAIN NAME OR IP OF SERVER, SERVER NAME IS FROM WEB SERVER (APACHE / NGINX /)
$$public_key_posted = $_POST['public_key_posted'];
$publickey = '-----BEGIN PUBLIC KEY-----' . "\r\n" . $public_key_posted . "\r\n" . "-----END PUBLIC KEY-----";
$rsa->loadKey($publickey);
$is_verified =  $rsa->verify($OAuthToken, $signature) ? 'verified' : 'unverified';
echo $is_verified;