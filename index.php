<?php
define('INEWS','');
define('ROOT_PATH',__DIR__);
define('APPLICATION_PATH',ROOT_PATH.'/application');
define('APPLICATION_NAMESPACE','Inews'); 

require_once 'framework/f3il.php';

$app= F3il\Application::getInstance(APPLICATION_PATH."/configuration.ini");

$app->setDefaultcontrollerName('user');
//die("");
//$app->setAuthenticationDelegate();
$app->run();