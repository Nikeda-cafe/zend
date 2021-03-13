<?php
define('APP', './application');
require_once 'Zend/Controller/Front.php';

$front = Zend_Controller_Front::getInstance();
$front->setControllerDirectory(
	array(
		'default' => APP.'/modules/default/controllers',
		'usr' 		=> APP.'/modules/usr/controllers',
		'sendmail'=> APP.'/modules/sendmail/controllers'
	)
);

/*
$front->setControllerDirectory(APP.'/modules/default/controllers');
$front->addControllerDirectory(APP.'/modules/usr/controllers', 'usr');
$front->addControllerDirectory(APP.'/modules/sendmail/controllers', 'sendmail');
*/

//$front->addModuleDirectory(APP.'/modules');

$front->dispatch();
