<?php 
error_reporting( E_ALL );

$encryption = MCRYPT_RIJNDAEL_128;
$key = "1234567890123456";
$mode = MCRYPT_MODE_CBC;
$iv = mcrypt_create_iv( mcrypt_get_iv_size($encryption, $mode), MCRYPT_DEV_URANDOM );
$text = 'password';
$crypt = mcrypt_encrypt($encryption, $key, $text, $mode, $iv);

var_dump($crypt);

$get_original_text = mcrypt_decrypt($encryption, $key, $crypt, $mode, $iv);

var_dump($get_original_text);


